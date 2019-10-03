<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\MilitaryUnit;
use Illuminate\Http\Request;

class MilitaryUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.military-units.index', [
            'militaryUnits' => MilitaryUnit::orderBy('title')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.military-units.create', [
            'militaryUnit' => []
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        MilitaryUnit::create($request->all());
        return redirect()->route('admin.military-unit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\MilitaryUnit $militaryUnit
     * @return \Illuminate\Http\Response
     */
    public function show(MilitaryUnit $militaryUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\MilitaryUnit $militaryUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(MilitaryUnit $militaryUnit)
    {
        return view('admin.military-units.edit', [
            'militaryUnit' => $militaryUnit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\MilitaryUnit $militaryUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MilitaryUnit $militaryUnit)
    {
        $militaryUnit->update($request->all());
        return redirect()->route('admin.military-unit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\MilitaryUnit $militaryUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(MilitaryUnit $militaryUnit)
    {
        $militaryUnit->delete();
        return redirect()->route('admin.military-unit.index');
    }
}
