<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8" />
  <title>
    @yield('title')
  </title>
  <meta name="description" content="Bandung Web Kit" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="{{URL::asset('libs/assets/animate.css/animate.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{URL::asset('libs/assets/font-awesome/css/font-awesome.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{URL::asset('libs/assets/simple-line-icons/css/simple-line-icons.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{URL::asset('libs/jquery/bootstrap/dist/css/bootstrap.css')}}" type="text/css" />

  <link rel="stylesheet" href="{{URL::asset('bdgwebkit/css/font.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{URL::asset('bdgwebkit/css/style.css')}}" type="text/css" />
</head>

<body>
<div class="app app-header-fixed ">
  

    <!-- header -->
  <header id="header" class="app-header navbar" role="menu">
      <!-- navbar header -->
      <div class="navbar-header bg-info">
        <button class="pull-right visible-xs dk" ui-toggle-class="show" target=".navbar-collapse">
          <i class="glyphicon glyphicon-cog"></i>
        </button>
        <button class="pull-right visible-xs" ui-toggle-class="off-screen" target=".app-aside" ui-scroll="app">
          <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <!-- brand -->
        <a href="#/" class="navbar-brand text-lt">          
          <img src="{{URL::asset('bdgwebkit/img/logo-small.png')}}" alt="." class="small-logo hide">
          <img src="{{URL::asset('bdgwebkit/img/logo.png')}}" alt="." class="large-logo">
        </a>
        <!-- / brand -->
      </div>
      <!-- / navbar header -->

      <!-- navbar collapse -->
      <div class="collapse pos-rlt navbar-collapse bg-info">
        <!-- buttons -->
        <div class="nav navbar-nav hidden-xs">
                  
        </div>
        <!-- / buttons -->

        <!-- link and dropdown -->
        <ul class="nav navbar-nav hidden-sm">
          <li>
            <a href="{{URL::to('/')}}">TENTANG KAMI</a>
          </li>
           <li>
            <a href="#">PROMO</a>
          </li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
              <span>BOOKING</span> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              
              <li>
                <a href="{{URL::to('booking/create')}}">
                  <span>Lakukan Pemesanan</span>
                </a>
              </li>

              <li>
                <a href="{{URL::to('booking/schedule')}}">
                  <span>Lihat Jadwal Minggu ini</span>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">INFO</a>
          </li>
          <li>
            <a href="#">KLIK/SARAN</a>
          </li>
          <li>
            <a href="{{URL::to('login')}}">LOGIN</a>
          </li>
        </ul>
        <!-- / link and dropdown -->

        <!-- nabar right -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <i class="icon-bdg_alert text14"></i>
              <span class="visible-xs-inline">Notifikasi</span>
              <span class="badge badge-sm up bg-danger pull-right-xs"></span>
            </a>
            <!-- dropdown -->
            @yield('notifikasi')
            <!-- / dropdown -->
          </li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <i class="icon-bdg_search text14"></i>              
            </a>
            <!-- dropdown -->
             <div class="search_wrapper pull-right w-xl animated fadeIn">
              <form action="">
                <i class="pull-left glyphicon glyphicon-search"></i>
                  <input type="text" class="pull-left" placeholder="Type Here">
                <a href="#" class="remove-search"><i class="pull-right icon-bdg_cross"></i></a>
              </form>
            </div>
            <!-- / dropdown -->
          </li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="bg-blue profile-header dropdown-toggle clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-left m-t-n-sm m-b-n-sm m-r-sm">
                @yield('image_profil')                
              </span>
              <span class="hidden-sm hidden-md m-r-xl">
                  @yield('name')
              </span> <i class="text14 icon-bdg_setting3 pull-right"></i>
            </a>
            <!-- dropdown -->
            <ul class="dropdown-menu animated fadeIn w-ml">             
              <li>
                <a href>
                  <span class="badge bg-danger pull-right">30%</span>
                  <span>Settings</span>
                </a>
              </li>
              <li>
                <a href>Profile</a>
              </li>
              <li>
                <a href>
                  <span class="label bg-info pull-right">new</span>
                  Help
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a>Logout</a>
              </li>
            </ul>
            <!-- / dropdown -->
          </li>
        </ul>
        <!-- / navbar right -->
      </div>
      <!-- / navbar collapse -->
  </header>
  <!-- / header -->

  <aside id="aside" class="app-aside hidden-xs bg-dark">
      <div class="aside-wrap">
        <div class="navi-wrap">
          <!-- user -->
          <div class="clearfix hidden-xs text-center hide" id="aside-user">
            <div class="dropdown wrapper">
              <a href="app.page.profile">
                <span class="thumb-lg w-auto-folded avatar m-t-sm">
                  <img src="img/01.jpg" class="img-full" alt="...">
                </span>
              </a>
              <a href="#" data-toggle="dropdown" class="dropdown-toggle hidden-folded">
                <span class="clear">
                  <span class="block m-t-sm">
                    <strong class="font-bold text-lt">John.Smith</strong> 
                    <b class="caret"></b>
                  </span>
                  <span class="text-muted text-xs block">Art Director</span>
                </span>
              </a>
              <!-- dropdown -->
              <ul class="dropdown-menu animated fadeInRight w hidden-folded">
                <li class="wrapper b-b m-b-sm bg-info m-t-n-xs">
                  <span class="arrow top hidden-folded arrow-info"></span>
                  <div>
                    <p>300mb of 500mb used</p>
                  </div>
                  <div class="progress progress-xs m-b-none dker">
                    <div class="progress-bar bg-white" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
                  </div>
                </li>
                <li>
                  <a href>Settings</a>
                </li>
                <li>
                  <a href="page_profile.html">Profile</a>
                </li>
                <li>
                  <a href>
                    <span class="badge bg-danger pull-right">3</span>
                    Notifications
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="page_signin.html">Logout</a>
                </li>
              </ul>
              <!-- / dropdown -->
            </div>
            <div class="line dk hidden-folded"></div>
          </div>
          <!-- / user -->

         <!-- nav -->
          <nav ui-nav class="navi clearfix">
            <ul class="nav">
              <li class="hidden-folded m-t text-dark-grey text-xs padder-md padder-v-sm">
                <span>Navigation</span>
              </li>
              <li>
                <a href="table_static.html" class="auto">
                  <i class="icon-bdg_dashboard icon-grey"></i>
                  <span class="font-bold">Dashboard</span>
                </a>
              </li>
              
              <li class="line1 dg"></li>

              <li class="hidden-folded text-dark-grey text-xs padder-md padder-v-sm">
                <span>Components</span>
              </li>
        
            </ul>
          </nav>
          <!-- nav -->



        </div>
      </div>
  </aside>
  <!-- / aside -->


