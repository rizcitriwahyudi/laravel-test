<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Data User</h1>
<a href="{{ url('user/create') }}">Tambah Data</a><br><br>

    <table border="1" cellpadding="10" cellspacing="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
        @php
            $i = 1;
        @endphp
        @foreach ($users as $row)
        <tr>
        <td>{{ $i }}</td>
        <td>{{ $row->name }}</td>
        <td>{{ $row->email }}</td>
        <td>{{ $row->created_at }}</td>
        <td>
        <a href="user/{{ $row->id }}/edit">Edit</a> |
        <a href="user/{{ $row->id }}/destroy" onclick="return confirm('Yakin ?');">Hapus</a>
        </td>

        </tr>
        @php
            $i++;
        @endphp
        @endforeach
    </table>
    
</body>
</html>