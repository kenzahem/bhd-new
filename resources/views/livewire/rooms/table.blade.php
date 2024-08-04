<div>
    <div class="mb-3">
        <x-button wire:navigate href="/rooms/create" label="Add Room" class="btn-primary" icon="o-plus-circle" />
    </div>
    <div class="justify-center">
        <x-card class="border w-100" shadow>
            @php
                $rooms = App\Models\Room::all();

                $headers = [
                    ['key' => 'id', 'label' => '#'],
                    ['key' => 'title', 'label' => 'Room Title'],
                    ['key' => 'wifi', 'label' => 'WiFi' ],
                    ['key' => 'aircon', 'label' => 'Aircon' ],
                    ['key' => 'kitchen', 'label' => 'Kitchen' ],
                    ['key' => 'price', 'label' => 'Price']

                ];
            @endphp

            <x-table :headers="$headers" :rows="$rooms">
                @scope('cell_wifi', $rooms)
                    @if ($rooms->wifi == 1)
                        <x-icon name="o-check" />
                    @elseif ($rooms->wifi == 0)
                        <x-icon name="o-x-mark" />
                    @endif
                @endscope
                @scope('cell_aircon', $rooms)
                    @if ($rooms->aircon == 1)
                        <x-icon name="o-check" />
                    @elseif ($rooms->aircon == 0)
                        <x-icon name="o-x-mark" />
                    @endif
                @endscope
                @scope('cell_kitchen', $rooms)
                    @if ($rooms->cell_kitchen == 1)
                        <x-icon name="o-check" />
                    @elseif ($rooms->cell_kitchen == 0)
                        <x-icon name="o-x-mark" />
                    @endif
                @endscope
                @scope('cell_price', $rooms)
                    ₱ {{ $rooms->price }}
                @endscope
                @scope('actions', $rooms)
                    <div class="flex gap-2">
                        <x-button icon="o-eye" wire:click="viewRoom({{ $rooms->id }})" spinner class="btn-sm" />
                        <x-button icon="o-trash" wire:click="deleteRoom({{ $rooms->id }})" spinner class="btn-sm" />
                    </div>
                @endscope
            </x-table>
        </x-card>
    </div>
    <x-toast class="toast-top toast-center" />
</div>
