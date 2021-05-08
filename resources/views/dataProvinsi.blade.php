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
</section>

<!--================End Worldwide Tracker Area =================-->



<!--================Data Table Area =================-->
<section class="data_table_area">
    <div class="container">
        <div class="all-country table-responsive">
            <table id="dtableprov" class="table table-striped table-bordered dataTable" role="grid"
                aria-describedby="world_table_info">
                <thead>
                    <tr role="row">
                        <th scope="row">No</th>
                        <th scope="row">Provinsi</th>
                        <th scope="row">Positif</th>
                        <th scope="row">Sembuh</th>
                        <th scope="row">Meninggal</th>>
                    </tr>
                </thead>

                <tbody>
                    @php
                        $i = 0;
                    @endphp

                    @foreach($getDataProv as $key)
                    
                    @php 
                        $i++
                    @endphp
                        <tr>
                            <td>{{ $i}}</td>
                            <td>{{ $key['attributes']['Provinsi'] }}</td>
                            <td>{{ $key['attributes']['Kasus_Posi'] }}</td>
                            <td>{{ $key['attributes']['Kasus_Semb'] }}</td>
                            <td>{{ $key['attributes']['Kasus_Meni'] }}</td>
                        </tr>
                    @endforeach
                </tbody>

                <tfoot>
                    <tr role="row">
                        <th scope="row">No</th>
                        <th scope="row">Provinsi</th>
                        <th scope="row">Positif</th>
                        <th scope="row">Sembuh</th>
                        <th scope="row">Meninggal</th>>
                    </tr>
                </tfoot>
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