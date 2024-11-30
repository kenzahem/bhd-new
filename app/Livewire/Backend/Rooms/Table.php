<?php

namespace App\Livewire\Backend\Rooms;

use App\Models\Room;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Table extends Component
{


    public function deleteRoom(Room $room)
    {
        $room = $this->room;

        $room->delete();
    }

    #[Layout('components.layouts.backend')]
    public function render()
    {
        return view('livewire.backend.rooms.table');
    }
}
