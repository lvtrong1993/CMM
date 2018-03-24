<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Chỉnh sửa thông tin Khách hàng</title>
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
    <a href="#">
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
  <br/>
  <div class="box-header with-border">
    <h3 class="box-title">Chỉnh sửa thông tin khách hàng</h3>
  </div>
  <!-- Content Header (Page header) -->
  <div class="box box-success">
    <form id = "form" ><!-- action = "{{url('/partner/'. $partner->partner_id)}}" -->
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="box-body">
        <div class="form-group">
          <label >Tên khách hàng : </label><span id="msg_fullname" style = "margin-left: 15px;color:red;" class = "msg-item"> </span><br>
          <input type="text" class="form-control" id = "clear" name = "fullname" value = "{{$partner->partner_full_name}}"  placeholder="Enter full name">
        </div>
        <div class="form-group">
          <label >Tên viết tắt : </label>
          <input type="text" class="form-control" id = "clear" name = "shortname" value = "{{$partner->partner_short_name}}" placeholder="Enter short name">
        </div>
        <div class="form-group">
          <label >Địa chỉ : </label><span id="msg_address" style = "margin-left: 15px;color:red;" class = "msg-item"> </span><br>
          <input type="text" class="form-control" id = "clear" name = "address" value = "{{$partner->address}}" placeholder="Enter address">
        </div>
        <div class="form-group">
          <label >Số điện thoại : </label><span id="msg_phone"  style = "margin-left: 15px;color:red;" class = "msg-item"> </span><br>
          <input type="text" class="form-control" id = "clear" name = "phone" value = "{{$partner->phone}}"  placeholder="Enter number phone">
        </div>
        <div class="form-group">
          <label >Email : </label><span id="msg_email" style = "margin-left: 15px;color:red;" class = "msg-item"> </span><br>
          <input type="text" class="form-control" id = "clear" name = "email" value = "{{$partner->email}}" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label >Người liên lạc : </label>
          <input type="text" class="form-control" id = "clear" name = "contacter" value = "{{$partner->contacter}}" placeholder="Enter contacter">
        </div>
        <div class="form-group">
          <label >Chú thích : </label>
          <input type="text" class="form-control" id = "clear" name = "note" value = "{{$partner->note}}" placeholder="Enter note">
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="reset" onClick = "document.getElementById('clear').value = ''" class="cancel btn btn-default" style = "margin-right: 15px;">Reset</button>
        <button type="submit" onClick="return get_data()" class="btn btn-primary">Lưu</button>

      </div>

      <div class="box-footer">
       
      </div>

    </form>

  <script>
  function get_data() {
  var info = {};
    $(".msg-item").html("");

    $.each($('form').serializeArray(),function(){
      info[this.name] = this.value;
    });

    $.ajax('{{url("/partner_update/". $partner->partner_id)}}', {
      type: 'POST',  
      data: info,
      async: false,
            success: function (data, status, xhr) {
               console.log(data);
              if(data.errors)
              {
                    if(data.errors.fullname){
                        $( '#msg_fullname' ).html( data.errors.fullname[0] );
                    }
                    if(data.errors.address){
                        $( '#msg_address' ).html( data.errors.address[0] );
                    }
                    if(data.errors.phone){
                        $( '#msg_phone' ).html( data.errors.phone[0] );
                    }
                    if(data.errors.email){
                        $( '#msg_email' ).html( data.errors.email[0] );
                    }
              }

              if(data.success)
              {
                var t = confirm("Chỉnh sửa thành công");
                if (t === true)
                  location = "{{url('/partner')}}";
              }
                
            }
        });

    return false;
}
  </script>
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
