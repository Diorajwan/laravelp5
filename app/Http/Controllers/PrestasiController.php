<?php

namespace App\Http\Controllers;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Storage;
class prestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasi = Prestasi::all();
        return view('prestasi.index', compact('prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prestasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prestasi = new Prestasi();
        $prestasi->nama_prestasi = $request->nama_prestasi;
        $prestasi->jenis = $request->jenis;
        $prestasi->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999). $img->getClientOriginalName();
            $img->move('storage/prestasi', $name);
            $prestasi->foto = $name;
        }

        $prestasi->save();
        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('prestasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $prestasi = Prestasi::findOrFail($id);
        return view('prestasi.show', compact('prestasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $prestasi = Prestasi::findOrFail($id);
        return view('prestasi.edit', compact('prestasi'));
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
         $prestasi = Prestasi::findOrFair($id);
         $prestasi->nama_prestasi = $request->nama_prestasi;
         $prestasi->jenis = $request->jenis;
         $prestasi->deskripasi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $prestasi->deleteimage();
            $img = $request->file('foto');
            $name = rand(1000, 9999). $img->getClientOriginalName();
            $img->move('storage/prestasi', $name);
            $prestasi->foto = $name;
        }

        $prestasi->save();
        session()->flash('success', 'Data berhasil diedit');
        return redirect()->route('prestasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->delete();
        return redirect()->route('prestasi.index')->with('success', 'data berhasil dihapus');
    }
}
