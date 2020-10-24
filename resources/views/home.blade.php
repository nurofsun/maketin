@extends('layouts.dashboard')

@section('title', $title)

@section('content')
    <section class="income px-2 py-4">
        <h3 class="title h5 font-weight-normal mb-3">
            <span class="border-bottom">Income</span>
        </h3>
        <div class="row">
            <div class="col-4">
                <div class="bg-gradient-green p-3 rounded-lg text-white">
                    <p class="mb-0">Selama ini</p>
                    <p class="h3 mb-0 font-weight-bold">
                    <span class="amount">{{ $payments['all'] }}</span> IDR
                    </p>
                </div>
            </div>
            <div class="col-4">
                <div class="bg-gradient-red p-3 rounded-lg text-white">
                    <p class="mb-0">Bulan ini</p>
                    <p class="h3 mb-0 font-weight-bold">
                    <span class="amount">{{ $payments['monthly'] }}</span> IDR
                    </p>
                </div>
            </div>
            <div class="col-4">
                <div class="bg-gradient-purple-dark p-3 rounded-lg text-white">
                    <p class="mb-0">Minggu Lalu</p>
                    <p class="h3 mb-0 font-weight-bold">
                    <span class="amount">{{ $payments['weekly'] }}</span> IDR
                    </p>
                </div>
            </div>
        </div>
        <div class="santri py-3">
            <h3 class="title h5 font-weight-normal mb-3">
                <span class="border-bottom">Santri</span>
            </h3>
            @include('student.list')
        </div>
    </section>
@endsection

@section('sidebar')
    <section class="log-pembayaran py-4">
        <h3 class="title h5 font-weight-normal mb-3">
            <span class="border-bottom">Pembayaran Hari Ini</span>
        </h3>
        <ul class="list-unstyled bg-white rounded-lg p-3">
            @if (count($payments['today']) != 0)
                @foreach ($payments['today'] as $item)
                    <li class="shadow-sm rounded-lg d-flex align-items-center">
                        <img class="avatar mr-2" src="{{ Storage::url($item->student->avatar) }}" alt="{{ $item->student->name }}">
                        <p class="mb-0">
                            <span class="font-weight-bold">{{ $item->student->name }}</span> 
                            membayar sebesar <span class="amount">{{ $item->amount }}</span> IDR
                        </p>
                    </li>
                @endforeach
            @else
                <li class="shadow-sm rounded-lg d-flex p-2 mv-3 align-items-center justify-content-center">
                    <span class="d-block text-center">Tidak ada</span>
                </li>
            @endif
        </ul>
    </section>
@endsection

@push('scripts')
    <script src="{{ @asset('js/home.js') }}"></script>
@endpush
