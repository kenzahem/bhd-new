<?php

namespace App\Livewire\Rooms;

use App\Models\Room;
use App\Models\User;
use Mary\Traits\Toast;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserPostRoom extends Component
{

    use Toast;

    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $full_desc = '';

    #[Validate('required')]
    public $short_desc = '';

    #[Validate('required')]
    public $wifi = '';

    #[Validate('required')]
    public $aircon = '';

    #[Validate('required')]
    public $kitchen = '';

    #[Validate('required')]
    public $price = '';


    public function UsercreateRoom()
    {

        $userID = Auth::user()->id;

        $validated = $this->validate();

        if(Auth::user()->credits >= 1){
            Room::create($validated);
            DB::table('users', $userID)->decrement('credits' , 1);
            $this->success('Room Created!');
            $this->reset();
        }
        else{
            $this->error('Insufficient Balance to Post');
            return redirect()->back();
        }

    }

    public function render()
    {
        $userCredit = Auth::user()->credits;
        return view('livewire.rooms.user-post-room', [
            'userCredit' => $userCredit
        ]);
    }
}
