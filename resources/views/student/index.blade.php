@extends('layouts.dashboard')

@section('title', $title )


@section('content')
    <section class="py-4">
        <button class="btn bg-white mb-2" data-toggle="modal" data-target="#modalNewStudent">
            <span class="mr-2">Tambahkan Santri Baru</span>
            <span class="icon"><i class="fas fa-plus"></i></span>
        </button>
        @include('student.create')
        @include('student.list')
    </section>
@endsection
