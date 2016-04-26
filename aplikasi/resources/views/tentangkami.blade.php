@extends('app_template')

@section('title')
 Tentang Kami
@stop

@section('page_title')
<h1>Tentang Kami
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
\
		<div class="container center991">
          <div class="row offs3">
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="thumbnail thumb-shadow">
                <div class="caption bg3 capt_hover1">
            
              <img src="Test.png">
			 
				
				         </div>  
                </div>
              </div>              
            </div>


    </div>
	</div>
@stop