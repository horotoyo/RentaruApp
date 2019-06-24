<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ (auth()->user()->photo)? Storage::url(auth()->user()->photo) : Avatar::create(auth()->user()->name)->toBase64() }}" class="img-circle" alt="User Image">
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
      <li class="{{ Request::is('admin') ? 'active' : '' }}">
        <a href="{{ route('admin') }}">
          <i class="fa fa-home"></i> <span>Beranda</span>
        </a>
      </li>

      {{-- Inventaris --}}
      <li class="treeview {{ Request::is('admin/type','admin/type/create','admin/product','admin/product/create') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-folder-open"></i> <span>Inventaris</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('admin/type','admin/type/create') ? 'active' : '' }}">
            <a href="{{route('type.index')}}"><i class="fa fa-circle-o"></i> Kategori</a>
          </li>
          <li class="{{ Request::is('admin/product','admin/product/create') ? 'active' : '' }}">
            <a href="{{route('product.index')}}"><i class="fa fa-circle-o"></i> Barang</a>
          </li>
        </ul>
      </li>

      {{-- Member --}}
      <li class="{{ Request::is('admin/member') ? 'active' : '' }}">
      <li class="{{ Request::is('admin/member','admin/member/create') ? 'active' : '' }}">
        <a href="{{route('member.index')}}">
          <i class="fa fa-users"></i> <span>Member</span>
        </a>
      </li>

      {{-- Peminjaman --}}
      <li class="{{ Request::is('admin/order') ? 'active' : '' }}">
      <li class="{{ Request::is('admin/order','admin/order/create') ? 'active' : '' }}">
        <a href="{{route('order.index')}}">
          <i class="glyphicon glyphicon-transfer"></i> <span>Peminjaman</span>
        </a>
      </li>

      <li class="header">SETTING MENU</li>

      {{-- Payment --}}
      <li class="{{ Request::is('admin/payment') ? 'active' : '' }}">
        <a href="{{ route('payment.index') }}">
          <i class="fa fa-cc-paypal"></i> <span>Payment</span>
        </a>
      </li>

      {{-- Account --}}
      <li class="treeview {{ Request::is('admin/user','admin/user/create','admin/role','admin/role/create') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-user"></i> <span>Account</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('admin/user','admin/user/create') ? 'active' : '' }}">
            <a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i> User</a>
          </li>
          <li class="{{ Request::is('admin/role','admin/role/create') ? 'active' : '' }}">
            <a href="{{route('role.index')}}"><i class="fa fa-circle-o"></i> Role</a>
          </li>
        </ul>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
