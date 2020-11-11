<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
<form action="{{ url('user/store') }}" method="POST">
@csrf
    <ul>
        <li>
            <label for="name">Name</label>
            <input type="text" name="name">
        </li>
        <li>
            <label for="email">Email</label>
            <input type="text" name="email">
        </li>
        <button name="submit" type="submit">Submit</button>
    </ul>
</form>
    
</body>
</html>