<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function replace_null_with_empty_string($array)
    {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $array[$key] = $this->replace_null_with_empty_string($value);
            } else {
                if (is_null($value)) {
                    $array[$key] = "";
                }
            }
        }
        return $array;
    }
    
    public function register(Request $request){
        $data=request()->validate([
            'name'=>'required|string',
            'email'=>'required|string',
            'password'=>'required|string',
            'phone_number'=>'nullable|string',
            'address'=>'nullable|string'
        ]);
        $hashedPassword = Hash::make($data['password']);
        $data1=$this->replace_null_with_empty_string([
            'phone_number'=>$data['phone_number'],
            'address'=>$data['address']
        ]);

        $created=User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>$hashedPassword
        ]);
        $id=$created->id;

        if($created){

            $customer=Customer::create([
                'user_id'=>$id,
                'email'=>$data['email'],
                'name'=>$data['name'],
                'phone_number'=>$data1['phone_number'],
                'address'=>$data1['address']
            ]);
            if($customer){
                // return view('login');
                return "Registered";
            }
        }
        else{
            return "Invalid";
        }
    }

    public function login(Request $request)
    {
        // Validate the login request
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role == "customer") {
                $token = $user->createToken('ApiToken')->accessToken;
                $data = $user;
                $data['token'] = $token;
                // return $data; 
                return view('userlayout.app',['data'=>$data]);       
            } 
            else 
            {
                $token = $user->createToken('ApiToken')->accessToken;
                $data = $user;
                $data['token'] = $token;
                // return $data;       
                return view('admin.products'); 
            }
        }
        // Authentication failed, return error response
        return response()->json(['error' => 'Unauthenticated'], 401);
    }

    public function logout(Request $request)
    {
        // Get the authenticated user's access token
        if(Auth::guard('api')->user()){
            $accesstoken=Auth::guard('api')->user()->token();

            \DB::table('oauth_refresh_tokens')
                ->where('access_token_id',$accesstoken->id)
                ->update(['revoked'=>true]);
            $accesstoken->revoke();

            return response(['data'=>'Unauthorized','message'=>"User logout successfully"]);
        }

    }


}
