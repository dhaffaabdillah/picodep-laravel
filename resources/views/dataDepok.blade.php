@extends('template_public.app')
@section('body')
<!--================Worldwide Tracker Area =================-->
<section class="world_wide_tracker tracker_page pad_top">
    <div class="container">
        <img class="tracker_map" src="{{asset('/images/tracker-map-bg.png')}}" alt="" />
        <div class="tracker_text">
            <h5>Data Seluruh Provinsi di Indonesia</h5>
            <h2>Kasus Covid-19 Terkonfirmasi</h2>
            <p>Terakhir diperbaharui: </p><p id="getDate" style="font-style: bold;"></p>
        </div>
        
    </div>

    <div class="row tracker_inner">
        <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="300">
        @foreach($dataDepok as $data)
            <div class="media">
            <div class="d-flex">
                <img src="{{asset('/images/icon/corona-red-1.png')}}" alt="" />
            </div>
            <div class="media-body">
                
                <h2 id=""></h2>
                <p>Total Positif</p>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="400">
            <div class="media">
            <div class="d-flex">
                <img src="{{asset('/images/icon/corona-black-1.png')}}" alt="" />
            </div>
            <div class="media-body">
            
                <h2 id=""></h2>
                
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
                
                <h2 id=""></h2>
                
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
            
                <h2 id=""></h2>
            
                <p>Dirawat</p>
            </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--================End Worldwide Tracker Area =================-->



<script>
// function ajaxWidget() {
//     $.ajax({
//         url: 'picodep.depok.go.id/Homee/getWidget',
//         method: 'get',
//         dataType: 'json',
//         success: function(data){
//             $('#positiftotal').html(formatRupiah(data.positiftotal));
//             $('#positifsembuh').html(formatRupiah(data.positifsembuh));
//         }
//     });
// }

// $(document).ready(function(){
//     ajaxWidget()
// });

function formatRupiah(angka){
    if (angka != 0) {
        let number_string = angka.replace(/[^,\d]/g, '').toString(),
        split   = number_string.split(','),
        sisa    = split[0].length % 3,
        rupiah  = split[0].substr(0, sisa),
        ribuan  = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator   = sisa ? '.' : '';
            split      += separator + ribuan.join('.');
        }
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return rupiah;
    } else {
        return '0';
    }
}

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

// var dtabledata = 
</script>

@endsection