<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        date_default_timezone_set("Asia/Jakarta");
        $b = time();
        $hour = date("G",$b);
        $detail = "";

        if ($hour>=0 && $hour<=11)
        {
            $detail =  "Selamat Pagi";
        }
        elseif ($hour >=12 && $hour<=14)
        {
            $detail =  "Selamat Siang";
        }
        elseif ($hour >=15 && $hour<=17)
        {
            $detail =  "Selamat Sore";
        }
        elseif ($hour >=17 && $hour<=18)
        {
            $detail =  "Selamat Petang";
        }
        elseif ($hour >=19 && $hour<=23)
        {
            $detail =  "Selamat Malam";
        }

        $user = User::all()->where('role', '!=', 'admin')->sortBy('last_login');

        return view('admin.dashboard.index', compact('detail', 'user'));
    }
}
