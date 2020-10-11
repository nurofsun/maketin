<form action="{{ route("payment.store", $student->id) }}" method="POST" id="newPaymentModal" class="modal">
    @csrf
    <div class="modal-dialog">
        <section class="modal-content">
            <header class="modal-header">
                <h5 class="modal-title">Formulir Pembayaran</h5>
            </header>
            <div class="modal-body">
                <div class="mb-2">
                    <label>Nominal</label>
                    <input class="form-control" type="text" name="amount" placeholder="Nominal">
                </div>
                <div class="mb-2">
                    <label>Pilih Bulan</label>
                    <select name="month" class="custom-select">
                        @foreach ($months as $month)
                            <option value="{{ $loop->iteration }}">{{ $month }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label>
                        Lunas
                        <input type="radio" value="true" name="status">
                    </label>
                    <label>
                        Belum Lunas
                        <input type="radio" value="false" name="status">
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </section>
    </div>
</form>

