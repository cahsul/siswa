<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Siswa</title>
</head>
<body>
<form action="{{route('siswa-post')}}" method="POST">
        @csrf
        <input type="text" name="namaSiswa" placeholder="Nama Siswa" />
        <br/><input type="text" name="umur" placeholder="Umur Siswa" />
        <br/><textarea name="alamat" placeholder="Alamat Siswa" cols="30" rows="10"></textarea>
        <br/><input type="submit" value="KIRIM" />
    </form>
</body>
</html>
