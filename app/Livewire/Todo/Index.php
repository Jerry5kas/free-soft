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

    public function create()
    {
        $validated = $this->validateOnly('name');

        Todo::create([
            'name' => $validated['name'],
        ]);
//        dd($validated);
        $this->reset('name');
        $this->name='';
        session()->flash('success', 'Created');
//        $this->redirect(route('todos'));
    }

    public function delete(Todo $todoId)
    {
        $todoId->delete();
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
