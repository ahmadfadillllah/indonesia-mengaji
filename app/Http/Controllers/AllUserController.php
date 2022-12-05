<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class AllUserController extends Controller
{
    //
    public function index()
    {
        $user = User::all()->where('role', '!=', 'admin');

        return view('admin.alluser.index', compact('user'));
    }

    public function change(Request $request)
    {
        dd($request->all());
        try {

            $request->validate([
                'password' => ['required', 'min:8'],
            ]);

            $user = User::find($request->id);
            $user->password = Hash::make($request->password);

            $user->save();

            return redirect()->back()->with('success', 'Password user telah diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', 'Password user gagal diubah');
        }
    }
}
