<div>
    <x-header title="Profile Dashboard" subtitle="Profile Dashboard" separator />
    <x-card title="Credit">
        Balance: {{ Auth::user()->credits }}
    </x-card>
    <x-card title="Personal Info" class="mb-5 border" shadow>
        <h5>Name: <strong>{{ Auth::user()->firstname }}</strong></h5> <br/>
        <h5>Last Name: <strong>{{ Auth::user()->lastname }} </strong></h5><br/>
        <h5>E-mail Address: <strong>{{ Auth::user()->email }}</strong></h5> <br/>
        <x-button label="Edit" wire:navigate href="{{ url('/profile/edit') }}" />
    </x-card>
    @if (Auth::user()->valid_id === NULL)
        @livewire('parts.user-upload-i-d')
    @endif
    <x-card title="Posted Room" class="border" shadow separator>
            <x-button label="Post Room" class="btn-primary" wire:navigate href="/post-room"/>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            ...
        </div>
    </x-card>
</div>
