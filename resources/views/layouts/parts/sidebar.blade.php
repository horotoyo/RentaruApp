<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ auth()->user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> {{ auth()->user()->role->name }}</a>
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
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU UTAMA</li>
      <li class="{{ Request::is('home') || Request::is('home/*') ? 'active' : '' }}">
        <a href="{{ route('home.index') }}">
          <i class="fa fa-home"></i> <span>Home</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-truck"></i> <span>Pentasyarupan</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-file"></i> <span>Laporan</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>