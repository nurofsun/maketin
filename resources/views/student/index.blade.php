@extends('layouts.dashboard')

@section('title', $title )

@section('action')
    <button 
        data-toggle="modal"
        data-target="#modalNewStudent"
        class="btn btn-sm btn-outline-primary font-weight-bold">
        <i class="fas fa-plus-circle"></i>
        Santri Baru
    </button>
    @include('student.create')
@endsection

@section('content')
    <section class="py-4">
        @include('student.list')
    </section>
@endsection
