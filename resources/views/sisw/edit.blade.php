@extends('template')

@section('content')

<div class="container d-flex justify-content-center mt-5">

    <div class="card mt-5 w-50 px-3">

        <div class="card-header">
            <h2 class="text-center"><strong>EDIT DATA SISWA</strong></h2>
        </div>

        <div class="card-body">

            <div class="alert alert-warning mt-2">
                <a>NIS tidak dapat diubah. Jika NIS salah, mohon input data baru di </a>
                <a href="{{ route('siswa.create') }}" class="form-label">sini</a>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Pembaruan Data Gagal!</strong>
                    <br>
                    <br>

                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                @csrf
                @method('PUT')

                    <div class="row mb-3 mt-4">
                        <div class="col-2 mt-2">
                            <label for="nis" class="col-form-label">
                                    <strong>NIS</strong>
                            </label>
                        </div>

                        <div class="col-10">
                            <div class="input-group mb-1">
                                <div class="form-floating">
                                    <input type="text" name="nis" class="form-control" placeholder="NIS Siswa" value="{{ $siswa->nis }}" readonly>
                                    <label for="name">NIS Siswa</label>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="row mb-3 mt-4">
                        <div class="col-2 mt-2">
                            <label for="name" class="col-form-label">
                                <strong>Nama</strong>
                            </label>
                        </div>

                        <div class="col-10">
                            <div class="input-group">
                                <div class="form-floating">
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Siswa" value="{{ $siswa->nama }}" required>
                                    <label for="name">Masukkan Nama Siswa</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3 mt-4">
                        <div class="col-2 mt-2">
                            <label for="kelas" class="col-form-label">
                                <strong>Kelas</strong>
                            </label> 
                        </div>

                        <div class="col-10">
                            <div class="form-floating">
                                <select class ="form-select" id="kelas" name="kelas" aria-label="Pilih Kelas" required>
                                    <option value="XII RPL 1" {{ old('kelas', $siswa->kelas) == 'XII RPL 1' ? 'selected' : '' }}>XII RPL 1</option>
                                    <option value="XII RPL 2" {{ old('kelas', $siswa->kelas) == 'XII RPL 2' ? 'selected' : '' }}>XII RPL 2</option>
                                    <option value="XII MM 1" {{ old('kelas', $siswa->kelas) == 'XII MM 1' ? 'selected' : '' }}>XII MM 1</option>
                                    <option value="XII MM 2" {{ old('kelas', $siswa->kelas) == 'XII MM 2' ? 'selected' : '' }}>XII MM 2</option>
                                    <option value="XII FKK 1" {{ old('kelas', $siswa->kelas) == 'XII FKK 1' ? 'selected' : '' }}>XII FKK 1</option>
                                    <option value="XII FKK 2" {{ old('kelas', $siswa->kelas) == 'XII FKK 2' ? 'selected' : '' }}>XII FKK 2</option>
                                </select>
                                <label for="kelas">Pilih Kelas</label>
                         </div>
                        </div>  
                    </div>

                    <div class="row mb-3 mt-4">
                        <div class="col-2 mt-2">
                            <label for="no_hp" class="col-form-label">
                                <strong>No HP</strong>
                            </label>
                        </div>

                        <div class="col-10">
                            <div class="input-group">
                                <div class="form-floating">
                                    <input type="number" name="no_hp" class="form-control" placeholder="Masukkan Nomor HP Siswa" value="{{ $siswa->no_hp }}" required>
                                    <label for="no_hp">Masukkan Nomor HP Siswa</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3 mt-4">
                        <div class="col-2 mt-2">
                            <label for="keterangan" class="col-form-label">
                                <strong>Keterangan</strong> 
                            </label>
                        </div>

                        <div class="col-10">
                            <div class="form-floating">
                                <select class ="form-select" id="keterangan" name="keterangan" aria-label="Pilih Keterangan" required>
                                    <option value="Melanjutkan Kuliah" {{ old('keterangan', $siswa->keterangan) == 'Melanjutkan Kuliah' ? 'selected' : '' }}>Melanjutkan Kuliah</option>
                                    <option value="Bekerja" {{ old('keterangan', $siswa->keterangan) == 'Bekerja' ? 'selected' : '' }}>Bekerja</option>
                                    <option value="Wirausaha" {{ old('keterangan', $siswa->keterangan) == 'Wirausaha' ? 'selected' : '' }}>Wirausaha</option>
                                </select>
                                <label for="keterangan">Pilih Keterangan</label>
                            </div>
                        </div>       
                    </div>

                    <div class="mt-4 mb-3 text-center">
                        <a href="{{ route('siswa.index') }}" class="btn btn-danger me-2">Lihat Tabel</a>
                        <button type="submit" class="btn btn-primary ms-2">Ubah Data</button>
                    </div>

            </form>
        </div>
    </div>  
</div>
    
@endsection