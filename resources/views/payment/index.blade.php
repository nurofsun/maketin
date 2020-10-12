@extends('layouts.dashboard')

@section('title', $title)

@section('action')
    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#newPaymentModal">
        <i class="fas fa-plus-circle"></i>
        <span class="font-weight-bold">Pembayaran Baru</span>
    </button>
    @include('payment.create')
@endsection

@section('content')
    <section class="py-4">
        <div class="row">
            <div class="col-12 col-md-3">
                <section class="student media bg-white rounded-lg p-3">
                    <span class="icon mr-3 mt-2 text-dark">
                        <i class="fas fa-user fa-2x"></i>
                    </span>
                    <div class="media-body">
                        <p class="mb-0">{{ $student->name }}</p>
                        <div class="d-flex align-items-center mt-2">
                            <div class="item mr-2">
                                <button class="btn btn-primary btn-sm" disabled>
                                    <span class="font-weight-bold">Level</span>
                                    <span class="badge badge-light">{{ $student->level }}</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-12 col-md-9">
                @include('payment.list')
            </div>
        </div>
    </section>
@endsection
