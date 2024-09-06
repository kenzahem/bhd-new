<div>
    <div class="mb-3">
        <x-button wire:navigate href="/rooms/browse" label="Back" class="btn-secondary" icon="o-arrow-small-left" />
    </div>
    <div class="flex justify-center mb-3">
        <x-card id="" class="border" shadow>
           Credit: <strong>{{ Auth::user()->credits }}</strong>
        </x-card>
    </div>

    <div class="flex justify-center">

        <x-card title="Create Room" subtitle="1 Credit Required" class="border w-2/4" shadow>
            <form wire:submit="UsercreateRoom">
                <x-input wire.model="user_id" type="text" value="{{ Auth::user()->id }}" hidden/>
                <div class="mb-3">
                    <x-file wire:model="room_image1" label="Room Image 1" hint="Supported format: jpg,png,jpeg" accept="image/jpg,png,jpeg" />
                </div>
                <div class="mb-3">
                    <x-file wire:model="room_image2" label="Room Image 2" hint="Supported format: jpg,png,jpeg" accept="image/jpg,png,jpeg" />
                </div>
                <div class="mb-3">
                    <x-file wire:model="room_image3" label="Room Image 3" hint="Supported format: jpg,png,jpeg" accept="image/jpg,png,jpeg" />
                </div>
                <div class="mb-3">
                    <x-file wire:model="room_image4" label="Room Image 4" hint="Supported format: jpg,png,jpeg" accept="image/jpg,png,jpeg" />
                </div>
                <div class="mb-3">
                    <x-file wire:model="room_image5" label="Room Image 5" hint="Supported format: jpg,png,jpeg" accept="image/jpg,png,jpeg" />
                </div>

                <div class="mb-3">
                    <x-input type="text" wire:model="title" label="Room Title" />
                </div>
                <div class="mb-3">
                    <x-textarea
                    label="Full Description"
                    wire:model="full_desc"
                    placeholder="Input details.."
                    hint="Max 500 chars"
                    rows="5"
                    inline />
                </div>
                <div class="mb-3">
                    <x-textarea
                    label="Full Description"
                    wire:model="short_desc"
                    placeholder="Input short details.."
                    hint="Max 250 chars"
                    rows="5"
                    inline />
                </div>
                <div class="mb-3">
                    <x-toggle label="Wi-fi" wire:model="wifi" />
                </div>
                <div class="mb-3">
                    <x-toggle label="Air Conditioned" wire:model="aircon" />
                </div>
                <div class="mb-3">
                    <x-toggle label="Own Kitchen" wire:model="kitchen" />
                </div>
                <div class="mb-3">
                    <x-input label="Price" wire:model="price" />
                </div>
                <div class="mb-3">
                    <x-button type="submit" label="Submit" class="btn-primary" />
                </div>
            </form>
        </x-card>
    </div>
    <x-toast position="toast-top toast-center" />
</div>
