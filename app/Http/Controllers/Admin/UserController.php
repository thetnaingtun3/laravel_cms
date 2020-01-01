<?php

namespace App\Http\Controllers\Admin;

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\User;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Fqsen;

class UserController extends Controller
{

    public function index()
    {
        $user = User::all();
        return view('admin.user.index', compact('user'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        return view('admin.user.edit', compact('user'));
    }

    public function create()
    {
        return view('admin.user.add');
    }

    public function update($id)
    {
        $user = User::find($id);
        $this->validate(request(), [
            'name' => 'required|min:1',
            'email' => 'required|min:3',
            'image' => 'required',
            'about' => 'required|min:10',
        ]);
        if (request()->has('password')) {
            ;
            $password = bcrypt(request()->password);
        } else {
            $password = $user->password;
        }
        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $image_name = uniqid() . $image->getClientOriginalName();
            $image->move(public_path('profile'), $image_name);
        } else {
            $image_name = $user->profile->profile_image;
        }
        $user->name = request()->name;
        $user->email = request()->email;
        $user->password = $password;
        if ($user->save()) {
            $profile = Profile::where('user_id', $user->id)->update([
                'about' => request()->about,
                'facebook_link' => request()->facebook_link,
                'youtube_link' => request()->youtube_link,
                'profile_image' => $image_name
            ]);
            if ($profile) {
                return redirect()->back()->with('success', 'User Updated Success');
            }
        }
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:3',
            'email' => 'required|min:3',
            'password' => 'required|min:3'
        ]);
        $user = new User();
        $user->name = request()->name;
        $user->password = bcrypt(request()->password);
        $user->email = request()->email;
        if ($user->save()) {
            $profile = new Profile();
            $profile->user_id = $user->id;
            $profile->about = "About Your Information";
            if ($profile->save()) {
                return redirect('admin/user')->with('success ', 'User Created Success');
            }
        }
    }

    public function editRole($role, $user_id)
    {
        $user = User::where('id', $user_id)->update([
            'is_admin' => $role
        ]);
        if ($user){
        return redirect()->back()->with('success','Permission Updated Successful');

        }
    }

}

