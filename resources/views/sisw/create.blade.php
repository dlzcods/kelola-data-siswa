@extends('template')

@section('content')

    <div class="card mt-5 justify-content-center">
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

            <form action="{{ route('sisw.store') }}" method="POST">
                @csrf

                <div class="row d-flex justify-content-center">

                    <div class="row col-md-8 mb-3 mt-3">
                        <div class="col-2">
                            <label for="nis" class="col-form-label">
                                <strong>NIS</strong>
                            </label>
                        </div>

                        <div class="col-10">
                            <input type="number" name="nis" class="form-control" placeholder="Masukkan NIS Siswa" required>
                        </div>   
                    </div>

                    <div class="row col-md-8 mb-3">
                        <div class="col-2">
                            <label for="nama" class="col-form-label">
                                <strong>Nama</strong>
                            </label>
                        </div>

                        <div class="col-10">
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Siswa" required>
                        </div>
                    </div>

                    <div class="row col-md-8 mb-3">
                        <div class="col-2">
                            <label for="kelas" class="col-form-label"> 
                                <strong>Kelas</strong>
                            </label>
                        </div> 

                        <div class="col-10">
                            <select class ="form-select" id="kelas" name="kelas" required>
                                <option>XII RPL 1</option>
                                <option>XII RPL 2</option>
                                <option>XII MM 1</option>
                                <option>XII MM 2</option>
                                <option>XII FKK 1</option>
                                <option>XII FKK 2</option>
                            </select>
                        </div>   
                    </div>
                    
                    <div class="row col-md-8 mb-3">
                        <div class="col-2">
                        <label for="no_hp" class="col-form-label">
                            <Strong>No HP</Strong> 
                        </label>
                        </div>

                        <div class="col-10">
                        <input type="number" name="no_hp" id="no_hp" class="form-control" placeholder="Masukkan Nomor HP Siswa" required>
                        </div>
                    </div>
                    
                    <div class="row col-md-8 mb-3">
                        <div class="col-2">
                            <label for="keterangan" class="col-form-label">
                                <strong>Keterangan</strong>
                            </label>
                        </div>

                        <div class="col-10">
                            <select class ="form-select" id="keterangan" name="keterangan" required>
                                <option>Melanjutkan Kuliah</option>
                                <option>Bekerja</option>
                                <option>Wirausaha</option>
                            </select>
                        </div>
                    </div>   

                    <div class="col-md-8 mt-3 mb-3 text-center">
                        <a href="{{ route('sisw.index') }}" class="btn btn-danger me-4">Melihat Tabel</a>
                        <button type="submit" class="btn btn-primary ms-4">Tambah Data</button>
                    </div>

                </div> 
            </form>
        </div>
    </div>
    
@endsection