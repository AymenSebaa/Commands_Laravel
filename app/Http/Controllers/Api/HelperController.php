<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Wilaya;
use App\Models\District;
use App\Models\Daira;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelperController extends Controller {

    public function unique(Request $request){
        if (User::where($request->name, '=', $request->value)->exists()){
            return response()->json([
                'unique' => true,
                'email' => false,
                'message' => $request->name.' already exist'
            ]);
        }
        return response()->json([
            'unique' => true,
            'email' => true,
            'message' => $request->name.' not taken'
        ]);
    }

    public function wilayas(Request $request){
        return response()->json([
            'success' => true,
            'wilayas' => Wilaya::all(),
        ]);
    }

    public function districts(Request $request){
        return response()->json([
            'success' => true,
            'districts' => District::where('wilaya_id', $request->wilaya_id)->get(),
        ]);
    }

    public function dairas(Request $request){
        return response()->json([
            'success' => true,
            'dairas' => Daira::where('wilaya_id', $request->wilaya_id)->get(),
        ]);
    }
}
