<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function display(){
        return view('welcome')->with('members',Member::orderByDesc('created_at')->get());
    }

    public function create(Request $request){
        $member = new Member;
        $member->name = $request->name;
        $member->email = $member->email;
        $member->save();


    }

    public function update(Request $request){
        $member = Member::find($request->id);
        $member->name = $request->name;
        $member->email = $request->email;
        $member->save();
    }

    public function delete(Request $request){
        $member = Member::find($request->id);
        $member->delete();
    }
}
