<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Biodata</title>
</head>
<body>
    <h1>Edit Biodata</h1>
    <form action="{{ route('biodatas.update', $biodata->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="first_name">Nama Depan:</label>
        <input type="text" name="first_name" id="first_name" value="{{ $biodata->first_name }}" required>
        <br>
        
        <label for="last_name">Nama Belakang:</label>
        <input type="text" name="last_name" id="last_name" value="{{ $biodata->last_name }}" required>
        <br>
        
        <label for="gender">Jenis Kelamin:</label>
        <select name="gender" id="gender" required>
            <option value="male" {{ $biodata->gender == 'male' ? 'selected' : '' }}>Laki-Laki</option>
            <option value="female" {{ $biodata->gender == 'female' ? 'selected' : '' }}>Perempuan</option>
        </select>
        <br>
        
        <button type="submit">Simpan Perubahan</button>
    </form>
    
    <a href="{{ route('biodatas.index') }}">Kembali ke Daftar Biodata</a>
</body>
</html>
