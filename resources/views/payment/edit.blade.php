<form 
    action="{{ route('payment.update', [ 'id' => $payment->id, 'student_id' => $student->id ]) }}"
    method="POST"
    class="modal edit-payment-modal"
    id="editPaymentModal-{{ $loop->iteration }}"
    >
    @csrf
    @method('PUT')
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Edit Pembayaran
                </h5>
            </div>
            <div class="modal-body">
                <div class="mb-2">
                    <label>Nominal</label>
                    <input 
                    class="form-control edit-amount-input-{{ $loop->iteration }}" 
                    type="text" 
                    placeholder="Nominal" 
                    name="edit_amount" 
                    value={{ $payment->amount }}>
                </div>
                <div class="mb-2">
                    <label>Tahun</label>
                    <input class="form-control" type="number" name="edit_year" value="{{ now()->year }}" min="{{ now()->year - 1 }}" max="9999">
                </div>
                <div class="mb-2">
                    <label>Tanggal Pembayaran</label>
                    <input class="form-control" type="date" name="edit_created_at" value="{{ $payment->created_at->format('Y-m-d') }}">
                </div>
                <div class="mb-2">
                    <label>Pilih Bulan</label>
                    <select class="custom-select" name="edit_month">
                        @foreach ($months as $month)
                            @if ($loop->iteration === $payment->month)
                                <option value="{{ $loop->iteration }}" selected>{{ $month }}</option>
                            @else
                                <option value="{{ $loop->iteration }}">{{ $month }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <div class="form-check">
                        <input 
                            class="form-check-input"
                            type="radio" 
                            value="true" 
                            @if ($payment->status === true) checked @endif 
                            name="edit_status">
                        <label class="form-check-label badge badge-light badge-pill text-success">
                            <i class="fas fa-check-circle"></i>
                            Lunas
                        </label>
                    </div>
                    <div class="form-check">
                        <input 
                            class="form-check-input"
                            type="radio" 
                            value="false" 
                            @if ($payment->status === false) checked @endif
                            name="edit_status">
                        <label class="form-check-label badge badge-light badge-pill text-danger">
                            <i class="fas fa-times"></i>
                            Belum Lunas
                        </label>
                    </div>
                </div>
            </div>
            <footer class="modal-footer">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </footer>
        </div>
    </div>
</form>
