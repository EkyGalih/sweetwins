@extends('layout2')
@section('judul2', 'Detail Produk')
@section('judul_header', 'Detail Produk '. $detail_produk->nama_produk)
@section('deskripsi_header')
{{ $detail_produk->deskripsi }}
@endsection
@section('additional-css')
<link href="{{ asset('plugins/admin/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('plugins/admin/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
@endsection
@section('konten2')
<section id="next-section" class="probootstrap-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 mb70 section-heading probootstrap-animate">
				<h2>{{ $detail_produk->nama_produk }}</h2>
				<p class="lead">{{ $detail_produk->deskripsi }}.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<p><img src="{{ asset($detail_produk->gambar) }}" width="500px" height="400px" alt="{{ $detail_produk->gambar }}" class="img-responsive"></p>
				<div class="row">
					<a href="{{ route('produk.beli', [$detail_produk->token_produk,$detail_produk->produk_id]) }}" class="btn btn-success btn-block btn-ghost">
						<i class="fa fa-shopping-cart"></i> Beli
					</a>
				</div>
			</div>
			<div class="col-md-6">
				@php
				$komentar = \App\Komentar::join('user', 'komentar.user_id', '=', 'user.id')
				->where('produk_id', '=', $detail_produk->id)
				->orderBy('komentar.created_at')
				->limit('10')
				->get();
				@endphp
				@foreach ($komentar as $komen)
				<div class="row">
					<h4 class="title">{{ $komen['nama_lengkap'] }}</h4>
					<p class="description">{{ $komen['komentar'] }} <sup style="color: grey">{{ $komen['created_at'] }}</sup></p>
				</div>
				@endforeach
				<form action="{{ route('produk.komentar') }}" method="POST">
					@csrf
					<input type="hidden" name="produk_id" value="{{ $detail_produk->produk_id }}">
					<textarea name="komentar" class="form-control"></textarea>
					<button type="submit" class="btn btn-secondary btn-block">
						<i class="fa fa-comment"></i> Komentar
					</button>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection