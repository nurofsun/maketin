@extends('layouts.dashboard')

@section('title', $title )

@section('head')
    <script src="{{ asset('js/student.js') }}"></script>
@endsection

@section('content')
    <section class="p-3">
        <header class="d-flex py-2 justify-content-between align-items-center">
            <h5 class="title mb-0">{{ $title }}</h5>
            <button class="btn btn-primary">
                <i class="fas fa-plus"></i>
                Tambahkan Santri Baru
            </button>
        </header>
        @include('student.list')
    </section>
@endsection
