<div>
    <x-card title="Upload Valid ID" class="border mb-5" shadow>
        @if ($id_pic)
            <img src="{{ $id_pic->temporaryUrl() }}">
        @endif
        <x-form wire:submit="uploadID">
            <x-file wire:model="id_pic" label="Valid ID" accept="image/jpeg, image/png" />
            <x-button type="submit" label="Submit" class="btn-primary" />
        </x-form>
    </x-card>
</div>
