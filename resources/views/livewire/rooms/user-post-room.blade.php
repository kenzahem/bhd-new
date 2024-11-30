<div>
    <div class="mb-3">
        <x-button wire:navigate href="/rooms/browse" label="Back" class="btn-secondary" icon="o-arrow-small-left" />
    </div>
    <div class="flex justify-center mb-3">
        <x-card id="" class="border" shadow>
           {{-- Credit: <strong>{{ Auth::user()->credits }}</strong> --}}
           @livewire('user-credit-update')
        </x-card>
    </div>

    <div class="flex justify-center">

        <x-card title="Create Room" subtitle="1 Credit Required" class="border w-2/4" shadow>
            <form wire:submit="UsercreateRoom">
                <div class="mb-5">
                    @php

                        $room_type = App\Models\RoomType::take(5)->get();

                    @endphp
                    <x-select
                    label="Type"
                    :options="$room_type"
                    option-value="room_type"
                    option-label="room_type"
                    placeholder="Select a Room Type"
                    placeholder-value="" {{-- Set a value for placeholder. Default is `null` --}}
                    hint="Select one"
                    wire:model="type" />
                </div>
                <div class="mb-5">
                    @if ($room_image1)
                        <img src="{{ $room_image1->temporaryUrl() }}" class="h-40 rounded-lg" />
                    @endif
                    <x-file wire:model="room_image1" label="Cover Photo" hint="Supported format: jpg,png,jpeg" accept="image/jpg,image/png,image/jpeg" />
                </div>
                <div class="mb-5">
                    @if ($room_image2)
                        <img src="{{ $room_image2->temporaryUrl() }}" class="h-40 rounded-lg">
                    @endif
                    <x-file wire:model="room_image2" label="Image 1" hint="Supported format: jpg,png,jpeg" accept="image/jpg,image/png,image/jpeg" />
                </div>
                <div class="mb-5">
                    @if ($room_image3)
                        <img src="{{ $room_image3->temporaryUrl() }}" class="h-40 rounded-lg">
                    @endif
                    <x-file wire:model="room_image3" label="Image 2" hint="Supported format: jpg,png,jpeg" accept="image/jpg,image/png,image/jpeg" />
                </div>
                <div class="mb-5">
                    @if ($room_image4)
                        <img src="{{ $room_image4->temporaryUrl() }}" class="h-40 rounded-lg">
                    @endif
                    <x-file wire:model="room_image4" label="Image 3" hint="Supported format: jpg,png,jpeg" accept="image/jpg,image/png,image/jpeg" />
                </div>
                <div class="mb-5">
                    @if ($room_image5)
                        <img src="{{ $room_image5->temporaryUrl() }}" class="h-40 rounded-lg">
                    @endif
                    <x-file wire:model="room_image5" label="Image 4" hint="Supported format: jpg,png,jpeg" accept="image/jpg,image/png,image/jpeg" />
                </div>

                <div class="mb-5">
                    <x-input type="text" wire:model.live="title" label="Room Title" />
                </div>
                <div class="mb-5">
                    <x-textarea
                    label="Full Description"
                    wire:model="full_desc"
                    placeholder="Input details.."
                    hint="Max 500 chars"
                    rows="5"
                    inline />
                </div>
                <div class="mb-5">
                    <x-textarea
                    label="Short Description"
                    wire:model="short_desc"
                    placeholder="Input short details.."
                    hint="Max 100 chars"
                    rows="5"
                    inline />
                </div>
                <div class="mb-5">
                    <x-toggle label="Wi-fi" wire:model="wifi" />
                </div>
                <div class="mb-5">
                    <x-toggle label="Air Conditioned" wire:model="aircon" />
                </div>
                <div class="mb-5">
                    <x-toggle label="Own Kitchen" wire:model="kitchen" />
                </div>
                <div class="mb-5">
                    <x-input label="Price" wire:model="price" prefix="PHP" money inline />
                </div>
                <div class="mb-3">
                    <x-button label="Submit" class="btn-primary" type="submit" spinner="save" />
                    <div wire:loading>
                        Submitting...
                    </div>
                </div>
            </form>
        </x-card>
    </div>
    <x-toast position="toast-top toast-center" />
</div>
