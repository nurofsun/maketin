@extends('layouts.dashboard')

@section('title', $title)

@section('content')
    <section class="home">
        <div class="row">
            <div class="col-12 col-md-9">
                @include('section.income')
                <section 
                    class="px-3 py-3 mb-3 bg-white shadow-sm rounded-lg">
                    <header class="mb-2">
                        <h4 class="mb-0">Statistic</h4>
                        <p class="m-0 small">
                            Uang masuk tahun ini.
                        </p>
                    </header>
                    <div id="payment-chart"></div>
                </section>
            </div>

            <div class="col-12 col-md-3">
                @include('section.log')
            </div>

        </div>
    </section>
@endsection

@push('d3')
    <script src="{{ asset('d3/d3.min.js') }}" type="text/javascript"></script>
@endpush

@push('scripts')
    <script>
        window.allMonthPaymentHistory = @json($payments['all_month']);
    </script>
    <script src="{{ @asset('js/home.js') }}"></script>
@endpush
