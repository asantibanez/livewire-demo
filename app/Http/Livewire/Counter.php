<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class Counter extends Component
{
    public $users;
    public $query;
    public $selected;

    public function updatedQuery()
    {
        $this->selected = 0;
    }

    public function render()
    {
        $this->users = User::where('name', 'LIKE', "%$this->query%")->get();
        return view('livewire.counter');
    }

    public function addRandomUser()
    {
        factory(User::class)->create();
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
