@extends('layouts.dashboard')

@section('title', $title )

@section('content')
    <section class="container-fluid py-3">
        <div class="row">
            <div class="col-12 col-md-4">
                @include('student.create')
            </div>
            <div class="col">
                @include('student.list')
            </div>
        </div>
    </section>
@endsection
