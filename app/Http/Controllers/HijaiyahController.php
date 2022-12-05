<?php

namespace App\Http\Controllers;

use App\Models\Hijaiyah;
use Illuminate\Http\Request;

class HijaiyahController extends Controller
{
    //
    public function show()
    {
        $hijaiyah = Hijaiyah::all();
        return view('home.hijaiyah', compact('hijaiyah'));
    }

    public function index()
    {
        $hijaiyah = Hijaiyah::all();
        return view('admin.hijaiyah.index', compact('hijaiyah'));
    }

    public function insert(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'sound' => ['required', 'mimes:mp3'],
            'gambar' => ['required', 'mimes:png,jpg,jpeg,heic'],
        ],
        [
            'sound.mimes' => 'Format file harus berupa png, jpg, heic atau jpeg',
            'gambar.mimes' => 'Format file harus berupa png, jpg, heic atau jpeg'
        ]);

        $hijaiyah = new Hijaiyah;
        $hijaiyah->nama = $request->nama;
        $date = date('Ymd His gis');

        if($request->hasFile('sound') or $request->hasFile('gambar')){
            $request->file('sound')->move('admin/themesbrand.com/adhy/html/default/assets/sound/', $date.$request->file('sound')->getClientOriginalName());
            $hijaiyah->sound = $date.$request->file('sound')->getClientOriginalName();

            $request->file('gambar')->move('admin/themesbrand.com/adhy/html/default/assets/gambar/', $date.$request->file('gambar')->getClientOriginalName());
            $hijaiyah->gambar = $date.$request->file('gambar')->getClientOriginalName();

            $hijaiyah->save();

            return redirect()->back()->with('success', 'Huruf telah ditambahkan');
        }

        return redirect()->back()->with('info', 'Huruf gagal ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'sound' => ['required', 'mimes:mp3'],
            'gambar' => ['required', 'mimes:png,jpg,jpeg,heic'],
        ],
        [
            'sound.mimes' => 'Format file harus berupa png, jpg, heic atau jpeg',
            'gambar.mimes' => 'Format file harus berupa png, jpg, heic atau jpeg'
        ]);

        $hijaiyah = Hijaiyah::find($id);
        $hijaiyah->nama = $request->nama;
        $date = date('Ymd His gis');

        if($request->hasFile('sound') or $request->hasFile('gambar')){
            $request->file('sound')->move('admin/themesbrand.com/adhy/html/default/assets/sound/', $date.$request->file('sound')->getClientOriginalName());
            $hijaiyah->sound = $date.$request->file('sound')->getClientOriginalName();

            $request->file('gambar')->move('admin/themesbrand.com/adhy/html/default/assets/gambar/', $date.$request->file('gambar')->getClientOriginalName());
            $hijaiyah->gambar = $date.$request->file('gambar')->getClientOriginalName();

            $hijaiyah->save();

            return redirect()->back()->with('success', 'Huruf telah diupdate');
        }

        return redirect()->back()->with('info', 'Huruf gagal diupdate');
    }

    public function destroy($id)
    {
        try {
            Hijaiyah::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Huruf telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', 'Huruf gagal dihapus');
        }
    }
}
