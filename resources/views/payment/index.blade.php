@extends('layouts.dashboard')

@section('title', $title)

@section('content')
    <section class="p-2">
        <header 
            class="d-flex justify-content-between align-items-center rounded-lg bg-white py-2 px-3">
            <div>
                <h2 class="h5 mb-0">{{ $title }}</h2>
                <p class="text-dark m-0"><small>{{ $student->name }}</small></p>
            </div>
            <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#newPaymentModal">
                <i class="fas fa-plus-circle"></i>
                <span class="font-weight-bold">Pembayaran Baru</span>
            </button>
            @include('payment.create')
        </header>
        @include('payment.list')
    </section>
@endsection
