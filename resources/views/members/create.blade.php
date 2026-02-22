<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new member</title>
</head>
<body>
    <h1>Add New Member </h1>
    <form action="/members" method="POST"> 
@csrf <!-- this is a laravel security token, it proves the form was submitted from ur website --- without it laravel will reject the form submission-->
    <input type="text" name="name" placeholder="Name"> <br><br>
    <input type="number" name="age" placeholder="Age"> <br><br>
    <input type="text" name="phone" placeholder="Phone"> <br> <br>
    <input type="text" name="membership_type" placeholder="Membership Type"> <br> <br>
<button type="submit"> Add Member </button>
</form>
</body>
</html>