<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\State;
use App\Models\Category;
use App\Models\College;

use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function create(Request $request){
        $colleges = College::get();
        $cities = City::get();
        $states = State::get();
        $categories = Category::get();
        if($request->isMethod('post')){
            $request->validate([
                'name' => 'required',
                'about_college' => 'required',
                'ranked' => 'required',
                'state_id' => 'required',
                'city_id' => 'required',
                'category' => 'required',
                'image' => 'required',
            ]);
            $filename = time() ."." . $request->image->extension();
            $request->image->move(public_path('image'),$filename);

         
            $req = new College();
            $req->name = $request->input('name');
            $req->about_college = $request->input('about_college');
            $req->ranked = $request->input('ranked');
            $req->city_id = $request->input('city_id');
            $req->category = $request->input('category');
            $req->state_id = $request->input('state_id');
            $req->image = $filename;
            $req->save();
            return redirect()->back();

        }
        
        return view("college.college_insert",['states'=>$states,'cities'=>$cities,'categories'=>$categories,'colleges'=>$colleges]);

    }
}