<!-- content -->
<div id="content" class="app-content" role="main">

  <div class="hbox hbox-auto-xs hbox-auto-sm ng-scope">
    <div class="col">
      <div class="app-content-body ">

          <div class="bg-light lter">    
              <ul class="breadcrumb bg-grey-breadcrumb m-b-none">
                <li><a href="#" class="btn no-shadow" ui-toggle-class="app-aside-folded" target=".app">
                  <i class="icon-bdg_expand1 text"></i>
                  <i class="icon-bdg_expand2 text-active"></i>
                </a>   </li>
                <li><a href="{{URL::to('/')}}">Home</a></li>
                @yield('appside')               
              </ul>
          </div>
          
		  
		  <div class="bg-light b-b wrapper-md padder-md ">
        <h1 class="m-n font-bold h4 padder" >
          @yield('page_title')
        </h1>
      </div>
		  
		<div class="wrapper-lg bg-light">
      @yield('head_content')
      <div class="col-md-12 padder-v">
				@yield('content')
			
			</div>
		</div>
   
	</div>
    </div>
      <!-- App-content-body -->  

  </div>
</div>







  <!-- footer -->
  <footer id="footer" class="app-footer" role="footer">
    <div class="wrapper-md padder-lg b-t bg-light">
      <span class="pull-right">&copy; Copyright Bandung <a href ui-scroll="app" class="m-l-sm text-muted"><i class="icon-bdg_arrow11"></i></a></span>
     Made with <i class="text-danger fa fa-heart"></i> in Bandung
    </div>
  </footer>
  <!-- / footer -->
</div>

<script src="{{URL::asset('libs/jquery/jquery/dist/jquery.js')}}"></script>
<script src="{{URL::asset('libs/jquery/bootstrap/dist/js/bootstrap.js')}}"></script>
<script src="{{URL::asset('bdgwebkit/js/ui-load.js')}}"></script>
<script src="{{URL::asset('bdgwebkit/js/ui-jp.config.js')}}"></script>
<script src="{{URL::asset('bdgwebkit/js/ui-jp.js')}}"></script>
<script src="{{URL::asset('bdgwebkit/js/ui-nav.js')}}"></script>
<script src="{{URL::asset('bdgwebkit/js/ui-toggle.js')}}"></script>
<script src="{{URL::asset('bdgwebkit/js/ui-client.js')}}"></script>

</body>
</html>