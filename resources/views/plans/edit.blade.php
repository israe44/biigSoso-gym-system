<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit plans</title>
</head>
<body>
    <h1>Edit Plan</h1>
    @if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
        <p style="color: red">{{ $error }}</p>
        @endforeach
    </div>
    @endif
    <form action="/plans/{{ $plan->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="Plan Name" value="{{ $plan->name }}"> <br><br>
        <input type="number" name="price" placeholder="Price" value="{{ $plan->price }}"> <br><br>
        <button type="submit">Update Plan</button>
    </form>
</body>
</html>