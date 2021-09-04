    @extends('users.layouts.master')
    @section('title','Majoo Indonesia')
    @section('content')
    <h2 class="mt-4">Produk </h2><small class="mt-0 mb-4">Menampilkan @php echo count($produk) @endphp Produk</small>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 mt-1">

        @foreach ($produk as $data)
        <div class="col">
            <div class="card shadow">
                <div class="text-center">
                    <img src="{{ asset('assets') }}/product/{{ $data->foto_produk }}" class="rounded" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="text-center">{{ $data->nama }}</h5>
                    <h5 class="text-center mt-3">@currency($data->harga)</h5>
                    <p class="card-text mt-3">{{ $data->keterangan }}</p>
                    <div class="d-grid gap-2 col-6 mx-auto" >
                        <a href="/check-out/{{ $data->id_produk }}"><button class="btn btn-sm text-white rounded" style="background:#07C53C; border-radius: 50%; width:100%" type="button">Beli</button></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endsection

