@extends('layout')
@section('judul')
Daftar User
@endsection
@section('konten')
<div class="row">
	<div class="col-md-12">
		<h3 class="title-5 m-b-35">Data User</h3>
		<div class="table-data__tool">
			<div class="table-data__tool-left">
				<div class="table-data__tool-right">
					<button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#ModalCreate">
						<i class="zmdi zmdi-plus"></i> Add User
					</button>
					<div class="modal fade" id="ModalCreate" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="mediumModalLabel">Tambah User</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form action="{{ url('home') }}" method="POST" enctype="multipart/form-data">
										{{ csrf_field() }}
										<div class="row form-group">
											<div class="col col-md-3">
												<label for="full_name" class=" form-control-label">Nama Lengkap</label>
											</div>
											<div class="col-12 col-md-9">
												<input type="text" id="full_name" name="nama_lengkap" class="form-control">
											</div>
										</div>
										<div class="row form-group">
											<div class="col col-md-3">
												<label for="username" class=" form-control-label">Username</label>
											</div>
											<div class="col-12 col-md-9">
												<input type="text" id="username" name="username" class="form-control">
											</div>
										</div>
										<div class="row form-group">
											<div class="col col-md-3">
												<label for="password" class=" form-control-label">Password</label>
											</div>
											<div class="col-12 col-md-9">
												<input type="password" id="password" name="password" class="form-control">
											</div>
										</div>
										<div class="row form-group">
											<div class="col col-md-3">
												<label for="email" class=" form-control-label">E-Mail</label>
											</div>
											<div class="col-12 col-md-9">
												<input type="text" id="email" name="email" class="form-control">
											</div>
										</div>
										<div class="row form-group">
											<div class="col col-md-3">
												<label for="gambar" class=" form-control-label">Gambar</label>
											</div>
											<div class="col-12 col-md-9">
												<input type="file" id="gambar" name="gambar" class="form-control">
											</div>
										</div>
										<div class="row form-group">
											<div class="col col-md-3">
												<label for="level" class=" form-control-label">Level</label>
											</div>
											<div class="col-12 col-md-9">
												<select name="level" class="form-control">
													<option>Level</option>
													<option value="3">Admin</option>
													<option value="2">Petugas</option>
													<option value="1">owner</option>
												</select>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">
												Batal
											</button>
											<button type="submit" class="btn btn-primary">
												Tambah
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="tabe-responsive tabe-responsive-data2">
			<table class="table table-data2">
				<thead>
					<tr>
						<th>#</th>
						<th>Full Name</th>
						<th>Username</th>
						<th>E-Mail</th>
						<th>Level User</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; ?>
					@foreach($user as $u)
					<tr>
						<td>{{ $no }}</td>
						<td>{{ $u->nama_lengkap }}</td>
						<td>{{ $u->username }}</td>
						<td>{{ $u->email }}</td>
							@if($u->level == 4)
							<td>Super Admin</td>
							@elseif($u->level == 3)
							<td>Admin</td>
							@elseif($u->level == 2)
							<td>Petugas</td>
							@elseif($u->level == 1)
							<td>Owner</td>
							@endif
							<td>
								<div class="table-data-feature">
									<button class="item" data-toggle="modal" data-target="#ModalEdit{{$no}}" data-toggle2="tooltip" data-placement="left" title="Edit">
										<i class="zmdi zmdi-edit"></i>
									</button>
									<button class="item" data-toggle="modal" data-target="#ModalDelete{{$no}}" data-toggle2="tooltip" data-placement="right" title="Delete">
										<i class="zmdi zmdi-delete"></i>
									</button>
								</div>
							</td>
					</tr>
					<?php $no++; ?>
					@endforeach
				</tbody>
			</table>			
		</div>
	</div>
</div>
@endsection