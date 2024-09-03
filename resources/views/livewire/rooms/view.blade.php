<div>
    <div class="mb-3">
        <x-button class="btn-secondary" icon="o-arrow-left" wire:navigate href="/rooms/browse">Back</x-button>
    </div>

    <x-card title="{{ $room->title }}" class="border" shadow>
        <div class="row">
            <div class="col">

            </div>
        </div>
        {{ $room->full_desc }}
    </x-card>
</div>
