<?php

namespace App\Livewire\Rooms;

use App\Models\Room;
use Livewire\Attributes\Layout;
use Livewire\Component;

class View extends Component
{


    public $room = [];

    public function mount(Room $id)
    {
       $this->room = $id;
    }

    public function render()
    {
        $room = Room::all();
        return view('livewire.rooms.view', [
            'room' => $room
        ]);

    }
}
