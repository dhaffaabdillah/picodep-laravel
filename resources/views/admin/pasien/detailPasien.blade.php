@extends('template.app')
@section('body')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="container">
            <div class="card-body">
                <a href="/secret/pasien" class="btn btn-primary">Kembali</a>
                <br/>
                <br/>
                

                <form method="post" action="/secret/pasien/update/{{ $pasien->Id }}">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="text-label">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama pasien" value=" {{ $pasien->NamaPasien }}" readonly>
                    </div>

                    <div class="form-group">
                        <label>Status Pasien</label>
                        <input type="text" class="form-control" value="{{ $pasien->statuspasien->NamaStatus }}" readonly>
                    </div>

                    <div class="form-group">
                        <label>Tempat Isolasi </label>
                        <input type="text" class="form-control" value="{{ $pasien->TempatIsolasi }}" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label>Tanggal Pemeriksaan</label>
                        <input type="text" class="form-control" value="{{ $pasien->TanggalPemeriksaan }}" readonly>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control" value="{{ $pasien->TanggalLahir }}" readonly>
                    </div>

                    <div class="form-group">
                        <label>Agama</label>
                        <input type="text" class="form-control" value="{{ $pasien->agama->agama }}" readonly>
                    </div>

                    <div class="form-group">
                        <label>Kelurahan Tinggal</label>
                        <input type="text" class="form-control" value="{{ $pasien->KelurahanTinggal }}" readonly>
                    </div>

                    <div class="form-group">
                        <label>Kecamatan Tinggal</label>
                        <input type="text" class="form-control" value="{{ $pasien->KecamatanTinggal }}" readonly>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat pasien" readonly> {{ $pasien->Alamat }} </textarea>
                    </div>


                </form>

            </div>
        </div>
</main>
</div>
</div>

@endsection