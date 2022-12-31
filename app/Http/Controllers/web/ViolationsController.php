<?php

namespace App\Http\Controllers\web;

use App\Models\Car;
use App\Models\Violation;
use Illuminate\Http\Request;
use App\Models\Violation_Type;
use App\Http\Controllers\Controller;
use App\Http\Requests\ViolationRequest;

class ViolationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $violations = Violation::all();
        return view('violations.manage_violations', ['violations' => $violations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $violation_types = Violation_Type::all()->pluck('type');
        return view('violations.add_violation', ['violation_types' => $violation_types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ViolationRequest $request)
    {

        $price = Violation_Type::where('type', $request->input('type'))->value('price');
        $user_id = Car::where('Car_Number', $request->input('Car_Number'))->value('User_id');
        $request->merge(['price' => $price, 'User_id' => $user_id]);
        Violation::create($request->post());
        return redirect()->route('violations.index')->with('success', 'Company has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Violation $violation)
    {
        $violation_types = Violation_Type::all()->pluck('type');
        return view('violations.edit_violation', ['violation' => $violation, 'violation_types' => $violation_types]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ViolationRequest $request, Violation $violation)
    {
        $price = Violation_Type::where('type', $request->input('type'))->value('price');
        $user_id = Car::where('Car_Number', $request->input('Car_Number'))->value('User_id');
        $request->merge(['price' => $price, 'User_id' => $user_id]);
        $violation->fill($request->post())->save();
        return redirect()->route('violations.index')->with('success', 'Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Violation $violation)
    {
        $violation->delete();

        return redirect()->route('violations.index')
            ->with('success', 'Product deleted successfully');
    }
}
