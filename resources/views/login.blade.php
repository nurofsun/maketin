@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <main class="login">
        <section class="login-form">
            <form action="{{ route('authenticate') }}" method="POST" class="card">
                @csrf
                <div class="card-content">
                    <h5 class="card-title">Welcome Back, Please Login First.</h5>
                    <div class="input-field">
                        <input name="username" id="username" type="text" placeholder="Username">
                        <label for="username">Username</label>
                    </div>
                    <div class="input-field">
                        <input id="password" type="password" name="password">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="card-action">
                    <button class="btn waves-effect" type="submit">
                        <span>Login</span>
                    </button>
                </div>
            </form>
        </section>
    </main>
@endsection
