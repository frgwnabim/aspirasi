<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav>
            <a href="/"><img src="{{ asset('image/smktelkomjkt2.png')}}" alt="telkom"></a>    
        </nav>

        <table class="table table-striped" border="2">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Jenis</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($aspirasis as $aspirasi)

              <tr class="table-{{( $aspirasi->status )? 'success' : 'light'}}">
                <th scope="row">{{$aspirasi->id}}</th>
                <td>{{$aspirasi->foto}}</td>
                <td>{{$aspirasi->nama}}</td>
                <td>{{$aspirasi->Keterangan}}</td>
                <td>{{$aspirasi->jenis}}</td>
                <td>
                    <a class="btn btn-light" href="/aspirasi/update/{{ $aspirasi->id}}">
                      <i class="bi bi-{{ ( $aspirasi->status )? 'arrow-counterclockwise' : 'check-lg' }}"></i>
                    </a>
                    <a class="btn btn-light" href="/aspirasi/delete/{{$aspirasi->id}}">
                      <i class="bi bi-x-square"></i></a>
                </td>
              </tr>

              @endforeach

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>