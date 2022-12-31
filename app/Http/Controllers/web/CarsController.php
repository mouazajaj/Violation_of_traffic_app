<?php

namespace App\Http\Controllers\web;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Http\Controllers\Controller;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::paginate(7);
        return view('cars.managecars', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.addcar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarRequest $request)
    {

        $user_id = User::where('National_Number', $request->input('National_Number'))->value('id');
        $request->merge(['User_id' => $user_id]);
        Car::create($request->post());
        return redirect()->route('cars.index')->with('success', 'Company has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $National_Number = User::where('id', $car->user_id)->value('National_Number');
        return view('cars.editcar', ['car' => $car, 'National_Number' => $National_Number]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $car->fill($request->post())->save();
        return redirect()->route('cars.index')->with('success', 'CarHas Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index')
            ->with('success', 'Product deleted successfully');
    }
}
