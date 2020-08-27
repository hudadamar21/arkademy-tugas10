@extends('template')
@section('content')
  <div class="row">
    <div class="col-md-6">
      <div class="card shadow">
        <h5 class="card-header">Featured</h5>
        <div class="card-body">
          <form action="{{ route('produk.create') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="nama_produk">Nama Produk</label>
              <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="nama produk" value="{{ old('nama_produk') }}">
            </div>
            <div class="form-group">
              <label for="harga">Harga</label>
              <input type="number" class="form-control" name="harga" id="harga" placeholder="harga" value="{{ old('harga') }}">
            </div>
            <div class="form-group">
              <label for="jumlah">Jumlah</label>
              <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="jumlah" value="{{ old('jumlah') }}">
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea type="text" class="form-control" name="keterangan" id="keterangan" placeholder="keterangan">{{ old('keterangan') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection