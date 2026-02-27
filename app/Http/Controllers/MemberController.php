<?php

namespace App\Http\Controllers;
use App\Models\Member; //need to tell the controller to use the Member model 
use App\Models\plan;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index (Request $request)
    {
        $search = $request->input('search');

        $members = Member::when($search, function($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        })->get();
        
        return view('members.index', compact('members')); //shows the index page but sends the $members var to the view so we can display itt
    } 
//compact is a way of passing data from the controller to the view 
    public function create()
    {
        $plans = Plan::all(); //stores all the plans in $plans var
        return view('members.create', compact('plans')); 
    }
    public function store(Request $request) //store: this function's job is to save data to the db/ Request $request -> this is the data coming from the form 
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer', //age should be a number and it's required
            'phone' => 'required',
            'membership_type' => 'required',
            'plan_id' => 'required',
        ]);
        Member::create($request->all()); //uses the member model to create a new record in the db | grabs all data from the form and saves it
        return redirect('/')->with('success', 'Member added successfully! '); // after saving the data user will get back to home page!
    }
    public function edit($id)
    {
        $member = Member::find($id);
        return view('members.edit', compact('member'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'phone' => 'required',
            'membership_type' => 'required',
        ]);
        $member = Member::find($id);
        $member->update($request->all());
        return redirect('/')->with('success', 'Member updated successfully!'); //home page
    }
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect('/')->with('success', 'Member deleted successfully! '); 
    }
    
}
