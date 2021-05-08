@extends('template_public.app')
@section('body')
<!--================Worldwide Tracker Area =================-->
<section class="world_wide_tracker tracker_page pad_top">
    <div class="container">
        <img class="tracker_map" src="{{asset('/images/tracker-map-bg.png')}}" alt="" />
        <div class="tracker_text">
            <h5>Data Seluruh Dunia</h5>
            <h2>Kasus Covid-19 Terkonfirmasi</h2>
            <p>Terakhir diperbaharui: </p><p id="getDate" style="font-style: bold;"></p>
        </div>
        <div class="row tracker_inner">
            <div class="col-lg-3 col-6">
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
            <div class="col-lg-3 col-6">
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
            <div class="col-lg-3 col-6">
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
            <div class="col-lg-3 col-6">
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
        <div class="confirm_boxes row" id="coronaCountryUpdate" data-country="indonesia">
            <div class="col-lg-2">
                <div class="confirm_item">
                    <i class="linearicons-calendar-check"></i>
                    <h3 class="cuCountryTodayCases"></h3>
                    <p>Hari ini</p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="confirm_item">
                    <i class="linearicons-earth-lock"></i>
                    <h3 class="cuContries"></h3>
                    <p>Negara</p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="confirm_item">
                    <i class="linearicons-clipboard-user"></i>
                    <h3 class="cuCountryTotal"></h3>
                    <p>Active Cases</p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="confirm_item">
                    <i class="linearicons-tombstone"></i>
                    <h3 class="cuTotal"></h3>
                    <p>Kasus Seluruh Dunia</p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="confirm_item">
                    <i class="linearicons-return2"></i>
                    <h3 class="cuCountryRecovered"></h3>
                    <p>Sembuh</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--================End Worldwide Tracker Area =================-->

<!--================Total Cases Area =================-->
<section class="total_cases_chart">
    <div class="container">
        <div class="total_cases_inner">
            <iframe style="width:100%" src="https://coronavirus.app/chart/new/infected?embed=true"
                frameborder="0" allow="autoplay;" allowfullscreen=""></iframe>
        </div>
    </div>
</section>
<!--================End Total Cases Area =================-->

<!--================Data Table Area =================-->
<section class="data_table_area">
    <div class="container">
        <div class="main_title text-center">
            <!-- <h5>Tracking by countries</h5> -->
            <h2>Data Semua Negara yang Terkonfirmasi</h2>
        </div>
        <div class="all-country table-responsive">
            <table id="world_table" class="table table-striped table-bordered dataTable" role="grid"
                aria-describedby="world_table_info">
                <thead>
                    <tr role="row">
                        <th>No</th>
                        <th>Bendera</th>
                        <th>Negara</th>
                        <th>Kasus</th>
                        <th>Kasus Baru</th>
                        <th>Meninggal</th>
                        <th>Baru Meninggal</th>
                        <th>Sembuh
                        </th>
                        <th>Aktif</th>
                        <th>Kritis</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</section>
<!--================End Data Table Area =================-->
<script>
var tw = new Date();
if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
else (a=tw.getTime());
tw.setTime(a);
var tahun= tw.getFullYear ();
var hari= tw.getDay ();
var bulan= tw.getMonth ();
var tanggal= tw.getDate ();
var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
document.getElementById("getDate").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;

</script>

@endsection