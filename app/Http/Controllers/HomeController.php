<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use JetBrains\PhpStorm\Immutable;
class HomeController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        if ($user->role == 734) {
            return view('student.index');
        }elseif ($user->role == 407) {
            return view ('teacher.index');
        }elseif ($user->role == 808) {
            return view('admin.index');
        }else {
            abort(404);
        }
    }

    #for editing for users info in profile
    public function showprofile(){
        return view('profile');
    }
    public function updateProfile(Request $request)
    {
        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = $request->name . time() . '.' . $extension;

        $request->file('image')->storeAs('public/profilephoto', $filename);


        Auth::user()->name = $request->name;
        Auth::user()->email = $request->email;
        Auth::user()->phone = $request->phone;
        Auth::user()->image = $request->image = $filename;
        Auth::user()->save();

        return back();
    }
}
