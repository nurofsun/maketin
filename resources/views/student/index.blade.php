@extends('layouts.dashboard')

@section('title', $title )


@section('content')
    <section class="py-4">
        @include('student.list')
    </section>
@endsection
