<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Masukan Judul</h2>
    <hr>
    <form method="POST" action="/biodata">
    @csrf
    <div class="form-group">
        <label for="nama">Nama :</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="form-group">
        <label for="nim">NIM :</label>
        <input type="text" class="form-control" id="nim" name="nim">
    </div>
    <div class="form-group">
        <label for="jenis-kelamin">Jenis Kelamin :</label>
        <select name="jenis-kelamin" id="jenis-kelamin" class="form-control">
        <option value="pria">pria</option>
        <option value="wanita">wanita</option>
        </select>
    </div>
    <div class="form-group">
        <label for="tgl-lahir">Tanggal Lahir :</label>
        <input type="date" class="form-control" id="tgl-lahir" name="tgl-lahir">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat Email :</label>
        <input type="text" class="form-control" id="alamat" name="alamat">
    </div>
    <div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">submit</button>
</form>
</body>
</html>