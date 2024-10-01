<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Data Mahasiswa</h1>
    </header>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Name</th>
                    <th>Prody</th>
                </tr>
            </thead>
            <tbody style="position: relative">
            @foreach ($data as $mahasiswa)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $mahasiswa->nim}}</td>
                    <td>{{ $mahasiswa->name}}</td>
                    <td>{{ $mahasiswa->address}}</td>
                    <td>
                        <form action="{{ url('mahasiswa/delete/' . $mahasiswa->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: red; color: white; border: none; border-radius: 2px; font-size: 8px; margin-bottom: 5px;">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div style="margin-top: 10px;">
        <form action="{{ url('mahasiswa/create') }}" method="POST">
            @csrf
            <label for="nim">NIM</label><br>
            <input type="text" id="nim" name="nim"><br>
            <label for="name">Name</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="nim">Program Study</label><br>
            <input type="text" id="address" name="address"><br>
            <button type="submit" style="margin-top: 10px; border-radius: 2rem; border: none; background: blue; color:antiquewhite;"> Save </button>
        </form>
    </div>
    @include('sweetalert::alert')
</body>
</html>
