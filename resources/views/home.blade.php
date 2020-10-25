@extends('layouts.dashboard')

@section('title', $title)

@section('content')
    <section>
        <div class="row">
            <div class="col-12 col-md-8">
                @include('section.income')
            </div>
            <div class="col-12 col-md-4">
                @include('section.log')
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ @asset('js/home.js') }}"></script>
@endpush
