<div>
    <div class="mb-3">
        <x-button wire:navigate href="/rooms/table" label="Back" class="btn-secondary" icon="o-arrow-small-left" />
    </div>
    <div class="flex justify-center mb-3">
        <x-card id="" class="border" shadow>
            Credit Balance: {{ $userCredit }}
        </x-card>
    </div>

    <div class="flex justify-center">

        <x-card title="Create Room" class="border w-2/4" shadow>
            <form wire:submit="UsercreateRoom">
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
