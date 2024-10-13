<?php

namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;


class UserController extends Controller
{
    
    public function ShowAdminName(){

        return ' Yasser Shwilah';
    }
    public function showUserDetails($id)
{
    $user = User::find($id);

    if ($user) {
        return response()->json([
            'name' => $user->name,
            'email' => $user->email,
            'created_at' => $user->created_at
        ]);
    } else {
        return response()->json(['error' => 'User not found'], 404);
    }
}
public function updateUserDetails(Request $request, $id)
{
    $user = User::find($id);

    if ($user) {
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return response()->json(['message' => 'User updated successfully']);
    } else {
        return response()->json(['error' => 'User not found'], 404);
    }
}
public function deleteUser($id)
{
    $user = User::find($id);

    if ($user) {
        $user->delete();
        return response()->json(['message' => 'User deleted successfully']);
    } else {
        return response()->json(['error' => 'User not found'], 404);
    }
}

public function getindex(){

    $data=[];
    $data['id'] = 5;
    $data['name'] = 'yasser shwilah';
    return view('user', $data);

}



}
