@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <main class="login">
        <section class="login-form">
            <form action="#" method="POST" class="card">
                <div class="card-content">
                    <h5 class="card-title">Welcome Back, Please Login First.</h5>
                    <div class="input-field">
                        <input id="username" type="text" placeholder="Username">
                        <label for="username">Username</label>
                    </div>
                    <div class="input-field">
                        <input id="password" type="password">
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
