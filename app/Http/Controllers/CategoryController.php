<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\College;
use App\Models\Course;
use App\Models\State;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request){
        if(isset($request->search)){
            

            $s = $_GET['search'];
            // $data_colleges = College::orWhere([['Cat.c_name','like', '%'.$s."%"],['name','like','%'.$s."%"]])->get();
            $data_colleges = Category::with('college')->whereHas('college',function ($query) use ($request){
                $query->where('name','like', "%{$request->search}%");
            })->get(); 
           // print_r($data_colleges);
            return view('search',['data_colleges'=>$data_colleges]);
        }
        else{
        $categories = Category::all();
        //$colleges = Category::->count();
        }
        return view("home",['categories'=>$categories]);
    }
    // public function searchdata(Request $request){
    //     if(isset($request->search)){
    //         $data_colleges = College::join('categories','categories.id','=','colleges.category')->where("category",$request->search)->orWhere('name','like',"%$request->search%")->get();
    //         return view('search',['data_colleges'=>$data_colleges]);
    //     }
    // }

    public function insert(Request $request){
        $data['categories'] = Category::all();
        if($request->isMethod('post')){
            $request->validate([
                "c_name" => "required",
                "img" => "required",
            ]);
            $filename = time() ."." . $request->img->extension();
            $request->img->move(public_path('img'),$filename);

            $re = new Category();
            $re->c_name = $request->input('c_name');
            $re->img = $filename;
            $re->save();
            return redirect()->back();
        }
        return view('category.insert',$data);
    }
    public function colling_course(){
        $data['courses'] = College::find($_GET['colleges']);
        return view('course',$data);
    }
    public function show(){
        $colleges = Category::find($_GET['categories']);
       
        return view('view',['colleges'=>$colleges]);
    }
    public function filter(){
        $colleges = College::where('id',$_GET['states'])->get();
        return view('filter',['colleges'=>$colleges]);
    }
    public function city_filter(){
        $colleges = College::where('id',$_GET['cities'])->get();
        return view('city_filter',['colleges'=>$colleges]);
    }
}
