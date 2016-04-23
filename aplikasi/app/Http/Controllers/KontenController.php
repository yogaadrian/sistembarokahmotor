<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Session;

use Auth;

use App\Konten;

class KontenController extends Controller
{
    //
    public function getAll() {
    	$konten = Konten::all();
    	return view('konten.data',compact('konten'));
    }

    public function create(){
    	return view('konten.create');
    }

    public function store(Request $request) {
        $konten = new Konten;
        $konten->judul = $request->input('judul');
        $konten->isi = $request->input('isi');
        $konten->jenis = $request->input('jenis');
        $konten->tanggal = $request->input('tanggal');
        $konten->url_gambar = $request->input('url_gambar');
        $konten->save();
        Session::flash('message', 'konten berhasil ditambahkan');
    	return \Redirect::to('konten');
    }

    public function edit($id) {
        $konten = Konten::find($id);
        return view('konten.edit', compact('konten'));
    }

    public function update(Request $request, $id) {

        $konten = Konten::find($id);
        //apa yang mau diubah
        $konten->save();

       Session::flash('message', 'konten berhasil diubah');
    	return \Redirect::to('konten');
    }

    public function delete($id) {
        $konten = Konten::find($id);
        $konten->delete();
        Session::flash('message', 'konten berhasil dihapus');
        return \Redirect::to('konten');
    }
}
