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
    <li><a href="{{ route('product.index') }}">Member</a></li>
    <li class="active">Tambah Data</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <a href="{{ route('product.index') }}" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
        </div>

        <form method="post" action="{{ route('product.store') }}">
          @csrf
          <div class="box-body">

            <div class="form-group">
                <label for="type_product">Kategori Produk</label>
                <select class="form-control" name="type_product">
                    <option value="">-- Kategori Produk --</option>
                    @foreach ($types as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
            <label for="merk">Merek</label>
            <input type="text" class="form-control" name="merk" id="merk" placeholder="Masukan Merek" >
            </div>

            <div class="form-group">
              <label for="seri">Seri</label>
              <input type="text" class="form-control" name="seri" id="seri" placeholder="Masukan Seri" >
            </div>

            <div class="form-group">
              <label for="serial_number">Serial Number</label>
              <input type="text" class="form-control" name="serial_number" id="serial_number" placeholder="Masukan Serial Number" >
            </div>

            <label>Kondisi</label>
            <div class="form-group">
              <label>
                <input type="radio" name="condition" value="baru" class="flat-red">
                Baru
              </label><br>
              <label>
                <input type="radio" name="condition" value="seken" class="flat-red">
                Seken
              </label><br>
              <label>
                <input type="radio" name="condition" value="rusak" class="flat-red">
                Rusak
              </label><br>
              <label>
                <input type="radio" name="condition" value="hilang" class="flat-red">
                Hilang
              </label>
            </div>

            <div class="form-group">
              <label for="price">Harga</label>
              <input type="text" class="form-control" name="price" id="price" placeholder="ex: 5000000" >
            </div>

            <div class="form-group">
              <label for="status">Status</label>
              <input type="text" class="form-control" name="status" id="status" placeholder="ex: Beli, Pemberian, Pinjaman dsb." >
            </div>

            <div class="form-group">
              <label for="source">Sumber</label>
              <input type="text" class="form-control" name="source" id="source" placeholder="ex: Nama Orang, Toko, Instansi dsb." >
            </div>

            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea name="description" class="form-control" placeholder="Deskripsikan info produk..."></textarea>
            </div>

          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <a href="{{ route('product.index') }}" class="btn btn-default">Batal</a>
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
