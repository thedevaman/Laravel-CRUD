<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{

    public function index()
    {
       return view('form');
    }

    public function addStudent(Request $request)
    {
          $student = new Student;

          $student->studentname = $request->studentname;
          $student->fathername = $request->fathername;
          $student->mothername = $request->mothername;
          $student->dob = $request->dob;
          $student->mobile = $request->mobile;
          if ($request->image) {
            # code...
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $image_path = public_path('/images/');
            $image->move($image_path, $name);

            $student->image = $name;
        }

          $student->save();

          return redirect()->route('viewStudent');

    }

    public function viewStudent()
    {
        $student = Student::get();
        return view('student_record',compact('student'));
    }
    public function editStudent($id)
    {
        $student = Student::find($id);
        return view('edit_student',compact('student'));
    }
    public function updateStudent(Request $request, $id)
    {
        $student = Student::find($id);

        $student->studentname = $request->studentname;
        $student->fathername = $request->fathername;
        $student->mothername = $request->mothername;
        $student->dob = $request->dob;
        $student->mobile = $request->mobile;
        if ($request->image) {
          # code...
          $image = $request->file('image');
          $name = time().'.'.$image->getClientOriginalExtension();
          $image_path = public_path('/images/');
          $image->move($image_path, $name);

          $student->image = $name;
      }

        $student->save();
        return redirect()->route('viewStudent');
    }
    public function deleteStudent($id)
    {
        $student = Student::find($id);

        $path = public_path('images/'.$student->image);

        // if(path is valid){
                // remove path 
        // }
        $student->delete();
        return redirect()->route('viewStudent');
    }
}
