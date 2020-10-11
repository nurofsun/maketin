@extends('layouts.dashboard')

@section('title', $title)

@section('content')
    <table class="table">
        <thead>
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
            @foreach ($payments as $payment)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $payment->amount }}</td>
                    <td>{{ $months[$payment->month - 1] }}</td>
                    <td>{{ $payment->created_at }}</td>
                    <td>NULL</td>
                    <td>NULL</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
