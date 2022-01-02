<?php

namespace App\Http\Controllers;

// use Auth;
use Image;
use Response;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthServiceProvider;
use Illuminate\Database\Migrations\Migration;
use App\Http\Requests\UserRequest;
use App\Models\User;



class UserController extends Controller
{
    //
    public function profile()
    {
        return view('profile', array('user' => Auth::user()));
    }

    public function editprofile()
    {
        return view('edit-profile', array('user' => Auth::user()));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = $user->id.'_profile'.time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));
            $user->avatar = $filename;
        }

        if ($request->first_name) {
            $user->first_name = $request->first_name;
        }

        if ($request->last_name) {
            $user->last_name = $request->last_name;
        }

        // if ($request->email) {
        //     $user->email = $request->email;
        // }

        if ($request->phone) {
            $user->phone = $request->phone;
        }

        if ($request->password) {
            $this->validate($request, [
                'password' => 'min:6|confirmed',
            ]);
            $user->password = bcrypt($request->password);
        }

        if ($request->address) {
            $user->address = $request->address;
        }

        if ($request->city) {
            $user->city = $request->city;
        }

        if ($request->country) {
            $user->country = $request->country;
        }

        if ($request->bio) {
            $user->bio = $request->bio;
        }

        // if ($request->hasFile('avatar')) {
        //     $avatar = $request->file('avatar');
        //     $filename = time() . '.' . $avatar->getClientOriginalExtension();
        //     Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));
        // }

        // if ($request->avatar) {
        //     $user->avatar = $request->avatar;
        // }

        $user->save();

        return back()->with('status', 'Updated success!');

        // return view('profile', array('user' => Auth::user()));
    }
}
