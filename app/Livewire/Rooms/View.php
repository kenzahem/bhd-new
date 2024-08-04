<?php

namespace App\Livewire\Rooms;

use App\Models\Room;
use Livewire\Attributes\Layout;
use Livewire\Component;

class View extends Component
{


    public $room = [];

    public function mount(Room $room)
    {
       $this->room = $room;
    }

    public function render()
    {
        return view('livewire.rooms.view');

    }
}
