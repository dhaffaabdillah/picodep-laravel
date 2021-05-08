<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->

<script src="{{asset('/js/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{  asset('/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{  asset('/js/bootstrap.min.js') }}"></script>
<script src="{{asset('/js/popper.min.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/vendors/corona-live/dashboard.js')}}"></script>
<script src="{{asset('/vendors/isotop/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('/vendors/isotop/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('/vendors/slick/slick.min.js')}}"></script>
<script src="{{asset('/vendors/scroll-animation/jquery.parallax-scroll.js')}}"></script>
<script src="{{asset('/vendors/scroll-animation/parallax.js')}}"></script>
<script src="{{asset('/vendors/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('/vendors/animate-css/wow.min.js')}}"></script>
<script src="{{asset('/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('/vendors/corona-live/main.js')}}"></script>
<script src="{{asset('/vendors/isotop/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('/vendors/isotop/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('/vendors/slick/slick.min.js')}}"></script>
<script src="{{asset('/vendors/scroll-animation/jquery.parallax-scroll.js')}}"></script>
<script src="{{asset('/vendors/corona-live/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/vendors/corona-live/datatable.js')}}"></script>
<script src="{{asset('/vendors/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('/vendors/nice-selector/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('/js/theme.js')}}"></script>

<script>
$(document).ready(function(){
    getWidget()
});

function getWidget() {
    $.ajax({
        url: 'https://picodep.depok.go.id/Homee/getWidget',
        method: 'post',
        dataType: 'json',
        success: function(data){
            // $('#positiftotal').html(data.positiftotal);
            console.log(data);

        }
    });
}

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

</script>