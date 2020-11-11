<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT Data</title>
</head>
<body>
    <h1>EDIT Data</h1>
<form action="/user/{{ $user->id }}/update" method="POST">
@csrf
@method('patch')
    <ul>
        <li>
            <label for="name">Name</label>
        <input type="text" name="name" value="{{ $user->name }}">
        </li>
        <li>
            <label for="email">Email</label>
        <input type="text" name="email" value="{{ $user->email }}">
        </li>
        <button name="submit" type="submit">Submit</button>
    </ul>
</form>
    
</body>
</html>