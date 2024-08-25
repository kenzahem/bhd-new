<div>
    <div class="flex justify-center">
        <x-card title="Login" class="card-bordered w-2/4" shadow  >
            <x-form wire:submit="authLogin" no-separator>
                <x-input type="email" label="E-mail Address" wire:model="email" />
                <x-input type="password" label="Password" wire:model="password" />
                <x-slot:actions>
                    <x-button label="Sign Up!" class="btn-outline" wire:navigate href="/auth/register" />
                    <x-button type="submit" label="Login" class="btn-primary" type="submit" spinner="save" />
                </x-slot:actions>
            </x-form>
        </x-card>
    </div>
</div>
