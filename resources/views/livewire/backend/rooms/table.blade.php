<div>
    <div class="mb-3">
        <x-button wire:navigate href="/room/create" label="Add Room" class="btn-primary" icon="o-plus-circle" />
    </div>
    <div class="justify-center">
        <x-card class="border w-100" shadow>
            @php
                $room = App\Models\Room::all();

                $headers = [
                    ['key' => 'id', 'label' => '#'],
                    ['key' => 'title', 'label' => 'Room Title'],
                    ['key' => 'wifi', 'label' => 'WiFi' ],
                    ['key' => 'aircon', 'label' => 'Aircon' ],
                    ['key' => 'kitchen', 'label' => 'Kitchen' ],
                    ['key' => 'price', 'label' => 'Price']

                ];
            @endphp

            <x-table :headers="$headers" :rows="$room">
                @scope('cell_wifi', $room)
                    @if ($room->wifi == 1)
                        <x-icon name="o-check" />
                    @elseif ($room->wifi == 0)
                        <x-icon name="o-x-mark" />
                    @endif
                @endscope
                @scope('cell_aircon', $room)
                    @if ($room->aircon == 1)
                        <x-icon name="o-check" />
                    @elseif ($room->aircon == 0)
                        <x-icon name="o-x-mark" />
                    @endif
                @endscope
                @scope('cell_kitchen', $room)
                    @if ($room->cell_kitchen == 1)
                        <x-icon name="o-check" />
                    @elseif ($room->cell_kitchen == 0)
                        <x-icon name="o-x-mark" />
                    @endif
                @endscope
                @scope('cell_price', $room)
                    ₱ {{ $room->price }}
                @endscope
                @scope('actions', $room)
                    <div class="flex gap-2">
                        <x-button icon="o-eye" wire:click="viewRoom({{ $room->id }})" spinner class="btn-sm" />
                        <x-button icon="o-trash" wire:click="deleteRoom({{ $room->id }})" spinner class="btn-sm" />
                    </div>
                @endscope
            </x-table>
        </x-card>
    </div>
    <x-toast class="toast-top toast-center" />
</div>
