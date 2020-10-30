@extends('layouts.dashboard')

@section('title', $title)

@section('content')
    <section class="p-3">
        <table class="table table-light">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Bulan</th>
                    <th>Tahun Ajaran</th>
                    <th>Nominal</th>
                    <th>Status</th>
                    <th>Tanggal Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($history as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            {{ $item->student->name }}
                        </td>
                        <td>
                            {{ $months[$item->month - 1] }}
                        </td>
                        <td>{{ $item->year }}</td>
                        <td class="amount">
                            {{ $item->amount }}
                        </td>
                        <td>
                            {{ $item->status }}
                        </td>
                        <td>
                            {{ $item->created_at->format('d-m-Y') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
