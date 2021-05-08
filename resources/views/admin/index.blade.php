@extends('template.app')

@section('body'

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <!-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"> -->
        <h1 class="h1">Selamat Datang, </h1><h3 style="font-style: light;">{{ Auth::user()->name }}</h3>
        <br>
        <!-- <div class="row"> -->
          
        <!-- </div> -->
        
      <!-- </div> -->
    </main>
  </div>
</div>

<!-- </body> -->
@endsection