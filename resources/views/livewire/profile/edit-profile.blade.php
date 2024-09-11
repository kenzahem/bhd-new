<div>
    <x-card title="Update Info" class="border" shadow>
        <x-form wire:model="updateInfo">
            <x-input type="text" label="First Name" wire:model="firstname" class="mb-3" />
            <x-input type="text" label="Last Name" wire:model="lastname" class="mb-3"/>
            <x-input type="email" label="Email Address" wire:model="email" class="mb-3"/>
            <x-slot:actions>
                <x-button type="reset" class="btn-outline" label="Reset Field" />
                <x-button type="submit" label="Sign Up" class="btn-primary" type="submit" spinner="save" />
            </x-slot:actions>
        </x-form>
    </x-card>
</div>
