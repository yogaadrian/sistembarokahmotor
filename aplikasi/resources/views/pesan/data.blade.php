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
              <td>{{$b-> jenis}}</td>
              <td> </td>
              <td>
                <div class="btn-group dropdown">             
                  <button class="btn m-b-sm m-r-sm btn-warning btn-sm" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="http://localhost/sistembarokahmotor/aplikasi/public/pesan/tanggapi/<?php echo $b-> id_pesan?>">Tanggapi</a></li>
                    <li class="divider"></li>
                    <li><a onclick="LihatDetail('<?php echo $b-> isi?>', '<?php echo $b-> judul?>')">Lihat Detail</a> </li>
                  </ul>
                </div>
              </td>
            </tr>  
            <?php $i++ ;?>
          @endforeach
        </tbody>
      </table>
    </div>
	
	<script>
	function LihatDetail(text,title){
		alert(text,title);
	}
	
	
	var ALERT_BUTTON_TEXT = "Ok";

if(document.getElementById) {
    window.alert = function(txt,title) {
        createCustomAlert(txt,title);
    }
}

function createCustomAlert(txt,title) {
    var ALERT_TITLE = title;
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