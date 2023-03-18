@extends('template')

@section('content')

<div class="card mt-5 mb-4 justify-content-center">
    <div class="card-header">
        <h2 class="text-center"><strong>Data Penelusuran Tamatan SMKN 1 Purwokerto</strong></h2>
    </div>

    <div class="card-body">

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="table-responsive mt-3">
            
            <table class="table table-striped-columns
                table-hover	
                table-bordered
                align-middle">

                <thead class="table-light">
                    <tr>
                        <th width ="20px" class="text-center">No</th>
                        <th>NIS</th>
                        <th width ="330px" class="text-center">Nama</th>
                        <th width ="300px" class="text-center">Kelas</th>
                        <th width ="300px" class="text-center">No HP</th>
                        <th width ="300px" class="text-center">Keterangan</th>
                        <th width ="300px" class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody class="table-group-divider">

                    @foreach ($sisw as $siswa)
                    
                    <tr>
                        <td scope="row" class="text-center">{{ $number + $loop->index }}</td>
                        <td>{{ $siswa->nis }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->kelas }}</td>
                        <td>{{ $siswa->no_hp }}</td>
                        <td>{{ $siswa->keterangan }}</td>
                        <td class="text-center" height = "70px">

                            <form action="{{ route('sisw.destroy', $siswa->id) }}" method="POST">
                                <a href="{{ route('sisw.edit', $siswa->id) }}" class="btn btn-primary btn-sm me-2">Update</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm ms-2" onclick="return confirm('Apakah yakin akan menghapus data?')">Hapus</button>
                            </form>       
                        </td>
                    </tr>
                    @endforeach   
                </tbody>
            </table>

        </div>
    </div>
</div>

{!! $sisw->links() !!}

<div class="row mt-3 mb-5">
    <div class="col-md mb-5 mt-2">
        <a href="{{ route('sisw.create') }}" class="btn btn-success">Tambah Data</a>
    </div>
</div>

@endsection