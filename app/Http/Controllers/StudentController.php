<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
        return view('student.index', [ 'students' => Student::all(), 'title' => 'Santri' ]);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:255',
            'gender' => 'required',
            'level' => 'required'
        ]);

        Student::create([
            'name' => $request->input('name'),
            'gender' => $request->input('gender'),
            'level' => $request->input('level')
        ]);

        return redirect()->back();
    }

    public function update(Request $request, $id) {
        $request->validate([
            'edit_name' => 'required|max:255',
            'edit_gender' => 'required',
            'edit_level' => 'required'
        ]);


        Student::where('id', $id)
            ->update([ 
                'name' => $request->input('edit_name'),
                'gender' => $request->input('edit_gender'),
                'level' => $request->input('edit_level')
            ]);

        return redirect()->back();
    }

    public function destroy($id) {
        Student::destroy($id);

        return redirect()->back(); 
    }

    /**
     * @method get all payments history of student 
     * by request query student_id
     */
    public function payment_history(Request $request, $id) 
    {
        $student = Student::find($id);
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
            'student.payment', 
            [
                'months' => $months,
                'student' => $student, 
                'title' => 'Riwayat Pembayaran'
            ]
        );
    }
}
