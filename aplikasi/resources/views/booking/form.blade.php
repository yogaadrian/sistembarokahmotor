@extends('app_template')

@section('title')
	Booking
@stop

@section('page_title')
	<h2>Daftar Booking</h2>
@stop

@section('content')
<div class="panel panel-default">
<div class="panel-heading font-bold">Tambahkan Booking</div>
<div class="panel-body">
	<form class="bs-example form-horizontal" method = "POST" action = "{{URL::to('booking/add')}}">
		<div class="form-group">
		  <label class="col-lg-2 control-label">Tanggal</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="tanggal" name="tanggal" required>
		    <span class="help-block m-b-none">Isikan NIP Pegawai</span>
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-lg-2 control-label">Waktu</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="waktu" name="waktu" required>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-lg-2 control-label">ID Pelanggan</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="id pelanggan" name= "id_pelanggan" required>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-lg-2 control-label">Keluhan</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="keluhan " name= "keluhan" required>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-lg-2 control-label">Plat Motor</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="plat motor" name= "plat_motor" required>
		  </div>
		</div>


		<div class="form-group">
		  <div class="col-lg-offset-2 col-lg-8">
		    <button type="submit" class="btn btn-sm btn-info">Kirim</button>
		  </div>
		</div>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>
</div>
</div>
@stop