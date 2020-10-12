@extends('layouts.dashboard')

@section('title', $title)

@section('action')
    <button class="btn btn-outline-primary">Logout</button>
@endsection

@section('content')
    <section class="my-4">
        <div class="">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="bg-white p-3 rounded-lg d-flex justify-content-center align-items-center">
                        <span class="mr-3 icon">
                            <i class="fas fa-users fa-2x"></i>
                        </span>
                        <div class="description">
                            <h6 class="mb-2 font-weight-light">Santri</h5>
                            <p class="h5">
                                {{ $total['students'] }}
                                <span>Orang</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="bg-white p-3 rounded-lg d-flex align-items-center justify-content-center">
                        <span class="mr-3 icon">
                            <i class="fas fa-dollar-sign fa-2x"></i>
                        </span>
                        <div class="description">
                        <h6 class="mb-2 font-weight-light">Income</h6>
                        <p class="h5">
                            {{ $total['payments'] }}
                            <span>IDR</span>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
