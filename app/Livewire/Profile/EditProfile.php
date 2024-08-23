<?php

namespace App\Livewire\Profile;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class EditProfile extends Component
{

    public $firstname = '';

    public $lastname = '';

    public $email = '';

    public $password = '';

    public $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function updateInfo()
    {
        $user = Auth::user()->id;

        $validated = $this->validate();

        $user->update($validated);
    }

    public function render()
    {
        return view('livewire.profile.edit-profile');
    }
}
