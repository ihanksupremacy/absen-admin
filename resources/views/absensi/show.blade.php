<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Absensi</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Detail Absensi</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: {{ $absensi->id }}</h5>
                <p class="card-text">Waktu Absen: {{ $absensi->waktu_absen }}</p>
                <p class="card-text">Status Absen: {{ $absensi->status_absen }}</p>
                @if ($absensi->photo_absen)
                    <p class="card-text">Photo Absen:</p>
                    <img src="data:image/jpeg;base64,{{ $absensi->photo_absen_base64 }}" class="img-fluid" alt="Photo Absen">
                @else
                    <p class="card-text">Photo Absen tidak tersedia.</p>
                @endif
            </div>
        </div>
        <a href="{{ route('users.index') }}" class="btn btn-primary mt-3">Kembali</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
