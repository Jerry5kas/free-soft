<?php

namespace App\Livewire\Common;

use App\Models\Tag;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
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
    public $active_id = 1;
    public $active = 1;
    public $search;
    public $sortBy = 'name';
    public $vid;
//    public $obj;
    public $eName;
    public $sortAsc = true;

    public $openModal = false;


    #endregion
    protected $queryString = [
        'active' => ['except' => false],
        'search' => ['except' => ''],
        'sortBy' => ['except' => 'id'],
        'sortAsc' => ['except' => true],
    ];

    protected $rules = [
        'name' => 'required|unique:tags|string|min:4',
        'active_id' => 'boolean',
    ];


    public function getSave()
    {
        $this->validate();
        if ($this->name != '') {
            if ($this->vid == "") {
                Tag::create([
                    'name' => $this->name,
                    'active_id' => $this->active_id,
                    'user_id' => auth()->id()
                ]);
            } else {
                $obj = Tag::find($this->vid);
                $obj->name = Str::ucfirst($this->name);
                $obj->active_id = $this->active_id;
                $obj->save();
            }
        }
        $this->reset();
    }

    public function getEdit($id)
    {
        if ($id) {
            $obj = Tag::find($id);
            $this->vid = $obj->id;
            $this->name = $obj->name;
            $this->active_id = $obj->active_id;
            return $obj;
        }
        $this->reset();
        return null;
    }


    public function getDelete(Tag $tag)
    {
        $tag->delete();
    }


//    public function updatingActive()
//    {
//        $this->resetPage();
//    }
//
//    public function updatingSearch()
//    {
//        $this->resetPage();
//    }
    public function open()
    {
        $this->openModal = !$this->openModal;
    }

    public function sort($field)
    {
        if ($field == $this->sortBy) {
            $this->sortAsc = !$this->sortAsc;
        }
        $this->sortBy = $field;
    }

    public function getList()
    {
        $lists = Tag::where('user_id', auth()->user()->id)
            ->when($this->search, function ($query) {
                return $query->where(function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->active, function ($query) {
                return $query->active();
            })
            ->orderBy($this->sortBy, $this->sortAsc ? 'Asc' : 'Desc')
            ->paginate(15);
        return $lists;
    }

    public function render()
    {

        return view('livewire.common.tags')->with([
            "lists" => $this->getList()
        ]);
    }
}
