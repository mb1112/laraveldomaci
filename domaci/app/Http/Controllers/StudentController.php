<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //moji kontroleri
    public function getAllStudents(){
        return Student::all();
    }

    public function addStudent(){
        request() -> validate([
            'Ime' => 'required',
            'Prezime' => 'required',
            'Broj indeksa' => 'required',
        ]);
        return Student::create([
            'Ime' => request('Ime'),
            'Prezime' => request('Prezime'),
            'Broj indeksa' => request('Broj indeksa'),
        ]);
    }

    public function editStudent(Student $student){
        request() -> validate([
            'Ime' => 'required',
            'Prezime' => 'required',
            'Broj indeksa' => 'required',
        ]);

        $success = $student -> update([
            'Ime' => request('Ime'),
            'Prezime' => request('Prezime'),
            'Broj indeksa' => request('Broj indeksa')
        ]);

        return [
            'success' => $success
        ];
    }

    public function deleteStudent(Student $student){
        $success = $student -> delete();

        return [
            'success' => $success
        ];

    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
