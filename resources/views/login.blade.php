@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <main class="login vh-100">
        <div class="bg-white vh-100">
            <div class="row vh-100 no-gutters">
                <div class="col-12 col-md-6 bg-primary">
                    <section class="content vh-100 d-flex flex-column justify-content-center">
                        <div class="details p-4">
                            <p class="title display-4 text-white font-weight-bold">
                                Easily Manage The Payment Of Your School
                            </p>
                            <img width="500" src="{{ @asset('images/banner.svg') }}" alt="Easily Manage The Payment of Your School">
                        </div>
                    </section>
                </div>
                <div class="col-12 col-md-6 bg-light">
                    <section class="login-form vh-100 d-flex align-items-center justify-content-center">
                        <form action="{{ route('authenticate') }}" method="POST" class="flex-shrink-0 py-3 px-3 shadow-sm rounded-lg bg-white">
                            @csrf
                            <div class="mb-3">
                                <h3 class="h2 font-weight-bold">Welcome Back</h3>
                                <p class="small">Please login first to continue.</p>
                            </div>
                            <div class="mb-3">
                                <label class="label font-weight-bold">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input class="form-control" name="username" id="username" type="text" placeholder="Username">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="label font-weight-bold">Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-key"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" id="password" type="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="mb-3 float-right">
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
