<?php

namespace App\Livewire\Todo;

use App\Models\Todo;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Rule('required|min:4|max:60')]
    public mixed $name;
    public $search;

    public $eId;
    #[Rule('required|min:4|max:60')]
    public $eName;

    public function create()
    {
        $validated = $this->validateOnly('name');

        Todo::create([
            'name' => $validated['name'],
        ]);
        $this->reset('name');
        session()->flash('success', 'Created');
        $this->resetPage();
    }

    public function edit($id)
    {
        $this->eId = $id;
        $this->eName = Todo::find($id)->name;
    }

    public function delete(Todo $id)
    {
        $id->delete();
        $this->redirect('todos');
    }

    public function toggle($id)
    {
        $todo = Todo::find($id);
        $todo->completed = !$todo->completed;
        $todo->save();
    }

    public function update()
    {
        $this->validateOnly('eName');
        Todo::find($this->eId)->update([
            'name' => $this->eName,
        ]);
        $this->cancel();
    }

    public function cancel()
    {
        $this->reset('eId');
        $this->reset('eName');
    }

    public function render()
    {
        return view('livewire.todo.index', [
            'todo' => Todo::latest()
                ->where('name', 'like', '%' . $this->search . '%')
                ->paginate(5)
        ]);
    }
}
