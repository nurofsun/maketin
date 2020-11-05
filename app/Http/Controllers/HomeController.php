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
        return Payment::where('status', true)->where('created_at', '>=' , now()->subdays(30))->sum('amount');
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
                'today' => $this->get_payment_today()
            ]
        ];
        return view('home', $data);
    }
}
