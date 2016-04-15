@extends('app_template')

@section('title')
  Booking
@stop

@section('page_title')
  <h2>Jadwal Booking</h2>
@stop

@section('aside')
@stop
  
@section('head_content')
  @if (Session::has('message'))
    <div class="alert alert-info fade in">{{ Session::get('message') }}
      <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
    </div>
  @endif
  <div class="row">
    <div class="col-md-3">
      <button class="btn m-b-sm m-r-sm btn-success" onclick="location.href = '';"><i class="m-r-xs fa fa-plus"></i>Tambahkan Pendidikan</button>
    </div>
    <div class="col-md-6">
      <form action = "" method="GET">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari berdasarkan NIP" name="query" required> 
        <span class="input-group-btn">
          <button class="btn btn-default" type="submit">Go!</button>
        </span>
      </div>
    </form>
    </div>
  </div>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading font-semibold">
      <!-- Tampilkan Pesan -->
      Tabel Pendidikan Informal
      
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">No</th>
            <th>ID Booking</th>
            <th data-breakpoints="xs md">Tanggal</th>
            <th>Waktu</th>
            <th data-breakpoints="xs sm md">ID Pelanggan</th>
            <th data-breakpoints="xs sm md">Keluhan</th>
            <th data-breakpoints="xs sm md">Plat Nomer</th>
            <th data-breakpoints="xs"></th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          @foreach($booking as $b)
            <tr data-expanded="true">
              <td>{{$i}}</td>
              <td>{{$b-> id_booking}}</td>
              <td>{{$b-> tanggal}}</td>
              <td>{{$b-> waktu}}</td>
              <td>{{$b-> id_pelanggan}}</td>
              <td>{{$b-> keluhan}}</td>
              <td>{{$b-> plat_motor}}</td>
              <td>
                <div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="">Edit</a></li>
                    <li class="divider"></li>
                    <li><a href="">Hapus</a></li>
                  </ul>
                </div>
              </td>
            </tr>  
            <?php $i++ ;?>
          @endforeach
        </tbody>
      </table>
    </div>
@stop