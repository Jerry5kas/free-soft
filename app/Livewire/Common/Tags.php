<?php

namespace App\Livewire\Common;

use App\Models\Tag;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;
use function Laravel\Prompts\search;

#[Title('Tags')]
class Tags extends Component
{
    use WithPagination;

    #region[Properties]
    public $name;
    public $active_id=1;
    public $active;
    public $search;
    public $sortBy = 'name';
    public $sortAsc = true;
    #endregion
    protected $queryString = [
        'active' => ['except' => false],
        'search' => ['except' => ''],
        'sortBy' => ['except' => 'id'],
        'sortAsc' => ['except' => true],
    ];

    protected $rules = [
        'name' => 'required|string|min:4',
        'active_id' => 'boolean',
    ];

    public function render()
    {
        $lists = Tag::where('user_id', auth()->user()->id)
            ->when($this->search, function ($query) {
                return $query->where(function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%')
                        ->orwhere('active_id', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->active, function ($query) {
                return $query->active();
            })
            ->orderBy($this->sortBy, $this->sortAsc ? 'Asc' : 'Desc')
            ->paginate(15);

        return view('livewire.common.tags')->with([
            "lists" => $lists,
        ]);
    }

    public function updatingActive()
    {
        $this->resetPage();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sort($field)
    {
        if ($field == $this->sortBy) {
            $this->sortAsc = !$this->sortAsc;
        }
        $this->sortBy = $field;
    }

    public function getSave()
    {
        $this->validate();
        Tag::create([
            'name' => $this->name,
            'active_id' => $this->active_id ?? 0,
            'user_id' => auth()->id()
        ]);
        $this->resetPage();
        $this->redirect(route('tags'));
    }

    public function getEdit(Tag $tags)
    {
        $this->name = $tags->name;
        $this->active_id = $tags->active_id;
    }

    public function getDelete(Tag $tag)
    {
        $tag->delete();
        $this->redirect(route('tags'));
    }


}
