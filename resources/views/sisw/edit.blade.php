@extends('template')

@section('content')

<div class="container d-flex justify-content-center">

    <div class="card mt-5 w-50 px-3">
        <div class="card-header">
            <h2 class="text-center"><strong>EDIT DATA SISWA</strong></h2>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Waduh Edit Gagal!!</strong>
                    <br>
                    <br>

                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('sisw.update',$sisw->id) }}" method="POST">
                @csrf
                @method('PUT')

                    <div class="row mb-3 mt-3">
                        <div class="col-2 mt-2">
                            <label for="nis" class="col-form-label">
                                    <strong>NIS</strong>
                            </label>
                        </div>

                        <div class="col-10">
                            <div class="input-group">
                                <div class="form-floating">
                                    <input type="text" name="nis" class="form-control is-invalid" placeholder="Masukkan NIS Siswa" value="{{ $sisw->nis }}" readonly>
                                    <label for="name">NIS Tidak dapat diubah</label>
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
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Siswa" value="{{ $sisw->nama }}" required>
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
                                    <option value="XII RPL 1" {{ old('kelas', $sisw->kelas) == 'XII RPL 1' ? 'selected' : '' }}>XII RPL 1</option>
                                    <option value="XII RPL 2" {{ old('kelas', $sisw->kelas) == 'XII RPL 2' ? 'selected' : '' }}>XII RPL 2</option>
                                    <option value="XII MM 1" {{ old('kelas', $sisw->kelas) == 'XII MM 1' ? 'selected' : '' }}>XII MM 1</option>
                                    <option value="XII MM 2" {{ old('kelas', $sisw->kelas) == 'XII MM 2' ? 'selected' : '' }}>XII MM 2</option>
                                    <option value="XII FKK 1" {{ old('kelas', $sisw->kelas) == 'XII FKK 1' ? 'selected' : '' }}>XII FKK 1</option>
                                    <option value="XII FKK 2" {{ old('kelas', $sisw->kelas) == 'XII FKK 2' ? 'selected' : '' }}>XII FKK 2</option>
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
                                    <input type="number" name="no_hp" class="form-control" placeholder="Masukkan Nomor HP Siswa" value="{{ $sisw->no_hp }}" required>
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
                                    <option value="Melanjutkan Kuliah" {{ old('keterangan', $sisw->keterangan) == 'Melanjutkan Kuliah' ? 'selected' : '' }}>Melanjutkan Kuliah</option>
                                    <option value="Bekerja" {{ old('keterangan', $sisw->keterangan) == 'Bekerja' ? 'selected' : '' }}>Bekerja</option>
                                    <option value="Wirausaha" {{ old('keterangan', $sisw->keterangan) == 'Wirausaha' ? 'selected' : '' }}>Wirausaha</option>
                                </select>
                                <label for="keterangan">Pilih Keterangan</label>
                            </div>
                        </div>       
                    </div>

                    <div class="mt-4 mb-3 text-center">
                        <a href="{{ route('sisw.index') }}" class="btn btn-danger me-3">Lihat Tabel</a>
                        <button type="submit" class="btn btn-primary ms-3">Edit Data</button>
                    </div>

            </form>
        </div>
    </div>
    
</div>
    
@endsection