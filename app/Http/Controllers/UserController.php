<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function editProfile(){

        $users = Auth::user();
        $roles = Role::find($users->role_id);
        return view('profile', compact('users','roles'));
    }

    public function updateProfile(Request $request){
        $request->validate([
            'first_name' => ['required', 'max:25', 'alpha'],
            'middle_name' => ['nullable','max:25'],
            'last_name' => ['required', 'string', 'max:25'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:8'],
            'display_picture_link' => ['nullable'],
            'gender_id' => ['required'],
        ]);

        $namaFileBaru = date("Y-m-d h-i-s")."." .$request->display_picture_link->getClientOriginalExtension();

        $data['display_picture_link'] = $request->file('display_picture_link')->move(public_path('images'), $namaFileBaru);

        User::find(Auth::user()->id)->update([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->first_name),
            'display_picture_link' => $namaFileBaru,
            'gender_id' => $request->gender_id,
        ]);

        return redirect('/success');
    }

    public function maintenanceProfile (){
        $users = User::with('role')->get();

        return view('accountmaintenance', compact('users'));
    }

    public function updateRoleAccount($id){
        $users = User::find($id);
        $roles = Role::all();

        return view('updaterole', compact('users','roles'));
    }

    public function updateRoleById($id, Request $request){
        $request->validate([
            'id' => ['required'],
        ]);
        
        User::find($id)->update([
            'role_id' => $request->id,
        ]);

        return redirect('accountmaintenance');
    }

    public function deleteRoleById($id){
        User::destroy($id);
        return redirect()->back();
    }
}
