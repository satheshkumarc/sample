<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.show', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datas = $this->custom_validate($request);
        Student::create($datas);
        return redirect('students')->with('message', 'Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($student)
    {
        $students = Student::find($student);
        return view('students.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $student)
    {
        $datas = $this->custom_validate($request);
        Student::find($student)->update($datas);
        $students = Student::all();
        return redirect('students')->with( ['students' => $students,
                                            'message' => 'Updated Successfully'
                                            ] );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($student)
    {
        Student::find($student)->delete();
        return redirect('students')->with('message', 'Deleted Successfully');
    }
    public function custom_validate($request)
    {
        return $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required',
           ]);
    }
}
