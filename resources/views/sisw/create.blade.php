@extends('template')

@section('content')

<div class="container d-flex justify-content-center mt-5">

    <div class="card mt-5 w-50 px-3">

        <div class="card-header">
            <h2 class="text-center"><strong>INPUT DATA SISWA</strong></h2>
        </div>

        <div class="card-body">
        
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Waduh Input Gagal!!</strong>
                    <br>
                    <br>

                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('siswa.store') }}" method="POST">
                @csrf

                    <div class="row mb-3 mt-3">
                        <div class="col-2 mt-2">
                            <label for="nis" class="col-form-label">
                                <strong>NIS</strong>
                            </label>
                        </div>
                        
                        <div class="col-10">
                            <div class="input-group">
                                <div class="form-floating"> 
                                    <input type="number" name="nis" class="form-control" placeholder="Masukkan NIS" required>
                                    <label>Masukkan NIS Siswa</label>
                                </div>    
                            </div>
                        </div>
                    </div>
                    

                    <div class="row mb-3 mt-4">
                        <div class="col-2 mt-2">
                            <label for="nama" class="col-form-label">
                                <strong>Nama</strong>
                            </label>
                        </div>

                        <div class="col-10">
                            <div class="input-group">
                                <div class="form-floating">
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Siswa" required>
                                    <label for="">Masukkan Nama Siswa</label>
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
                                    <option>XII RPL 1</option>
                                    <option>XII RPL 2</option>
                                    <option>XII MM 1</option>
                                    <option>XII MM 2</option>
                                    <option>XII FKK 1</option>
                                    <option>XII FKK 2</option>
                                </select>
                                <label for="kelas">Pilih Kelas</label>
                            </div>
                        </div>   
                    </div>
                    
                    <div class="row mb-3 mt-4">
                        <div class="col-2 mt-2">
                            <label for="no_hp" class="col-form-label">
                                <Strong>No HP</Strong> 
                            </label>
                        </div>

                        <div class="col-10">
                            <div class="input-group">
                                <div class="form-floating">
                                    <input type="number" name="no_hp" id="no_hp" class="form-control" placeholder="Masukkan Nomor HP Siswa" required>
                                    <label for="">Masukkan Nomor HP Siswa</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb-3 mt-4">
                        <div class="col-2 mt-2 ">
                            <label for="keterangan" class="col-form-label">
                                <strong>Keterangan</strong>
                            </label>
                        </div>

                        <div class="col-10">
                            <div class="form-floating">
                                <select class ="form-select" id="keterangan" name="keterangan" aria-label="Pilih Keterangan" required>
                                    <option>Melanjutkan Kuliah</option>
                                    <option>Bekerja</option>
                                    <option>Wirausaha</option>
                                </select>
                                <label for="keterangan">Pilih Keterangan</label>
                            </div>
                        </div>
                    </div>   
                    
                    <!-- Button trigger modal (Simpan Data) -->
                    <div class="mt-4 mb-3 text-center">
                        <a href="{{ route('siswa.index') }}" class="btn btn-danger me-2">Lihat Tabel</a>
                        <button type="button" class="btn btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Konfirmasi</button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Simpan Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p> 
                                       <strong>Cek NIS terlebih dahulu, karena NIS tidak dapat diubah.</strong>
                                       <br> 
                                       Jika semua data sudah benar, klik Simpan Data.
                                    </p>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cek Lagi</button>
                                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                                </div>

                            </div>
                        </div>
                    </div>

            </form>
        </div>
    </div>
</div>

@endsection