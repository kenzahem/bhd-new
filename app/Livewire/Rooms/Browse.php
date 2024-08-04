<?php

namespace App\Livewire\Rooms;

use App\Models\Room;
use Livewire\Component;

class Browse extends Component
{

    public function render()
    {
        $rooms = Room::all();
        return view('livewire.rooms.browse', [
            'rooms' => $rooms
        ]);
    }
}
