<?php

namespace App\Livewire\Auth;

use Mary\Traits\Toast;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{

    use Toast;

    #[Validate('required')]
    public $email = '';

    #[Validate('required')]
    public $password = '';

    public function authLogin()
    {
        $this->validate();

        if(Auth::attempt(['email' => $this->email, 'password' => $this->password])){
            $this->success('Successfully Logged In!', timeout: 5000);
            return redirect()->to('/');
        }
        $this->warning('Oppss! Wrong Credentials');
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
