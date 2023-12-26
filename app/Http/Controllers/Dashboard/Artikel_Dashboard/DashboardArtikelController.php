<?php

namespace App\Http\Controllers\Dashboard\Artikel_Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class DashboardArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();
        $pageTitle = 'Artikel';

        return view('dashboard.artikel.index', compact('artikel', 'pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'nama'  => ['required', 'max:255'],
                'judul' => ['required', 'max:255', 'unique:artikels,judul'],
                'thumbnail_artikel' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:5000'],
            ],
            [
                'nama.required' => 'Penulis Artikel Wajib Di-isi',
                'nama.max' => 'Pengisian Karakter Nama Terlalu Banyak',

                'judul.required' => 'Judul Artikel Wajib Di-isi',
                'judul.max' => 'Pengisian Karakter Judul Terlalu Banyak',
                'judul.unique' => 'Judul Artikel Itu Sudah Ada',

                'thumbnail_artikel.required' => 'Thumbnail Artikel Wajib Di-isi',
                'thumbnail_artikel.image' => 'Harus Berupa Gambar',
                'thumbnail_artikel.mimes' => 'Jenis File Yang Boleh JPG,JPEG,PNG',
                'thumbnail_artikel.max' => 'Ukuran Gambar Terlalu Besar'
            ]
        );

        // Upload Thumbnail
        $thumbnail = $request->file('thumbnail_artikel');
        $thumbnail->storeAs('public/thumbnail_artikel', $thumbnail->hashName());

        $artikel = new Artikel;
        $artikel->user_id = Auth::user()->id;
        $artikel->name = $request->nama;
        $artikel->judul = $request->judul;
        $artikel->slug = Str::of($request->judul)->slug('-');
        $artikel->thumbnail = $thumbnail->hashName();
        $artikel->content = $request->content;
        $artikel->save();

        return redirect()->route('artikel.index')->with('success', 'Artikel Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($judul)
    {
        $artikel = Artikel::where('slug', $judul)->first();
        return view('dashboard.artikel.show', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($judul)
    {
        $artikel = Artikel::where('slug', $judul)->first();
        return view('dashboard.artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artikel = Artikel::find($id);
        $this->validate(
            $request,
            [
                'nama'  => ['required', 'max:255'],
                'judul' => ['required', 'max:255', 'unique:artikels,judul,' . $artikel->id],
                'thumbnail_artikel' => ['image', 'mimes:jpg,jpeg,png', 'max:5000'],
            ],
            [
                'nama.required' => 'Penulis Artikel Wajib Di-isi',
                'nama.max' => 'Pengisian Karakter Terlalu Banyak',

                'judul.max' => 'Pengisian Karakter Judul Terlalu Banyak',
                'judul.unique' => 'Judul Artikel Itu Sudah Ada',

                'thumbnail_artikel.image' => 'Harus Berupa Gambar',
                'thumbnail_artikel.mimes' => 'Jenis File Yang Boleh JPG,JPEG,PNG',
                'thumbnail_artikel.max' => 'Ukuran Gambar Terlalu Besar'
            ]
        );

        if ($request->file('thumbnail_artikel')) {
            // Upload New Thumbnail

            $thumbnail = $request->file('thumbnail_artikel');
            $thumbnail->storeAs('public/thumbnail_artikel', $thumbnail->hashName());

            // Delete Old Thumbnail
            Storage::delete('public/thumbnail_artikel/' . $artikel->thumbnail);

            $artikel->user_id = Auth::user()->id;
            $artikel->name = $request->nama;
            $artikel->judul = $request->judul;
            $artikel->slug = Str::of($request->judul)->slug('-');
            $artikel->thumbnail = $thumbnail->hashName();
            $artikel->content = $request->content;
            $artikel->save();
        } else {
            $artikel->user_id = Auth::user()->id;
            $artikel->name = $request->nama;
            $artikel->judul = $request->judul;
            $artikel->slug = Str::of($request->judul)->slug('-');
            $artikel->content = $request->content;
            $artikel->save();
        }

        return redirect()->route('artikel.index')
            ->with('success', 'Artikel updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        Storage::delete('public/thumbnail_artikel/' . $artikel->thumbnail);
        $artikel->delete();
        return redirect()->route('artikel.index')->with('success', 'Artikel ini berhasil dihapus');
    }
}
