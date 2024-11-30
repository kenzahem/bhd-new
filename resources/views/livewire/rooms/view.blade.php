<div>
    <div class="mb-3">
        <x-button class="btn-secondary" icon="o-arrow-left" wire:navigate href="/rooms/browse">Back</x-button>
    </div>

    <x-card title="{{ $room->title }}" class="border" shadow>
        <div class="row">
            <div class="col">
                @php
                    $images = [
                        Storage::url($room->room_image1),
                        Storage::url($room->room_image2),
                        Storage::url($room->room_image3),
                        Storage::url($room->room_image4),
                        Storage::url($room->room_image5),
                    ]
                @endphp

                <x-image-gallery :images="$images" class="h-40 rounded-box" />
                {{-- <a data-fslightbox href="{{Storage::url($room->room_image1)}}">
                    <img src="{{Storage::url($room->room_image1)}}" alt="Image" class="w-2/4">
                </a>
                <a data-fslightbox href="{{Storage::url($room->room_image1)}}">
                    <img src="{{Storage::url($room->room_image1)}}" alt="Image" class="w-1/4">
                </a> --}}
            </div>
            <div class="col">
                Room Inclusion:
                Wifi: {{ $room->wifi }} <br/>
                Aircon: {{ $room->aircon }} <br/>
                Kitchen: {{ $room->kitchen }} <br/>
            </div>
        </div>
        {{ $room->full_desc }}
    </x-card>
</div>
