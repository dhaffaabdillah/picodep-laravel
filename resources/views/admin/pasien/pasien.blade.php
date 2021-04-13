@extends('template.app')
@section('body')
	
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
		<br>
		
	<h2>Data Pasien</h2>
		<div class="table-responsive">
			<form action="/secret/pasien/cari" method="get">
				<input type="text" name="cari" placeholder="Cari Data Pasien" value="{{ old('cari') }}">
				<input type="submit" name="CARI">
			</form>
			<a class="btn btn-success btn-sm mr" data-toggle="modal" data-target="#tambahPasien">Tambah Pasien</a>
			<table class="table table-striped table-sm">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama</th>
						<th scope="col">Status</th>
						<th scope="col">Alamat</th>
						<th scope="col">Tanggal Pemeriksaan</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>

				<tbody>
					@foreach($pasiens as $p)
					<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $p->NamaPasien}}</td>
						<td>{{ $p->statuspasien->NamaStatus }}</td>
						<td>{{ $p->Alamat}}</td>
						<td>{{ $p->TanggalPemeriksaan}}</td>
						<td>
							<!-- <a href="/secret/pasien/detail/{{$p->Id}}">Detail</a> &nbsp;
							<a href="/secret/pasien/edit/{{$p->Id}}">Edit</a> &nbsp;
							<a href="/secret/pasien/delete/{{$p->Id}}">Hapus</a> &nbsp; -->
							<form action="{{ route('pasien.destroy', $p->Id) }}" method="POST">
								<a href="{{ route('pasien.show', $p->Id) }}" class="">Detail</a>
								<a href="{{ route('pasien.edit', $p->Id) }}" class="">Edit</a>
								@csrf
                    			@method('DELETE')
								<button type="submit" onclick="return confirm('Apakah anda yakin menghapus data ini?')">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>

				<tfoot>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama</th>
						<th scope="col">Status</th>
						<th scope="col">Alamat</th>
						<th scope="col">Tanggal Pemeriksaan</th>
						<th scope="col">Aksi</th>
					</tr>
				</tfoot>

			</table>
			<label>Halaman : </label>{{ $pasiens->currentPage() }} &nbsp;
			<label>Jumlah Data : </label>{{ $pasiens->total() }} 
			<label>Data Per Halaman : </label>{{ $pasiens->perPage() }} <br/>
			{!! $pasiens->links() !!}
		</div>

		<div class="modal fade" id="tambahPasien" tabindex="-1" role="dialog" aria-labelledby="tambahMenuLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="tambahPasienLabel">Tambah Pasien</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    						<span aria-hidden="true">&times;</span>
     					</button>
					</div>
					<form action="{{ route('pasien.store') }}" method="POST">
						@csrf
						<div class="card-body">
                    			@if(session('errors'))
                        			<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            			Something it's wrong:
                            			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                			<span aria-hidden="true">×</span>
                            			</button>
                            			<ul>
                            				@foreach ($errors->all() as $error)
                            					<li>{{ $error }}</li>
                            				@endforeach
                            			</ul>
                        			</div>
                    			@endif
        						<div class="modal-body">
          							<div id="new_category">
            							<div class="form-group m-0 col-12">
              								<label for="typeid" class="col-form-label s-12">Nama</label>
              									<input placeholder="Nama" class="form-control r-0 light s-12 cat_name" type="text" name="NamaPasien" id="typeid" required>
            							</div>
            							<div class="form-group m-0 col-12">
              								<label for="groupid" class="col-form-label s-12">Jenis Kelamin</label>
              									<select class="form-control input-sm" name="JenisKelamin" id="inputUserStatus">
              										<option>Pilih Jenis Kelamin Pasien</option>
	          											<option value="1">Laki - Laki</option>
	          											<option value="2">Perempuan</option>
          										</select>
            							</div>
            							<div class="form-group m-0 col-12">
              								<label for="typeid" class="col-form-label s-12">Alamat</label>
												<input placeholder="Alamat" class="form-control r-0 light s-12 cat_name" type="text" name="Alamat" id="typeid" required>
            							</div>
            							<div class="form-group m-0 col-12">
              								<label for="typeid" class="col-form-label s-12">Kelurahan</label>
												<input placeholder="Kelurahan" class="form-control r-0 light s-12 cat_name" type="text" name="KelurahanTinggal" id="typeid" required>
            							</div>
            							<div class="form-group m-0 col-12">
              								<label for="typeid" class="col-form-label s-12">Kecamatan</label>
												<input placeholder="Kecamatan" class="form-control r-0 light s-12 cat_name" type="text" name="KecamatanTinggal" id="typeid" required>
            							</div>
            							<div class="form-group m-0 col-12">
              								<label for="typeid" class="col-form-label s-12">Tanggal Lahir</label>
												<input placeholder="" class="form-control r-0 light s-12 cat_name" type="date" name="TanggalLahir" id="typeid" required>
            							</div>
            							<div class="form-group m-0 col-12">
              								<label for="groupid" class="col-form-label s-12">Status Pasien</label>
              								<select class="form-control input-sm" name="StatusPasien" id="inputUserStatus">
              									<option>Pilih Status Pasien</option>
          										@foreach($statuses as $s)
          											<option value="{{ $s->IdStatus }}">{{ $s->NamaStatus }}</option>
          										@endforeach
          									</select>
            							</div>
            							<div class="form-group m-0 col-12">
              								<label for="groupid" class="col-form-label s-12">Agama</label>
              									<select class="form-control input-sm" name="Agama" id="inputUserStatus">
              										<option>Pilih Agama</option>
	          										@foreach($agama as $a)
	          											<option value="{{ $a->id }}">{{ $a->agama}}</option>
	          										@endforeach
          										</select>
            							</div>
            							<div class="form-group m-0 col-12">
              								<label for="typeid" class="col-form-label s-12">Tanggal Pemeriksaan</label>
												<input placeholder="" class="form-control r-0 light s-12 cat_name" type="date" name="TanggalPemeriksaan" id="typeid" required>
            							</div>
            								<input class="form-control r-0 light s-12 cat_name" type="hidden" name="creator" value="1" id="creator">
            								<input class="form-control r-0 light s-12 cat_name" type="hidden" name="modifier" value="1" id="modifier">
          							</div>
        						</div>
        					<div class="modal-footer">
          						<button type="submit" class="btn btn-primary" id="btn_add_sumber">Tambah</button>
        					</div>
					</form>
				</div>
			</div>
		</div>

	</main>
</div>
</div>
@endsection