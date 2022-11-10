<?php

namespace App\Http\Controllers\web;

use App\Models\Car;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AutoCompleteController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */
    public function index()
    {
        return view('complete-search');
    }
   
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    { $res = Car::select("Car_Number")
        ->where("Car_Number","LIKE","%{$request->term}%")
        ->get();

return response()->json($res);
    }
}

