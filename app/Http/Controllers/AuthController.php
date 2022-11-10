<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Admin;
use App\Models\Violation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function Register(RegisterRequest $request){
       
        $user = User::create([
            'name' => $request['name'],
            'password' => bcrypt($request['password']),
            'email' => $request['email'],
           
        ]);

        
        $token=$user->createToken('tokens')->plainTextToken;
        
        
        $response=['user'=>$user
        ,'token'=>$token];

        return response()->json($response);
    }


    public function RegisterAdmin(Request $request){
        $attr = $request->validate([
            'name' => ['required','max:100'],
            'email' => ['required','max:255','unique:users'],
            'password' => ['required','max:255'],
            'car_id'=>['required','max:50','unique:users']
        ]);

        $admin = Admin::create([
            'name' => $attr['name'],
            'password' => bcrypt($attr['password']),
            'email' => $attr['email'],
            'car_id'=>$attr['car_id']
        ]);

        
        $token=$admin->createToken('tokens')->plainTextToken;
        $response=['admin'=>$admin
        ,'token'=>$token];
        return response()->json($response);
    }
    public function Login(Request $request)
    {
        $attr = $request->validate([
            'email' => 'required|string|email|',
            'password' => 'required|string|min:6'
        ]);

        if (!$token=auth()->attempt($attr)) {
            return response()->json(['success'=>false]); 
        }

        return response()->json([
            'success'=>true,
            'token'=>$token,
            'user'=>Auth::user()
        ]);
    }

    public function Logout(Request $request)
    {
        Auth::user()->tokens()->delete();

        return [
            'message' => 'Tokens Revoked'
        ];
    }
    public function allcars()
    {
       return User::select('car_id')->get();
    }

    public function allviolations()
    {
       return Violation::all();
    }

}


