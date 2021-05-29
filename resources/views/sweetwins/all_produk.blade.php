@extends('layout2')
@section('judul2')
Daftar Produk
@endsection
@section('judul_header')
Produk Kami
@endsection
@section('deskripsi_header')
semua jenis khimar dan cadar dengan berbagai macam warna tersedia di <a href="https://uicookies.com/" target="_blank">olshop.com
@endsection
@section('konten2')
<div class="container">
	<div class="row">
		@foreach($produk as $p)
		<div class="col-md-4 probootstrap-animate">
			<div class="probootstrap-block-image" id="{{ $loop->iteration }}">
				<figure><a href="#"><img src="{{ $p->gambar }}" alt="{{ $p->gambar }}" width="600px" height="400px"></a></figure>
				<div class="text">
					<h3 class="mb30"><a href="#">{{ $p->nama_produk }}</a></h3>
					<p class="dark">{{ $p->deskripsi }}</p>
					<p class="secondary-color rate">Price IDR. {{ number_format($p->harga) }}</p>
					<hr>
					<p class="clearfix"><button data-toggle="modal" data-target="#ModalView{{ $loop->iteration }}" class="pull-left btn btn-ghost btn-ghost-black btn-sm">Details</button>
						@if($p->status == 0)
						<label class="pull-right label label-danger">Tidak Tersedia</label>
						@elseif($p->status == 1)
						<label class="pull-right label label-success">Tersedia</label>
						@endif
					</p>
				</div>
			</div>
		</div>
		<div class="modal fade" id="ModalView{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" id="mediumModalLabel">Details Produk</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="wrapper row">
							<div class="preview col-md-6">
								<div class="preview-pic tab-content">
									<div class="tab-pane active" id="pic-1"><img src="{{ $p->gambar }}" /></div>
								</div>
							</div>
							<div class="details col-md-6">
								<h3 class="product-title">{{ $p->nama_produk }} </h3>
									<p class="product-description">{{ $p->deskripsi }}</p>
									<h4 class="price">Price <span><label class="secondary-color rate">IDR. {{ number_format($p->harga) }}</label></span></h4>
									<h5 class="sizes">Warna
										<label class="size btn btn-pink">
											<input style="opacity: 0;" type="checkbox">
											<span class="fa fa-check"></span>
										</label>
										<label class="size btn btn-ungu">
											<input style="opacity: 0;" type="checkbox">
											<span class="fa fa-check"></span>
										</label>
										<label class="size btn btn-abu">
											<input style="opacity: 0;" type="checkbox">
											<span class="fa fa-check"></span>
										</label>
										<label class="size btn btn-coklat">
											<input style="opacity: 0;" type="checkbox">
											<span class="fa fa-check"></span>
										</label>
										<label class="size btn btn-coklat">
											<input style="opacity: 0;" type="checkbox">
											<span class="fa fa-check"></span>
										</label>
									</h5>
									<h5 class="sizes">Model
										<span class="size" data-toggle="tooltip" title="{{ $p->model }}"><label>{{ $p->model }}</label></span>
									</h5>
									@if($p->status == 1)
									<h5 class="sizes">Stok Tersedia
										<span class="size" data-toggle="tooltip" title="{{ $p->stok }}"><label class="label label-warning">{{ $p->stok }}</label> Barang</span>
									</h5>
									@elseif($p->status == 0) <label class="label label-danger">Tidak Tersedia</label>
									@endif
								</div>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						@if($p->status == 1)
						<a type="button" href="{{ url('beli/'.$p->token_produk,$p->id)}}" class="btn btn-ghost btn-ghost-black">Beli</a>
						@endif
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection