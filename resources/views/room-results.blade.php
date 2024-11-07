<x-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Available Rooms</title>
    </head>

    <body>
        <h1>Available Rooms from {{ $checkin }} to {{ $checkout }}</h1>
        @if ($rooms->isEmpty())
            <p>This date is not available</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Room Name</th>
                        <th>Room Type</th>
                        <th>Capacity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rooms as $room)
                        <tr>
                            <td>{{ $room->room_name }}</td>
                            <td>{{ $room->room_type }}</td>
                            <td>{{ $room->capacity }}</td>
                            <td>${{ $room->price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </body>

    </html>
</x-layout>
