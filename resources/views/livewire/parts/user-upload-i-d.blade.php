<div>
    <x-card title="Upload Valid ID" class="border border-red-500 mb-5" shadow>
        @if ($id_pic)
            <img src="{{ $id_pic->temporaryUrl() }}" height="250px" width="250px">
        @endif
        <x-form wire:submit="uploadID">
            <x-file wire:model="id_pic" label="Valid ID" accept="image/jpeg, image/png" />
            <x-button type="submit" label="Submit" class="btn-primary" />
        </x-form>
    </x-card>
</div>
