<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function changePassword(Request $request)
    {
        $user = User::find($request->input('id'));
        $user->password = bcrypt($request->input('newPassword'));
        $user->save();
        return response()->json($user);
    }
}
