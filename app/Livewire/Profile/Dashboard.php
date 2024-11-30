<?php

namespace App\Livewire\Profile;

use App\Models\Room;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{



    public function headers(): array
    {
        return [
            ['key' => 'title', 'label' => 'Room Title', 'class' => 'w-1'],
            ['key' => 'type', 'label' => 'Room Type', 'class' => 'w-64'],
        ];
    }

    public function user_room()
    {
        $user = Auth::user()->id;

        return Room::where('user_id',$user)->get();
    }

    public function render()
    {
        return view('livewire.profile.dashboard', [
            'headers' => $this->headers(),
            'user_room' => $this->user_room()
        ]);
    }
}
