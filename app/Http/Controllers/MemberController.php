<?php

namespace App\Http\Controllers;
use App\Models\Member; //need to tell the controller to use the Member model 
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index ()
    {
        $members = Member::all(); //go to all members table in the db and get all records and store them in $members var
        return view('members.index', compact('members')); //shows the index page but sends the $members var to the view so we can display itt
    } 
//compact is a way of passing data from the controller to the view 
    public function create()
    {
        return view('members.create');
    }
    public function store(Request $request) //store: this function's job is to save data to the db/ Request $request -> this is the data coming from the form 
    {
        Member::create($request->all()); //uses the member model to create a new record in the db | grabs all data from the form and saves it
        return redirect('/'); // after saving the data user will get back to home page!
    }
    public function edit($id)
    {
        $member = Member::find($id);
        return view('members.edit', compact('member'));
    }
    public function update(Request $request, $id)
    {
        $member = Member::find($id);
        $member->update($request->all());
        return redirect('/'); //home page
    }
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect('/'); 
    }
}
