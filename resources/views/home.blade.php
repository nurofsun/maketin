@extends('layouts.dashboard')

@section('title', $title)

@section('content')
    <section class="my-4">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <section 
                            class="d-flex bg-primary flex-column justify-content-center align-items-center shadow-sm rounded-lg py-3">
                            <span class="icon text-white d-inline-block">
                                <i class="fas fa-users fa-2x"></i>
                            </span>
                            <div class="description text-center text-white">
                                <p class="mb-0"><small>Santri</small></p>
                                <p class="mb-0 font-weight-bold">{{ $total_students }}</p>
                            </div>
                        </section>
                    </div>

                    <div class="col-12 col-md-9">
                        <section class="shadow-sm bg-white rounded-lg py-3 px-3">
                            <header>
                                <h6 class="h4">Income</h6>
                            </header>
                            <div class="row income-types">
                                <div class="col-12 col-md-4">
                                    <small class="d-block mb-1">Selama ini</small>
                                    <p class="mb-0 h5"><span class="amount">{{ $payments['all'] }}</span> IDR</p>
                                </div>

                                <div class="col-12 col-md-4">
                                    <small class="d-block mb-1">Bulanan</small>
                                    <p class="mb-0 h5"><span class="amount">{{ $payments['monthly'] }}</span> IDR</p>
                                </div>
                                
                                <div class="col-12 col-md-4">
                                    <small class="d-block mb-1">Minggu Lalu</small>
                                    <p class="mb-0 h5"><span class="amount">{{ $payments['weekly'] }}</span> IDR</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <section class="log bg-white rounded-lg p-3">
                    <header class="border-bottom">
                        <h5 class="mb-0">Log Pembayaran</h5>
                        <p class="text-muted font-weight-bold"><small>Hari ini</small></p>
                    </header>
                    <ul class="list-unstyled">
                        <li class="shadow-sm p-3 d-flex align-items-center my-2">
                            <span class="icon badge badge-primary badge-pill mr-3">
                                <i class="fas fa-info fa-sm"></i>
                            </span>
                            <p class="mb-0">
                                <span class="font-weight-bold">Muhammad Fathan</span>
                                melakukan pembayaran.
                            </p>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </section>
@endsection
