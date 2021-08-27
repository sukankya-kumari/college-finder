<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\College;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create(Request $request){
        $colleges = College::join('categories','categories.id','=','colleges.category')->get(['colleges.*','categories.c_name']);
        
        $courses = Course::get();
        if($request->isMethod('post')){
            $request->validate([
                'name' => 'required',
                'fee' => 'required',
                'duration' => 'required',
                'college_id' => 'required',
            ]);
            $req = new Course();
            $req->name = $request->input('name');
            $req->fee = $request->input('fee');
            $req->duration = $request->input('duration');
            $req->college_id = $request->input('college_id');
            $req->save();
            return redirect()->back();

        }
        
        return view("course.course_insert",['colleges'=>$colleges,'courses'=>$courses]);

    }
    public function getdata(){
        return  College::join('categories','categories.id','=','colleges.category')->get(['colleges.*','categories.c_name']);
    }
}
