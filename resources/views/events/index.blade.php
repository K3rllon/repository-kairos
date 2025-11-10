<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - Kairos</title>
</head>
<body>
    <h1>Events</h1>

    <a href="create.html">Add Event</a>

   <table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Start Date</th>
            <th>Location</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($events as $event)
            <tr>
                <td>{{ $event->title }}</td>
                <td>{{ $event->start_date }}</td>
                <td>{{ $event->location }}</td>
                <td>{{ ucfirst($event->status) }}</td>
                <td>
                    <a href="">View</a>
                    <a href="">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>
</body>
</html>
