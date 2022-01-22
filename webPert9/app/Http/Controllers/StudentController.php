<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{   
    // == Method untuk menampilkan data dan redirect ke view student.blade.php
    public function index() {
        // membuat variable $student
        $data['student'] = Student::all();
        return view('student', $data);
    }

    // == Method declare&initialize variable $gender $dept
    public function create(){
        $data['gender'] = ["L", "P"];
        $data['dept'] = ["S1 RPL", "S1 TI", "S1 SI"];

        // == redirect ke view studentAdd.blade.php
        return view('studentAdd', $data);
    }

    // == Method menyimpan data ke database
    public function store(){
        $student = new Student;
        $student->nim = request('nim');
        $student->name = request('nama');
        $student->gender = request('gender');
        $student->department = request('dept');
        $student->address = request('addr');
        $student->save();

        return redirect() -> back() -> with('Pesan', "Data Berhasil Tersimpan");
    }

    // == Method menampilkan data user tertentu
    public function edit($id){
        $data['gender'] = ["L", "P"];
        $data['dept'] = ["S1 RPL", "S1 TI", "S1 SI"];
        $data['student'] = Student::find($id);
        //$data['student'] = Student::all();
        //$data['student'] = Student::where('id', $id) -> first();

        return view('studentUpdate', $data);
    }

    // == Method menyimpan data ubahan
    public function update(Request $request, $id){
        $student = Student::find($id);
        $student->nim = request('nim');
        $student->name = request('nama');
        $student->gender = request('gender');
        $student->department = request('dept');
        $student->address = request('addr');
        $student->save();

        return redirect() -> back() -> with('Pesan', "Data Berhasil Terubah");
    }

    // == Method untuk menghapus data user tertentu
    public function delete($id){
        $student = Student::find($id);
        $student->delete();

        return redirect() -> back() -> with('Pesan', "Data Berhasil Dihapus");
    }
}
