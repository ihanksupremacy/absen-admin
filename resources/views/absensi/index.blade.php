<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Absensi</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head>
<body>
    @include('navbar')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
           @include('sidebar')
            <!-- Main Content -->
            <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">
                <h1 class="mb-4">Daftar Absensi {{ $userName }}</h1>

                <!-- Button Tambah -->
                <div class="mb-3">
                    <a href="{{ route('absensi.create', ['userId' => $userId]) }}" class="btn btn-success">
                        <i class="fas fa-plus"></i> Tambah Absensi
                    </a>
                </div>

                <!-- Tabel Absensi -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Waktu Absen</th>
                            <th>Status Absen</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($absensiList as $index => $absensi)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $absensi->waktu_absen }}</td>
                                <td>{{ $absensi->status_absen }}</td>
                                <td>
                                    <a href="{{ route('absensi.detail', ['id' => $absensi->id]) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </main>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
