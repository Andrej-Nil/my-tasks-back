<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateUserNameRequest;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function show(Request $request){
        return response()->json([
            'user' => $request->user()
        ]);
    }

    public function updateName(UpdateUserNameRequest $request) {


        $user = $request->user();

        $user->update($request->validated());

        return response()->json($user);
    }
}
