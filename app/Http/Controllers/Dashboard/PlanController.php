<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Plan\PlanRequest;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::get(['id', 'name', 'price']);
        return view('dashboard.plan.index', compact('plans'));
    }

    public function create()
    {
        return view('dashboard.plan.create');
    }

    public function store(PlanRequest $request)
    {
        Plan::create($request->validated());
        return redirect()->back()->with('success', 'Plan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plan $plan)
    {
        return view('dashboard.plan.show', compact('plan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plan $plan)
    {
        return view('dashboard.plan.edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlanRequest $request, Plan $plan)
    {
        $plan->update($request->validated());
        return redirect()->back()->with('success', 'Plan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plan $plan)
    {
        $plan->delete();
        return redirect()->back()->with('success', 'Plan deleted successfully.');
    }
}

