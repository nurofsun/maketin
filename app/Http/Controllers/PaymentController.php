<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Student;

class PaymentController extends Controller
{

    public $months = [
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

    /**
     * Get List Payment History By Student ID
     */
    public function index($id) {

        $student = Student::find($id);

        $payments = Student::find($id)->payments()->orderBy('month', 'asc')->get();

        $payments_completed_length = Student::find($id)->payments()->where('status', true)->count();

        $payments_uncompleted_length = Student::find($id)->payments()->where('status', false)->count();


        return view(
            'payment.index', 
            [
                'months' => $this->months,
                'student' => $student, 
                'payments' => $payments,
                'payments_completed_length' => $payments_completed_length,
                'payments_uncompleted_length' => $payments_uncompleted_length,
                'title' => 'Riwayat Pembayaran'
            ]
        );
    }

    /**
     * Get payment history with period of time.
     * @param $type
     */
    public function history($type = null) {

        $result = null;

        if ($type !== null) {
            switch($type) {
                case 'monthly': 
                    $result = Payment::where('status', true)
                        ->whereMonth('created_at', date('m'))
                        ->whereYear('created_at', date('Y'))->get();
                    break;
                case 'daily':
                    $result = Payment::where('status', true)
                        ->whereDate('created_at', today())->get();
                    break;
                case 'weekly':
                    $result = Payment::where('status', true)
                        ->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->get();
                    break;
                default:
                    $result = Payment::where('status', true)->get();
            }

            return $result;
        } else {
           return null; 
        }
    }

    /**
     * Show List Payments History Specified by Time
     * @param $request->query('type')
     */
    public function show(Request $request) {

        $type_record = $request->query('type');

        if ($type_record !== null)
        {
            switch($type_record) {
                case 'monthly': 
                    $title = 'Riwayat Pembayaran Bulan Ini';
                    $history = $this->history('monthly');
                    break;
                case 'daily':
                    $title = 'Riwayat Pembarayan Harian';
                    $history = $this->history('daily');
                    break;
                case 'weekly':
                    $title = 'Riwayat Pembayaran Minggu Ini';
                    $history = $this->history('weekly');
                    break;
                default:
                    $title = 'History Pembayaran';
                    $history = $this->history('all');
            } 
            return view('payment.show', [ 'title' => $title, 'history' => $history, 'months' => $this->months ]);
        }
        return view('payment.show', [ 'title' => 'Error', 'errors' => 'Cannot show payment history' ]);
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
            'edit_status' => 'required',
            'edit_created_at' => 'required'
        ]);

        Payment::where('id', $id)
            ->where('student_id', $student_id)
            ->update([
                'amount' => $request->input('edit_amount'),
                'month' => $request->input('edit_month'),
                'year' => $request->input('edit_year'),
                'status' => $request->input('edit_status'),
                'created_at' => $request->input('edit_created_at'),
                'updated_at' => now()
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
