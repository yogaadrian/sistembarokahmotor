@extends('app_template')

@section('title')
	Booking
@stop

@section('page_title')
	<h2>tanggapi</h2>
@stop

@section('content')
<div class="panel panel-default">
<div class="panel-heading font-bold">tanggapi pesan</div>
<div class="panel-body">
	<form class="bs-example form-horizontal" method = "POST" action = "{{ URL::to('/')}}/pesan/tanggap/{{$pesan->id_pesan}}">
		<div class="form-group">
		  <label class="col-lg-2 control-label">ID Pesan</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="ID pesan" name="ID Pesan" value="{{$pesan->id_pesan}}" readonly required>
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-lg-2 control-label">ID Pelanggan</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="ID pelanggan" name="ID pelanggan" value="{{$pesan->id_pelanggan}}" readonly required>
		  </div>
		</div>

		<div class="form-group">
		<label class="col-lg-2 control-label">Judul</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="Judul" name= "judul" value="{{$pesan->judul}}" readonly required>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-lg-2 control-label">Isi</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="Isi" name= "isi" value="{{$pesan->isi}}" readonly required>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-lg-2 control-label">Jenis</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="jenis" name= "jenis" value="{{$pesan->jenis}}" readonly required>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-lg-2 control-label">Tanggapan</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="tanggapan" name= "tanggapan" required>
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