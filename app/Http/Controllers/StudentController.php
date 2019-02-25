<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
      $allStudents = Student::orderBy('id', 'desc' )->paginate(10);

      return view('students.index', compact('allStudents'));
    }


    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $formData = $request->all();

      $checkedData = $request->validate([
        'name' => 'required|max:25',
        'lastname' => 'required|max:40',
        'gender' => 'required|max:1',
        'date_of_birth' => 'required',
        'class' => 'required|max:1'
      ]);

      $newStudent = new Student();
      $newStudent->fill($formData);
      $newStudent->save();

      return redirect()->route('students.index');

    }


    public function show(Student $student)
    {
          return (!empty($student)) ? view('students.show', compact('student')) : abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return (!empty($student)) ? view('students.edit', compact('student')) : abort(404);
    }


    public function update(Request $request, Student $student)
    {
      if (empty($student)) { abort(404); }
      $formData = $request->all();

      $checkedData = $request->validate([
        'name' => 'required|max:25',
        'lastname' => 'required|max:40',
        'gender' => 'required|max:1',
        'date_of_birth' => 'required',
        'class' => 'required|max:1'
      ]);

      $student->update($formData);

      return redirect()->route('students.index');
    }


    public function destroy(Student $student)
    {
      $student = Student::find($student->id);

      $student->delete();

      return redirect()->route('students.index');
    }
}
