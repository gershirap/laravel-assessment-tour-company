<div>
    <div>
        <div class="mx-1">
            <input wire:model.debounce.300ms="search" type="text" class="appearance-none border-gray-200 rounded py-3 px-4 focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Search destination...">
        </div>
    </div>
    <table class="">
        <thead>
            <tr>
                <th class="px-4 py-2">Destination</th>
                <th class="px-4 py-2">Start</th>
                <th class="px-4 py-2">End</th>
                <th class="px-4 py-2">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tours as $tour)
                <tr>
                    <td class="border px-4 py-2">{{ $tour->destination }}</td>
                    <td class="border px-4 py-2">{{ $tour->start }}</td>
                    <td class="border px-4 py-2">{{ $tour->end }}</td>
                    <td class="border px-4 py-2">{{ $tour->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="w-3/6 mx-1">
        {{ $tours->links()}}
    </div>
</div>