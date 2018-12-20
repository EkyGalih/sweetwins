@extends('layout2')
@section('judul2')
Belanja barang
@endsection
@section('konten2')
@section('judul_header')
Belanja Barang
@endsection
@section('deskripsi_header')
Silahkan Lengkapi form di bawah untuk memesan barang
@endsection
<div class="container">
	<div class="row">
		<div class="col-md-4 probootstrap-animate">
			<img src="{{ $beli->gambar }}" alt="{{ $beli->nama_produk }}">
		</div>
		<div class="col-md-4 probootstrap-animate">
			<form action="{{ url('penjualan') }}" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="nama_pembeli">Nama Anda</label>
					<input type="text" name="nama_pembeli" class="form-control">
				</div>
				<div class="form-group">
					<label for="nama_produk">Nama Produk</label>
					<input type="text" name="nama_produk" value="{{ $beli->nama_produk }}" class="form-control" readonly>
				</div>
				<div class="form-group">
					<label for="harga">Harga</label>
					<input type="text" name="harga" value="{{ $beli->harga }}" class="form-control" readonly>
				</div>
				<div class="form-group">
					<label for="kontak">Kontak</label>
					<input type="text" name="kontak" class="form-control">
				</div>
				<div class="form-group">
					<label for="jumlah_pesanan">Jumlah Pesanan</label>
					<input type="text" name="jumlah_barang" class="form-control">
				</div>
				<input type="hidden" name="status_bayar" value="0">
				<button type="submit" class="btn btn-ghost btn-ghost-black">
					Pesan
				</button>
			</form>
		</div>
	</div>
</div>
@endsection