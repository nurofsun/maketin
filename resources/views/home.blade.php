@extends('layouts.dashboard')

@section('title', $title)

@section('content')
    <div class="home my-4">
        <div class="row">
            <div class="col-8">
                <section class="income p-2">
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
                </section>
            </div>
            <div class="col-4">
                <section class="bg-light rounded-lg px-3 py-3">
                    <header>
                        <p class="h5 font-weight-normal mb-0">Log Pembayaran</p>
                        <small>Hari ini</small>
                    </header>
                    <ul class="list-unstyled pt-3">
                        <li class="shadow-sm rounded-lg p-3 bg-white mb-4">
                            <div class="d-flex align-items-center">
                                <img class="mr-2 rounded-pill" width="128" src="{{ asset('images/nurofsun.jpg') }}" alt="Nurofsun">
                                <p class="mb-0 text-muted">
                                    <small>
                                        <strong>nurofsun</strong>
                                        melakukan pembayaran sebesar 10.000 IDR untuk bulan Januari.
                                    </small>
                                </p>
                            </div>
                        </li>

                        <li class="shadow-sm rounded-lg p-3 bg-white mb-4">
                            <div class="d-flex align-items-center">
                                <img class="mr-2 rounded-pill" width="128" src="{{ asset('images/nurofsun.jpg') }}" alt="Nurofsun">
                                <p class="mb-0 text-muted">
                                    <small>
                                    <strong>nurofsun</strong>
                                    melakukan pembayaran sebesar 10.000 IDR untuk bulan Januari.
                                    </small>
                                </p>
                            </div>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
    <script src="{{ @asset('js/home.js') }}"></script>
@endsection
