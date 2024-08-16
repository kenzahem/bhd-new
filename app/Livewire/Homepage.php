<?php

namespace App\Livewire;

use App\Models\Room;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\DB;

class Homepage extends Component
{
    public function render()
    {
        $latest_room = DB::table('rooms')->latest()->first();
        return view('livewire.homepage', [
            'latest_room' => $latest_room
        ]);
    }
}
