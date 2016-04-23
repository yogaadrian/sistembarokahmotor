@extends('app_template')

@section('title')
  Pesan
@stop

@section('page_title')
  <h2>List Pesan</h2>
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
  </div>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading font-semibold">
      <!-- Tampilkan Pesan -->
      Pesan
      
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">ID Pesan</th>
            <th>ID Pelanggan</th>
            <th data-breakpoints="xs md">Judul</th>
            <th>Isi</th>
            <th data-breakpoints="xs sm md">Jenis</th>
            <th data-breakpoints="xs sm md">Tanggapan</th>
            <th data-breakpoints="xs"></th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          @foreach($pesan as $b)
            <tr data-expanded="true">
              <td>{{$b-> id_pesan}}</td>
              <td>{{$b-> id_pelanggan}}</td>
              <td>{{$b-> judul}}</td>
              <td>{{$b-> isi}}</td>
              <td>{{$b-> jenis}}</td>
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