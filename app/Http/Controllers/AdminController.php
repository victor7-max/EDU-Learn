<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function viewcreateuser()
   {
    $user =Auth::user();
    if ($user->role == 808) {
        return view('admin.create_user');
       }else {
        return abort(401);
       }

   }

   public function store(Request $requestequest)
   {
       $user = User::create(
        $requestequest->only('name','email','role') + ['password' => bcrypt($requestequest->password)]);
       return view('admin.index');
   }

   public function users()
   {
    $users = User::all();
    return view('admin.all_users', compact('users'));
   }

   public function edit($name, $id)
   {
        $user = User::find($id);
       return view('admin.edit_user',compact('user'));
   }

   public function userupdate(Request $request ,User $user)
    {

        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->description = $request->description;
        $user->save();
    }

}
