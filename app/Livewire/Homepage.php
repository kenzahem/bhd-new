<?php

namespace App\Livewire;

use App\Models\Room;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Mary\Traits\Toast;

class Homepage extends Component
{

    public function render()
    {
        $latest_room = Room::latest('created_at')->get();
        return view('livewire.homepage', [
            'latest_room' => $latest_room
        ]);
    }
}
