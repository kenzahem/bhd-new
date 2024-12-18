<div>
    <div>
        <x-card>
            <x-input label="Filter Search" wire:model.live="filter_search" placeholder="Search Room" icon="o-magnifying-glass" />
        </x-card>
    </div>
    <div class="mt-5 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ($rooms as $rl)
        <div class="grid1-item border-rounded shadow-lg">

            <x-card title="{{ $rl->title }}" class="shadow-md">
                {{ $rl->short_desc }}
                <x-slot:figure>
                    <img src="{{ Storage::url($rl->room_image1) }}" class="h-40 rounded-lg" />
                </x-slot:figure>
                <x-slot:menu>
                    <x-badge class="badge-primary" value="{{ $rl->type }}" />
                </x-slot:menu>
                <x-slot:actions>
                    PHP {{ $rl->price }}
                    <x-button label="View" link="{{ url('rooms/'.$rl->id.'/view') }}" class="btn-primary" />
                </x-slot:actions>
            </x-card>

        </div>
    @endforeach
    </div>
    <div class="mt-3">
        {{ $rooms->links() }}
    </div>

</div>
