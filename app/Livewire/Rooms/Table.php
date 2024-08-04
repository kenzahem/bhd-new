<?php

namespace App\Livewire\Rooms;

use App\Models\Room;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Mary\Traits\Toast;

class Table extends Component
{

    use Toast;

    // public function viewRoom($id)
    // {
    //     $room = Room::findOrFail($id);
    // }

    public function deleteRoom($id)
    {
        $room = Room::findOrFail($id);

        $room->delete();

        $this->success('Room Deleted');
    }

    public function render()
    {
        return view('livewire.rooms.table');
    }
}
