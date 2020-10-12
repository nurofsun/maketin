<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Payment;

class HomeController extends Controller
{
    public function index()
    {
        $studentsTotal = Student::all()->count();
        $paymentsTotal = Payment::all()->where('status', true)->sum('amount');

        $data = [
            'title' => 'Dashboard',
            'total' => [
                'students' => $studentsTotal,
                'payments' => $paymentsTotal
            ]
        ];
        return view('home', $data);
    }
}
