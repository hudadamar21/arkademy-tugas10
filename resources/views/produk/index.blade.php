@extends('template')
@section('content')
    <div class="row">
      @forelse ($produk as $pd)
        <div class="col-md-3">
          <div class="card shadow-sm" style="min-width: 17rem;">
            <div class="card-body">
              <h5 class="card-title text-uppercase">{{ $pd->nama_produk }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">Harga : Rp.{{ $pd->harga }}</h6>
              <h6 class="card-subtitle mb-2 text-muted">Jumlah : {{ $pd->jumlah }}</h6>
              <p class="card-text">Keterangan : <br/> {{ $pd->keterangan }}</p>
              <form action="{{ route('produk.delete', $pd->id) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" onclick="return confirm('yakin, mau hapus produk \'{{ $pd->nama_produk }}\'')" class="btn btn-danger btn-sm float-right">Hapus</button>
              </form>
              <a href="{{ route('produk.edit', $pd->id) }}" class="btn btn-primary btn-sm float-right mr-2">Edit</a>
            </div>
          </div>
        </div>
        @empty
        <h2>Produk tidak ditemukan</h2>
      @endforelse
    </div>
@endsection