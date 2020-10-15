<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Student;

class PaymentController extends Controller
{
    public function index($id) {

        $student = Student::find($id);

        $payments = Student::find($id)->payments()->orderBy('month', 'asc')->get();

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
                'months' => $months,
                'student' => $student, 
                'payments' => $payments,
                'title' => 'Riwayat Pembayaran'
            ]
        );
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'amount' => 'required',
            'month' => 'required',
            'status' => 'required',
            'created_at' => 'required',
            'year' => 'required'
        ]);

        Payment::create([
            'amount' => $request->input('amount'),
            'month' => $request->input('month'),
            'year' => $request->input('year'),
            'created_at' => $request->input('created_at'),
            'status' => $request->input('status'),
            'student_id' => $id
        ]);

        return redirect()->back();
    }

    public function update(Request $request, $student_id, $id)
    {
        $request->validate([
            'edit_amount' => 'required',
            'edit_month' => 'required',
            'edit_year' => 'required',
            'edit_status' => 'required'
        ]);

        Payment::where('id', $id)
            ->where('student_id', $student_id)
            ->update([
                'amount' => $request->input('edit_amount'),
                'month' => $request->input('edit_month'),
                'year' => $request->input('edit_year'),
                'status' => $request->input('edit_status')
            ]);

        return redirect()->back();
    }

    /**
     * delete payment history by its ID, and student id
     */
    public function destroy($student_id, $id)
    {
        Payment::where('id', $id)
            ->where('student_id', $student_id)
            ->delete();
        return redirect()->back();
    }
}
