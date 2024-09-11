<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserCreditUpdate extends Component
{


    public function render()
    {
        $userCred = Auth::user()->credits;
        return view('livewire.user-credit-update', [
            'userCred' => $userCred
        ]);
    }
}
