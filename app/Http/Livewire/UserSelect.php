<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;
use Ramsey\Uuid\Uuid;

class UserSelect extends Component
{
    public $id;
    public $users;
    public $selected;
    public $query;

    public function mount()
    {
        $this->id = Uuid::uuid4()->toString();
        $this->users = User::take(10)->get();
        $this->selected = 0;
        $this->query = "";
    }

    public function render()
    {
        $this->users = User::where('name', 'LIKE', "$this->query%")->take(10)->get();

        return view('livewire.user-select');
    }

    public function updatedQuery()
    {
        $this->selected = 0;
    }

    public function selectNext()
    {
        $this->selected++;
    }

    public function selectPrevious()
    {
        $this->selected--;
    }
}
