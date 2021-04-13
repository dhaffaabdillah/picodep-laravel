@extends('template.app')
@section('body')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
	<h2>Master Data Agama</h2>
		<div class="table-responsive">
			<form action="/secret/pasien/cari" method="get">
				<input type="text" name="cari" placeholder="Cari Data Pasien" value="{{ old('cari') }}">
				<input type="submit" name="CARI">
			</form>
			
			<table class="table table-striped table-sm">
				<thead>
					<tr>
						<th scope="col">Agama</th>
						<th scope="col">Nama Pasien</th>
					</tr>
				</thead>

				<tbody>
					@foreach($agama as $a)
					<tr>
						<td>{{ $a->agama }}</td>
						<td>{{ $a->pasien->NamaPasien }}</td>
					</tr>
					@endforeach
				</tbody>

				<tfoot>
					<tr>
						<th scope="col">Agama</th>
						<th scope="col">Nama Pasien</th>
					</tr>
				</tfoot>

			</table>
		</div>
</main>
@endsection