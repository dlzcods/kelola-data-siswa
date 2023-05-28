@extends('template')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('dist/sweetalert2.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/sweetalert2.all.js') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Register-Kelola Data Siswa</title>
</head>
<body>
    <div class="container d-flex">
        <div class="card w-50">

            <div class="card-header">
                <h3 class="text-center"><strong>Sign Up</strong></h3>
            </div>

            <div class="card-body">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Registrasi Gagal</strong>
                    <br>
                    <br>

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>                    
                @endif

                <form id="register-form" action="{{ route('register.submit') }}" method="POST">
                    @csrf 

                    <div class="row mb-4 mt-3 justify-content-center">
                        <div class="col-10">
                            <div class="input-group">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control" placeholder="Input Your Name" required>
                                    <label for="name">Name</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4 mt-4 justify-content-center">
                        <div class="col-10">
                            <div class="input-group">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" placeholder="Input Your Email" required>
                                    <label for="email">Email</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4 mt-4 justify-content-center">
                        <div class="col-10">
                            <div class="input-group">
                                <div class="form-floating">
                                    <input type="password" name="password" class="form-control" placeholder="Input Your Password" required>
                                    <label for="password">Password</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3 mt-3 justify-content-center">
                        <div class="col-10">
                            <div class="input-group">
                                <div class="form-floating">
                                    <input type="password" name="password confirmation" class="form-control" placeholder="Cnfirm Your Password" required>
                                    <label for="password_confirmation">Confirm Password</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 mb-3 text-center">
                        <div class="mt-4">
                            <div class="sup-btn">
                                <button type="submit" class="btn btn-primary" id="btn-sign-up">Create Account</button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="mb-3 mt-4 justify-content-center text-center">
                    <div class="mt-3">
                        <div class="sin-text">
                            <a>Already have an account?</a>
                            <a class="lg-no-underline" href="{{ route('login.show') }}">Log In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>