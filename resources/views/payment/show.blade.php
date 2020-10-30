@extends('layouts.dashboard')

@section('title', $title)

@section('content')
    <section class="px-3 py-4">
        <header class="mb-3">
            <h2 class="title h4 font-weight-normal">
                <span class="border-bottom d-inline-block pb-2">{{ $title }}</span>
            </h2>
        </header>
        <div class="bg-white p-2 rounded-lg">
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
                            <th>{{ $loop->iteration }}</th>
                            <td>
                                {{ $item->student->name }}
                            </td>
                            <td>
                                {{ $months[$item->month - 1] }}
                            </td>
                            <td>{{ $item->year }}</td>
                            <td>
                                <span class="amount">{{ $item->amount }}</span>
                            </td>
                            <td>
                                @if ($item->status)
                                    <span class="badge badge-light text-success">
                                        <i class="fas fa-check-circle"></i>
                                        Lunas
                                    </span>
                                @else
                                    <span class="badge badge-danger">
                                        <i class="fas fa-times-circle"></i>
                                        Belum Lunas
                                    </span>
                                @endif
                            </td>
                            <td>
                                {{ $item->created_at->format('d-m-Y') }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/payment.js') }}"></script>
@endpush
