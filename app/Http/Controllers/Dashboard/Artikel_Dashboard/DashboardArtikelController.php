<?php

namespace App\Http\Controllers\Dashboard\Artikel_Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;
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
        $pageTitle = 'Artikel';
        return view('dashboard.artikel.create', compact("pageTitle"));
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
                'judul' => ['required', 'max:255', 'unique:artikels,judul'],
                'content' => ['required']
            ],
            [
                'judul.required' => 'Judul Artikel Wajib Di-isi',
                'judul.max' => 'Pengisian Karakter Judul Terlalu Banyak',
                'judul.unique' => 'Judul Artikel Itu Sudah Ada',
                'content.required' => "Konten Harus Tersedia"
            ]
        );

        $dom = new \DomDocument();
        $dom->loadHtml($request->content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');

        $tumblr = "";

        $artikel = new Artikel;
        $artikel->user_id = Auth::user()->id;
        $artikel->judul = $request->judul;
        $artikel->slug = Str::of($request->judul)->slug('-');
        $artikel->save();

        foreach ($imageFile as $item => $image) {

            if ($item == 0) {
                $tumblr = "";
            }

            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            $imgeData = base64_decode($data);

            $id = $artikel->id;
            $directory = "/upload/{$id}";
            $image_name = "{$directory}/" . time() . $item . '.png';

            $path = public_path($directory); // Set the directory path

            if ($item == 0) {
                $tumblr = $image_name;
            }

            // Check if directory exists, if not, create it
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0755, true, true);
            }

            $imagePath = public_path($image_name);
            file_put_contents($imagePath, $imgeData);

            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }

        $artikel->content = $dom->saveHTML();
        $artikel->tumblr = $tumblr;
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
        $pageTitle = 'Artikel';
        $artikel = Artikel::where('slug', $judul)->first();
        return view('dashboard.artikel.edit', compact('artikel', 'pageTitle'));
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
                'judul' => ['required', 'max:255', 'unique:artikels,id'],
                'content' => ['required']
            ],
            [
                'judul.max' => 'Pengisian Karakter Judul Terlalu Banyak',
                'judul.unique' => 'Judul Artikel Itu Sudah Ada',
                'content.required' => "Konten Harus Tersedia"
            ]
        );

        $dom = new \DomDocument();
        $dom->loadHtml($request->content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $id = $artikel->id;
        $imageFile = $dom->getElementsByTagName('img');
        $directory = "/upload/{$id}";
        $path = public_path($directory); // Set the directory path

        foreach ($imageFile as $item => $image) {

            $data = $image->getAttribute('src');
            if (count(explode(';', $data)) > 1 && count(explode(',', $data))) {

                list($type, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);
                $imgeData = base64_decode($data);

                $image_name = "{$directory}/" . time() . $item . '.png';

                if ($item == 0) {
                    $tumblr = $image_name;
                }

                // Check if directory exists, if not, create it
                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0755, true, true);
                }

                $imagePath = public_path($image_name);
                file_put_contents($imagePath, $imgeData);

                $image->removeAttribute('src');
                $image->setAttribute('src', $image_name);
                $artikel->tumblr = $tumblr;
            }
        }

        $artikel->user_id = Auth::user()->id;
        $artikel->judul = $request->judul;
        $artikel->slug = Str::of($request->judul)->slug('-');
        $artikel->content = $request->content;
        $artikel->save();

        return redirect()->route('artikel.index')->with('success', 'Artikel updated successfully');
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
        $directory = "/upload/{$artikel->id}";
        $path = public_path($directory); // Set the directory path
        File::cleanDirectory($path);
        $artikel->delete();
        return redirect()->route('artikel.index')->with('success', 'Artikel ini berhasil dihapus');
    }
}
