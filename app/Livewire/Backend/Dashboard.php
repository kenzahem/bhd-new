<?php

namespace App\Livewire\Backend;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{


    #[Layout('components.layouts.backend')]
    public function render()
    {
        return view('livewire.backend.dashboard');
    }
}
