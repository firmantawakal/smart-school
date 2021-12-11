{{-- <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title></title>
</head>

<body>
    <div class="container">
        <h1>@yield('title', $title)</h1>
        @yield('content')
    </div>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', $title)</title>
  <style>.dropdown-container{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:200px;max-width:330px;margin:2px 0 0;list-style:none;font-size:14px;background-color:#fff;border:1px solid #ccc;border:1px solid rgba(0,0,0,0.15);border-radius:4px;-webkit-box-shadow:0 6px 12px rgba(0,0,0,0.175);box-shadow:0 6px 12px rgba(0,0,0,0.175);background-clip:padding-box}.dropdown-container>.dropdown-menu{position:static;z-index:1000;float:none !important;padding:10px 0;margin:0;border:0;background:transparent;border-radius:0;-webkit-box-shadow:none;box-shadow:none;max-height:330px;overflow-y:auto}.dropdown-container>.dropdown-menu+.dropdown-menu{padding-top:0}.dropdown-menu>li>a{overflow:hidden;white-space:nowrap;word-wrap:normal;text-decoration:none;text-overflow:ellipsis;-o-text-overflow:ellipsis;-webkit-transition:none;-o-transition:none;transition:none}.dropdown-toggle{cursor:pointer}.dropdown-header{white-space:nowrap}.open>.dropdown-container>.dropdown-menu,.open>.dropdown-container{display:block}.dropdown-toolbar{padding-top:6px;padding-left:20px;padding-right:20px;padding-bottom:5px;background-color:#fff;border-bottom:1px solid rgba(0,0,0,0.15);border-radius:4px 4px 0 0}.dropdown-toolbar>.form-group{margin:5px -10px}.dropdown-toolbar .dropdown-toolbar-actions{float:right}.dropdown-toolbar .dropdown-toolbar-title{margin:0;font-size:14px}.dropdown-footer{padding:5px 20px;border-top:1px solid #ccc;border-top:1px solid rgba(0,0,0,0.15);border-radius:0 0 4px 4px}.anchor-block small{display:none}@media (min-width:992px){.anchor-block small{display:block;font-weight:normal;color:#777777}.dropdown-menu>li>a.anchor-block{padding-top:6px;padding-bottom:6px}}@media (min-width:992px){.dropdown.hoverable:hover>ul{display:block}}.dropdown-position-topright{top:auto;right:0;bottom:100%;left:auto;margin-bottom:2px}.dropdown-position-topleft{top:auto;right:auto;bottom:100%;left:0;margin-bottom:2px}.dropdown-position-bottomright{right:0;left:auto}.dropmenu-item-label{white-space:nowrap}.dropmenu-item-content{position:absolute;text-align:right;max-width:60px;right:20px;color:#777777;overflow:hidden;white-space:nowrap;word-wrap:normal;-o-text-overflow:ellipsis;text-overflow:ellipsis}small.dropmenu-item-content{line-height:20px}.dropdown-menu>li>a.dropmenu-item{position:relative;padding-right:66px}.dropdown-submenu .dropmenu-item-content{right:40px}.dropdown-menu>li.dropdown-submenu>a.dropmenu-item{padding-right:86px}.dropdown-inverse .dropdown-menu{background-color:rgba(0,0,0,0.8);border:1px solid rgba(0,0,0,0.9)}.dropdown-inverse .dropdown-menu .divider{height:1px;margin:9px 0;overflow:hidden;background-color:#2b2b2b}.dropdown-inverse .dropdown-menu>li>a{color:#cccccc}.dropdown-inverse .dropdown-menu>li>a:hover,.dropdown-inverse .dropdown-menu>li>a:focus{color:#fff;background-color:#262626}.dropdown-inverse .dropdown-menu>.active>a,.dropdown-inverse .dropdown-menu>.active>a:hover,.dropdown-inverse .dropdown-menu>.active>a:focus{color:#fff;background-color:#337ab7}.dropdown-inverse .dropdown-menu>.disabled>a,.dropdown-inverse .dropdown-menu>.disabled>a:hover,.dropdown-inverse .dropdown-menu>.disabled>a:focus{color:#777777}.dropdown-inverse .dropdown-header{color:#777777}.table>thead>tr>th.col-actions{padding-top:0;padding-bottom:0}.table>thead>tr>th.col-actions .dropdown-toggle{color:#777777}.notifications{list-style:none;padding:0}.notification{display:block;padding:9.6px 12px;border-width:0 0 1px 0;border-style:solid;border-color:#eeeeee;background-color:#fff;color:#333333;text-decoration:none}.notification:last-child{border-bottom:0}.notification:hover,.notification.active:hover{background-color:#f9f9f9;border-color:#eeeeee}.notification.active{background-color:#f4f4f4}a.notification:hover{text-decoration:none}.notification-title{font-size:15px;margin-bottom:0}.notification-desc{margin-bottom:0}.notification-meta{color:#777777}.dropdown-notifications>.dropdown-container,.dropdown-notifications>.dropdown-menu{width:450px;max-width:450px}.dropdown-notifications .dropdown-menu{padding:0}.dropdown-notifications .dropdown-toolbar,.dropdown-notifications .dropdown-footer{padding:9.6px 12px}.dropdown-notifications .dropdown-toolbar{background:#fff}.dropdown-notifications .dropdown-footer{background:#eeeeee}.notification-icon{margin-right:6.8775px}.notification-icon:after{position:absolute;content:attr(data-count);margin-left:-6.8775px;margin-top:-6.8775px;padding:0 4px;min-width:13.755px;height:13.755px;line-height:13.755px;background:red;border-radius:10px;color:#fff;text-align:center;vertical-align:middle;font-size:11.004px;font-weight:600;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif}.notification .media-body{padding-top:5.6px}.btn-lg .notification-icon:after{margin-left:-8.253px;margin-top:-8.253px;min-width:16.506px;height:16.506px;line-height:16.506px;font-size:13.755px}.btn-xs .notification-icon:after{content:'';margin-left:-4.1265px;margin-top:-2.06325px;min-width:6.25227273px;height:6.25227273px;line-height:6.25227273px;padding:0}.btn-xs .notification-icon{margin-right:3.43875px}</style>  
    
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{!! asset('plugins/fontawesome-free/css/all.min.css') !!}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{!! asset('dist/css/adminlte.min.css') !!}">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown dropdown-notifications">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i data-count="0" class="far fa-bell notification-icon"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Notifications (<span class="notif-count">0</span>)</span>
          <div class="dropdown-divider"></div>
          <div class="dropdown-menu2">
          </div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
    </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">Smart School</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item {{ request()->is('user*') ? 'active' : '' }}">
              <a href="{{route('user.index')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  User
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('actionlogout')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">@yield('title',$title)</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
                @yield('content')
            </div>
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
          <h5>Title</h5>
          <p>Sidebar content</p>
        </div>
      </aside>
      <!-- /.control-sidebar -->


    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{!! asset('plugins/jquery/jquery.min.js') !!}"></script>
    <!-- Bootstrap 4 -->
    <script src="{!! asset('plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    <!-- AdminLTE App -->
    <script src="{!! asset('dist/js/adminlte.min.js') !!}"></script>
    <script src="{!! asset('dist/js/demo.js') !!}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{!! asset('plugins/datatables/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') !!}"></script>
    <script src="{!! asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') !!}"></script>
    <script src="{!! asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') !!}"></script>
    <!-- AdminLTE App -->
    <script>
      $(function () {
        $('#example1').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true,
          "responsive": true,
        });
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true,
          "responsive": true,
        });
      });
    </script>
    <script src="//js.pusher.com/3.1/pusher.min.js"></script>

    <script type="text/javascript">
      var notificationsWrapper   = $('.dropdown-notifications');
      var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
      var notificationsCountElem = notificationsToggle.find('i[data-count]');
      var notificationsCount     = parseInt(notificationsCountElem.data('count'));
      var notifications          = notificationsWrapper.find('.dropdown-menu2');

      if (notificationsCount <= 0) {
        notificationsWrapper.hide();
      }

      // Enable pusher logging - don't include this in production
      // Pusher.logToConsole = true;

      var pusher = new Pusher('a4800e8e127ad7883f85', {
        encrypted: true,
        cluster: 'ap1'
      });

      // Subscribe to the channel we specified in our Laravel Event
      var channel = pusher.subscribe('status-liked');

      // Bind a function to a Event (the full Laravel class)
      channel.bind('App\\Events\\StatusLiked', function(data) {
        if ('{{Auth::user()->username}}'!=data.id) {
            return;
        }
        var existingNotifications = notifications.html();
        var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
        var newNotificationHtml = `
        <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i>`+data.message+`
            <span class="float-right text-muted text-sm">about a minute ago</span>
          </a>
          <div class="dropdown-divider"></div>
        `;
        notifications.html(newNotificationHtml + existingNotifications);

        notificationsCount += 1;
        notificationsCountElem.attr('data-count', notificationsCount);
        notificationsWrapper.find('.notif-count').text(notificationsCount);
        notificationsWrapper.show();
      });
    </script>
</body>

</html>