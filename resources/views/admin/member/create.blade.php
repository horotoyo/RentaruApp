@extends('layouts.app')

@section('title', 'Create Member')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tambah Member
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Beranda</a></li>
    <li><a href="{{ route('member.index') }}">Member</a></li>
    <li class="active">Tambah Data</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <a href="{{ route('member.index') }}" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
        </div>

        <form method="post" action="{{ route('member.store') }}">
          @csrf
          <div class="box-body">

            <div class="form-group">
              <label for="nik">NIK</label>
              <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukan NIK" required>
            </div>

            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Masukan Nama" required>
            </div>

            <div class="form-group">
              <label for="address">Alamat</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="Masukan Alamat" required>
            </div>

            <label>Gender</label>
            <div class="form-group">
              <label>
                <input type="radio" name="gender" value="0" class="flat-red">
                Perempuan
              </label><br>
              <label>
                <input type="radio" name="gender" value="1" class="flat-red">
                Laki Laki
              </label>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-4">
                  <label>Tempat Lahir</label>
                  <input type="text" name="birth_of_place" class="form-control" placeholder="Tempat Lahir">
                </div>
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                  <input type="date" name="date_of_birth" class="form-control" placeholder="Tanggal Lahir">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="number_phone">Nomor HP</label>
              <input type="text" class="form-control" name="number_phone" id="number_phone" placeholder="Masukan Nomor HP" required>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Masukan Email" required>
            </div>

          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <a href="{{ route('member.index') }}" class="btn btn-default">Batal</a>
            <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
        </form>
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
@endsection

@section('script')
<!-- iCheck 1.0.1 -->
<script src="{{ asset('adminlte/plugins/iCheck/icheck.min.js') }}"></script>
<script type="text/javascript">
  $(function () {

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
  });
</script>
@endsection