@extends('layout2')
@section('judul2')
SweetWins - Olshop Muslimah
@endsection
@section('judul_header')
Toko Penyedia khimar dan cadar
@endsection
@section('deskripsi_header')
semua jenis khimar dan cadar dengan berbagai macam warna tersedia di <a href="https://uicookies.com/" target="_blank">olshop.com
@endsection
@section('konten2')
  <section id="next-section">
    <div class="container-fluid">
      <div class="row probootstrap-gutter0">
        @foreach($produk as $p)
        <div class="col-md-4 col-sm-6">
          <a href="portfolio-single.html" class="probootstrap-hover-overlay">
            <img src="{{ $p->gambar }}" alt="{{ $p->nama_produk }}" style="height: 45%; width: 45%" class="img-responsive">
            <div class="probootstrap-text-overlay">
              <h3>{{ $p->nama_produk }}</h3>
              <p>{{ $p->deskripsi }}</p>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- START: section -->
  <section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 mb70 section-heading probootstrap-animate">
          <h2>Produk Kami</h2>
          <p class="lead">Segala produk khimar dan cadar tersedia di toko kami, anda hanya tinggal memilih dan menunggu barang sampai.</p>
        </div>
      </div>
      <div class="row mb70">
        @foreach($produk2 as $p2)
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-block-image">
            <figure><a href="#"><img src="{{ $p2->gambar }}" alt="Free Bootstrap Template by uicookies.com"></a></figure>
            <div class="text">
              <h3 class="mb30"><a href="#">{{ $p2->nama_produk }}</a></h3>
              <p class="dark">{{ $p->deskripsi }}</p>
              <p class="secondary-color rate">Price IDR. {{ number_format($p2->harga) }}</p>
              <hr>
              <p class="clearfix"><button class="pull-left btn btn-ghost btn-ghost-black btn-sm">Details</button></p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-4 probootstrap-animate">
          <p class="text-center">
            <a href="{{ url('all_produk') }}" class="btn btn-ghost btn-ghost-white btn-lg btn-block" role="button">View All Products</a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- END: section -->

  
  <!-- START: section -->
  <section class="probootstrap-section probootstrap-section-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 section-heading mb50 text-center probootstrap-animate">
          <h2>More Benefits</h2>
          <p class="lead">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <h3 class="heading-with-icon"><i class="icon-heart2"></i> <span>We bring emotion</span></h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <h3 class="heading-with-icon"><i class="icon-rocket"></i> <span>We guide companies</span></h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <h3 class="heading-with-icon"><i class="icon-image"></i> <span>We design extraordinary</span></h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
        </div>
        <div class="clearfix visible-md-block"></div>
        <div class="col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <h3 class="heading-with-icon"><i class="icon-briefcase"></i> <span>We bring emotion</span></h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <h3 class="heading-with-icon"><i class="icon-chat"></i> <span>We guide companies</span></h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <h3 class="heading-with-icon"><i class="icon-colours"></i> <span>We design extraordinary</span></h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
        </div>
        <div class="clearfix visible-sm-block"></div>
      </div>
    </div>
  </section>
  <!-- END: section -->
  
@endsection