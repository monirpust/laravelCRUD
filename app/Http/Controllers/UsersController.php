<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function showUsers(Request $request)
    {
        $users = DB::table('user')->get();
        // dd($users);

        return view('user', compact('users'));
    }

    public function addUser()
    {
        return view('addUser');
    }

    public function addUserSubmit(Request $request)
    {
        DB::table('user')->insert([
            'name' => $request->name,
            'roll' => $request->roll,
            'email' => $request->email
        ]);

        return back()->with('user_added', 'User has been added successfully!');
    }

    public function getUserById($id)
    {
        $user = DB::table('user')->where('id', $id)->first();
        return view('singleUser', compact('user'));
    }

    public function deleteUser($id)
    {
        DB::table('user')->where('id', $id)->delete();
        return back()->with('user_removed', 'User has been removed successfully!');
    }

    public function editUser($id)
    {
        $user = DB::table('user')->where('id', $id)->first();
        return view('editUser', compact('user'));
    }

    public function updateUser(Request $request)
    {
        DB::table('user')->where('id', $request->id)->update([
            'name' => $request->name,
            'roll' => $request->roll,
            'email' => $request ->email
        ]);
        return redirect()->route('view.users')->with('update_user', "Updated Successfully");
    }
}
