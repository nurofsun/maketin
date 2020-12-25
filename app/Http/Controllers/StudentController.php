<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();

        return view('student.index', [ 'students' => $students, 'title' => 'Santri' ]);
    }

    public function store(Request $request) {
        $request->validate([
            'id' => 'required',
            'name' => 'required|max:255',
            'gender' => 'required',
            'level' => 'required'
        ]);

        $avatar_path = $request->file('avatar')->store('avatars', 'public');

        Student::create([
            'id' => $request->input('id'),
            'avatar' => $avatar_path,
            'name' => $request->input('name'),
            'gender' => $request->input('gender'),
            'level' => $request->input('level')
        ]);

        return redirect()->back();
    }

    public function update(Request $request, $id) {
        $request->validate([
            'edit_id' => 'required',
            'edit_avatar' => 'required',
            'edit_name' => 'required|max:255',
            'edit_gender' => 'required',
            'edit_level' => 'required'
        ]);

        // get current student with ID
        $student = Student::where('id', $id)->first();

        // get avatar_path of the student
        $avatar_current_student = $student->avatar;

        // exists() for checking that the file is exist
        $avatar_exist = Storage::disk('public')->exists($avatar_current_student);

        // make conditional, if file exist, delete.
        if ($avatar_exist) {
            Storage::disk('public')->delete($avatar_current_student);
        }

        // generate new avatar path from input[type="file" name="edit_avatar"]
        $avatar_path = $request->file('edit_avatar')->storePublicly('avatars', 'public');

        Student::where('id', $id)
            ->update([
                'id' => $request->input('edit_id'),
                'name' => $request->input('edit_name'),
                'avatar' => $avatar_path,
                'gender' => $request->input('edit_gender'),
                'level' => $request->input('edit_level')
            ]);

        return redirect()->back();
    }

    public function destroy($id) {
        $student = Student::where('id', $id)->first();

        if (Storage::disk('public')->exists($student->avatar)) {
            Storage::disk('public')->delete($student->avatar);
            student::destroy($id);
            return redirect()->back();
        }
        else {
            student::destroy($id);
            return redirect()->back();
        }
    }
}
