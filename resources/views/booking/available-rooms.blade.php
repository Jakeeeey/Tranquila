<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Rooms</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Available Rooms for {{ $selectedDate->toFormattedDateString() }}</h2>

        @if ($availableRooms->isEmpty())
            <p>No rooms available on this date.</p>
        @else
            <ul class="list-group">
                @foreach ($availableRooms as $room)
                    <li class="list-group-item">
                        {{ $room->name }}
                        <form action="{{ route('booking.book-room', $room->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            <input type="hidden" name="date" value="{{ $selectedDate->toDateString() }}">
                            <button type="submit" class="btn btn-success btn-sm">Book Now</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>

</html>
