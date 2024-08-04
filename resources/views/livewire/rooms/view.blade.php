<div>
    <div class="mb-3">
        <x-button class="btn-secondary" icon="o-arrow-left" wire:navigate href="/">Back</x-button>
    </div>

    <x-card title="{{ $room->title }}" shadow>
        {{ $room->full_desc }}
    </x-card>
</div>
