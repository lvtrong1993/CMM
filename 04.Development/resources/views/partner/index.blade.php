<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Đối tác</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('libs/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->

  <link rel="stylesheet" href="{{ asset('libs/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('libs/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <!-- select2 -->
  <link rel="stylesheet" href="  {{ asset('libs/select2/dist/css/select2.min.css') }}">
  <!-- {{ asset('css/skins/_all-skins.min.css') }} -->
  <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
     <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.css') }}">

     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="../../index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>TNK</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b></b>TNK</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </a>
      <!-- seelctbox -->
      <div class="col-md-3 col-xs-7" style="margin-top: 10px">
          <div class="form-group">
            <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
            style="width: 100%;">
            <option>Alabama</option>
            <option>Alaska</option>
            <option>California</option>
            <option>Delaware</option>
            <option>Tennessee</option>
            <option>Texas</option>
            <option>Washington</option>
        </select>
    </div>
</div>
<!-- ./ select box -->
<div class="navbar-custom-menu">
  <ul class="nav navbar-nav">     
    <!-- User Account: style can be found in dropdown.less -->
    <li class="dropdown user user-menu">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <!-- {{ asset('img/user2-160x160.jpg') }} -->
        <img src="{{ asset('img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
        <span class="hidden-xs">Trọng lv</span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

          <p>
            Alexander Pierce - Web Developer
            <small>Member since Nov. 2012</small>
        </p>
    </li>
    <!-- Menu Body -->
    <li class="user-body">
      <div class="row">
        <div class="col-xs-4 text-center">
          <a href="#">Followers</a>
      </div>
      <div class="col-xs-4 text-center">
          <a href="#">Sales</a>
      </div>
      <div class="col-xs-4 text-center">
          <a href="#">Friends</a>
      </div>
  </div>
  <!-- /.row -->
</li>
<!-- Menu Footer-->
<li class="user-footer">
  <div class="pull-left">
    <a href="#" class="btn btn-default btn-flat">Profile</a>
</div>
<div class="pull-right">
    <a href="#" class="btn btn-default btn-flat">Sign out</a>
</div>
</li>
</ul>
</li>
<!-- Control Sidebar Toggle Button -->
<li>
  <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
</li>
</ul>
</div>
</nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <p>Trọng lv</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MAIN NAVIGATION</li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Yêu cầu</span>
  </a>
</li>
<li class="treeview">
    <a href="#">
      <i class="fa fa-desktop"></i> <span>Thiết bị</span>
  </a>
</li>
<li class="treeview">
    <a href="#">
      <i class="fa fa-pie-chart"></i> <span>Báo cáo</span>
  </a>
</li>
<li class="treeview">
  <a href="{{url('/partner')}}">
      <i class="fa fa-vcard"></i> <span>Đối tác</span>
  </a>
</li>
<li class="treeview">
    <a href="{{url('/user')}}">
      <i class="fa fa-users"></i> <span>Người dùng</span>
  </a>
</li>
<li class="treeview">
    <a href="#">
      <i class="fa fa-user"></i> <span>Trang cá nhân</span>
  </a>
</li>
</ul>
</section>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <form action = "{{url('/partner')}}" method="GET">
    <label></label>
    <div class="input-group input-group-sm" style = "width: 300px;margin-left: 15px;margin-bottom: 15px;">

      <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Khách hàng" style="width: 100%;" tabindex="-1" aria-hidden="true" name = "search">
          @if(isset($partner))
          @foreach($partner as $part)
          <option>{{$part->partner_full_name}}</option>
          @endforeach
          @endif

          @if(isset($obj->partners))
          @foreach($obj->partners as $parts)
          <option>{{$parts->partner_full_name}}</option>
          @endforeach
          @endif
      </select>
      <span class="input-group-btn">
        <button type="submit" class="btn btn-info btn-flat" style="height: 32px;">Tìm kiếm</button>
      </span>
    </div>
  </form>
<div class="box box-primary">
    
            <!-- /.box-header -->
            <div class="box-body">
              <a href = "{{url('partner_insert/create')}}"><button type="submit" class="btn btn-info pull-right" style = "margin-bottom: 15px;">Thêm mới</button></a>
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 164px;">Mã khách hàng</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 203px;">Khách hàng</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 180px;">Địa chỉ</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 140px;">Ghi chú</th></tr>
                </thead>
                <tbody>  

                     <!-- ton tai biien partner -->
                @if(isset($partner))
                @foreach($partner as $part)     
                <tr role="row" class="odd">
               
                  <td><a href = "{{url('/partner_edit/'.$part->partner_id.'/edit')}}">{{$part->partner_id}}</a></td>
                  <td><a href = "{{url('/partner_edit/'.$part->partner_id.'/edit')}}">{{$part->partner_full_name}}</a></td>
                  <td>{{$part->address}}</td>
                  <td>{{$part->note}}</td>
                </tr>
                @endforeach
                @endif

                <!-- ton tai bien obj -->
                @if(isset($obj->partner))
                @foreach($obj->partner as $part )
                <tr role="row" class="odd">
                  <td><a href = "{{ url('/partner_edit/'.$part->partner_id.'/edit') }}">{{$part->partner_id}}</a></td>
                  <td><a href = "{{ url('/partner_edit/'.$part->partner_id.'/edit') }}">{{$part->partner_full_name}}</a></td>
                  <td>{{$part->address}}</td>
                  <td>{{$part->note}}</td>
                </tr>
                @endforeach
                @endif
              </tbody>

             </table>
           </div>
           @if(isset($partner))
           <div style="margin-left: 15px;">{{$partner->links()}}</div> 
           @endif
         </div>
       </div>
    </div>
            <!-- /.box-body -->
</div>


</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
</div>
<strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane" id="control-sidebar-home-tab">
      <h3 class="control-sidebar-heading">Recent Activity</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

              <p>Will be 23 on April 24th</p>
          </div>
      </a>
  </li>
  <li>
      <a href="javascript:void(0)">
        <i class="menu-icon fa fa-user bg-yellow"></i>

        <div class="menu-info">
          <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

          <p>New phone +1(800)555-1234</p>
      </div>
  </a>
</li>
<li>
  <a href="javascript:void(0)">
    <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

    <div class="menu-info">
      <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

      <p>nora@example.com</p>
  </div>
</a>
</li>
<li>
  <a href="javascript:void(0)">
    <i class="menu-icon fa fa-file-code-o bg-green"></i>

    <div class="menu-info">
      <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

      <p>Execution time 5 seconds</p>
  </div>
</a>
</li>
</ul>
<!-- /.control-sidebar-menu -->

<h3 class="control-sidebar-heading">Tasks Progress</h3>
<ul class="control-sidebar-menu">
    <li>
      <a href="javascript:void(0)">
        <h4 class="control-sidebar-subheading">
          Custom Template Design
          <span class="label label-danger pull-right">70%</span>
      </h4>

      <div class="progress progress-xxs">
          <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
      </div>
  </a>
</li>
<li>
  <a href="javascript:void(0)">
    <h4 class="control-sidebar-subheading">
      Update Resume
      <span class="label label-success pull-right">95%</span>
  </h4>

  <div class="progress progress-xxs">
      <div class="progress-bar progress-bar-success" style="width: 95%"></div>
  </div>
</a>
</li>
<li>
  <a href="javascript:void(0)">
    <h4 class="control-sidebar-subheading">
      Laravel Integration
      <span class="label label-warning pull-right">50%</span>
  </h4>

  <div class="progress progress-xxs">
      <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
  </div>
</a>
</li>
<li>
  <a href="javascript:void(0)">
    <h4 class="control-sidebar-subheading">
      Back End Framework
      <span class="label label-primary pull-right">68%</span>
  </h4>

  <div class="progress progress-xxs">
      <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
  </div>
</a>
</li>
</ul>
<!-- /.control-sidebar-menu -->

</div>
<!-- /.tab-pane -->
<!-- Stats tab content -->
<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
<!-- /.tab-pane -->
<!-- Settings tab content -->
<div class="tab-pane" id="control-sidebar-settings-tab">
  <form method="post">
    <h3 class="control-sidebar-heading">General Settings</h3>

    <div class="form-group">
      <label class="control-sidebar-subheading">
        Report panel usage
        <input type="checkbox" class="pull-right" checked>
    </label>

    <p>
        Some information about this general settings option
    </p>
</div>
<!-- /.form-group -->

<div class="form-group">
  <label class="control-sidebar-subheading">
    Allow mail redirect
    <input type="checkbox" class="pull-right" checked>
</label>

<p>
    Other sets of options are available
</p>
</div>
<!-- /.form-group -->

<div class="form-group">
  <label class="control-sidebar-subheading">
    Expose author name in posts
    <input type="checkbox" class="pull-right" checked>
</label>

<p>
    Allow the user to show his name in blog posts
</p>
</div>
<!-- /.form-group -->

<h3 class="control-sidebar-heading">Chat Settings</h3>

<div class="form-group">
  <label class="control-sidebar-subheading">
    Show me as online
    <input type="checkbox" class="pull-right" checked>
</label>
</div>
<!-- /.form-group -->

<div class="form-group">
  <label class="control-sidebar-subheading">
    Turn off notifications
    <input type="checkbox" class="pull-right">
</label>
</div>
<!-- /.form-group -->

<div class="form-group">
  <label class="control-sidebar-subheading">
    Delete chat history
    <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
</label>
</div>
<!-- /.form-group -->
</form>
</div>
<!-- /.tab-pane -->
</div>
</aside>
<!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
     <div class="control-sidebar-bg"></div>
 </div>
 <!-- ./wrapper -->
 <!-- {{ asset('js/demo.js') }} -->
 <!-- jQuery 3 -->
 <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
 <!-- FastClick -->
 <!-- select2 -->
 <!-- Select2 -->
 <script src="{{ asset('libs/select2/dist/js/select2.full.min.js') }}"></script>
 <!-- <script src="../../bower_components/fastclick/lib/fastclick.js"></script> -->
 <!-- AdminLTE App -->
 <script src="{{ asset('js/adminlte.js') }}"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="{{ asset('js/demo.js') }}"></script>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

 <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
})
</script>
</body>
</html>
