@extends('layouts.dashboard')

@section('title', $title )


@section('content')
    <section class="py-4">
        <div class="row">
            <div class="col-12 col-md-3">
                @include('student.create')
            </div>
            <div class="col-12 col-md-9">
                @include('student.list')
            </div>
        </div>
    </section>
@endsection
