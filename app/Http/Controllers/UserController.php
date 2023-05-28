<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Users',
            'users' => User::all(),
        ];
        return view('site/users', $data);
    }

    public function approval($id)
    {
        $user = User::find($id);
        if ($user->is_approved) {
            User::where('id', $id)->update(['is_approved' => false]);
            $approval = false;
        } else {
            User::where('id', $id)->update(['is_approved' => true]);
            $approval = true;
        }

        return json_encode($approval);
    }

    public function admin($id)
    {
        $user = User::find($id);
        if ($user->is_admin) {
            User::where('id', $id)->update(['is_admin' => false]);
            $admin = false;
        } else {
            User::where('id', $id)->update(['is_admin' => true]);
            $admin = true;
        }

        return json_encode($admin);
    }
}
