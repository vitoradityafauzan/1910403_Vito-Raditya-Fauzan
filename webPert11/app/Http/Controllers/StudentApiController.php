<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentApiController extends Controller
{
    // == Method API untuk menampilkan data dan redirect ke view student.blade.php
     public function index() {
        //== membuat array $student yang diisikan data dri database
        $data['student'] = student::all();

        //== Return/kembali data array
        return response() -> json($data);
    }

    //== Mendapat Data dari route
    public function studentById($id) {

        $data['student'] = student::where('id', $id)->first();

        return response() -> json($data);

    }

    //== Mendapat Data dari route
    public function studentByNim($nim) {

        $data['student'] = student::where('nim', $nim)->first();

        return response() -> json($data);

    }


    //== Mendapat Data dari API
    public function submit(Request $request) {

        $student=Student::create([

            $student->name = $request->nameStu,
            $student->nim = $request->nimStu,
            $student->gender = $request->gender,
            $student->department = $request->dept,
            $student->address = $request->addr,

        ]);

        return response() -> json(['message' => "Data Berhasil DIsimpan"]);

    }


    //== Method mengubah Data dari patokan API
    public function update($id)
    {
        //== Select data berdasarkan WHere
        $student = Student::where('id', $id)->first;
        $student->nim = $request->nimStu;
        $student->name = $request->nameStu;
        $student->gender = $request->gender;
        $student->departement = $request->dept;
        $student->address = $request->addr;
        $student->update();

        return response() -> json(['message' => "Data berhasil diubah"]);
    }


    //== Method menghapus dari patokan API
    public function delete($id)
    {
        // Ambil data dari database berdasarkan id,
        $student = Student::where('id', $id)->first();

        $student->delete();

        return response() -> json(['message' => "Data berhasil dihapus"]);
    }
}
