@extends('template')

@section('content')

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{ asset('dist/sweetalert2.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/sweetalert2.all.js') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="{{ asset('dist/sweetalert2.all.js') }}"></script>
        <title>Login-Kella Data Siswa</title>
    </head>
    <body>
        <div class="container d-flex">
            <div class="card w-50">

                <div class="card-header">
                    <h3 class="text-center"><strong>Welcome</strong></h3>
                </div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Login Gagal</strong>
                        <br>
                        <br>

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>       
                    @endif

                    <form id="login-form" action="{{ route('login.auth') }}" method="POST">
                        @csrf 

                        <div class="row mb-3 mt-3 justify-content-center">
                            <div class="col-10">
                                <div class="input-group">
                                    <div class="form-floating">
                                        <input type="text" name="email" class="form-control" placeholder="Input Email" required>
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3 mt-3 justify-content-center">
                            <div class="col-10">
                                <div class="input-group">
                                    <div class="form-floating">
                                        <input type="password" name="password" class="form-control" placeholder="Input Password" required>
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 mb-3 text-center">
                            <button type="submit" class="btn btn-primary" id="btn-login">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>