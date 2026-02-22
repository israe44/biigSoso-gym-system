<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
</head>
<body>
    <h1>Edit Member </h1>
    <form action="/members/{{ $member->id }}" method="POST"> 
@csrf <!-- this is a laravel security token, it proves the form was submitted from ur website --- without it laravel will reject the form submission-->
@method ('PUT')
    <input type="text" name="name" placeholder="Name" value="{{ $member->name }}"> <br><br>
    <input type="number" name="age" placeholder="Age" value="{{ $member->age }}"> <br><br>
    <input type="text" name="phone" placeholder="Phone" value="{{ $member->phone }}"> <br> <br>
    <input type="text" name="membership_type" placeholder="Membership Type" value="{{ $member->membership_type }}"> <br> <br>
<button type="submit"> Update Member </button>
</form>
</body>
</html>