@extends('layout')
@section('judul')
FeedBack
@endsection
@section('konten')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="title-5 m-b-35">FeedBack</h3>
			<div class="table-data__tool">
				<div class="table-data__tool-left">
					<div class="table-data__tool-right">
						<div class="table-responsive table-responsive-data2">
							<table class="table table-data2">
								<thead>
									<tr>
										<th>#</th>
										<th>Nama Pengirim</th>
										<th>Kontak</th>
										<th>Komentar</th>
										<th>Rating</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; ?>
									@foreach($komentar as $k)
									<tr class="tr-shadow">
										<td>{{ $no }}</td>
										<td>{{ $k->nama }}</td>
										<td>{{ $k->kontak }}</td>
										<td>{{ $k->komentar }}</td>
										@if($k->rating == 1)
										<td>1 bintang</td>
										@elseif($k->rating == 2)
										<td>2 bintang</td>
										@elseif($k->rating == 3)
										<td>3 bintang</td>
										@elseif($k->rating == 4)
										<td>4 bintang</td>
										@elseif($k->rating == 5)
										<td>5 bintang</td>
										@endif
										<td>
											<div class="table-data-feature">
												<button class="item" data-toggle="modal" data-target="#ModalView{{ $no }}" data-toggle2="tooltip" data-placement="top" title="View">
													<i class="zmdi zmdi-eye"></i>
												</button>
												<button class="item" data-toggle="modal" data-target="#ModalDelete{{ $no }}" data-toggle2="tooltip" data-placement="top" title="Delete">
													<i class="zmdi zmdi-delete"></i>
												</button>
											</div>
										</td>
									</tr>
									<div class="modal fade" id="ModalView{{ $no }}" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="mediumModalLabel">Detail FeedBack</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<p><img src="{{ $k->gambar }}" style="height: 100px; width: 100px;"> {{ $k->komentar }}</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
												</div>
											</div>
										</div>
									</div>
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
													<form action="{{ url('komentar/'.$k->id) }}" method="POST">
														{{ csrf_field() }}
														<input type="hidden" name="_method" value="DELETE">
														Apakah anda yakin ingin menghapus Komentar <strong>{{ $k->nama }}?</strong>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
														<button type="submit" class="btn btn-danger">Ya</button>
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
	</div>
</div>
@endsection