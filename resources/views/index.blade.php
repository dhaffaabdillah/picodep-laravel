@extends('template_public.app')
@section('body')
<!--================Worldwide Tracker Area =================-->
<section class="world_wide_tracker pad_top">
      <div class="container">
        <img class="tracker_map" src="{{asset('/images/tracker-map-bg.png')}}" alt="" />
        <div class="tracker_text">
          <h5>Penyebaran Seluruh Dunia</h5>
          <h2>Kasus Coronavirus Terkonfirmasi</h2>
          <!-- <p>Last updated: April 08, 2020, 01:43 GMT</p> -->
        </div>
        <div class="row tracker_inner">
          <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="300">
            <div class="media">
              <div class="d-flex">
                <img src="{{asset('/images/icon/corona-red-1.png')}}" alt="" />
              </div>
              <div class="media-body">
                <h2 id="total_cases"></h2>
                <p>Total Kasus</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="400">
            <div class="media">
              <div class="d-flex">
                <img src="{{asset('/images/icon/corona-black-1.png')}}" alt="" />
              </div>
              <div class="media-body">
                <h2 id="total_deaths"></h2>
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
                <h2 id="total_recovered"></h2>
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
                <h2 id="new_cases"></h2>
                <p>Kasus Baru</p>
              </div>
            </div>
          </div>
        </div>
        <div class="tracker_btn">
          <a class="green_btn wow fadeInUp" data-wow-delay="500" href="/data_indonesia"><i class="linearicons-earth-lock"></i> Data Sebaran Indonesia</a>
        </div>
      </div>
    </section>
    <!--================End Worldwide Tracker Area =================-->

    <!--================Symptoms Area =================-->
    <section class="symptoms_area">
      <div class="container">
        <ul class="nav image_list">
          <li><img src="{{asset('/images/symptoms-user/sm-1.png')}}" alt=""></li>
          <li><img src="{{asset('/images/symptoms-user/sm-2.png')}}" alt=""></li>
          <li><img src="{{asset('/images/symptoms-user/sm-3.png')}}" alt=""></li>
        </ul>
        <div class="title_text wow fadeInUp" data-wow-delay="400ms">
          <h5>Gejala COVID-19</h5>
          <h2>Apa saja gejala dasarnya?</h2>
        </div>
        <div class="row symptoms_inner">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="400ms">
            <div class="symptoms_item">
              <div class="media">
                <div class="d-flex">
                  <img src="{{asset('/images/symptoms-user/symptoms-1.png')}}" alt="" />
                </div>
                <div class="media-body">
                  <h4>Demam Tinggi</h4>
                  <p>
                  Demam adalah gejala utama, kata para ahli. Jangan terpaku pada sebuah nomor, tapi ketahuilah itu bukan demam sampai suhu mencapai setidaknya 39 ° C.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="500ms">
            <div class="symptoms_item">
              <div class="media">
                <div class="d-flex">
                  <img src="{{asset('/images/symptoms-user/symptoms-2.png')}}" alt="" />
                </div>
                <div class="media-body">
                  <h4>Sesak Napas</h4>
                  <p>
                  Anda merasa panas saat menyentuh dada atau punggung. Itu adalah hal yang biasa 
                  tanda dan juga mungkin muncul dalam 2-10 hari jika Anda terpengaruh.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="600ms">
            <div class="symptoms_item">
              <div class="media">
                <div class="d-flex">
                  <img src="{{asset('/images/symptoms-user/symptoms-3.png')}}" alt="" />
                </div>
                <div class="media-body">
                  <h4>Batuk Kering</h4>
                  <p>
                  Batuk adalah gejala utama lainnya, tetapi bukan sembarang gejala
                    batuk, kata Schaffner. Ini harus menjadi batuk kering yang Anda
                    rasakan di dada Anda.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="700ms">
            <div class="symptoms_item">
              <div class="media">
                <div class="d-flex">
                  <img src="{{asset('/images/symptoms-user/symptoms-4.png')}}" alt="" />
                </div>
                <div class="media-body">
                  <h4>Sakit Kepala</h4>
                  <p>Sekitar 1 dari setiap 6 orang yang terjangkit COVID-19 menjadi
                    sakit parah dan mengalami kesulitan bernapas atau
                    sesak napas.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Symptoms Area =================-->

    <!--================Protect Yourself Area =================-->
    <section class="protect_yourself_area p_100">
      <div class="container">
        <div class="main_title text-center">
          <h5>Apa yang kamu butuhkan</h5>
          <h2>Bagaimana cara melindungi diri sendiri?</h2>
        </div>
        <div class="row protect_inner">
          <div class="col-lg-6">
            <div class="row protect_list_inner">
              <div class="col-6">
                <div class="protect_list_item">
                  <div class="protect_list_title">
                    <h3>Kamu seharusnya melakukan</h3>
                    <h6>Pastikan untuk mengikutinya</h6>
                  </div>
                  <ul class="nav flex-column">
                    <li>
                      <a href="#"><i class="linearicons-home4"></i>Tetap di rumah</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-desk-tape"></i>Memakai masker</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-tissue"></i>Selalu gunakan tisu</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-couch"></i>Desinfeksi rumah anda</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-rain"></i>Cuci tangan</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-thermometer"></i>Sering isolasi Mandiri</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-bottle"></i>Sering meminum air mineral</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-6">
                <div class="protect_list_item red">
                  <div class="protect_list_title">
                    <h3>Anda harus menghindari</h3>
                    <h6>Pastikan untuk mengikutinya</h6>
                  </div>
                  <ul class="nav flex-column">
                    <li>
                      <a href="#"><i class="linearicons-man-woman"></i>Menjaga Jarak</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-paw"></i>Hindari binatang</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-woman"></i>Jangan sentuh muka anda</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-hand"></i>Hindari berjabat tangan</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-chair"></i>Hindari permukaan terinfeksi</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-drop-crossed"></i>Menghindari droplet</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-plane-crossed"></i>Jangan berpergian</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="protect_self_text">
              <h3>Apa yang tercakup dalam isolasi diri?</h3>
              <p>
              Jika Anda perlu mengisolasi diri, Anda harus mengambil tindakan
                segera. Anda harus tetap di dalam dan menghindari semua kontak dengan
                orang lain
              </p>
              <a class="text_btn" href="#">Bagaimana lagi Anda bisa melindungi diri sendiri?
                <i class="linearicons-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="protect_img text-center apps_craft_animation">
              <img class="img-fluid wow fadeIn" data-wow-delay="500ms" src="{{asset('/images/protect-img.png')}}" alt="" />
              <ul class="nav">
                <li><img src="{{asset('/images/icon/project-virus-1.png')}}" alt=""></li>
                <li><img src="{{asset('/images/icon/project-virus-2.png')}}" alt=""></li>
                <li><img class="layer layer2" data-depth="0.5" src="{{asset('/images/icon/project-virus-3.png')}}" alt=""></li>
                <li><img src="{{asset('/images/icon/project-virus-4.png')}}" alt=""></li>
                <li><img src="{{asset('/images/icon/project-virus-5.png')}}" alt=""></li>
                <li><img src="{{asset('/images/icon/project-virus-6.png')}}" alt=""></li>
                <li><img src="{{asset('/images/icon/project-virus-7.png')}}" alt=""></li>
                <li><img src="{{asset('/images/icon/project-virus-8.png')}}" alt=""></li>
                <li><img class="layer layer2" data-depth="0.5" src="{{asset('/images/icon/project-virus-9.png')}}" alt=""></li>
                <li><img src="{{asset('/images/icon/project-virus-10.png')}}" alt=""></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Protect Yourself Area =================-->

    <!--================Washing Process Area =================-->
    <section class="washing_process_area pad_btm">
      <div class="container">
        <div class="main_title text-center white">
          <h5>Hand washing process</h5>
          <h2>How to wash your Hands</h2>
        </div>
        <div class="washing_process_inner row">
          <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="400ms">
            <div class="washing_item">
              <div class="icon">
                <img src="{{asset('/images/icon/washing-1.png')}}" alt="" />
                <div class="number">
                  1
                </div>
              </div>
              <p><span>Apply soap</span> and ruv your hands together</p>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="500ms">
            <div class="washing_item">
              <div class="icon">
                <img src="{{asset('/images/icon/washing-2.png')}}" alt="" />
                <div class="number">
                  2
                </div>
              </div>
              <p>
                <span>Use one hand</span> to rub the back of the other hand
                and vice versa
              </p>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="600ms">
            <div class="washing_item">
              <div class="icon">
                <img src="{{asset('/images/icon/washing-3.png')}}" alt="" />
                <div class="number">
                  3
                </div>
              </div>
              <p>
                <span>Rub your hands</span> together and clean between your
                fingers
              </p>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="700ms">
            <div class="washing_item">
              <div class="icon">
                <img src="{{asset('/images/icon/washing-4.png')}}" alt="" />
                <div class="number">
                  4
                </div>
              </div>
              <p>
                <span>Rub the back</span> of your fingers against your palms
              </p>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="800ms">
            <div class="washing_item">
              <div class="icon">
                <img src="{{asset('/images/icon/washing-5.png')}}" alt="" />
                <div class="number">
                  5
                </div>
              </div>
              <p>
                <span>Rub your thumb</span> using your other hand and vice
                versa
              </p>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="900ms">
            <div class="washing_item">
              <div class="icon">
                <img src="{{asset('/images/icon/washing-6.png')}}" alt="" />
                <div class="number">
                  6
                </div>
              </div>
              <p>
                <span>Rub your tips</span> of your fingers on the palm of your
                other hand and vice versa
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Washing Process Area =================-->

@endsection