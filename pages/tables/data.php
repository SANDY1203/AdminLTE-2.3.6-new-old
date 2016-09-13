<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
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
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href="../widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li class="active"><a href="data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="../calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="../mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="../examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="../examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="../examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="../examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="../examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="../examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="../examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="../examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">User Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                      <th>id</th>
					  <th>first_name</th>
                      <th>last_name</th>
                      <th>email</th>
					  <th>password</th>
					  <th>role</th>
					  <th>Action</th>
                    </tr>
                </thead>
                 <tbody>
                  <?php
                   include 'connect.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM users';
                   foreach ($pdo->query($sql) as $row) {
							$val = "admin";
                            echo '<tr>';
                            echo '<td>'. $row['id'] . '</td>';
							echo '<td>'. $row['first_name'] . '</td>';
							echo '<td>'. $row['last_name'] . '</td>';
                            echo '<td>'. $row['email'] . '</td>';
                            echo '<td>'. $row['password'] . '</td>';
							echo '<td>'. $row['role'] . '</td>';
							echo '<td width=250>';
                                echo '<a class="btn" href="read.php?id='.$row['id'].'&val='.$val.'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'&val='.$val.'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'&val='.$val.'">Delete</a>';
                                echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
                <tfoot>
                <tr>
                      <th>id</th>
					  <th>first_name</th>
                      <th>last_name</th>
                      <th>email</th>
					  <th>password</th>
					  <th>role</th>
					  <th>Action</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">COMPANY TABLE DATA</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                      <th>company_id</th>
					  <th>company_name</th>
                      <th>company_address</th>
                      <th>company_phone</th>
					  <th>company_email</th>
					  <th>user_id</th>
					  <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM company';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['company_id'] . '</td>';
							echo '<td>'. $row['company_name'] . '</td>';
							echo '<td>'. $row['company_address'] . '</td>';
                            echo '<td>'. $row['company_phone'] . '</td>';
                            echo '<td>'. $row['company_email'] . '</td>';
							echo '<td>'. $row['user_id'] . '</td>';
							echo '<td width=250>';
                                echo '<a class="btn" href="read_comp.php?id='.$row['company_id'].'&val='.$val.'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update_comp.php?id='.$row['company_id'].'&val='.$val.'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete_comp.php?id='.$row['company_id'].'&val='.$val.'">Delete</a>';
                                echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
                <tfoot>
                <tr>
                      <th>company_id</th>
					  <th>company_name</th>
                      <th>company_address</th>
                      <th>company_phone</th>
					  <th>company_email</th>
					  <th>user_id</th>
					  <th>Action</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		  <div class="box">
            <div class="box-header">
              <h3 class="box-title">CONTACT TABLE DATA</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                      <th>id</th>
					  <th>contact_name</th>
                      <th>contact_position</th>
                      <th>contact_number_one</th>
					  <th>contact_number_two</th>
					  <th>contact_email_one</th>
					  <th>contact_email_two</th>
					  <th>contact_company_allo</th>
					  <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM contact';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['id'] . '</td>';
							echo '<td>'. $row['contact_name'] . '</td>';
							echo '<td>'. $row['contact_position'] . '</td>';
                            echo '<td>'. $row['contact_number_one'] . '</td>';
                            echo '<td>'. $row['contact_number_two'] . '</td>';
							echo '<td>'. $row['contact_email_one'] . '</td>';
                            echo '<td>'. $row['contact_email_two'] . '</td>';
							echo '<td>'. $row['contact_company_allo'] . '</td>';
							echo '<td width=250>';
                                echo '<a class="btn" href="read_contact.php?id='.$row['id'].'&val='.$val.'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update_contact.php?id='.$row['id'].'&val='.$val.'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete_contact.php?id='.$row['id'].'&val='.$val.'">Delete</a>';
                                echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
                <tfoot>
                <tr>
                      <th>id</th>
					  <th>contact_name</th>
                      <th>contact_position</th>
                      <th>contact_number_one</th>
					  <th>contact_number_two</th>
					  <th>contact_email_one</th>
					  <th>contact_email_two</th>
					  <th>contact_company_allo</th>
					  <th>Action</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		  <div class="box">
            <div class="box-header">
              <h3 class="box-title">FEEDBACK TABLE DATA</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                      <th>id</th>
					  <th>user_id</th>
                      <th>ans_1</th>
                      <th>ans_2</th>
					  <th>ans_3</th>
					  <th>ans_4</th>
					  <th>ans_5</th>
					  <th>remarks</th>
					  <th>contact_id</th>
					  <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM feedback';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['id'] . '</td>';
							echo '<td>'. $row['user_id'] . '</td>';
							echo '<td>'. $row['ans_1'] . '</td>';
                            echo '<td>'. $row['ans_2'] . '</td>';
                            echo '<td>'. $row['ans_3'] . '</td>';
							echo '<td>'. $row['ans_4'] . '</td>';
                            echo '<td>'. $row['ans_5'] . '</td>';
							echo '<td>'. $row['remarks'] . '</td>';
							echo '<td>'. $row['contact_id'] . '</td>';
							echo '<td width=250>';
                                echo '<a class="btn" href="read_feedback.php?id='.$row['id'].'&val='.$val.'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update_feedback.php?id='.$row['id'].'&val='.$val.'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete_feedback.php?id='.$row['id'].'&val='.$val.'">Delete</a>';
                                echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
                <tfoot>
                <tr>
                      <th>id</th>
					  <th>user_id</th>
                      <th>ans_1</th>
                      <th>ans_2</th>
					  <th>ans_3</th>
					  <th>ans_4</th>
					  <th>ans_5</th>
					  <th>remarks</th>
					  <th>contact_id</th>
					  <th>Action</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		  <div class="box">
            <div class="box-header">
              <h3 class="box-title">TEAM TABLE DATA</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                      <th>team_id</th>
					  <th>team_name</th>
                      <th>team_lead</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM team';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['team_id'] . '</td>';
							echo '<td>'. $row['team_name'] . '</td>';
							echo '<td>'. $row['team_lead'] . '</td>';
                            echo '<td width=250>';
                                echo '<a class="btn" href="read_team.php?id='.$row['team_id'].'&val='.$val.'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update_team.php?id='.$row['team_id'].'&val='.$val.'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete_team.php?id='.$row['team_id'].'&val='.$val.'">Delete</a>';
                                echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
                <tfoot>
                <tr>
                      <th>team_id</th>
					  <th>team_name</th>
                      <th>team_lead</th>
                      <th>Action</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		  <div class="box">
            <div class="box-header">
              <h3 class="box-title">TEAM MEMBERS TABLE DATA</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                     <th>team_m_id</th>
					  <th>team_m_first_name</th>
                      <th>team_m_last_name</th>
                      <th>team_m_position</th>
					  <th>team_m_employement_status</th>
					  <th>team_id</th>
					  <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM team_members';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['team_m_id'] . '</td>';
							echo '<td>'. $row['team_m_first_name'] . '</td>';
							echo '<td>'. $row['team_m_last_name'] . '</td>';
                            echo '<td>'. $row['team_m_position'] . '</td>';
                            echo '<td>'. $row['team_m_employement_status'] . '</td>';
							echo '<td>'. $row['team_id'] . '</td>';
							echo '<td width=250>';
                                echo '<a class="btn" href="read_team_mem.php?id='.$row['team_m_id'].'&val='.$val.'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update_team_mem.php?id='.$row['team_m_id'].'&val='.$val.'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete_team_mem.php?id='.$row['team_m_id'].'&val='.$val.'">Delete</a>';
                                echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
                <tfoot>
                <tr>
                      <th>team_m_id</th>
					  <th>team_m_first_name</th>
                      <th>team_m_last_name</th>
                      <th>team_m_position</th>
					  <th>team_m_employement_status</th>
					  <th>team_id</th>
					  <th>Action</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		  <div class="box">
            <div class="box-header">
              <h3 class="box-title">PROJECTS TABLE DATA</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                     <th>id</th>
					  <th>project_name</th>
                      <th>project_desc</th>
                      <th>project_company_id</th>
					  <th>project_price</th>
					  <th>project_team</th>
					  <th>project_status</th>
					  <th>user_id</th>
					  <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM projects';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['id'] . '</td>';
							echo '<td>'. $row['project_name'] . '</td>';
							echo '<td>'. $row['project_desc'] . '</td>';
                            echo '<td>'. $row['project_company_id'] . '</td>';
                            echo '<td>'. $row['project_price'] . '</td>';
							echo '<td>'. $row['project_team'] . '</td>';
                            echo '<td>'. $row['project_status'] . '</td>';
							echo '<td>'. $row['user_id'] . '</td>';
							echo '<td width=250>';
							
                                echo '<a class="btn" href="read_project.php?id='.$row['id'].'&val='.$val.'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update_project.php?id='.$row['id'].'&val='.$val.'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete_project.php?id='.$row['id'].'&val='.$val.'">Delete</a>';
                                echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
                <tfoot>
                <tr>
                      <th>id</th>
					  <th>project_name</th>
                      <th>project_desc</th>
                      <th>project_company_id</th>
					  <th>project_price</th>
					  <th>project_team</th>
					  <th>project_status</th>
					  <th>user_id</th>
					  <th>Action</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                       <th>id</th>
					  <th>product_name</th>
                      <th>product_description</th>
                      <th>product_start_price</th>
					  <th>product_end_price</th>
					  <th>category</th>
					  <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM proserv';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['id'] . '</td>';
							echo '<td>'. $row['product_name'] . '</td>';
							echo '<td>'. $row['product_description'] . '</td>';
                            echo '<td>'. $row['product_start_price'] . '</td>';
                            echo '<td>'. $row['product_end_price'] . '</td>';
							echo '<td>'. $row['category'] . '</td>';
							echo '<td width=250>';
                                echo '<a class="btn" href="read_proserv.php?id='.$row['id'].'&val='.$val.'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update_proserv.php?id='.$row['id'].'&val='.$val.'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete_proserv.php?id='.$row['id'].'&val='.$val.'">Delete</a>';
                                echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
                <tfoot>
                <tr>
                       <th>id</th>
					  <th>product_name</th>
                      <th>product_description</th>
                      <th>product_start_price</th>
					  <th>product_end_price</th>
					  <th>category</th>
					  <th>Action</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		  <div class="box">
            <div class="box-header">
              <h3 class="box-title">PROJECTSERV_PROJECT TABLE DATA</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                                            <th>id</th>
					  <th>proserv_id</th>
                      <th>project_contractor_id</th>
                      <th>project_price</th>
					  <th>project_team</th>
					  <th>project_status</th>
					  <th>category_proserv_project</th>
					  <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM proserv_project';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['id'] . '</td>';
							echo '<td>'. $row['proserv_id'] . '</td>';
							echo '<td>'. $row['project_contractor_id'] . '</td>';
                            echo '<td>'. $row['project_price'] . '</td>';
                            echo '<td>'. $row['project_team'] . '</td>';
							echo '<td>'. $row['project_status'] . '</td>';
                            echo '<td>'. $row['category_proserv_project'] . '</td>';
							echo '<td width=250>';
                                echo '<a class="btn" href="read_proserv_project.php?id='.$row['id'].'&val='.$val.'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update_proserv_project.php?id='.$row['id'].'&val='.$val.'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete_proserv_project.php?id='.$row['id'].'&val='.$val.'">Delete</a>';
                                echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
                <tfoot>
                <tr>
                                            <th>id</th>
					  <th>proserv_id</th>
                      <th>project_contractor_id</th>
                      <th>project_price</th>
					  <th>project_team</th>
					  <th>project_status</th>
					  <th>category_proserv_project</th>
					  <th>Action</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		  <div class="box">
            <div class="box-header">
              <h3 class="box-title">QUESTIONS TABLE DATA</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                       <th>q_id</th>
					  <th>questions</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM questions';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['q_id'] . '</td>';
							echo '<td>'. $row['question'] . '</td>';
							echo '<td width=250>';
                                echo '<a class="btn" href="read_quation.php?id='.$row['q_id'].'&val='.$val.'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update_quation.php?id='.$row['q_id'].'&val='.$val.'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete_quation.php?id='.$row['q_id'].'&val='.$val.'">Delete</a>';
                                echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
                <tfoot>
                <tr>
                       <th>q_id</th>
					  <th>questions</th>
                      <th>Action</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		  <div class="box">
            <div class="box-header">
              <h3 class="box-title">QUOTATION TABLE DATA</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                      <th>id</th>
					  <th>lead</th>
					  <th>proposal</th>
					  <th>design</th>
					  <th>testing</th>
					  <th>development</th>
					  <th>maintenance</th>
					  <th>invoice</th>
					  <th>delivery</th>
					  <th>user_id</th>
					  <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM quotation';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['id'] . '</td>';
							echo '<td>'. $row['lead'] . '</td>';
							echo '<td>'. $row['proposal'] . '</td>';
                            echo '<td>'. $row['design'] . '</td>';
							echo '<td>'. $row['testing'] . '</td>';
							echo '<td>'. $row['development'] . '</td>';
							echo '<td>'. $row['maintenance'] . '</td>';
                            echo '<td>'. $row['invoice'] . '</td>';
							echo '<td>'. $row['delivery'] . '</td>';
							echo '<td>'. $row['user_id'] . '</td>';
							echo '<td width=250>';
                                echo '<a class="btn" href="read_quotation.php?id='.$row['id'].'&val='.$val.'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update_quotation.php?id='.$row['id'].'&val='.$val.'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete_quotation.php?id='.$row['id'].'&val='.$val.'">Delete</a>';
                                echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
                <tfoot>
                <tr>
                      <th>id</th>
					  <th>lead</th>
					  <th>proposal</th>
					  <th>design</th>
					  <th>testing</th>
					  <th>development</th>
					  <th>maintenance</th>
					  <th>invoice</th>
					  <th>delivery</th>
					  <th>user_id</th>
					  <th>Action</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
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

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
