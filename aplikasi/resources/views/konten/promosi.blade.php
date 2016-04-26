@extends('app_template')

@section('title')
  Konten
@stop

@section('page_title')
  <h1>Promosi</h1>
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
    </div>
    <div>

          @foreach($konten as $b)
		  
		<div class="container center991">
          <div class="row offs3">
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="thumbnail thumb-shadow">
                <div class="caption bg3 capt_hover1">
                  <h3>
                    {{$b-> judul}}
                  </h3>
                  <div class="wrap">
                    <p>
              {{$b-> id_konten}}

              
              
              {{$b-> jenis}}
              {{$b-> isi}}
              
			  </p>
              <img src="{{$b-> url_gambar}}">
			  <p> {{$b-> tanggal}} </p>
              
				
				         </div>  
                </div>
              </div>              
            </div>

          @endforeach

    </div>
	</div>
@stop