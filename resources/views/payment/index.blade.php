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
        <table class="table mt-3 shadow rounded-lg">
            <thead class="bg-primary text-white">
                <tr>
                    <th>#</th>
                    <th>Nominal</th>
                    <th>Bulan</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @if ($payments)
                    @foreach ($payments as $payment)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $payment->amount }}</td>
                            <td>{{ $months[$payment->month - 1] }}</td>
                            <td>{{ $payment->created_at }}</td>
                            <td>
                                @if ($payment->status)
                                    <span class="badge badge-success">Lunas</span>
                                @else
                                    <span class="badge badge-danger">Belum Lunas</span>
                                @endif
                            </td>
                            <td>
                                <button class="btn btn-sm btn-light">Delete</button>
                                <button data-toggle="modal" data-target="#editPaymentModal-{{ $payment->id }}" class="btn btn-sm btn-light">Edit</button>
                                @include('payment.edit')
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </section>
@endsection
