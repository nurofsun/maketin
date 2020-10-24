<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

        $avatar_path = $request->file('avatar')->storePublicly('public/avatars');

        Student::create([
            'avatar' => $avatar_path,
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
        $student = Student::where('id', $id)->first();
        Storage::delete($student->avatar);

        Student::destroy($id);

        return redirect()->back(); 
    }
}
