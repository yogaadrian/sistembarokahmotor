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
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        }}'>
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

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 8 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 8 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 8 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 8 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 8 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 8 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			
		</tr>

		<tr>
			<td> 09.00 </td>
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+1 day")) && $b-> waktu == 9 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 9 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 9 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 9 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 9 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 9 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 9 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
		</tr>

		<tr>
			<td> 10.00 </td>
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+1 day")) && $b-> waktu == 10 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 10 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 10 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 10 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 10 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 10 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 10 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
		</tr>

		<tr>
			<td> 11.00 </td>
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+1 day")) && $b-> waktu == 11 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 11 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 11 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 11 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 11 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 11 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 11 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
		</tr>

		<tr>
			<td> 12.00 </td>
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+1 day")) && $b-> waktu == 12 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 12 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 12 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 12 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 12 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 12 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 12 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
		</tr>
		
		<tr>
			<td> 13.00 </td>
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+1 day")) && $b-> waktu == 13 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 13 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 13 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 13 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 13 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 13 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 13 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
		</tr>

		<tr>
			<td> 14.00 </td>
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+1 day")) && $b-> waktu == 14 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 14 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 14 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 14 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 14 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 14 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 14 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
		</tr>

		<tr>
			<td> 15.00 </td>
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+1 day")) && $b-> waktu == 15 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 15 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 15 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 15 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 15 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 15 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 15 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
		</tr>

		<tr>
			<td> 16.00 </td>
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+1 day")) && $b-> waktu == 16 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 16 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 16 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 16 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 16 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 16 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 16 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
		</tr>
		
		<tr>
			<td> 17.00 </td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+1 day")) && $b-> waktu == 17 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 17 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 17 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 17 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 17 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 17 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 17 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
		</tr>
		
		<tr>
			<td> 18.00 </td>
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+1 day")) && $b-> waktu == 18 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
		
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+2 days")) && $b-> waktu == 18 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+3 days")) && $b-> waktu == 18 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+4 days")) && $b-> waktu == 18 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+5 days")) && $b-> waktu == 18 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+6 days")) && $b-> waktu == 18 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
			
			<td>           
			@foreach($booking as $b)
			@if($b-> tanggal == date("Y-m-d", strtotime("+7 days")) && $b-> waktu == 18 )

			{{{"ada booking"}}}
			</td>
			@endif
			@endforeach
		</tr>

        </tbody>
      </table>
    </div>
@stop