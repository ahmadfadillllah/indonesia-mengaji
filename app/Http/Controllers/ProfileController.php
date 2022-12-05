<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function index()
    {
        return view('admin.profile.index');
    }

    public function avatar(Request $request)
    {
        $request->validate([
            'avatar' => ['required', 'mimes:png,jpg,jpeg,heic'],
        ],
        [
            'avatar.mimes' => 'Format file harus berupa png, jpg, heic atau jpeg'
        ]);

        $user = User::find(Auth::user()->id);
        $date = date('Ymd His gis');

        if($request->hasFile('avatar')){
            $request->file('avatar')->move('admin/themesbrand.com/adhy/html/default/assets/images/users/', $date.$request->file('avatar')->getClientOriginalName());
            $user->avatar = $date.$request->file('avatar')->getClientOriginalName();
            $user->save();

            return redirect()->back()->with('success', 'Avatar telah diubah');
        }

        return redirect()->back()->with('info', 'Avatar gagal diubah');
    }

    public function info(Request $request)
    {
        try {
            $user = User::find(Auth::user()->id);

            $user->name = $request->name;
            $user->jenis_kelamin = $request->jenis_kelamin;
            $user->alamat = $request->alamat;
            $user->nohp = $request->nohp;
            $user->tanggal_lahir = $request->tanggal_lahir;

            $user->save();

            return redirect()->back()->with('success', 'Info telah diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', 'Info gagal diubah');
        }
    }
}
