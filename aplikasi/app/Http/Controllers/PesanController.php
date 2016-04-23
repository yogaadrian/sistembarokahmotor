<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Session;

use Auth;

use App\Pesan;

class PesanController extends Controller
{
    //
    public function getAll() {
    	$pesan = Pesan::all();
    	return view('pesan.data',compact('pesan'));
    }

    public function kirimPesan(){
    	$pend = Auth::user()->id;
    	return view('pesan.kirim', compact('pend'));
    }

    public function store(Request $request) {
        $pesan = new Pesan;
        $pesan->judul = $request->input('judul');
        $pesan->isi = $request->input('isi');
        $pesan->id_pelanggan = $request->input('id_pelanggan');
        $pesan->jenis = $request->input('jenis');
        $pesan->save();
        Session::flash('message', 'pesan berhasil ditambahkan');
    	return \Redirect::to('booking/schedule');
    }

    public function tanggapi($id) {
        $pesan = Pesan::find($id);
        return view('pesan.tanggapi', compact('pesan'));
    }

    public function updateTanggapan(Request $request, $id) {

        $pesan = Pesan::find($id);
        
        $pesan->tanggapan = $request->input('tanggapan');
        $pesan->save();

       Session::flash('message', 'pesan berhasil ditanggapi');
    	return \Redirect::to('booking/schedule');
    }

    public function delete($id) {
        $pesan = Pesan::find($id);
        $pesan->delete();
        Session::flash('message', 'pesan berhasil dihapus');
        return \Redirect::to('booking/schedule');
    }
}
