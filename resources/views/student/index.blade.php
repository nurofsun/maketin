@extends('layouts.dashboard')

@section('title', $title )

@section('content')
    <section class="p-2">
        <header class="mb-4 d-flex align-items-center justify-content-between bg-white py-2 px-3">
            <div>
            <h2 class="title h5 mb-0">{{ $title }}</h2>
            <p class="m-0"><small>Daftar Santri Keseluruhan</small></p>
            </div>
            <button 
                data-toggle="modal"
                data-target="#modalNewStudent"
                class="btn btn-sm btn-outline-primary font-weight-bold">
                <i class="fas fa-plus-circle"></i>
                Santri Baru
            </button>
            @include('student.create')
        </header>
        @include('student.list')
    </section>
@endsection
