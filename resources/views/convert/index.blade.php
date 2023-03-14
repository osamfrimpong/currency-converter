@extends('layouts.convert')
@section('contents')

@endsection
@section('scripts')
<script type="text/javascript">
    function myFunction() {
        var amount = $('input[name=amount]').val();
        var from = $('select[name=from]').val();
        var to = $('select[name=to]').val();
        var array = {!!  $currencyRates !!};
        // var array ={"AED":3.914194,"AFN":93.360385,"ALL":114.301874,"AMD":411.318494,"ANG":1.911374,"AOA":540.873665,"ARS":212.485411,"AUD":1.620177,"AWG":1.921019,"AZN":1.81601,"BAM":1.958745,"BBD":2.14132,"BDT":111.798109,"BGN":1.958645,"BHD":0.401904,"BIF":2205.015652,"BMD":1.065753,"BND":1.436861,"BOB":7.328019,"BRL":5.560142,"BSD":1.060495,"BTC":5.2778922e-5,"BTN":86.97939,"BWP":14.103207,"BYN":2.676925,"BYR":20888.750127,"BZD":2.137714,"CAD":1.476547,"CDF":2185.858881,"CHF":0.985005,"CLF":0.030772,"CLP":845.040676,"CNY":7.360305,"COP":5033.368607,"CRC":581.374204,"CUC":1.065753,"CUP":28.242443,"CVE":110.426046,"CZK":23.669516,"DJF":188.833947,"DKK":7.45505,"DOP":58.517993,"DZD":145.563725,"EGP":32.939531,"ERN":15.986288,"ETB":57.050987,"EUR":1,"FJD":2.383773,"FKP":0.885031,"GBP":0.885876,"GEL":2.750058,"GGP":0.885031,"GHS":13.097695,"GIP":0.885031,"GMD":65.27776,"GNF":9130.729753,"GTQ":8.282454,"GYD":223.77649,"HKD":8.365998,"HNL":26.154328,"HRK":7.518665,"HTG":162.754732,"HUF":383.708264,"IDR":16521.88231,"ILS":3.821523,"IMP":0.885031,"INR":87.354946,"IQD":1547.827447,"IRR":45054.689744,"ISK":150.569933,"JEP":0.885031,"JMD":162.233949,"JOD":0.756049,"JPY":143.892624,"KES":136.805713,"KGS":93.168498,"KHR":4291.452999,"KMF":492.218228,"KPW":959.142952,"KRW":1407.475866,"KWD":0.327144,"KYD":0.883829,"KZT":479.470974,"LAK":17893.906822,"LBP":15918.736786,"LKR":344.698318,"LRD":171.057308,"LSL":19.444697,"LTL":3.146891,"LVL":0.644663,"LYD":5.144736,"MAD":11.01977,"MDL":19.884901,"MGA":4562.861112,"MKD":61.712797,"MMK":2227.148933,"MNT":3775.732306,"MOP":8.574794,"MRO":380.47348,"MUR":50.155418,"MVR":16.370363,"MWK":1078.621909,"MXN":19.709393,"MYR":4.816673,"MZN":67.252963,"NAD":19.561929,"NGN":490.80077,"NIO":38.788325,"NOK":11.369582,"NPR":139.167264,"NZD":1.735895,"OMR":0.410417,"PAB":1.060595,"PEN":4.013936,"PGK":3.73762,"PHP":58.808626,"PKR":297.663593,"PLN":4.686274,"PYG":7634.479863,"QAR":3.880446,"RON":4.922502,"RSD":117.211864,"RUB":81.214277,"RWF":1158.441933,"SAR":4.001826,"SBD":8.738025,"SCR":13.894894,"SDG":633.057381,"SEK":11.412484,"SGD":1.437598,"SHP":1.296755,"SLE":22.467529,"SLL":21048.613372,"SOS":606.949987,"SRD":36.743991,"STD":22058.926195,"SVC":9.279954,"SYP":2677.661417,"SZL":19.438229,"THB":37.091427,"TJS":11.581114,"TMT":3.740791,"TND":3.32732,"TOP":2.525354,"TRY":20.204008,"TTD":7.207838,"TWD":32.871756,"TZS":2481.631595,"UAH":39.143359,"UGX":3941.927422,"USD":1.065753,"UYU":41.552482,"UZS":12080.164778,"VEF":2566067.179701,"VES":25.689815,"VND":25231.691799,"VUV":128.25521,"WST":2.929193,"XAF":656.987904,"XAG":0.051896,"XAU":0.000571,"XCD":2.88025,"XDR":0.797399,"XOF":656.987904,"XPF":119.631112,"YER":266.784549,"ZAR":19.526296,"ZMK":9593.055745,"ZMW":21.423214,"ZWL":343.171889};
        var currency =["AED","AFN","ALL","AMD","ANG","AOA","ARS","AUD","AWG","AZN","BAM","BBD","BDT","BGN","BHD","BIF","BMD","BND","BOB","BRL","BSD","BTC","BTN","BWP","BYN","BYR","BZD","CAD","CDF","CHF","CLF","CLP","CNY","COP","CRC","CUC","CUP","CVE","CZK","DJF","DKK","DOP","DZD","EGP","ERN","ETB","EUR","FJD","FKP","GBP","GEL","GGP","GHS","GIP","GMD","GNF","GTQ","GYD","HKD","HNL","HRK","HTG","HUF","IDR","ILS","IMP","INR","IQD","IRR","ISK","JEP","JMD","JOD","JPY","KES","KGS","KHR","KMF","KPW","KRW","KWD","KYD","KZT","LAK","LBP","LKR","LRD","LSL","LTL","LVL","LYD","MAD","MDL","MGA","MKD","MMK","MNT","MOP","MRO","MUR","MVR","MWK","MXN","MYR","MZN","NAD","NGN","NIO","NOK","NPR","NZD","OMR","PAB","PEN","PGK","PHP","PKR","PLN","PYG","QAR","RON","RSD","RUB","RWF","SAR","SBD","SCR","SDG","SEK","SGD","SHP","SLE","SLL","SOS","SRD","STD","SVC","SYP","SZL","THB","TJS","TMT","TND","TOP","TRY","TTD","TWD","TZS","UAH","UGX","USD","UYU","UZS","VEF","VES","VND","VUV","WST","XAF","XAG","XAU","XCD","XDR","XOF","XPF","YER","ZAR","ZMK","ZMW","ZWL"];
        var from_currency = currency[from];
        var to_currency = currency[to];
        var result = array[to_currency] / array[from_currency];
        var output = result * amount;
        $('#output').html(parseFloat(output).toFixed(2));
    }
    $(document).ready(function () {
        $('.exchange-btn,select[name=from],select[name=to],input[name=amount],input[name=output]').on('change', function (event) {
            myFunction(event.currentTarget.id);
        });

        $(".exchange-btn").click(function (event) {
            var from = $('select[name=from]').val();
            var to = $('select[name=to]').val();
            $('select[name=to]').val(from);
            $('select[name=from]').val(to);
            $('.selectpicker').selectpicker('refresh');
            setTimeout(function () {
                myFunction(event.currentTarget.id);
            }, 100);
        });
        myFunction();
    });
    $('#from').selectpicker();
    $('#to').selectpicker();
</script>
@endsection
