<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.index');
    }

    public function contact()
    {
        return view('home.kontak');
    }

    public function contactpost(Request $request)
    {

        // dd($request->all());
        try {
            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'nohp' => $request->nohp,
                'message' => $request->message,
            ]);

            return redirect()->back()->with('success', 'Pesan telah terkirim');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', 'Pesan gagal terkirim');
        }
    }
}
