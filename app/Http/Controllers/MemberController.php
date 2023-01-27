<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Trainer;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(Request $request){
        $members = Member::all();
        return view('index')->with('members', $members);
    }

    public function create(Request $request){
        $member = new Member;
        $member->name = $request->name;
        $member->email = $member->email;
        $member->save();
        return redirect()->route('index')->with('success','new member added');
    }

    public function update(Request $request){
        $member = Member::findOrFail($request->id);
        $member->name = $request->name;
        $member->email = $request->email;
        $member->save();
        return redirect()->route('index')->with('success','edited member info');
    }

    public function delete(Request $request){
        $member = Member::findOrFail($request->id);
        $member->delete();
        return redirect()->route('delete', $member->id)->with('success', 'bye!');
    }
}
