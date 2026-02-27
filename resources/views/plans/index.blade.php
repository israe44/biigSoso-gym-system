<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plans System</title>
</head>
<body>
    <h1>GYM Plans</h1>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <a href="/plans/create">Create a new plan</a>
    <br><br>
    <form action="/plans" method="GET">
        <input type="text" name="search" placeholder="Search plan...">
        <button type="submit">Search</button>
    </form>
    <br><br>

    @foreach ($plans as $plan)
        <p>
            {{ $plan->name }} - {{ $plan->price }}$
            <a href="/plans/{{ $plan->id }}/edit">Edit</a>
            <form action="/plans/{{ $plan->id }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </p>
    @endforeach

</body>
</html>