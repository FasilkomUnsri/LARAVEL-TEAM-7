<!doctype html>
  <html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>perusahaan</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="toastr/toastr.min.css">
    <link href="style/index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
    crossorigin="anonymous"/>
    
  </head>
  <body class="d-flex flex-column h-100">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color:#313031";>
        <div class="container">
          <a class="navbar-brand">KELOMPOK 7 | MENAMBAH DATA PEGAWAI</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/home"><i class="fas fa-home"></i></a>
            </li>

            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/pegawai"><i class="fas fa-users"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link  active" href="/perusahaan"><i class="fas fa-address-card"></i></i></a>
            </li>
              
            <li class="nav-item">
                <a class="nav-link" href="/login"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </li>

            </ul>
          </div>
        </div>
      </nav>
       <!-- Akhir Navbar -->

    <main class="flex-shrink-0">
      <div class="container mt-5">
        <section id="section_perusahaan">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                    <a href="{{ route('perusahaan.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA PEGAWAI</a>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">NAMA</th>
                        <th scope="col">JENIS KELAMIN</th>
                        <th scope="col">TEMPAT LAHIR</th>
                        <th scope="col">TANGGAL LAHIR</th>
                        <th scope="col">ALAMAT</th>
                        
                        <th scope="col">FOTO</th>
                        <th scope="col">AKSI</th>
                      </tr>
                    </thead> 
                    <tbody>
                      @forelse ($perusahaans as $perusahaan)
                     <tr>
                      <td>{{ $perusahaan->nama }}</td>
                      <td>{{ $perusahaan->jenis_kelamin }}</td>
                      <td>{{ $perusahaan->tempat_kelahiran }}</td>
                      <td>{{ $perusahaan->tanggal_lahir }}</td>
                      <td>{!! $perusahaan->alamat !!}</td>
                      
                    
                      <td class="text-center">
                        <img src="{{ Storage::url('public/perusahaans/').$perusahaan->gambar }}" class="rounded" style="width: 200px">
                      </td>
                      <td class="text-center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('perusahaan.destroy', $perusahaan->id) }}" method="POST">
                          <a href="{{ route('perusahaan.edit', $perusahaan->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                      </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                      Data Pegawai Belum Tersedia !!!.
                    </div>
                    @endforelse
                  </tbody>
                </table>
                 {{ $perusahaans->links() }}
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>


  <script src="jquery/jquery-3.6.0.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="toastr/toastr.min.js"></script>

  <script>
    @if(session()->has('success'))
    toastr.success('{{ session('success') }}', 'BERHASIL!');

    @elseif(session()->has('error'))

    toastr.error('{{ session('error') }}', 'GAGAL!');

    @endif
  </script>

</body>
</html>
