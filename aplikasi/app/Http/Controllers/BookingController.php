<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Booking;

use Session;

use Auth;

class BookingController extends Controller
{
    //
    public function getSchedule() {
    	$booking = Booking::whereRaw('tanggal BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 7 DAY)')->get();
    	return view('booking.schedule',compact('booking'));
    }

    public function getDetailedSchedule() {
    	$booking = Booking::whereRaw('tanggal BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 7 DAY)')->get();
    	return view('belum ada front end',compact('booking'));
    }

    public function store(Request $request) {
        $booking = new Booking;
        $booking->tanggal = $request->input('tanggal');
        $booking->waktu = $request->input('waktu');
        $booking->id_pelanggan = $request->input('id_pelanggan');
        $booking->keluhan = $request->input('keluhan');
        $booking->plat_motor = $request->input('plat_motor');
        $booking->save();
        Session::flash('message', 'Booking berhasil ditambahkan');
    	return \Redirect::to('booking/schedule');
    }

    public function delete($id) {
        $booking = Booking::find($id);
        $booking->delete();
        Session::flash('message', 'data booking berhasil dihapus');
        return \Redirect::to('booking/schedule');
    }

    public function edit() {
        $pend = Auth::user()->nama;
        return view('booking.form', compact('pend'));
    }

    public function update(Request $request, $id) {

        $booking = Booking::find($id);
        
        $booking->tanggal = $request->input('tanggal');
        $booking->waktu = $request->input('waktu');
        $booking->id_pelanggan = $request->input('id_pelanggan');
        $booking->keluhan = $request->input('keluhan');
        $booking->plat_motor = $request->input('plat_motor');
        $booking->save();
        Session::flash('message', 'Booking berhasil diperbaharui');

        return \Redirect::to('booking/schedule');
    }

    public function get($id) {
    	$booking = Booking::where('id_booking',$id)->get();
    	return view('belum ada',compact('booking'));;
    }
}
