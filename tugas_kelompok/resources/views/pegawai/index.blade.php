<!doctype html>
  <html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pegawai</title>
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
          <a class="navbar-brand">KELOMPOK 7 | MENAMBAH PEGAWAI</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
              <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/></svg>
            </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/pegawai"><i class="fas fa-users"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/perusahaan"><i class="fas fa-address-card"></i></i></a>
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
        <section id="section_pegawai">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                    <a href="{{ route('pegawai.create') }}" class="btn btn-md btn-success mb-3">TAMBAH PEGAWAI</a>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">NAMA</th>
                        <th scope="col">JABATAN</th>
                        <th scope="col">FOTO</th>
                        <th scope="col">AKSI</th>
                      </tr>
                    </thead> 
                    <tbody>
                      @forelse ($pegawais as $pegawai)
                     <tr>
                      <td>{!! $pegawai->nama !!}</td>
                      <td>{{ $pegawai->jabatan }}</td>
                      <td class="text-center">
                        <img src="{{ Storage::url('public/pegawais/').$pegawai->gambar }}" class="rounded" style="width: 150px">
                      </td>
            
                    
                     
                      <td class="text-center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST">
                          <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                      </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                      Pegawai Belum Tersedia !!!.
                    </div>
                    @endforelse
                  </tbody>
                </table>
                 {{ $pegawais->links() }}
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
