<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $payments = Payment::find($request->query('student_id'));
        $student = $payments->student;
        $payments = $payments->get();
        $months = [
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        ];
        return view(
            'payment.index',
            [
                'payments' => $payments,
                'student' => $student,
                'months' => $months,
                'title' => 'Riwayat Pembayaran'        
            ]
        );
    }
}
