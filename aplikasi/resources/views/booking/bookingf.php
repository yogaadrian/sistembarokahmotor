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
	Jadwal Booking Minggu Ini
      
    </div>
    <div>
      <table class="table">
        <thead>
          <tr>
            <th data-breakpoints="xs">Waktu</th>
            <th data-breakpoints="xs md">{{{date("d-m-Y", strtotime("+1 day"))}}}</th>
            <th>{{{date("d-m-Y", strtotime("+2 day"))}}}</th>
            <th data-breakpoints="xs sm md">{{{date("d-m-Y", strtotime("+3 day"))}}}</th>
            <th data-breakpoints="xs sm md">{{{date("d-m-Y", strtotime("+4 day"))}}}</th>
            <th data-breakpoints="xs sm md">{{{date("d-m-Y", strtotime("+5 day"))}}}</th>
            <th data-breakpoints="xs sm md">{{{date("d-m-Y", strtotime("+6 day"))}}}</th>
			<th data-breakpoints="xs sm md">{{{date("d-m-Y", strtotime("+7 day"))}}}</th>
          </tr>
        </thead>
        <tbody>
		
		<tr>
			<td> 08.00 </td>
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+1 day")) && $b-> waktu == 8 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 8 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 8 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 8 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 8 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 8 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 8 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			
		</tr>

		<tr>
			<td> 09.00 </td>
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+1 day")) && $b-> waktu == 9 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 9 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 9 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 9 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 9 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 9 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 9 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
		</tr>

		<tr>
			<td> 10.00 </td>
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+1 day")) && $b-> waktu == 10 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 10 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 10 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 10 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 10 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 10 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 10 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
		</tr>

		<tr>
			<td> 11.00 </td>
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+1 day")) && $b-> waktu == 11 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 11 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 11 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 11 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 11 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 11 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 11 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
		</tr>

		<tr>
			<td> 12.00 </td>
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+1 day")) && $b-> waktu == 12 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 12 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 12 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 12 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 12 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 12 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 12 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
		</tr>
		
		<tr>
			<td> 13.00 </td>
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+1 day")) && $b-> waktu == 13 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 13 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 13 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 13 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 13 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 13 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 13 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
		</tr>

		<tr>
			<td> 14.00 </td>
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+1 day")) && $b-> waktu == 14 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 14 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 14 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 14 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 14 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 14 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 14 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
		</tr>

		<tr>
			<td> 15.00 </td>
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+1 day")) && $b-> waktu == 15 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 15 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 15 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 15 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 15 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 15 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 15 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
		</tr>

		<tr>
			<td> 16.00 </td>
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+1 day")) && $b-> waktu == 16 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 16 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 16 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 16 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 16 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 16 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 16 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
		</tr>
		
		<tr>
			<td> 17.00 </td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+1 day")) && $b-> waktu == 17 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 17 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 17 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 17 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 17 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 17 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 17 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
		</tr>
		
		<tr>
			<td> 18.00 </td>
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+1 day")) && $b-> waktu == 18 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 18 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 18 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 18 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 18 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 18 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 18 )
				<div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> waktu?>', '<?php echo $b-> id_pelanggan?>', '<?php echo $b-> keluhan?>', '<?php echo $b-> tanggal?>', '<?php echo $b-> plat_motor?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
			</td>
			@endif
			@endforeach
		</tr>

        </tbody>
      </table>
    </div>
	
<script>
function LihatDetail(waktu,idp,txt,tanggal,plat){
		alert(waktu,idp,txt,tanggal,plat);
}

if(document.getElementById) {
    window.alert = function(waktu,idp,txt,tanggal, plat) {
        createCustomAlert(waktu,idp,txt,tanggal,plat);
    }
}

	var ALERT_BUTTON_TEXT = "Ok";

function createCustomAlert(waktu,idp,txt,tanggal, plat) {
    var ALERT_TITLE = waktu+" "+tanggal;
d = document;
	

    if(d.getElementById("modalContainer")) return;

    mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
    mObj.id = "modalContainer";
    mObj.style.height = d.documentElement.scrollHeight + "px";

    alertObj = mObj.appendChild(d.createElement("div"));
    alertObj.id = "alertBox";
    if(d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
    alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth)/2 + "px";
    alertObj.style.visiblity="visible";

    h1 = alertObj.appendChild(d.createElement("h1"));
    h1.appendChild(d.createTextNode(ALERT_TITLE));

    msg = alertObj.appendChild(d.createElement("p"));
    //msg.appendChild(d.createTextNode(txt));
    msg.innerHTML = txt;
	
	msg2 = alertObj.appendChild(d.createElement("p"));
	msg2.innerHTML = idp+ "				" +plat;
	

	

    btn = alertObj.appendChild(d.createElement("a"));
    btn.id = "closeBtn";
    btn.appendChild(d.createTextNode(ALERT_BUTTON_TEXT));
    btn.href = "#";
    btn.focus();
    btn.onclick = function() { removeCustomAlert();return false; }

    alertObj.style.display = "block";

}

function removeCustomAlert() {
    document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));
}
	</script>

@stop