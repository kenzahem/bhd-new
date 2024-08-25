<?php

namespace App\Livewire\Rooms;

use App\Models\Room;
use Livewire\Component;
use Livewire\WithPagination;

class Browse extends Component
{
    use WithPagination;

    public $filter_search = '';

    public function render()
    {
        $rooms = Room::paginate(8);
        return view('livewire.rooms.browse', [
            'rooms' => $rooms
        ]);
    }
}
