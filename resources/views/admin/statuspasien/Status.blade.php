@extends('template.app')
@section('body')
	
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
		<br>
		
	<h2>Data Status Pasien</h2>
		<div class="table-responsive">
			<form action="/secret/status-pasien/cari" method="get">
				<input type="text" name="cari" placeholder="Cari Data Pasien" value="{{ old('cari') }}">
				<input type="submit" name="CARI">
			</form>
			<a class="btn btn-success btn-sm mr" data-toggle="modal" data-target="#tambahPasien">Tambah Status Pasien</a>
			<table class="table table-striped table-sm">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>

				<tbody>
					@foreach($status as $s)
					<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $s->NamaStatus}}</td>
						<td>
							<form action="{{ route('status-pasien.destroy', $s->IdStatus) }}" method="POST">
								<a href="{{ route('status-pasien.edit', $s->IdStatus) }}" class="">Edit</a>
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
						<th scope="col">Nama Status</th>
						<th scope="col">Aksi</th>
					</tr>
				</tfoot>

			</table>
			
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
					<form action="{{ route('status-pasien.store') }}" method="POST">
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
              									<input placeholder="NamaStatus" class="form-control r-0 light s-12 cat_name" type="text" name="NamaStatus" id="typeid" required>
            							</div>
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