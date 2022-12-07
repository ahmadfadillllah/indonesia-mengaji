<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuranController extends Controller
{
    //
    public function show()
    {
        $api = Http::get('https://equran.id/api/surat');
        $quran = $api->json();
        // dd($quran);

        return view('home.quran.index', compact('quran'));
    }

    public function surah($nomor)
    {
        $api = Http::get('https://equran.id/api/surat/'.$nomor);
        $surah = $api->json();
        // dd($surah);

        return view('home.quran.surah', compact('surah'));

    }
}
