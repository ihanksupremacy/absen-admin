<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Absensi</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
   
</head>

<body>
    @include('navbar')

    <div class="container-fluid">
  
        <div class="row">
           
            @include('sidebar')
            <!-- Main Content -->
            <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">
                <h1 class="mb-4">Tambah Absensi untuk {{ $userName }}</h1>

                <!-- Form Tambah Absensi -->
                <form action="{{ route('absensi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $userId }}">

                    <div class="form-group">
                        <label for="waktu_absen">Waktu Absen</label>
                        <input type="datetime-local" class="form-control" id="waktu_absen" name="waktu_absen" required>
                    </div>

                    <div class="form-group">
                        <label for="status_absen">Status Absen</label>
                        <select class="form-control" id="status_absen" name="status_absen" required>
                            <option value="Sakit">Sakit</option>
                            <option value="Izin">Izin</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="photo_absen">Foto Absen (Opsional)</label>
                        <input type="file" class="form-control-file" id="photo_absen" name="photo_absen">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </main>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
