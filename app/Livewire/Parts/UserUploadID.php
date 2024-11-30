<?php

namespace App\Livewire\Parts;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Mary\Traits\Toast;

class UserUploadID extends Component
{

    use WithFileUploads, Toast;

    public User $user;

    #[Rule('required|image:jpeg, image:png')]
    public $id_pic;

    public function uploadID()
    {

        $id_pic = $this->id_pic;

        $this->validate();

        Auth::user()->update([
            'id_pic' => $id_pic->store(path: 'public/valid_ids'),
        ]);

        $this->toast('success', 'Successfully Uploaded!');

        $this->reset();

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.parts.user-upload-i-d');
    }
}
