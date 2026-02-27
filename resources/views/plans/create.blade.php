<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Plan</title>
</head>
<body>
    <h1>Add New Plan</h1>

    @if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <p style="color: red">{{ $error }}</p>
        @endforeach
    </div>
    @endif

    <form action="/plans" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Plan Name"> <br><br>
        <input type="number" name="price" placeholder="Price"> <br><br>
        <button type="submit">Add Plan</button>
    </form>

</body>
</html>