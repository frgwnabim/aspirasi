<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/index.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <nav>
            <a href="admin"><img src="{{ asset('image/smktelkomjkt2.png')}}" alt="telkom" class="foto"></a>    
        </nav>
    
        <h3 class="selamat">Selamat datang di form aspirasi masyarakat</h3>
        <br>
        <div class="mid" style="gap: 15px">
            <blockquote>
                <p>Selamat datang</p>
                <p>Form aspirasi masyarakat adalah tempat untuk menampung semua harapan  masyarakat</p>
                <p>kami siap untuk membantu masyarakat</p>
            </blockquote>
            <img src="{{ asset('image/aspirasi.jpg')}}" alt="gambar" width="400px" height="400px">
        </div>

        <pre> </pre>
        <table class="table table-striped" border="2">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Jenis</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($aspirasis as $aspirasi)

              <tr class="table-{{( $aspirasi->status )? 'success' : 'light'}}">
                <th scope="row">{{$aspirasi->id}}</th>
                <td><img src="{{asset('storage/posts/'.$aspirasi->foto)}}" alt="" style="max-width: 150px"></td>
                <td>{{$aspirasi->nama}}</td>
                <td>{{$aspirasi->keterangan}}</td>
                <td>{{$aspirasi->jenis}}</td>
              </tr>

              @endforeach

            </tbody>
        </table>

        <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir dengan Bootstrap</title>
  <!-- Memuat Bootstrap CSS dari CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Tambahkan gaya tambahan jika diperlukan */
    body {
      padding: 20px;
    }
  </style>
</head>
<body>

<div class="container">
  <h2 class="tulisan">Form Pengaduan Masyarakat</h2>
  <form method="post" action="/aspirasi/add" enctype="multipart/form-data">
    @csrf
    <!-- Input Teks -->
    <div class="form-group">
      <label for="inputText">Input Teks:</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukkan teks" name="nama">
    </div>

    <!-- Textarea -->
    <div class="form-group">
      <label for="textarea">Textarea:</label>
      <textarea class="form-control" id="keterangan" rows="3" placeholder="Masukkan teks" name="keterangan"></textarea>
    </div>

    <!-- Input File -->
    <div class="mb-3">
      <label for="formFileMultiple" class="form-label">Multiple files input example</label>
      <input class="form-control" type="file" id="foto" name="image">
    </div>

    <!-- Dropdown 1 -->
    <div class="form-group">
      <label for="dropdown1">Dropdown 1:</label>
      <select class="form-control" id="keterangan" name="content">
        <option value="option1">Opsi 1</option>
        <option value="option2">Opsi 2</option>
        <option value="option3">Opsi 3</option>
      </select>
    </div>

    <!-- Tombol Kirim -->
    <button type="submit" class="btn btn-primary">Kirim</button>
  </form>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- Memuat Bootstrap JS dari CDN (jika diperlukan) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>