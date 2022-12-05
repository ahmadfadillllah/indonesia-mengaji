<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    //
    public function index()
    {
        return view('admin.changepassword.index');
    }

    public function update(Request $request)
    {
        $request->validate([
            'password_sekarang' => ['required', 'min:8'],
            'password_baru' => ['required', 'min:8'],
        ],
        [
            'password_sekarang.min' => 'Password sekarang minimal 8 karakter',
            'password_baru.min' => 'Password baru minimal 8 karakter',
        ]);

        if(!Hash::check($request->password_sekarang, auth()->user()->password)){
            return redirect()->route('changepassword.index')->with("info", "Password sekarang salah");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password_baru)
        ]);

        return redirect()->route('changepassword.index')->with("success", "Password telah diubah");
    }

}
