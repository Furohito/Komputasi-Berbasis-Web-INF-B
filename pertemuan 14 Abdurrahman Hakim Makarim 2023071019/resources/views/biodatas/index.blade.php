<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Biodata</title>
</head>
<body>
    <h1>Daftar Biodata</h1>
    <a href="{{ route('biodatas.create') }}">Tambah Biodata</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($biodatas as $biodata)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $biodata->first_name }}</td>
                <td>{{ $biodata->last_name }}</td>
                <td>{{ $biodata->gender }}</td>
                <td>
                    <a href="{{ route('biodatas.edit', $biodata->id) }}">Edit</a>
                    <form action="{{ route('biodatas.destroy', $biodata->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
