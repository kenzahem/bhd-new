<?php

namespace App\Livewire\Rooms;

use App\Models\Room;
use Livewire\Component;
use Livewire\WithPagination;

class Browse extends Component
{
    use WithPagination;

    public $filter_search = '';

    public function placeholder()
    {
        return view('loader');
    }

    public function render()
    {
        sleep(3);
        // $rooms = Room::paginate(8);
        return view('livewire.rooms.browse', [
            'rooms' => Room::where('title', 'like', '%'.$this->filter_search.'%')->paginate(6),
        ]);
    }
}
