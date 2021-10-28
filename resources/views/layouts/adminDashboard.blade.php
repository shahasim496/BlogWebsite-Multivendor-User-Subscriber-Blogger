
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
  
  
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Admin Dashboard</span>
              <span class="pull-right-container">
              </span>
            </a>
          </li>
          <li>
            <a href="/newblog/posts">
              <i class="fa fa-th"></i> <span>Posts</span>
            </a>
          </li>
          {{-- <li class="treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Posts</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="/newblog/posts/create"><i class="fa fa-circle-o"></i>New Post</a></li>
              <li><a href="/newblog/posts"><i class="fa fa-circle-o"></i>Manage Posts</a></li>
              
            </ul>
          </li> --}}
  
          <li class="treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Bloggers</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="/newblog/register"><i class="fa fa-circle-o"></i>Add Bloggers</a></li>
              <li><a href="/newblog/bloggers"><i class="fa fa-circle-o"></i>Manage Bloggers</a></li>
              
            </ul>
          </li>
  
          <li class="treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Categories</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="/newblog/Categorie/create"><i class="fa fa-circle-o"></i>Add Categories</a></li>
              <li><a href="/newblog/Categorie"><i class="fa fa-circle-o"></i>Manage Categories</a></li>
              
            </ul>
          </li>
  
          <li><a href="/newblog/subscriber"><i class="fa fa-book"></i> <span>Subscribers</span></a></li>
          <li class="header">LABELS</li>
          <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
          <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Comments</span></a></li>
          <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>New</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">