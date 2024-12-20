<?php

namespace App\Livewire\Rooms;

use App\Models\Room;
use App\Models\User;
use Mary\Traits\Toast;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class UserPostRoom extends Component
{

    use Toast;
    use WithFileUploads;

    #[Validate('required', message: "Please Select Type")]
    public $type = '';

    #[Validate('required', message: 'Please Provide an Valid Image')]
    public $room_image1;

    #[Validate('required', message: 'Please Provide an Valid Image')]
    public $room_image2;

    #[Validate('required', message: 'Please Provide an Valid Image')]
    public $room_image3;

    #[Validate('required', message: 'Please Provide an Valid Image')]
    public $room_image4;

    #[Validate('required', message: 'Please Provide an Valid Image')]
    public $room_image5;

    #[Validate('required', message: "Title is Required")]
    #[Validate('max: 15')]
    public $title = '';

    #[Validate('required')]
    #[Validate('max:255')]
    public $full_desc = '';

    #[Validate('required')]
    #[Validate('max:100')]
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

        $this->validate();

        $room_image1 = $this->room_image1;
        $room_image2 = $this->room_image2;
        $room_image3 = $this->room_image3;
        $room_image4 = $this->room_image4;
        $room_image5 = $this->room_image5;

        sleep(3);

        if(Auth::user()->credits >= 1){
            Room::create([
                'user_id' => $userID,
                'type' => $this->type,
                'room_image1' => $room_image1->store(path: 'public/room_images'),
                'room_image2' => $room_image2->store(path: 'public/room_images'),
                'room_image3' => $room_image3->store(path: 'public/room_images'),
                'room_image4' => $room_image4->store(path: 'public/room_images'),
                'room_image5' => $room_image5->store(path: 'public/room_images'),
                'title' => $this->title,
                'full_desc' => $this->full_desc,
                'short_desc' => $this->short_desc,
                'wifi'  => $this->wifi,
                'aircon' => $this->aircon,
                'kitchen' => $this->kitchen,
                'price' => $this->price
            ]);
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
        return view('livewire.rooms.user-post-room');
    }
}
