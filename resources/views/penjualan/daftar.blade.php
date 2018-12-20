@extends('layout')
@section('judul')
Data Barang
@endsection
@section('konten')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<!-- DATA TABLE -->
			<h3 class="title-5 m-b-35">Daftar Pemesanan & Penjualan Barang</h3>
			<div class="table-data__tool">
				<div class="table-data__tool-left">
					<div class="table-data__tool-right">
						<div class="table-responsive table-responsive-data2">
							<table class="table table-data2">
								<thead>
									<tr>
										<th>#</th>
										<th>Nama Customer</th>
										<th>Nama Produk</th>
										<th>Kontak</th>
										<th>Jumlah Barang</th>
										<th>Status Pembayaran</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; ?>
									@foreach($penjualan as $p)
									<tr class="tr-shadow">
										<td>{{ $no }}</td>
										<td>{{ $p->nama_pembeli }}</td>
										<td>{{ $p->nama_produk }}</td>
										<td>{{ $p->kontak }}</td>
										<td>{{ $p->jumlah_barang }} Barang</td>
										@if($p->status_bayar == 1)
										<td><label class="status--process">Sudah Bayar</label></td>
										@else
										<td><label class="status--denied">Belum Bayar</label></td>
										@endif
										<td>
											<div class="table-data-feature">
												<button class="item" data-toggle="modal" data-target="#ModalView{{ $no }}" data-toggle2="tooltip" data-placement="top" title="Lihat Detail Pemesanan">
													<i class="zmdi zmdi-eye"></i>
												</button>
												<button class="item" data-toggle="modal" data-target="#ModalDelete{{ $no }}" data-toggle2="tooltip" data-placement="top" title="Delete">
													<i class="zmdi zmdi-delete"></i>
												</button>
											</div>
										</td>
									</tr>
									<div class="modal fade" style="margin-top: 14%;" id="ModalDelete{{ $no }}" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-sm" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="mediumModalLabel">Hapus Data Barang</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form action="{{ url('produk/'.$p->id) }}" method="POST">
														{{ csrf_field() }}
														<input type="hidden" name="_method" value="DELETE">
														Apakah anda yakin ingin menghapus barang <strong>{{ $p->nama_produk }}?</strong>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
														<button type="submit" class="btn btn-danger">Ya</button>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="modal fade" id="ModalView{{ $no }}" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="mediumModalLabel">Ubah Data Barang</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
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
																	<span class="size" data-toggle="tooltip" title="{{ $p->warna }}"><label>{{ $p->warna }}</label></span>
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
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
												</div>
											</div>
										</div>
									</div>
									<?php $no++; ?>
									@endforeach
								</tbody>
							</table>
						</div>
						<!-- END DATA TABLE -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection