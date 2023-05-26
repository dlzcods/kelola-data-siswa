@extends('template')

@section('content')

<html>

    <head>
        <link rel="stylesheet" href="{{ asset('dist/sweetalert2.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/sweetalert2.all.js') }}">
        <script src="{{ asset('dist/sweetalert2.all.js') }}"></script>
    </head>

    <body>

    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                title: "Berhasil!",
                text: "{{ $message }}",
                icon: "success",
                timer: 2700,
                showConfirmButton: false,
                allowOutsideClick: false,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                    const t = Swal.getHtmlContainer().querySelector('t')
                    timeInterval = setInterval(() => {
                        t.textContent = Swwal.getTimerLeft()
                    }, 100);
                },
                willClose: () => {
                    clearInterval(timeInterval)
                }
            });
        </script>
    @endif

    <div class="container d-flex mt-5">

        <div class="card mt-5 mb-4">

            <div class="card-header">
                <h2 class="text-center"><strong>Data Penelusuran Tamatan SMKN 1 Purwokerto</strong></h2>
            </div>

            <div class="card-body">

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

                            @foreach ($siswa as $siswa_row)
                                    
                            <tr>
                                <td scope="row" class="text-center">{{ $number + $loop->index }}</td>
                                <td>{{ $siswa_row->nis }}</td>
                                <td>{{ $siswa_row->nama }}</td>
                                <td>{{ $siswa_row->kelas }}</td>
                                <td>{{ $siswa_row->no_hp }}</td>
                                <td>{{ $siswa_row->keterangan }}</td>

                                <td class="text-center" height = "70px">
                                    <form id="delete-form-{{ $siswa_row->id }}" action="{{ route('siswa.destroy', $siswa_row->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ route('siswa.edit', $siswa_row->id) }}" class="btn btn-primary btn-sm me-2">Update</a>
                                        <button type="button" class="btn btn-danger btn-sm ms-2 hapus-siswa-btn" data-id="{{ $siswa_row->id }}" data-toggle="tooltip" title='Delete'>Hapus</button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach  
       
                            <script>

                                // Adding listener for button hapus
                                const hapusButtons = document.querySelectorAll('.hapus-siswa-btn');
                                hapusButtons.forEach(function(hapusButton){
                                    hapusButton.addEventListener('click', function(e) {
                                        e.preventDefault();

                                        // Show sweetalert
                                        Swal.fire({
                                            title: 'Apakah Kamu yakin?',
                                            text: "Data yang dihapus tidak dapat dipulihkan",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#198754',
                                            cancelButtonColor: '#dc3545',
                                            confirmButtonText: 'Ya, hapus data!',
                                            cancelButtonText: 'Batal',
                                            allowOutsideClick: false,
                                            timer:false
                                        }).then((result) => {
                                            // User have to chose before deleting data
                                            // if yes, delete data
                                            if (result.isConfirmed) {     
                                                const formID = `delete-form-${hapusButton.dataset.id}`;
                                                const deleteForm = document.querySelector('#'+formID);
                                                deleteForm.submit();
                                            } 
                                            // if no, cancel delete notification will appear
                                            else if (result.dismiss === Swal.DismissReason.cancel) {
                                                Swal.fire({
                                                    title: 'Dibatalkan',
                                                    html: "<p>Penghapusan data dibatalkan. <br>Data Anda tetap aman dan tersedia.</p>",
                                                    icon: 'error'
                                                })
                                            }        
                                        });        
                                    });
                                });

                            </script>   
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        {!! $siswa->links() !!}

        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <div class="row mt-3 mb-5">
                <div class="col-md mb-5 mt-2">
                    <a href="{{ route('siswa.create') }}" class="btn btn-success">Tambah Data</a>
                    <button type="submit" class="btn btn-danger">Logout</button>
                </div>
            </div>
        </form> 

    </div>
    
    </body>

</html>

@endsection