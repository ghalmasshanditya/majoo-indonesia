@extends('admin.layouts.master')
@section('title','List Produk')
@section('content')
@yield('toastr-success')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Produk</h4>
                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#tambah">+ Tambah Data</button>
                <br><br>
                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Foto Produk</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($produk as $data)
                        <tr class="text-center">
                            <td>{{$no++}}</td>
                            <td>
                                <a class="image-popup-no-margins" href="{{ url('assets/product/'.$data->foto_produk) }}">
                                    <img class="img-fluid" alt="" src="{{ url('assets/product/'.$data->foto_produk) }}" width="100px" height="50px">
                                </a>
                            </td>
                            <td>{{ $data->nama }}</td>
                            <td>@currency($data->harga)</td>
                            <td>{{$data->keterangan}}</td>
                            <td>
                                <button type="button" style="width: 100%" class="btn btn-sm btn-warning waves-effect waves-light" data-toggle="modal" data-target="#edit{{$data->id_produk}}"><i class="fas fa-edit"> </i> Edit</button><br>
                                <button style="width: 100%" type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$data->id_produk}}">
                                    <i class="fas fa-trash"> </i> Hapus </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
<div class="col-sm-6 col-md-3 mt-4">
    <!-- sample modal content -->
    <div id="tambah" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Tambah Data Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form style="padding: 15px;" action="/product/insert" method="POST" enctype="multipart/form-data">
                       @csrf
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-3" for="varchar">Nama Produk <label class="text-danger">*</label></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama')}}" name="nama" id="nama" placeholder="Nama Produk"/>
                                    <div class="invalid-feedback">
                                        @error('nama')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-3" for="deskripsi">Harga Produk <label class="text-danger">*</label></label>
                                <div class="col-md-9">
                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                        <span class="input-group-addon bootstrap-touchspin-prefix input-group-prepend">
                                            <span class="input-group-text">Rp. </span>
                                        </span>
                                        <input id="rupiah1" type="text" name="harga" class="form-control uang @error('harga') is-invalid @enderror" value="{{old('harga')}}" placeholder="Harga Produk" onkeypress="return Angka(event)">
                                    </div>
                                    <small class="text-danger">
                                        @error('harga')
                                            {{ $message }}
                                        @enderror
                                    </small>

                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-3" for="deskripsi">Keterangan <br>
                                    <small>Pastikan deskripsi produk memuat spesifikasi, ukuran, bahan, masa berlaku, dan lainnya. Semakin detail, semakin berguna bagi pembeli.</small>
                                </label>
                                <div class="col-md-9">

                                    <textarea placeholder="Text here" class="form-control @error('keterangan') is-invalid @enderror" id="#" rows="8" cols="20" maxlength="200" onkeyup="charcounts('value','countchar')" onkeydown="charcounts('value','countchar')" onmouseout="charcounts('value','countchar')" name="keterangan"
                                    placeholder= "DESKRIPRSI PRODUK">{{ old('keterangan') }}</textarea>
                                    <small class="text-danger">
                                        @error('keterangan')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-3" for="deskripsi">Foto Sampul (Utama) <label class="text-danger">*</label>  <br>
                                <small>Format gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px (Untuk gambar optimal gunakan ukuran minimum 700 x 700 px) </small> <br>
                                </label>
                                <div class="col-md-9">
                                    <input type="file" class="photo-input @error('foto_produk') is-invalid @enderror" value="{{old('foto_produk')}}" name="foto_produk">

                                    <small class="text-danger">
                                        @error('foto_produk')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Keluar</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Kirim</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
@foreach ($produk as $data)
<div class="col-sm-6 col-md-3 mt-4">
    <!-- sample modal content -->
    <div id="edit{{$data->id_produk}}" class="modal fade  bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Edit Data Produk - {{ $data->nama }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form style="padding: 15px;" action="{{ url('/product/update/'.$data->id_produk) }}" method="POST" enctype="multipart/form-data">
                       @csrf
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-3" for="varchar">Nama Produk <label class="text-danger">*</label></label>
                                <div class="col-md-9">
                                    <input type="hidden" name="unlink" value="{{ $data->foto_produk }}">
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{$data->nama}}" name="nama" id="nama" placeholder="Nama Produk"/>
                                    <div class="invalid-feedback">
                                        @error('nama')
                                            {{ $message }}
                                        @enderror
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-3" for="deskripsi">Harga Produk <label class="text-danger">*</label></label>
                                <div class="col-md-9">
                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                        <span class="input-group-addon bootstrap-touchspin-prefix input-group-prepend">
                                            <span class="input-group-text">Rp. </span>
                                        </span>
                                        <input id="rupiah1" type="text" name="harga" class="form-control uang @error('harga') is-invalid @enderror" value="{{ $data->harga }}" placeholder="Harga Produk" onkeypress="return Angka(event)">
                                    </div>
                                    <small class="text-danger">
                                        @error('harga')
                                            {{ $message }}
                                        @enderror
                                    </small>

                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-3" for="deskripsi">Keterangan <br>
                                    <small>Pastikan deskripsi produk memuat spesifikasi, ukuran, bahan, masa berlaku, dan lainnya. Semakin detail, semakin berguna bagi pembeli.</small>
                                </label>
                                <div class="col-md-9">
                                    <textarea placeholder="Text here" class="form-control @error('keterangan') is-invalid @enderror" id="nilai" rows="8" cols="20" maxlength="200" name="keterangan" value="{{ $data->keterangan }}">{{$data->keterangan}}</textarea>
                                    <small class="invalid-feedback">
                                        @error('keterangan')
                                        {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                        </div>

                            {{-- <textarea class="form-control  @error('keterangan') is-invalid @enderror" value="{{ old('keterangan') }}" rows="5" name="keterangan" id="" placeholder="keterangan">{{$data->keterangan}}</textarea> --}}
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-3" for="deskripsi">Foto Sampul (Utama) <br>
                                <small>Format gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px (Untuk gambar optimal gunakan ukuran minimum 700 x 700 px) </small> <br>
                                </label>
                                <div class="col-md-9">
                                    <input type="file" class="photo-input" name="foto_produk" data-initial-preview="<img src={{ url('assets/product/'.$data->foto_produk) }} class='kv-preview-data file-preview-image'/>" data-show-remove="true">
                                    <div class="invalid-feedback">
                                        @error('foto_produk')
                                            {{ $message }}
                                        @enderror
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Keluar</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Kirim</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

</div>
@endforeach
@foreach ($produk as $data)
    <div class="modal fade" id="delete{{$data->id_produk}}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">{{ $data->nama}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <p class="mb-0">Apakah anda yakin ingin menghapus Produk ini ?</p>
                </div>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger btn-outline-light" data-dismiss="modal">Tidak</button>
                <a href="/product/delete/{{$data->id_produk}}" class="btn btn-primary btn-outline-light">Iya</a>
                </div>
            </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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
