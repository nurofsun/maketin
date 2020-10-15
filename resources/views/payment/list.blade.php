<table id="payments" class="table table-light">
    <thead>
        <tr>
            <th>#</th>
            <th>Nominal</th>
            <th>Bulan</th>
            <th>Tahun</th>
            <th>Tanggal Pembayaran</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @if ($payments)
            @foreach ($payments as $payment)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td class="amount">{{ $payment->amount }}</td>
                    <td>{{ $months[$payment->month - 1] }}</td>
                    <td>{{ $payment->year }}</td>
                    <td>{{ $payment->created_at }}</td>
                    <td>
                        @if ($payment->status)
                            <span class="badge badge-light">
                                <i class="fas fa-check-circle"></i>
                                Lunas
                            </span>
                        @else
                            <span class="badge badge-danger">
                                <i class="fas fa-times"></i>
                                Belum Lunas
                            </span>
                        @endif
                    </td>
                    <td>
                        <div class="btn-group">
                            <form 
                                class="d-inline-block" 
                                method="POST"
                                action="{{ route('payment.destroy', [ 'student_id' => $student->id , 'id' => $payment->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-light" type="submit">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                            <button data-toggle="modal" data-target="#editPaymentModal-{{ $payment->id }}" class="btn btn-sm btn-light">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            @include('payment.edit')
                        </div>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
