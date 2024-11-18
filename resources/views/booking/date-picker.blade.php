<!DOCTYPE html>
<!---This is for KTV, not hotel--->
<x-layout>
    <div class="container mt-5">
        <h2>Select a Date</h2>
        <form action="{{ route('booking.available-rooms') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="date" class="form-label">Pick a Date</label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-layout>

</html>
