@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <main class="login vh-100">
        <div class="bg-white vh-100">
        <div class="row vh-100 no-gutters">
            <div class="col-12 col-md-6 bg-primary">

            </div>
            <div class="col-12 col-md-6">
                <section class="login-form vh-100 d-flex align-items-center justify-content-center">
                    <form action="{{ route('authenticate') }}" method="POST" class="flex-shrink-0 py-3">
                        @csrf
                        <div class="mb-3">
                            <h3 class="h2 font-weight-bold">Welcome!</h3>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input class="form-control" name="username" id="username" type="text" placeholder="Username">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-key"></i>
                                    </span>
                                </div>
                                <input class="form-control" id="password" type="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-primary" type="submit">
                                <span class="font-weight-bold">Login</span>
                                <span class="icon"><i class="fas fa-sign-in-alt"></i></span>
                            </button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
        </div>
    </main>
@endsection
