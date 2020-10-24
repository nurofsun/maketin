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
