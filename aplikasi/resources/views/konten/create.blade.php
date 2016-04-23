@extends('app_template')

@section('title')
	Buat Konten
@stop

@section('page_title')
	<h2>Buat konten</h2>
@stop

@section('content')
<div class="panel panel-default">
<div class="panel-heading font-bold">Buat Konten</div>
<div class="panel-body">
	<form class="bs-example form-horizontal" method = "POST" action = "{{URL::to('konten/add')}}">
		<div class="form-group">
		  <label class="col-lg-2 control-label">Judul</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="judul" name="judul" required>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-lg-2 control-label">Jenis</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="jenis" name= "jenis" required>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-lg-2 control-label">Isi</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="isi" name="isi" required>
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-lg-2 control-label">Tanggal</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="tanggal" name= "tanggal"  required>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-lg-2 control-label">Nama Gambar</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="nama gambar" name= "url_gambar"  required>
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