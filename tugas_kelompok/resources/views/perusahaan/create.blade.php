<!doctype html>
  <html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>perusahaan</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body class="d-flex flex-column h-100">

    <main class="flex-shrink-0">
      <div class="container mt-5">
        <section id="section_perusahaan">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border">
                        <div class="card-body">
                            <form action="{{ route('perusahaan.store') }}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group">
                                    <label class="font-weight-bold">FOTO</label>
                                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar">

                                    @error('gambar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold">NAMA</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Lengkap">

                                    @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold">JENIS KELAMIN</label>
                                    <input type="radio" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value='L'>Laki-laki<br>

                                    <input type="radio" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value='P'>Perempuan<br>
                                    @error('jenis_kelamin')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold">TEMPAT KELAHIRAN</label>
                                    <input type="text" class="form-control @error('tempat_kelahiran') is-invalid @enderror" name="tempat_kelahiran" value="{{ old('tempat_kelahiran') }}" placeholder="Masukkan tempat_kelahiran">

                                    @error('tempat_kelahiran')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold">TANGGAL LAHIR</label>
                                    <input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" placeholder="Masukkan tanggal_lahir Lengkap">

                                    @error('tanggal_lahir')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label class="font-weight-bold">ALAMAT</label>
                                    <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="5" placeholder="Masukkan Data">{{ old('alamat') }}</textarea>

                                    @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">JABATAN</label>
                                    <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ old('jabatan') }}" placeholder="Masukkan Nama Lengkap">

                                    @error('jabatan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                <button type="reset" class="btn btn-md btn-warning">RESET</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
</main>


<script src="../jquery/jquery-3.6.0.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../ckeditor/ckeditor.js"></script>

<script>
     ClassicEditor
            .create( document.querySelector( '#alamat' ) )
            .catch( error => {
                console.error( error );
            } );
</script>

</body>
</html>
