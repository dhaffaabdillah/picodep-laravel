@extends('template.app')
@section('body')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="container">
            <div class="card-body">
                <a href="/secret/pasien" class="btn btn-primary">Kembali</a>
                <br/>
                <br/>
                

                <form method="POST" action="{{ route('pasien.update', $pasien->Id) }}">
                    @csrf
					@method('PUT')

                    <div class="form-group">
                        <label class="text-label">Nama</label>
                        <input type="text" name="NamaPasien" class="form-control" placeholder="Nama pasien" value=" {{ $pasien->NamaPasien }}" >
                    </div>
                    
                    <!-- <div class="form-group">
                        <label for="" class="text-label">Jenis Kelamin</label> -->
                        <input name="JenisKelamin" type="text" class="form-control" value="{{$pasien->JenisKelamin}}" hidden>
                    <!-- </div> -->


                    <div class="form-group">
                        <label>Status Pasien</label>
						<select name="status" id="" class="custom-select" name="StatusPasien">
							<option value="">Pilih Status Pasien</option>
							@foreach($statuses as $s)
							<option value="{{ $s->IdStatus }}">{{ $s->NamaStatus }}</option>
							@endforeach
						</select>
                    </div>

                    <div class="form-group">
                        <label>Tempat Isolasi </label>
                        <input type="number" class="form-control" value="{{ $pasien->TempatIsolasi }}" name="TempatIsolasi">
                    </div>
                    
                    <div class="form-group">
                        <label>Tanggal Pemeriksaan</label>
                        <input type="date" class="form-control" value="{{ $pasien->TanggalPemeriksaan }}" name="TanggalPemeriksaan">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" value="{{ $pasien->TanggalLahir }}" name="TanggalLahir">
                    </div>

                    <div class="form-group">
                        <label>Agama</label>
                        <select class="form-control input-sm" name="Agama" id="inputUserStatus">
							<option>Pilih Agama</option>
							@foreach($agama as $a)
								<option value="{{ $a->id }}">{{ $a->agama}}</option>
							@endforeach
						</select>
                    </div>

                    <div class="form-group">
                        <label>Kelurahan Tinggal</label>
                        <input type="text" class="form-control" value="{{ $pasien->KelurahanTinggal }}" name="KelurahanTinggal">
                    </div>

                    <div class="form-group">
                        <label>Kecamatan Tinggal</label>
                        <input type="text" class="form-control" value="{{ $pasien->KecamatanTinggal }}" name="KecamatanTinggal">
                    </div>
              
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="Alamat" class="form-control" placeholder="Alamat pasien" > {{ $pasien->Alamat }} </textarea>
                    </div>

					<div class="form-group">
						<button type="submit" class="btn btn-success col-md-12">Update</button>
					</div>

                </form>

            </div>
        </div>
</main>
</div>
</div>

@endsection