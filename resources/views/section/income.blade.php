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
</section>
