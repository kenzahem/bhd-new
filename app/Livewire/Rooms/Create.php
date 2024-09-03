<?php

namespace App\Livewire\Rooms;

use App\Models\Room;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Mary\Traits\Toast;

class Create extends Component
{

    use Toast;

    use WithFileUploads;

    #[Validate('required|image: jpg,png,jpeg')]
    public $room_image1;

    #[Validate('required|image: jpg,png,jpeg')]
    public $room_image2;

    #[Validate('required|image: jpg,png,jpeg')]
    public $room_image3;

    #[Validate('required|image: jpg,png,jpeg')]
    public $room_image4;

    #[Validate('required|image: jpg,png,jpeg')]
    public $room_image5;

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

    public function createRoom()
    {
        $validated = $this->validate();

        Room::create($validated);

        $this->success('Room Created!');

        $this->reset();

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.rooms.create');
    }
}
