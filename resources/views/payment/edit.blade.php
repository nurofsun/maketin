<form 
    action="{{ route('payment.update', [ 'id' => $payment->id, 'student_id' => $student->id ]) }}"
    method="POST"
    class="modal"
    id="editPaymentModal-{{ $payment->id }}"
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
                    <input class="form-control" type="text" placeholder="Nominal" name="edit_amount" value="{{ $payment->amount }}">
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
                        <label class="form-check-label">Lunas</label>
                    </div>
                    <div class="form-check">
                        <input 
                            class="form-check-input"
                            type="radio" 
                            value="false" 
                            @if ($payment->status === false) checked @endif
                            name="edit_status">
                        <label class="form-check-label">Belum Lunas</label>
                    </div>
                </div>
            </div>
            <footer class="modal-footer">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </footer>
        </div>
    </div>
</form>
