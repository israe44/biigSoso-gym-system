<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym members system</title>
</head>
<body>
    <h1>GYM Members</h1>
    @if(session('success'))
    <p style="color:green">{{ session('success')}} </p>
    @endif
    
    <a href='/members/create'>Add New Member</a>
    <form action="/" method="GET">
        <input type="text" name="search" placeholder="Search member...">
        <button type="submit">Search</button>
</form>
<br> <br>

@foreach ($members as $member)
<p>{{ $member->name }} - {{ $member->age }} - {{ $member->phone }} - {{ $member-> membership_type }}
    <a href="/members/{{ $member->id }}/edit">Edit </a>

    <form action="/members/{{ $member->id }}" method="POST" style="display: inline">

        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
</p>
@endforeach
</body>
</html>