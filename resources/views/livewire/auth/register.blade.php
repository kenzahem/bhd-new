<div>
    <div class="flex justify-center">
        <x-card class="border w-2/4" title="Sign Up" shadow>
            <x-form wire:submit="regUser" no-separator>
                <x-input type="text" label="First Name" wire:model="firstname" class="mb-3" />
                <x-input type="text" label="Last Name" wire:model="lastname" class="mb-3"/>
                <x-input type="email" label="Email Address" wire:model="email" class="mb-3"/>
                <x-input type="password" label="Password" wire:model="password" class="mb-3"/>
                <x-input type="password" label="Confirm Password" wire:model="password_confirmation" class="mb-3"/>

                <x-slot:actions>
                    <x-button class="btn-outline" label="Login" wire:navigate href="/auth/login" />
                    <x-button type="submit" label="Sign Up" class="btn-primary" type="submit" spinner="save" />
                </x-slot:actions>
            </x-form>
        </x-card>
    </div>

</div>
