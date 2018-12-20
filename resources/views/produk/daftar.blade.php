@extends('layout')
@section('judul')
Data Barang
@endsection
@section('konten')
	<div class="row">
		<div class="col-md-12">
			<!-- DATA TABLE -->
			<h3 class="title-5 m-b-35">Daftar Barang</h3>
			<div class="table-data__tool">
				<div class="table-data__tool-left">
					<div class="table-data__tool-right">
						<button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#ModalCreate">
							<i class="zmdi zmdi-plus"></i>add item</button>
							<div class="modal fade" id="ModalCreate" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="mediumModalLabel">Tambah Data Barang</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form action="{{ url('produk') }}" method="POST" enctype="multipart/form-data">
												{{ csrf_field() }}
												<div class="row form-group">
													<div class="col col-md-3">
														<label for="nama_produk" class=" form-control-label">Nama Produk</label>
													</div>
													<div class="col-12 col-md-9">
														<input type="text" id="nama_produk" name="nama_produk" class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col col-md-3">
														<label for="deskripsi" class=" form-control-label">Deskripsi</label>
													</div>
													<div class="col-12 col-md-9">
														<textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
													</div>
												</div>
												<div class="row form-group">
													<div class="col col-md-3">
														<label for="warna" class=" form-control-label">Warna</label>
													</div>
													<div class="col-12 col-md-9">
														<div class="well well-sm text-center">
		
		<div class="btn-group" data-toggle="buttons">
			
			<label class="btn btn-dark">
				<input style="opacity: 0;" type="checkbox" name="warna[]" value="hitam" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>

			<label class="btn btn-secondary">
				<input style="opacity: 0;" type="checkbox" name="warna[]" value="abu tua" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>

			<label class="btn btn-success">
				<input style="opacity: 0;" type="checkbox" name="warna[]" value="hijau" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>

			<label class="btn btn-primary">
				<input style="opacity: 0" type="checkbox" name="warna[]" value="biru tua" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>			
		
			<label class="btn btn-info">
				<input style="opacity: 0" type="checkbox" name="warna[]" value="biru langit" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>	
			
			</div>

		<div class="btn-group" data-toggle="buttons">		
		
			<label class="btn btn-default">
				<input style="opacity: 0" type="checkbox" name="warna[]" value="putih" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>			

			<label class="btn btn-warning">
				<input style="opacity: 0" type="checkbox" name="warna[]" value="kuning" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>			
		
			<label class="btn btn-danger">
				<input style="opacity: 0" type="checkbox" name="warna[]" value="merah" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>

			<label class="btn btn-abu">
				<input style="opacity: 0" type="checkbox" name="warna[]" value="abu muda" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>			
		
			<label class="btn btn-pink">
				<input style="opacity: 0" type="checkbox" name="warna[]" value="pink" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>			
		
		</div>

		<div class="btn-group" data-toggle="buttons">		

			<label class="btn btn-coklat">
				<input style="opacity: 0" type="checkbox" name="warna[]" value="coklat" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>

			<label class="btn btn-ungu">
				<input style="opacity: 0" type="checkbox" name="warna[]" value="ungu" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>

			<label class="btn btn-orange">
				<input style="opacity: 0" type="checkbox" name="warna[]" value="orange" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>

		</div>


	</div>
													</div>
												</div>
												<div class="row form-group">
													<div class="col col-md-3">
														<label for="model" class=" form-control-label">Model</label>
													</div>
													<div class="col-12 col-md-9">
														<input type="text" id="model" name="model" class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col col-md-3">
														<label for="stok" class=" form-control-label">Stok</label>
													</div>
													<div class="col-12 col-md-9">
														<input type="text" id="stok" name="stok" class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col col-md-3">
														<label for="harga" class=" form-control-label">Harga</label>
													</div>
													<div class="col-12 col-md-9">
														<input type="text" id="harga" name="harga" class="form-control">
													</div>
												</div>
												<input type="hidden" name="status" value="1">
												<div class="row form-group">
													<div class="col col-md-3">
														<label for="gambar" class=" form-control-label">Gambar Barang</label>
													</div>
													<div class="col-12 col-md-9">
														<input type="file" id="gambar" name="gambar" class="form-control">
													</div>
												</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
											<button type="submit" class="btn btn-primary">Tambah</button>
										</div>
									</form>
									</div>
								</div>
							</div>

						</div>
						<div class="table-responsive table-responsive-data2">
							<table class="table table-data2">
								<thead>
									<tr>
										<th>#</th>
										<th>Nama Produk</th>
										<th>Status Barang</th>
										<th>Warna</th>
										<th>Model</th>
										<th>Stok</th>
										<th>price</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; ?>
									@foreach($produk as $p)
									<tr class="tr-shadow">
										<td>{{ $no }}</td>
										<td>{{ $p->nama_produk }}</td>
										@if($p->status == 1)
										<td><label class="status--process">Tersedia</label></td>
										@else
										<td><label class="status--denied">Tidak Tersedia</label></td>
										@endif
										<td>{{ $p->warna }}</td>
										<td>{{ $p->model }}</td>
										<td>{{ $p->stok }}</td>
										<td>Rp. {{ number_format($p->harga) }}</td>
										<td>
											<div class="table-data-feature">
												<button class="item" data-toggle="modal" data-target="#ModalEdit{{ $no }}" data-toggle2="tooltip" data-placement="top" title="Edit">
													<i class="zmdi zmdi-edit"></i>
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
									<div class="modal fade" id="ModalEdit{{ $no }}" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="mediumModalLabel">Ubah Data Barang</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<?php
													$warna = explode(",", $p->warna);
													?>
													<form action="{{ url('produk/'.$p->id) }}" method="POST" enctype="multipart/form-data">
														{{ csrf_field() }}
														<input type="hidden" name="_method" value="PUT">
														<div class="row form-group">
															<div class="col col-md-3">
																<label for="nama_produk" class=" form-control-label">Nama Produk</label>
															</div>
															<div class="col-12 col-md-9">
																<input type="text" id="nama_produk" name="nama_produk" value="{{ $p->nama_produk }}" class="form-control">
															</div>
														</div>
														<div class="row form-group">
															<div class="col col-md-3">
																<label for="deskripsi" class=" form-control-label">Deskripsi</label>
															</div>
															<div class="col-12 col-md-9">
																<textarea name="deskripsi" id="deskripsi" class="form-control">{{ $p->deskripsi }}</textarea>
															</div>
														</div>
														<div class="row form-group">
															<div class="col col-md-3">
																<label for="warna" class=" form-control-label">Warna</label>
															</div>
															<div class="col-12 col-md-9">
																<div class="btn-group" data-toggle="buttons">
			<!-- {{ var_dump($warna) }} -->
			<label class="btn btn-dark {{ in_array('hitam',$warna)?'focus active':'' }}">
				<input style="opacity: 0;" type="checkbox" name="warna[]" value="hitam" {{in_array("hitam",$warna)?"checked":""}}>
				<span class="fa fa-check"></span>
			</label>

			<label class="btn btn-secondary {{ in_array('abu tua',$warna)?'focus active':'' }}">
				<input style="opacity: 0;" type="checkbox" name="warna[]" value="abu tua" autocomplete="off" checked>
				<span class="fa fa-check"></span>
			</label>

			<label class="btn btn-success {{ in_array('hijau',$warna)?'focus active':'' }}">
				<input style="opacity: 0;" type="checkbox" name="warna[]" value="hijau" autocomplete="off" checked>
				<span class="fa fa-check"></span>
			</label>

			<label class="btn btn-primary {{ in_array('biru tua',$warna)?'focus active':'' }}">
				<input style="opacity: 0" type="checkbox" name="warna[]" value="biru tua" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>			
		
			<label class="btn btn-info {{ in_array('biru langit',$warna)?'focus active':'' }}">
				<input style="opacity: 0" type="checkbox" name="warna[]" value="biru langit" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>	
			
			</div>

		<div class="btn-group" data-toggle="buttons">		
		
			<label class="btn btn-default {{ in_array('putih',$warna)?'focus active':'' }}">
				<input style="opacity: 0" type="checkbox" name="warna[]" value="putih" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>			

			<label class="btn btn-warning {{ in_array('kuning',$warna)?'focus active':'' }}">
				<input style="opacity: 0" type="checkbox" name="warna[]" value="kuning" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>			
		
			<label class="btn btn-danger {{ in_array('merah',$warna)?'focus active':'' }}">
				<input style="opacity: 0" type="checkbox" name="warna[]" value="merah" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>

			<label class="btn btn-abu {{ in_array('abu muda',$warna)?'focus active':'' }}">
				<input style="opacity: 0" type="checkbox" name="warna[]" value="abu muda" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>			
		
			<label class="btn btn-pink {{ in_array('pink',$warna)?'focus active':'' }}">
				<input style="opacity: 0" type="checkbox" name="warna[]" value="pink" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>			
		
		</div>

		<div class="btn-group" data-toggle="buttons">		

			<label class="btn btn-coklat {{ in_array('coklat',$warna)?'focus active':'' }}">
				<input style="opacity: 0" type="checkbox" name="warna[]" value="coklat" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>

			<label class="btn btn-ungu {{ in_array('ungu',$warna)?'focus active':'' }}">
				<input style="opacity: 0" type="checkbox" name="warna[]" value="ungu" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>

			<label class="btn btn-orange {{ in_array('orange',$warna)?'focus active':'' }}">
				<input style="opacity: 0" type="checkbox" name="warna[]" value="orange" autocomplete="off">
				<span class="fa fa-check"></span>
			</label>

		</div>
															</div>
														</div>
														<div class="row form-group">
															<div class="col col-md-3">
																<label for="model" class=" form-control-label">Model</label>
															</div>
															<div class="col-12 col-md-9">
																<input type="text" id="model" name="model" class="form-control" value="{{ $p->model }}">
															</div>
														</div>
														<div class="row form-group">
															<div class="col col-md-3">
																<label for="stok" class=" form-control-label">Stok</label>
															</div>
															<div class="col-12 col-md-9">
																<input type="text" id="stok" name="stok" class="form-control" value="{{ $p->stok }}">
															</div>
														</div>
														<div class="row form-group">
															<div class="col col-md-3">
																<label for="harga" class=" form-control-label">Harga</label>
															</div>
															<div class="col-12 col-md-9">
																<input type="text" id="harga" name="harga" class="form-control" value="{{ $p->harga }}">
															</div>
														</div>
														<div class="row form-group">
															<div class="col col-md-3">
																<label for="harga" class=" form-control-label">Status Barang</label>
															</div>
															<div class="col-12 col-md-9">
																<select name="status" class="form-control">
																	<option>Status</option>
																	<option value="1" @if($p->status == 1) selected @endif>Tersedia</option>
																	<option value="0" @if($p->status == 0) selected @endif>Tidak Tersedia</option>
																</select>
															</div>
														</div>
														<div class="row form-group">
															<div class="col col-md-3">
																<label for="gambar" class=" form-control-label">Gambar Barang</label>
															</div>
															<div class="col-12 col-md-9">
																<input type="file" id="gambar" name="gambar" class="form-control" value="{{ $p->gambar }}">
															</div>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
														<button type="submit" class="btn btn-success">Ubah</button>
													</div>
												</form>
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
@endsection