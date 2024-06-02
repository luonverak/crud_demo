<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = StudentModel::all();
        return  view("view_page", ["students" => $students]);
    }
    public function post(Request $request)
    {
        try {
            if ($request->save == "save") {
                $student = StudentModel::create($request->all());
                if ($student) {
                    return redirect()->back();
                } else {
                    return redirect()->back();
                }
            } else {
                return 'error';
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function delete($id)
    {
        $student = StudentModel::where('id', $id)->first();
        return view('modal.confirm_popup', ['student' => $student])->render();
    }
}
