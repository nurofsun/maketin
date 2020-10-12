@extends('layouts.dashboard')

@section('title', $title)

@section('content')
    <div class="p-2">
        <header class="bg-white py-2 px-3 rounded-lg">
            <h5 class="title mb-0">{{ $title }}</h5>
        </header>
        <div class="mt-3">
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="shadow bg-white p-3 rounded">
                    <h6 class="mb-2 font-weight-normal">Santri</h5>
                    <p class="h5">
                        {{ $total['students'] }}
                        <span>Orang</span>
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="shadow bg-white p-3 rounded">
                    <h6 class="mb-2 font-weight-normal">Income</h6>
                    <p class="h5">
                        {{ $total['payments'] }}
                        <span>IDR</span>
                    </p>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
