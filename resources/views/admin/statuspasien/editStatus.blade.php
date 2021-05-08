@extends('template.app')
@section('body')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="container">
            <div class="card-body">
                <a href="/secret/pasien" class="btn btn-primary">Kembali</a>
                <br/>
                <br/>
                

                <form method="POST" action="{{ route('status-pasien.update', $status->IdStatus) }}">
                    @csrf
					@method('PUT')

                    <div class="form-group">
                        <label class="text-label">Nama Status</label>
                        <input type="text" name="NamaStatus" class="form-control" placeholder="Nama pasien" value=" {{ $status->NamaStatus }}" >
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