<div>
    @php
        $slides = [
            [
                'image' => 'https://picsum.photos/id/13/2500/1667',
            ],
            [
                'image' => 'https://picsum.photos/id/14/2500/1667',
            ],
            [
                'image' => 'https://picsum.photos/id/15/2500/1667',
            ],
            [
                'image' => 'https://picsum.photos/id/16/2500/1667',
            ],
        ];
    @endphp

<x-carousel :slides="$slides" />
<div class="divider divider-primary"></div>
    <div class="mt-5 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach ($latest_room as $rl)
        <div class="grid1-item border-rounded shadow-lg">

            {{-- <x-card title="{{ $rl->title }}">
                {{ $rl->short_desc }}
                <x-slot:figure >
                    <img src="https://picsum.photos/500/200" />
                </x-slot:figure>
                <x-slot:menu>
                    <x-button icon="o-share" class="btn-circle btn-sm" />
                    <x-icon name="o-heart" class="cursor-pointer" />
                </x-slot:menu>
                <x-slot:actions>
                    <x-button label="View" link="{{ url('rooms/'.$rl->id.'/view') }}" class="btn-primary" />
                </x-slot:actions>
            </x-card> --}}

            <div class="card card-compact bg-base-100 shadow-xl">
                <figure>
                  <img
                    src="{{ Storage::url($rl->room_image1) }}"
                    alt="Shoes" />
                </figure>
                <div class="card-body">
                  <h2 class="card-title">{{ $rl->title }}</h2>
                  <p>{{ $rl->short_desc }}</p>
                  <div class="card-actions justify-end">
                    <button wire:navigate href="{{ url('rooms/'.$rl->id.'/view') }}" class="btn btn-primary">View</button>
                  </div>
                </div>
            </div>

        </div>
    @endforeach
    </div>
</div>
