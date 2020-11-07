<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Payment;

class HomeController extends Controller
{
    public function get_student_list()
    {
        return Student::all();
    }
    public function get_total_student()
    {
        return Student::all()->count(); 
    }

    public function get_payment_today()
    {
        return Payment::all()->where('status', true)
            ->where('created_at', today());
    }

    public function get_total_payment_all()
    {
        return Payment::where('status', true)->sum('amount');
    }

    public function get_total_payment_weekly() {

        return Payment::where('status', true)
            ->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])
            ->sum('amount');
    }

    public function get_total_payment_monthly()
    {
        return Payment::where('status', true)->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('amount');
    }

    public function get_total_payment_by_month($month) {
        return Payment::whereMonth('created_at', $month)
            ->whereYear('created_at', now()->format('Y'))
            ->where('status', true)->sum('amount'); 
    }

    public function get_total_payment_all_month() {
        return [
            [
                'month' => 'Januari',
                'amount' => $this->get_total_payment_by_month(1)
            ],
            [
                'month' => 'Februari',
                'amount' => $this->get_total_payment_by_month(2) 
            ],
            [
                'month' => 'Maret',
                'amount' => $this->get_total_payment_by_month(3)
            ],
            [
                'month' => 'April',
                'amount' => $this->get_total_payment_by_month(4)
            ],
            [
                'month' => 'Mei',
                'amount' => $this->get_total_payment_by_month(5)
            ],
            [
                'month' => 'Juni',
                'amount' => $this->get_total_payment_by_month(6)
            ],
            [
                'month' => 'Juli',
                'amount' => $this->get_total_payment_by_month(7)
            ],
            [
                'month' => 'Agustus',
                'amount' => $this->get_total_payment_by_month(8)
            ],
            [
                'month' => 'September',
                'amount' => $this->get_total_payment_by_month(9)
            ],
            [
                'month' => 'Oktober',
                'amount' => $this->get_total_payment_by_month(10)
            ],
            [
                'month' => 'November',
                'amount' => $this->get_total_payment_by_month(11)
            ],
            [
                'month' => 'Desember',
                'amount' => $this->get_total_payment_by_month(12)
            ],
        ];
    }

    public function index()
    {
        $paymentsTotal = Payment::all()->where('status', true)->sum('amount');


        $data = [
            'title' => 'Dashboard',
            'total_students' => $this->get_total_student(),
            'students' => $this->get_student_list(),
            'payments' => [
                'all' => $this->get_total_payment_all(),
                'monthly' => $this->get_total_payment_monthly(),
                'weekly' => $this->get_total_payment_weekly(),
                'today' => $this->get_payment_today(),
                'all_month' => $this->get_total_payment_all_month()
            ]
        ];
        return view('home', $data);
    }
}
