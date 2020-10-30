<div class="bg-white rounded-lg shadow-sm p-3">
    @if (count($payments) != 0)
    <table class="table table-borderless">
        <thead>
            <tr class="align-middle">
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
                @foreach ($payments as $payment)
                    <tr class="align-middle">
                        <th>{{ $loop->iteration }}</th>
                        <td class="amount">{{ $payment->amount }}</td>
                        <td>{{ $months[$payment->month - 1] }}</td>
                        <td>{{ $payment->year }}</td>
                        <td>{{ $payment->created_at->format('d-m-Y') }}</td>
                        <td>
                            @if ($payment->status)
                                <span class="badge badge-light text-success">
                                    <i class="fas fa-check-circle"></i>
                                    Lunas
                                </span>
                            @else
                                <span class="badge badge-light text-danger">
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
                                 <button class="btn btn-sm btn-light-danger" type="submit">
                                     <i class="fas fa-trash"></i>
                                     <span>Hapus</span>
                                 </button>
                                </form>
                                <button data-toggle="modal" data-target="#editPaymentModal-{{ $loop->iteration }}" class="btn btn-sm btn-light-dark">
                                    <i class="fas fa-pencil-alt"></i>
                                    <span>Edit</span>
                                </button>
                                @include('payment.edit')
                            </div>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
    @else
        <p class="mb-0 text-center">Tidak ada riwayat pembayaran.</p>
    @endif
</div>
