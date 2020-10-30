<section class="shadow-sm rounded-lg p-3 bg-white">
    <header>
        <h6 class="text-uppercase">Formulir Pembayaran</h6>
    </header>
    <form action="{{ route("payment.store", $student->id) }}" method="POST" id="newPaymentModal">
        @csrf
        <div class="row mb-2">
            <div class="col">
                <label class="form-label">Nominal</label>
                <input class="form-control amount-input" type="text" name="amount" placeholder="Nominal" value="10000">
            </div>
            <div class="col">
                <label class="form-label">Tanggal Pembayaran</label>
                <input class="form-control" type="date" name="created_at" value="{{ now()->format('Y-m-d') }}">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-3">
                <label class="form-label">Tahun Ajaran</label>
                <input class="form-control" type="number" name="year" step="1" min="{{ now()->year }}" max="2099" value="{{ now()->year }}">
            </div>
            <div class="col-3">
                <label class="form-label">Pilih Bulan</label>
                <select name="month" class="custom-select">
                    @foreach ($months as $month)
                        <option value="{{ $loop->iteration }}">{{ $month }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <p class="form-label font-weight-bold">Status</p>
                <div class="d-flex">
                    <div class="form-check mr-2">
                        <input class="form-check-input" type="radio" value="true" name="status" checked>
                        <label class="form-check-label text-success">
                            <i class="fas fa-check-circle"></i>
                            Lunas
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="false" name="status">
                        <label class="form-check-label">
                            <i class="fas fa-times"></i>
                            Belum Lunas
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Simpan</button>
    </form>
</section>

