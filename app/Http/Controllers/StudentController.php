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
    public function delete(Request $request)
    {
        try {

            if (!$request->has("stu_id")) {
                return response()->json([
                    "status" => "failed",
                    "message" => "Something went wrong"
                ]);
            }

            $id = $request->stu_id;
            $student = StudentModel::where("id", $id)->delete();

            if (!$student) {
                return response()->json([
                    "status" => "failed",
                    "message" => "Something went wrong"
                ]);
            }
            return response()->json([
                "status" => "success",
                "message" => "Success"
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function update(Request $request)
    {
        try {

            if (!$request->has("stu_id")) {
                return response()->json([
                    "status" => "failed",
                    "message" => "Something went wrong"
                ]);
            }

            $id = $request->stu_id;
            $studentUpdate = StudentModel::where("id", $id)->update([
                "name" => $request->name,
                "gender" => $request->gender,
                "class" => $request->class,
                "major" => $request->major,
            ]);

            if (!$studentUpdate) {
                return response()->json([
                    "status" => "failed",
                    "message" => "Something went wrong"
                ]);
            }

            $student = StudentModel::where('id', $id)->first();

            if (!$student) {
                return response()->json([
                    "status" => "failed",
                    "message" => "Something went wrong"
                ]);
            }
            $view = view("table", ["student" => $student])->render();
            return response()->json([
                "status" => "success",
                "message" => "Success",
                "view" => $view
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function search(Request $request)
    {
        try {
            if (!$request->has("stu_id")) {
                return response()->json([
                    "status" => "failed",
                    "message" => "Something went wrong"
                ]);
            }

            $id = $request->stu_id;
            $student = StudentModel::where('id', $id)->first();

            if (!$student) {
                return response()->json([
                    "status" => "failed",
                    "message" => "Something went wrong"
                ]);
            }

            $view = view("modal.modal_update", ["student" => $student])->render();

            return response()->json([
                "status" => "success",
                "message" => "Success",
                "view" => $view
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
