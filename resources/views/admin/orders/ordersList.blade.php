@extends('admin.layouts.master')
@section('title','List Order Product')
@section('content')
@yield('toastr-success')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">List Order Produk</h4>
                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Foto Produk</th>
                            <th>Nama Pembeli</th>
                            <th>Email</th>
                            <th>No. Telp</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($order as $data)
                        <tr class="text-center">
                            <td>{{$no++}}</td>
                            <td>
                                <a class="image-popup-no-margins" href="{{ url('assets/product/'.$data->foto_produk) }}">
                                    <img class="img-fluid" alt="" src="{{ url('assets/product/'.$data->foto_produk) }}" width="100px" height="50px">
                                </a>
                            </td>
                            <td>{{ $data->first_name }} {{ $data->last_name }}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->telp}}</td>
                            <td>@currency($data->harga)</td>
                            <td>
                                <button type="button" style="width: 100%" class="btn btn-sm btn-info waves-effect waves-light" data-toggle="modal" data-target="#faktur{{$data->id_produk}}"><i class="fas fa-eye"> </i> Faktur</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@foreach ($order as $data)
<div class="col-sm-6 col-md-3 mt-4">
    <!-- sample modal content -->
    <div id="faktur{{$data->id_produk}}" class="modal fade  bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">{{ $data->first_name }} {{ $data->last_name }} - {{ $data->nama }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form style="padding: 15px;" action="{{ url('/product/update/'.$data->id_produk) }}" method="POST" enctype="multipart/form-data">
                       @csrf
                       <h5 class="mt-0">Informasi Product</h5><hr>
                        <div class="form-group mt-2">
                            <div class="row">
                                <label class="col-md-3" for="varchar">Nama Produk</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{$data->nama}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-3" for="deskripsi">Harga Produk </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="@currency($data->harga)" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-3" for="deskripsi">Keterangan <br>
                                    <small>Pastikan deskripsi produk memuat spesifikasi, ukuran, bahan, masa berlaku, dan lainnya. Semakin detail, semakin berguna bagi pembeli.</small>
                                </label>
                                <div class="col-md-9">
                                    <textarea placeholder="Text here" class="form-control" rows="8" cols="20" value="{{ $data->keterangan }}" readonly>{{$data->keterangan}}</textarea>

                                </div>
                            </div>
                        </div>

                        <h5 class="mt-4">Informasi Pembeli</h5><hr>
                        <div class="form-group mt-2">
                            <div class="row">
                                <label class="col-md-3" for="varchar">Nama Pembeli</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{$data->first_name}} {{ $data->last_name }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-3" for="deskripsi">Email </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{ $data->email }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-3" for="deskripsi">No Telp </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{ $data->telp }}" readonly>
                                </div>
                            </div>
                        </div>

                        <h5 class="mt-4">Informasi Pengiriman</h5><hr>
                        <div class="form-group mt-2">
                            <div class="row">
                                <label class="col-md-3" for="varchar">Alamat Pengiriman</label>
                                <div class="col-md-9">
                                    <textarea placeholder="Text here" class="form-control" rows="8" cols="20" readonly>{{$data->alamat}}, {{ $data->kabupaten }}, {{ $data->provinsi }} ({{ $data->kode_pos }})</textarea>
                                </div>
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Keluar</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

</div>
@endforeach

@endsection
<script>
    function Angka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
</script>
