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
          <i class="fa fa-home"></i> <span>Beranda</span>
        </a>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-folder-open"></i> <span>Inventaris</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="">
            <a href="#"><i class="fa fa-circle-o"></i> Kategori</a>
          </li>
          <li class="">
            <a href="#"><i class="fa fa-circle-o"></i> Barang</a>
          </li>
        </ul>
      </li>

      <li class="">
        <a href="#">
          <i class="glyphicon glyphicon-transfer"></i> <span>Peminjaman</span>
        </a>
      </li>

      <li class="header">SETTING MENU</li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i> <span>Account</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="">
            <a href="#"><i class="fa fa-circle-o"></i> User</a>
          </li>
          <li class="">
            <a href="#"><i class="fa fa-circle-o"></i> Role</a>
          </li>
        </ul>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>