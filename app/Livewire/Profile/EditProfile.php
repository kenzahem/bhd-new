<?php

namespace App\Livewire\Profile;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Mary\Traits\Toast;

class EditProfile extends Component
{
    use Toast;

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

        $this->toast('success','Info Updated');
    }

    public function render()
    {
        return view('livewire.profile.edit-profile');
    }
}
