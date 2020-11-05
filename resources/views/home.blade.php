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
        <div id="payment-chart-weekly">
            <!-- d3 goes here -->
        </div>
    </section>
@endsection

@push('d3')
    <script src="{{ asset('d3/d3.min.js') }}" type="text/javascript"></script>
@endpush

@push('scripts')
    <script src="{{ @asset('js/home.js') }}"></script>
@endpush
