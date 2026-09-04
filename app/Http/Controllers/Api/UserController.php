<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request){
        $user = auth('sanctum')->user();

        if($user){
            return response()->json([
                'authenticated' => true,
                'user' => $user
            ], 200);
        }

        return response()->json([
            'authenticated' => false,
            'user' => null
        ], 200);
    }
}
