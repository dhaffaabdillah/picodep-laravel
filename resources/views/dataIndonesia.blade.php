@extends('template_public.app')
@section('body')
<!--================Worldwide Tracker Area =================-->
<section class="world_wide_tracker pad_top">
      <div class="container">
        <img class="tracker_map" src="{{asset('/images/tracker-map-bg.png')}}" alt="" />
        <div class="tracker_text">
          <h5>Penyebaran di Indonesia</h5>
          <h2>Data Kasus Coronavirus Terkonfirmasi di Indonesia</h2>
          <!-- <p>Last updated: April 08, 2020, 01:43 GMT</p> -->
        </div>
        @foreach($dataCov as $data)
        <div class="row tracker_inner">
          <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="300">
            <div class="media">
              <div class="d-flex">
                <img src="{{asset('/images/icon/corona-red-1.png')}}" alt="" />
              </div>
              <div class="media-body">
                <h2 id="">{{ $data['positif'] }}</h2>
                <p>Positif</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="400">
            <div class="media">
              <div class="d-flex">
                <img src="{{asset('/images/icon/corona-black-1.png')}}" alt="" />
              </div>
              <div class="media-body">
                <h2 id="">{{ $data['meninggal'] }}</h2>
                <p>Total Meninggal</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="500">
            <div class="media">
              <div class="d-flex">
                <img src="{{asset('/images/icon/corona-green-1.png')}}" alt="" />
              </div>
              <div class="media-body">
                    <h2 id="">{{ $data['sembuh'] }}</h2>
                <p>Sembuh</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="600">
            <div class="media">
              <div class="d-flex">
                <img src="{{asset('/images/icon/corona-yellow-1.png')}}" alt="" />
              </div>
              <div class="media-body">
                <h2 id="">{{ $data['positif'] }}</h2>
                <p>Dirawat</p>
              </div>
            </div>
          </div>
        </div>
        <div class="tracker_btn">
          <a class="green_btn wow fadeInUp" data-wow-delay="500" href="/data_provinsi"><i class="linearicons-earth-lock"></i> Data Sebaran Provinsi</a>
        </div>
      </div>
      @endforeach
    </section>
    <!--================End Worldwide Tracker Area =================-->

@endsection