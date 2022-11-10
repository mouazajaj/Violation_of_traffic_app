<?php

namespace App\Http\Controllers;
use App\Models\Violation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use App\Models\Types;
use Illuminate\Support\Facades\Auth;
class ViolationsController extends Controller
{
    

 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return(Violation::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $attr = $request->validate([
            'type' => ['required','max:100'],
            'location' => ['required','max:255'],
            'user_id' => ['required','max:255'],
            'car_id'=>['required','max:50'],
           
        ]);
        
        $violation = Violation::create([

            'type' => $attr['type'],
            'location' =>$attr['location'],
            'user_id' => $attr['user_id'],
            'car_id'=>$attr['car_id'],
            'price'=>Types::where('type','fast')->value('price'),
            
        ]);
        $response=['violation'=>$violation];
        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return Violation::find($id);
    }

    public function myviolations()
    {
        
        $id=Auth::id();
        return(Violation::all()->where('user_id',$id));
    }
    
  
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $ids
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $violation=Violation::find($id);
        $violation->update($request::all());
        return $violation;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Violation::destroy($id);
    }
    public function search($name)
    {
        
        return Violation::where('name','like','%'.$name.'%')->get();
    }
    public function addtype(Request $request)
    {   
        
        $attr = $request->validate([
            'type' => ['required','unique:types'],
            'price' => ['required']
        ]);
        $type = Types::create([
            'type' => $attr['type'],
            'price' =>$attr['price']
        ]);

        $response=['type',$type];
        return response()->json($response);
        
       
    }
   
}
