@extends('app_template')

@section('title')
  Konten
@stop

@section('page_title')
  <h2>Konten</h2>
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
      Kontent
      
    </div>
    <div>
      <table class="table" >
        <thead>
          <tr>
            <th data-breakpoints="xs">ID Konten</th>
            <th data-breakpoints="xs md">Judul</th>
            <th data-breakpoints="xs sm md">Jenis</th>
            <th>Isi</th>
     
            <th data-breakpoints="xs sm md">tanggal</th>
            <th data-breakpoints="xs sm md">Gambar</th>
            <th data-breakpoints="xs"></th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          @foreach($konten as $b)
            <tr data-expanded="true">
              <td>{{$b-> id_konten}}</td>

              <td>{{$b-> judul}}</td>
              
              <td>{{$b-> jenis}}</td>
              <td>{{$b-> isi}}</td>
              <td>{{$b-> tanggal}}</td>
              <td><img src="{{$b-> url_gambar}}"</td>
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