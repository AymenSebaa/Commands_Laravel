<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function alive(Request $request){
        if(JWTAuth::user()){
            return response()->json([
                'success' => true,
                'messgae' => "token not expired yet"
            ]);
        } 
        return response()->json([
            'success' => false,
            'messgae' => "token expired"
        ]);
    }

    public function login(Request $request){
        if (User::where('email', '=', $request->email)->doesntExist()) {
            return response()->json([
                'success' => false,
                'email' => true,
                'message' => 'Email does not exist'
            ]);
         }

        $creds = $request->only(['email', 'password']);
        if(!$token=JWTAuth::attempt($creds)){
            return response()->json([
                'success' => false,
                'password' => true,
                'message' => 'Incorrect password'
            ]);
        } 
        return response()->json([
            'success' => true,
            'token' => $token,
            'user' => JWTAuth::user()
        ]);
    }

    public function register(Request $request){
        if (User::where('email', '=', $request->email)->exists()) {
            return response()->json([
                'success' => false,
                'email' => true,
                'message' => 'Email already taken'
            ]);
        }

        $encryptedPass = Hash::make($request->password);
        try{
            $address = new Address;
            
            $address->wilaya_id = $request->address['wilaya'];
            $address->district_id = $request->address['district'];
            $address->daira_id = $request->address['daira'];
            $address->street = $request->address['street'];
            
            $address->save();           

            $user = new User;
            $user->account_id = $request->account;
            $user->email = $request->email;
            $user->password = $encryptedPass;
            $user->firstName = $request->firstName;
            $user->lastName = $request->lastName;
            $user->phone = $request->phone;
            $user->address_id = $address->id;
            $user->save();

            return $this->login($request);
        } catch(Exception $e){
            return response()->json([
                'success' => false,
                'message' => ''.$e
            ]);
        }
    }

    public function saveUserInfo(Request $request){
        $user = User::find(JWTAuth::user()->id);
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $photo = $request->photo;
        
        if($photo != ''){
            if($user->photo != ''){
                Storage::delete('public/profiles/'.$user->photo);
            }
            $photo = time().'.jpg';
            file_put_contents('storage/profiles/'.$photo, base64_decode($request->photo));
            $user->photo = $photo;
        }
        
        $user->update();
        return response()->json([
            'success' => true,
            'message' => 'user info saved',
            'user' => $user,
            'photo' => $request->photo

        ]);
    }

    

    public function logout(Request $request){
        try {
            JWTAuth::invalidate(JWTAuth::parseToken($request->token));
            return response()->json([
                'success' => true,
                'message' => 'logout success'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => ''.$e
            ]);
        }
    } 
}
