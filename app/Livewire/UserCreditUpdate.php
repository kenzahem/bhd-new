<?php

namespace App\Livewire;

use Livewire\Component;

class UserCreditUpdate extends Component
{

    public $updateCredit;

    public function updateCred()
    {
        $this->updateCredit;
    }

    public function render()
    {
        return view('livewire.user-credit-update');
    }
}
