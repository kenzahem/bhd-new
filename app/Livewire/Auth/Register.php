<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;
use Mary\Traits\Toast;

class Register extends Component
{

    use Toast;

    #[Validate('required')]
    public $firstname = '';

    #[Validate('required')]
    public $lastname = '';

    #[Validate('required')]
    public $email = '';

    #[Validate('required|confirmed|min:6')]
    public $password = '';

    #[Validate('required|min:6')]
    public $password_confirmation = '';

    public function regUser()
    {
        $this->validate();

        User::create([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->reset();

        $this->success('We are done, check it out');

        return redirect()->to('auth/login');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
