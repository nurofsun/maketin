@extends('layouts.dashboard')

@section('title', $title )

@section('content')
    <section class="p-2">
        <header class="mb-4 d-flex align-items-center justify-content-between">
            <h2 class="title h5">{{ $title }}</h2>
            <div class="mb-2">
                <button 
                    data-toggle="modal"
                    data-target="#modalNewStudent"
                    class="btn btn-sm btn-outline-primary font-weight-bold">
                    Tambah Santri Baru
                </button>
                @include('student.create')
            </div>
        </header>
        <div class="shadow rounded">
            @include('student.list')
        </div>
    </section>
@endsection
