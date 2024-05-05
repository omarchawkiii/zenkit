<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditUserPasswordRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));

    }
    public function edit_password(User $user)
    {
        return view('admin.users.edit_password', compact('user'));

    }
    public function store(StoreUserRequest $request)
    {
       $user = User::create([
            'name' => $request->name ,
            'email' => $request->email ,
            'password' => Hash::make($request->password) ,
            'email_verified_at' =>now() ,
            'role' => $request->role ,
            'iframe_link' => $request->iframe_link ,
        ]);

        return redirect()->route('admin.users')->with('message' ,'User Has Been Created ');
    }

    public function show($id)
    {
        $user = User::with('locations')->find($id);
        return Response()->json(compact('user','locations'));
    }

    public function update(Request $request,User $user)
    {
        $user->update([
            'name' => $request->name ,
            'email' => $request->email ,
            'role' => $request->role ,
            'iframe_link' => $request->iframe_link ,

        ]);
        return redirect()->route('admin.users')->with('message' ,'User Has Been Updated ');
    }


    public function update_password(User $user, EditUserPasswordRequest $request)
    {
        $user->update([
            'password' => $request->password ,
        ]);
        return redirect()->route('admin.users')->with('message' ,'Password Has Been Updated ');
    }


    public function destroy(User $user)
    {
        $user->delete() ;
        return redirect()->route('admin.users')->with('message' ,'User Has Been Deleted ');
    }

    public function get_users(Request $request)
    {
        if( $request->location != null)
        {
            $users = User::whereHas('locations', function($q)use( $request) {
                $q->whereIn('location_id', $request->location);
            })->with('locations')->get();
        }
        else
        {
            $users = User::with('locations')->get() ;
        }
        return Response()->json(compact('users'));
    }
}
