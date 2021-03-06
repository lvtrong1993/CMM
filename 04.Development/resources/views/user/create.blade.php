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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
  <br/>
  <div class="box-header with-border">
    <h3 class="box-title">Thêm thông tin người dùng</h3>
  </div>

  <!-- Content Header (Page header) -->
  <div class="box box-success">
    <br/>
    <a href = "{{url('/user')}}"><button type="submit" class="btn btn-primary pull-right" style="margin-right: 15px;">Quay lại</button></a>
    <br/>
    <form  id = "formdata" name = "formdata" onsubmit="return get_data()" >
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="box-body">
        <div class="form-group">
          <label >Email : </label><span id="msg_email" style = "margin-left: 15px;color:red;" class = "msg-item"> </span><br>
          <input type="text" class="form-control" id = "clear" name = "email"  placeholder="Enter email">
        </div>
        <div class="form-group">
          <label >Mật khẩu : </label><span id="msg_password" style = "margin-left: 15px;color:red;" class = "msg-item"> </span><br>
          <input type="password" class="form-control" id = "clear" name = "password" placeholder="Enter password">
        </div>
        <div class="form-group">
          <label >Xác nhận mật khẩu : </label><span id="msg_repassword" style = "margin-left: 15px;color:red;" class = "msg-item"> </span><br>
          <input type="password" class="form-control" id = "clear" name = "repassword"  placeholder="Enter repassword">
        </div>
        <div class="form-group">
          <label >Họ : </label><span id="msg_firstname"  style = "margin-left: 15px;color:red;" class = "msg-item"> </span><br>
          <input type="text" class="form-control" id = "clear" name = "firstname" placeholder="Enter first name">
        </div>
        <div class="form-group">
          <label >Tên : </label><span id="msg_lastname" style = "margin-left: 15px;color:red;" class = "msg-item"> </span><br>
          <input type="text" class="form-control" id = "clear" name = "lastname" placeholder="Enter last name">
        </div>
       
        <div class="form-group">
          <label>Giới tính :</label><br/>
             <input type = "radio" name = "gender" checked="checked" value = "1">  <label>Nam</label> &nbsp;&nbsp;&nbsp;
             <input type = "radio" name = "gender" value = "0">  <label>Nữ</label>
        </div>
        <div class="form-group">
          <label >Địa chỉ : </label>
          <input type="text" class="form-control" id = "clear" name = "address" placeholder="Enter address">
        </div>
        <div class="form-group">
          <label >Số điện thoại : </label>
          <input type="text" class="form-control" id = "clear" name = "phone" placeholder="Enter number phone">
        </div>
        <div class = "form-group">
          <label>Thuộc công ty : </label>
          <div class="input-group input-group-sm" style = "width: 500px;">
            <select class="form-control select2 select2-hidden-accessible" data-placeholder="Enter partner" style="width: 100%;" tabindex="-1" aria-hidden="true" name = "company">
              <option selected="selected" >---- Đối tác ----</option>
              @foreach($partner as $part)
              <option value="{{$part->partner_id}}" >{{$part->partner_full_name}}</option>
              @endforeach
            </select> 
          </div>
        </div>
        <div class="form-group">
          <label>Phân quyền :</label><br/>
             <input type = "radio" name = "role" checked="checked" value = "1">  <label>TNK ADMIN</label> &nbsp;&nbsp;&nbsp;
             <input type = "radio" name = "role" value = "2">  <label>TNK IT USER</label> &nbsp;&nbsp;&nbsp;
             <input type = "radio" name = "role" value = "10">  <label>Partner MOD</label> &nbsp;&nbsp;&nbsp;
             <input type = "radio" name = "role" value = "11">  <label>Partner USER</label>
        </div>
        <div class="form-group">
          <label>Hình ảnh :</label>
            <input type='file' name = "image" id="imgInp" />
            <img id="blah" src="" width="200" />
        </div>
        
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="reset" onClick = "document.getElementById('clear').value = ''" class="cancel btn btn-default" style = "margin-right: 15px;">Reset</button>
        <button type="submit" class="btn btn-primary">Lưu</button>

      </div>
      </div>
    </div>

    </form>
  <script>
  function get_data() {

    $(".msg-item").html("");

    var data = new FormData($('#formdata')[0]);
    data.append('image', $('input[type=file]')[0].files[0]);

    $.ajax('{{url("/user_store/store")}}', {
      enctype: "multipart/form-data",
      processData: false,  // Important!
      contentType: false,
      type: 'POST',  
      data: data ,
      async: false,
            success: function (data, status, xhr) {
               console.log(data);
              if(data.errors)
              {
                    if(data.errors.email){
                        $( '#msg_email' ).html( data.errors.email[0] );
                    }
                    if(data.errors.password){
                        $( '#msg_password' ).html( data.errors.password[0] );
                    }
                    if(data.errors.repassword){
                        $( '#msg_repassword' ).html( data.errors.repassword[0] );
                    }
                    if(data.errors.firstname){
                        $( '#msg_firstname' ).html( data.errors.firstname[0] );
                    }
                    if(data.errors.lastname){
                        $( '#msg_lastname' ).html( data.errors.lastname[0] );
                    }
              }

              if(data.success)
              {
                var t = confirm("thêm thành công");
                if (t === true)
                  location = "{{url('/user')}}";
              }
                
            }
        });

    return false;
}

function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
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
