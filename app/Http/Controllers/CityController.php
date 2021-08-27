<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function create(Request $request){
        $cities = City::get();
        $states = State::get();
        if($request->isMethod('post')){
            $request->validate([
                'name' => 'required',
                'state_id' => 'required',
            ]);
            $req = new City();
            $req->name = $request->input('name');
            $req->state_id = $request->input('state_id');
            $req->save();
            return redirect()->back();

        }
        
        return view("city.city_insert",['states'=>$states,'cities'=>$cities]);

    }
    
}
