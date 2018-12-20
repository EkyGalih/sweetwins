@extends('layout2')
@section('judul2')
Tentang SweetWins
@endsection
@section('judul_header')
Tentang SweetWins
@endsection
@section('deskripsi_header')
Informasi terkait olshop muslimah Sweetwins
@endsection
@section('konten2')
<section id="next-section" class="probootstrap-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 mb70 section-heading probootstrap-animate">
				<h2>Cerita Kami</h2>
				<p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			</div>
		</div>
		<div class="row mb50">
			<div class="col-md-12">
				<p><img src="img/hero_bg_1.jpg"  alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			</div>
			<div class="col-md-6">
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			</div>
		</div>
	</div>
</section>

<section class="probootstrap-section probootstrap-border-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 mb70 section-heading probootstrap-animate">
				<h2>Tim</h2>
				<p class="lead">SweetWins dibangun dan dijalankan oleh beberapa kelompok anak muda yang ingin sekedar mencari rupiah.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6 probootstrap-animate">
				<img src="{{ asset('img/dena_dwi.jpg') }}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
				<h3>Dena Dwi Septiyana</h3>
				<p>Founder & CEO</p>
			</div>
			<div class="col-md-3 col-sm-6 probootstrap-animate">
				<img src="{{ asset('img/denda_afriliani.jpg') }}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">  
				<h3>Denda Afriliani</h3>
				<p>Founder & Marketing</p>
			</div>
			<div class="col-md-3 col-sm-6 probootstrap-animate">
				<img  style="height: 260px; width: 320px;" src="{{ asset('img/munaam.jpg') }}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
				<h3>Muna'am</h3>
				<p>Owner</p>
			</div>
			<div class="col-md-3 col-sm-6 probootstrap-animate">
				<img src="{{ asset('img/eky.jpg') }}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
				<h3>Eky Galih Gunanda</h3>
				<p>Kurir</p>
			</div>
		</div>
	</div>
</section>
@endsection