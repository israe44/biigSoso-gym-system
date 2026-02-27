<?php

namespace App\Http\Controllers;
use App\Models\Plan;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index (Request $request)
    {
    $plans = Plan::when($request->search, function($query) use ($request) {
        $query->where('name', 'like', '%' . $request->search . '%');
    })->get();

    return view('plans.index', compact('plans'));
    }
    public function create() {
       
        return view('plans.create');
    }
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        Plan::create($request->all());
        return redirect('/plans')->with('success', 'Plan added successfully! ');
    }
    public function edit($id) {
        $plan = Plan::find($id);
        return view('plans.edit', compact('plan'));
    }
    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);
        $plan = Plan::find($id);
        $plan->update($request->all());
        return redirect('/plans')->with('success', 'Plan updated successfully!');
    }
    public function destroy($id) {
        $plan = Plan::find($id);
        $plan->delete();
        return redirect('/plans')->with('success', 'Plan deleted successfully! ');
    }
}
