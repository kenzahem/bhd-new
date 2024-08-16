<div>
    <x-card title="Profile Dashboard" class="border mb-5" shadow separator>
        Hi <strong>{{ Auth::user()->firstname }}</strong> ! <br>
        Credit Balance: <strong>{{ Auth::user()->credits }}</strong>
    </x-card>
    <x-card title="Posted Room" class="border" shadow separator>
            <x-button label="Post Room" class="btn-primary" wire:navigate href="/post-room"/>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            ...
        </div>
    </x-card>
</div>
