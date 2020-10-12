@extends('layouts.dashboard')

@section('title', $title )


@section('content')
    <section class="py-4">
        <button 
            data-toggle="modal"
            data-target="#modalNewStudent"
            class="btn btn-primary font-weight-bold mb-2">
            <i class="fas fa-plus"></i>
            Santri Baru
        </button>
        @include('student.create')
        @include('student.list')
    </section>
@endsection
