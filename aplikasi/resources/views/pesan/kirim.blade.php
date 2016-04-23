@extends('app_template')

@section('title')
	Kirim pesan
@stop

@section('page_title')
	<h2>Kirim pesan</h2>
@stop

@section('content')
<div class="panel panel-default">
<div class="panel-heading font-bold">Kirim pesan</div>
<div class="panel-body">
	<form class="bs-example form-horizontal" method = "POST" action = "{{URL::to('pesan/add')}}">
		<div class="form-group">
		  <label class="col-lg-2 control-label">Judul</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="judul" name="judul" required>
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-lg-2 control-label">Isi</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="isi" name="isi" required>
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-lg-2 control-label">ID Pelanggan</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="id pelanggan" name= "id_pelanggan" value="{{$pend}}" readonly required>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-lg-2 control-label">Jenis</label>
		  <div class="col-lg-8">
		    <input type="text" class="form-control" placeholder="jenis" name= "jenis" required>
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