
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
            <i class="fa fa-dashboard"></i> <span>Subscriber Dashboard </span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li>
          <a href="/newblog/sposts">
            <i class="fa fa-th"></i> <span>Posts</span>
          </a>
        </li>
        <li><a href="/newblog/mybloggers"><i class="fa fa-book"></i> <span>Bloggers</span></a></li>
       
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