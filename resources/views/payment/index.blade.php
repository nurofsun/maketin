@extends('layouts.dashboard')

@section('title', $title)

@section('content')
    <section class="payment py-3">
        @include('payment.create')
        <div class="mt-4">
            <h2 class="title text-muted font-weight-normal h5">
                <span class="border-bottom d-inline-block pb-2">{{ $title }}</span>
            </h2>
            @include('payment.list')
        </div>
    </section>
@endsection

@section('sidebar')
    <div class="py-3">
        <section class="shadow-sm bg-white rounded-lg p-3">
            <header class="d-flex align-items-center">
                <img class="avatar mr-3" src="{{ Storage::url($student->avatar) }}" alt="{{ $student->name }}">
                <div>
                    <p class="mb-1">
                    <span class="name d-block">{{ $student->name }}</span>
                    </p>
                    <p class="d-flex mb-0">
                    <span class="level badge bg-primary">
                        Level {{ $student->level }}
                    </span>
                    </p>
                </div>
            </header>
            <div class="tagihan pt-3">
                <div class="row">
                    <div class="col">
                        <h6 class="text-uppercase text-muted small">Lunas</h6>
                        <p class="mb-0">
                        @if ($payments_completed_length)
                            <span class="small">{{ $payments_completed_length }} Bulan</span>
                        @else
                            <span class="small">Tidak Ada</span>
                        @endif
                        </p>
                    </div>
                    <div class="col">
                        <h6 class="text-uppercase text-muted small">Tunggakan</h6>
                        <p class="mb-0 font-weight-bold">
                        @if ($payments_uncompleted_length)
                            <span class="small text-success">{{ $payments_uncompleted_length }}</span>
                        @else
                            <span class="small text-danger">Tidak Ada</span>
                        @endif
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script src="{{ @asset('js/payment.js') }}"></script>
@endpush
