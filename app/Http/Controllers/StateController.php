<?php

namespace App\Http\Controllers;
use App\Models\State;

use Illuminate\Http\Request;

class StateController extends Controller
{
    public function insert(Request $request){
        $data['states'] = State::all();
        if($request->isMethod('post')){
            $request->validate([
                "name" => "required",
            ]);
            $re = new State();
            $re->name = $request->input('name');
            $re->save();
            return redirect()->back();
        }
        return view('state.state_insert',$data);
    }
}
