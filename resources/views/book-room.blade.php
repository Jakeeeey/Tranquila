<x-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book a Room</title>
        <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
    </head>

    <body>
        <h1>Book a Room</h1>
        <form method="POST" action="{{ route('search.rooms') }}">
            @csrf
            <label for="checkin">Check-in Date</label>
            <input type="text" id="checkin" name="checkin" placeholder="Check-in Date" required>

            <label for="checkout">Check-out Date</label>
            <input type="text" id="checkout" name="checkout" placeholder="Check-out Date" required>

            <button type="submit">Search</button>
        </form>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script>
            $(function() {
                $("#checkin").datepicker({
                    dateFormat: "yy-mm-dd",
                    minDate: 0,
                    onSelect: function(date) {
                        var selectedDate = new Date(date);
                        selectedDate.setDate(selectedDate.getDate() + 1);
                        $("#checkout").datepicker("option", "minDate", selectedDate);
                        selectedDate.setDate(selectedDate.getDate() + 6);
                        $("#checkout").datepicker("option", "maxDate", selectedDate);
                    }
                });
                $("#checkout").datepicker({
                    dateFormat: "yy-mm-dd",
                    minDate: 1
                });
            });
        </script>
    </body>

    </html>
</x-layout>
