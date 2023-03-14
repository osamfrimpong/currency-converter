<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet"
        href="{{ asset('css/bootstrap-select.min.css')}}"/>
    <link href="{{ asset('css/style.css')}}" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/dark-mode.css')}}" rel="stylesheet" type='text/css'>


</head>

<body>
    <div class="switch-mod">
        <label class="switch">
            <input type="checkbox" checked="" id="darkSwitch">
            <div class="slider round"></div>
            <i class="fas"></i>
        </label>

    </div>
    <div class="main-content">
        <section class="header">
            <div class="container">
                <div class="converter">
                    <h1>COCO Currency Converter</h1>
                    <h2>All actual world currencies live rates, reference information, currency calculator.</h2>
                    <div class="convert-box">
                        <form id="conversion_form">
                            <div class="row">
                                <div class="col-md-5 col-sm-12 col-xs-12">
                                    <label class="label">From</label>
                                    <div class="select">
                                        <div class="input-wrap">
                                            <input type="number" class="form-control" name="amount" onkeyup="myFunction()" oninput="myFunction()" value="1">
                                        </div>
                                          <select name="from" id="from" onchange="myFunction()" data-show-subtext="true" class="selectpicker bs-select form-control" data-live-search="true" data-size="8">
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/AE.png") }}'> <span class='currency_code'>AED</span> <span class='currency_name'>United Arab Emirates Dirham</span>" value="0">AED</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/AF.png") }}'> <span class='currency_code'>AFN</span> <span class='currency_name'>Afghan Afghani</span>"  value="1">AFN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/AL.png") }}'> <span class='currency_code'>ALL</span> <span class='currency_name'>Albanian Lek</span>" value="2">ALL</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/AM.png") }}'> <span class='currency_code'>AMD</span> <span class='currency_name'>Armenian Dram</span>" value="3">AMD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/AN.png") }}'> <span class='currency_code'>ANG</span> <span class='currency_name'>Netherlands Antillean Guilder</span>" value="4">ANG</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/AO.png") }}'> <span class='currency_code'>AOA</span> <span class='currency_name'>Angolan Kwanza</span>"  value="5">AOA</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/AR.png") }}'> <span class='currency_code'>ARS</span> <span class='currency_name'>Argentine Peso</span>" value="6">ARS</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/AU.png") }}'> <span class='currency_code'>AUD</span> <span class='currency_name'>Australian Dollar</span>" value="7">AUD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/AW.png") }}'> <span class='currency_code'>AWG</span> <span class='currency_name'>Aruban Florin</span>"  value="8">AWG</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/AZ.png") }}'> <span class='currency_code'>AZN</span> <span class='currency_name'>Azerbaijanian Manat</span>" value="9">AZN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BA.png") }}'> <span class='currency_code'>BAM</span> <span class='currency_name'>Convertible Mark</span>" value="10">BAM</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BB.png") }}'> <span class='currency_code'>BBD</span> <span class='currency_name'>Barbados Dollar</span>" value="11">BBD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BD.png") }}'> <span class='currency_code'>BDT</span> <span class='currency_name'>Bangladeshi Taka</span>" value="12">BDT</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BG.png") }}'> <span class='currency_code'>BGN</span> <span class='currency_name'>Bulgarian Lev</span>" value="13">BGN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BH.png") }}'> <span class='currency_code'>BHD</span> <span class='currency_name'>Bahraini Dinar</span>" value="14">BHD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BI.png") }}'> <span class='currency_code'>BIF</span> <span class='currency_name'>Burundi Franc</span>" value="15">BIF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BM.png") }}'> <span class='currency_code'>BMD</span> <span class='currency_name'>Bermudian Dollar</span>" value="16">BMD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BN.png") }}'> <span class='currency_code'>BND</span> <span class='currency_name'>Brunei Dollar</span>" value="17">BND</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BO.png") }}'> <span class='currency_code'>BOB</span> <span class='currency_name'>Boliviano</span>" value="18">BOB</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BR.png") }}'> <span class='currency_code'>BRL</span> <span class='currency_name'>Brazilian Real</span>" value="19">BRL</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BS.png") }}'> <span class='currency_code'>BSD</span> <span class='currency_name'>Bahamian Dollar</span>" value="20">BSD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BTC.png") }}'> <span class='currency_code'>BTC</span> <span class='currency_name'>Bitcoin</span>" value="21">BTC</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BT.png") }}'> <span class='currency_code'>BTN</span> <span class='currency_name'>Bhutanese Ngultrum</span>" value="22">BTN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BW.png") }}'> <span class='currency_code'>BWP</span> <span class='currency_name'>Botswana Pula</span>" value="23">BWP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BY.png") }}'> <span class='currency_code'>BYN</span> <span class='currency_name'>Belarussian Ruble</span>" value="24">BYN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>BYR</span> <span class='currency_name'>Belarusian Ruble</span>" value="25">BYR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BZ.png") }}'> <span class='currency_code'>BZD</span> <span class='currency_name'>Belize Dollar</span>" value="26">BZD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CA.png") }}'> <span class='currency_code'>CAD</span> <span class='currency_name'>Canadian Dollar</span>" value="27">CAD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CD.png") }}'> <span class='currency_code'>CDF</span> <span class='currency_name'>Congolese Franc</span>" value="28">CDF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CH.png") }}'> <span class='currency_code'>CHF</span> <span class='currency_name'>Swiss Franc</span>" value="29">CHF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>CLF</span> <span class='currency_name'>Chilean Unit of Account</span>" value="30">CLF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CL.png") }}'> <span class='currency_code'>CLP</span> <span class='currency_name'>Chilean Peso</span>" value="31">CLP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CN.png") }}'> <span class='currency_code'>CNY</span> <span class='currency_name'>Chinese Yuan</span>" value="32">CNY</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CO.png") }}'> <span class='currency_code'>COP</span> <span class='currency_name'>Colombian Peso</span>" value="33">COP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CR.png") }}'> <span class='currency_code'>CRC</span> <span class='currency_name'>Costa Rican Colon</span>" value="34">CRC</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>CUC</span> <span class='currency_name'>Cuban peso</span>" value="35">CUC</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CU.png") }}'> <span class='currency_code'>CUP</span> <span class='currency_name'>Cuban Peso</span>" value="36">CUP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CV.png") }}'> <span class='currency_code'>CVE</span> <span class='currency_name'>Cabo Verde Escudo</span>" value="37">CVE</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CZ.png") }}'> <span class='currency_code'>CZK</span> <span class='currency_name'>Czech Koruna</span>" value="38">CZK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/DJ.png") }}'> <span class='currency_code'>DJF</span> <span class='currency_name'>Djibouti Franc</span>" value="39">DJF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/DK.png") }}'> <span class='currency_code'>DKK</span> <span class='currency_name'>Danish Krone</span>" value="40">DKK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/DO.png") }}'> <span class='currency_code'>DOP</span> <span class='currency_name'>Dominican Peso</span>" value="41">DOP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/DZ.png") }}'> <span class='currency_code'>DZD</span> <span class='currency_name'>Algerian Dinar</span>" value="42">DZD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/EG.png") }}'> <span class='currency_code'>EGP</span> <span class='currency_name'>Egyptian Pound</span>" value="43">EGP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/ER.png") }}'> <span class='currency_code'>ERN</span> <span class='currency_name'>Eritrean Nakfa</span>" value="44">ERN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/ET.png") }}'> <span class='currency_code'>ETB</span> <span class='currency_name'>Ethiopian Birr</span>" value="45">ETB</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/EU.png") }}'> <span class='currency_code'>EUR</span> <span class='currency_name'>Euro</span>" value="46">EUR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/FJ.png") }}'> <span class='currency_code'>FJD</span> <span class='currency_name'>Fiji Dollar</span>" value="47">FJD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/FK.png") }}'> <span class='currency_code'>FKP</span> <span class='currency_name'>Falkland Islands Pound</span>" value="48">FKP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/GB.png") }}'> <span class='currency_code'>GBP</span> <span class='currency_name'>British Pound</span>" value="49">GBP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/GE.png") }}'> <span class='currency_code'>GEL</span> <span class='currency_name'>Georgian Lari</span>" value="50">GEL</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/GG.png") }}'> <span class='currency_code'>GGP</span> <span class='currency_name'>Guernsey Pound</span>" value="51">GGP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/GH.png") }}'> <span class='currency_code'>GHS</span> <span class='currency_name'>Ghana Cedi</span>" value="52">GHS</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/GI.png") }}'> <span class='currency_code'>GIP</span> <span class='currency_name'>Gibraltar Pound</span>" value="53">GIP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/GM.png") }}'> <span class='currency_code'>GMD</span> <span class='currency_name'>Gambian Dalasi</span>" value="54">GMD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/GN.png") }}'> <span class='currency_code'>GNF</span> <span class='currency_name'>Guinea Franc</span>" value="55">GNF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/GT.png") }}'> <span class='currency_code'>GTQ</span> <span class='currency_name'>Guatemalan Quetzal</span>" value="56">GTQ</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/GY.png") }}'> <span class='currency_code'>GYD</span> <span class='currency_name'>Guyana Dollar</span>" value="57">GYD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/HK.png") }}'> <span class='currency_code'>HKD</span> <span class='currency_name'>Hong Kong Dollar</span>" value="58">HKD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/HN.png") }}'> <span class='currency_code'>HNL</span> <span class='currency_name'>Honduran Lempira</span>" value="59">HNL</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/HR.png") }}'> <span class='currency_code'>HRK</span> <span class='currency_name'>Croatian Kuna</span>" value="60">HRK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/HT.png") }}'> <span class='currency_code'>HTG</span> <span class='currency_name'>Haitian Gourde</span>" value="61">HTG</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/HU.png") }}'> <span class='currency_code'>HUF</span> <span class='currency_name'>Hungarian Forint</span>" value="62">HUF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/ID.png") }}'> <span class='currency_code'>IDR</span> <span class='currency_name'>Indonesian Rupiah</span>" value="63">IDR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/IL.png") }}'> <span class='currency_code'>ILS</span> <span class='currency_name'>Israeli Shekel</span>" value="64">ILS</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>IMP</span> <span class='currency_name'>Isle of Man Pounds</span>" value="65">IMP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/IN.png") }}'> <span class='currency_code'>INR</span> <span class='currency_name'>Indian Rupee</span>" value="66">INR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/IQ.png") }}'> <span class='currency_code'>IQD</span> <span class='currency_name'>Iraqi Dinar</span>" value="67">IQD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/IR.png") }}'> <span class='currency_code'>IRR</span> <span class='currency_name'>Iranian Rial</span>" value="68">IRR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/IS.png") }}'> <span class='currency_code'>ISK</span> <span class='currency_name'>Iceland Krona</span>" value="69">ISK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/JE.png") }}'> <span class='currency_code'>JEP</span> <span class='currency_name'>Jersey Pound</span>" value="70">JEP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/JM.png") }}'> <span class='currency_code'>JMD</span> <span class='currency_name'>Jamaican Dollar</span>" value="71">JMD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/JO.png") }}'> <span class='currency_code'>JOD</span> <span class='currency_name'>Jordanian Dinar</span>" value="72">JOD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/JP.png") }}'> <span class='currency_code'>JPY</span> <span class='currency_name'>Japanese Yen</span>" value="73">JPY</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/KE.png") }}'> <span class='currency_code'>KES</span> <span class='currency_name'>Kenyan Shilling</span>" value="74">KES</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/KG.png") }}'> <span class='currency_code'>KGS</span> <span class='currency_name'>Kyrgyzstani Som</span>" value="75">KGS</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/KH.png") }}'> <span class='currency_code'>KHR</span> <span class='currency_name'>Cambodian Riel</span>" value="76">KHR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/KM.png") }}'> <span class='currency_code'>KMF</span> <span class='currency_name'>Comoro Franc</span>" value="77">KMF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/KP.png") }}'> <span class='currency_code'>KPW</span> <span class='currency_name'>North Korean Won</span>" value="78">KPW</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/KR.png") }}'> <span class='currency_code'>KRW</span> <span class='currency_name'>South Korean Won</span>" value="79">KRW</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/KW.png") }}'> <span class='currency_code'>KWD</span> <span class='currency_name'>Kuwaiti Dinar</span>" value="80">KWD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/KY.png") }}'> <span class='currency_code'>KYD</span> <span class='currency_name'>Cayman Islands Dollar</span>" value="81">KYD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/KZ.png") }}'> <span class='currency_code'>KZT</span> <span class='currency_name'>Kazakhstani Tenge</span>" value="82">KZT</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/LA.png") }}'> <span class='currency_code'>LAK</span> <span class='currency_name'>Lao Kip</span>" value="83">LAK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/LB.png") }}'> <span class='currency_code'>LBP</span> <span class='currency_name'>Lebanese Pound</span>" value="84">LBP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/LK.png") }}'> <span class='currency_code'>LKR</span> <span class='currency_name'>Sri Lanka Rupee</span>"  value="85">LKR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/LR.png") }}'> <span class='currency_code'>LRD</span> <span class='currency_name'>Liberian Dollar</span>" value="86">LRD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/LS.png") }}'> <span class='currency_code'>LSL</span> <span class='currency_name'>Lithuanian litas</span>" value="87">LSL</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>LTL</span> <span class='currency_name'>Lesotho Loti</span>" value="88">LTL</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>LVL</span> <span class='currency_name'>Latvian lats</span>" value="89">LVL</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/LY.png") }}'> <span class='currency_code'>LYD</span> <span class='currency_name'>Libyan Dinar</span>" value="90">LYD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MA.png") }}'> <span class='currency_code'>MAD</span> <span class='currency_name'>Moroccan Dirham</span>" value="91">MAD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MD.png") }}'> <span class='currency_code'>MDL</span> <span class='currency_name'>Moldovan Leu</span>"  value="92">MDL</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MG.png") }}'> <span class='currency_code'>MGA</span> <span class='currency_name'>Malagasy Ariary</span>" value="93">MGA</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MK.png") }}'> <span class='currency_code'>MKD</span> <span class='currency_name'>Macedonian Denar</span>" value="94">MKD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MM.png") }}'> <span class='currency_code'>MMK</span> <span class='currency_name'>Myanmar Kyat</span>" value="95">MMK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MN.png") }}'> <span class='currency_code'>MNT</span> <span class='currency_name'>Mongolian Tugrik</span>" value="96">MNT</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MO.png") }}'> <span class='currency_code'>MOP</span> <span class='currency_name'>Macanese Pataca</span>" value="97">MOP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MR.png") }}'> <span class='currency_code'>MRO</span> <span class='currency_name'>Mauritanian Ouguiya</span>" value="98">MRO</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MU.png") }}'> <span class='currency_code'>MUR</span> <span class='currency_name'>Mauritius Rupee</span>" value="99">MUR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MV.png") }}'> <span class='currency_code'>MVR</span> <span class='currency_name'>Maldivian Rufiyaa</span>" value="100">MVR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MW.png") }}'> <span class='currency_code'>MWK</span> <span class='currency_name'>Malawian Kwacha</span>" value="101">MWK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MX.png") }}'> <span class='currency_code'>MXN</span> <span class='currency_name'>Mexican Peso</span>" value="102">MXN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MY.png") }}'> <span class='currency_code'>MYR</span> <span class='currency_name'>Malaysian Ringgit</span>" value="103">MYR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MZ.png") }}'> <span class='currency_code'>MZN</span> <span class='currency_name'>Mozambique Metical</span>" value="104">MZN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/NA.png") }}'> <span class='currency_code'>NAD</span> <span class='currency_name'>Namibia Dollar</span>" value="105">NAD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/NG.png") }}'> <span class='currency_code'>NGN</span> <span class='currency_name'>Nigerian Naira</span>" value="106">NGN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/NI.png") }}'> <span class='currency_code'>NIO</span> <span class='currency_name'>Cordoba Oro</span>" value="107">NIO</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/NO.png") }}'> <span class='currency_code'>NOK</span> <span class='currency_name'>Norwegian Krone</span>" value="108">NOK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/NP.png") }}'> <span class='currency_code'>NPR</span> <span class='currency_name'>Nepalese Rupee</span>" value="109">NPR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/NZ.png") }}'> <span class='currency_code'>NZD</span> <span class='currency_name'>New Zealand Dollar</span>" value="110">NZD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/OM.png") }}'> <span class='currency_code'>OMR</span> <span class='currency_name'>Rial Omani</span>" value="111">OMR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/PA.png") }}'> <span class='currency_code'>PAB</span> <span class='currency_name'>Panamanian Balboa</span>" value="112">PAB</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/PE.png") }}'> <span class='currency_code'>PEN</span> <span class='currency_name'>Peruvian Sol</span>" value="113">PEN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/PG.png") }}'> <span class='currency_code'>PGK</span> <span class='currency_name'>Papua New Guinean Kina</span>" value="114">PGK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/PH.png") }}'> <span class='currency_code'>PHP</span> <span class='currency_name'>Philippine Peso</span>" value="115">PHP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/PK.png") }}'> <span class='currency_code'>PKR</span> <span class='currency_name'>Pakistani Rupee</span>" value="116">PKR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/PL.png") }}'> <span class='currency_code'>PLN</span> <span class='currency_name'>Polish Zloty</span>" value="117">PLN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/PY.png") }}'> <span class='currency_code'>PYG</span> <span class='currency_name'>Paraguayan Guarani</span>" value="118">PYG</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/QA.png") }}'> <span class='currency_code'>QAR</span> <span class='currency_name'>Qatari Rial</span>" value="119">QAR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/RO.png") }}'> <span class='currency_code'>RON</span> <span class='currency_name'>Romanian Leu</span>" value="120">RON</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/RS.png") }}'> <span class='currency_code'>RSD</span> <span class='currency_name'>Serbian Dinar</span>" value="121">RSD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/RU.png") }}'> <span class='currency_code'>RUB</span> <span class='currency_name'>Russian Ruble</span>" value="122">RUB</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/RW.png") }}'> <span class='currency_code'>RWF</span> <span class='currency_name'>Rwanda Franc</span>" value="123">RWF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SA.png") }}'> <span class='currency_code'>SAR</span> <span class='currency_name'>Saudi Riyal</span>" value="124">SAR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SB.png") }}'> <span class='currency_code'>SBD</span> <span class='currency_name'>Solomon Islands Dollar</span>" value="125">SBD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SC.png") }}'> <span class='currency_code'>SCR</span> <span class='currency_name'>Seychelles Rupee</span>" value="126">SCR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SD.png") }}'> <span class='currency_code'>SDG</span> <span class='currency_name'>Sudanese Pound</span>" value="127">SDG</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SE.png") }}'> <span class='currency_code'>SEK</span> <span class='currency_name'>Swedish Krona</span>" value="128">SEK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SG.png") }}'> <span class='currency_code'>SGD</span> <span class='currency_name'>Singapore Dollar</span>" value="129">SGD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SH.png") }}'> <span class='currency_code'>SHP</span> <span class='currency_name'>Saint Helena Pound</span>" value="130">SHP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>SLE</span> <span class='currency_name'>Sierra Leonean leone</span>" value="131">SLE</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SL.png") }}'> <span class='currency_code'>SLL</span> <span class='currency_name'>Sierra Leonean Leone</span>" value="132">SLL</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SO.png") }}'> <span class='currency_code'>SOS</span> <span class='currency_name'>Somali Shilling</span>" value="133">SOS</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SR.png") }}'> <span class='currency_code'>SRD</span> <span class='currency_name'>Surinam Dollar</span>" value="134">SRD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/ST.png") }}'> <span class='currency_code'>STD</span> <span class='currency_name'>Sao Tomean Dobra</span>" value="135">STD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SV.png") }}'> <span class='currency_code'>SVC</span> <span class='currency_name'>El Salvador Colon</span>" value="136">SVC</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SY.png") }}'> <span class='currency_code'>SYP</span> <span class='currency_name'>Syrian Pound</span>" value="137">SYP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SZ.png") }}'> <span class='currency_code'>SZL</span> <span class='currency_name'>Swazi Lilangeni</span>" value="138">SZL</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/TH.png") }}'> <span class='currency_code'>THB</span> <span class='currency_name'>Thai Baht</span>" value="139">THB</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/TJ.png") }}'> <span class='currency_code'>TJS</span> <span class='currency_name'>Tajikistani Somoni</span>" value="140">TJS</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/TM.png") }}'> <span class='currency_code'>TMT</span> <span class='currency_name'>Turkmenistan New Manat</span>" value="141">TMT</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/TN.png") }}'> <span class='currency_code'>TND</span> <span class='currency_name'>Tunisian Dinar</span>" value="142">TND</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/TO.png") }}'> <span class='currency_code'>TOP</span> <span class='currency_name'>Tongan Pa'anga</span>" value="143">TOP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/TR.png") }}'> <span class='currency_code'>TRY</span> <span class='currency_name'>Turkish Lira</span>" value="144">TRY</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/TT.png") }}'> <span class='currency_code'>TTD</span> <span class='currency_name'>Trinidad and Tobago Dollar</span>" value="145">TTD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/TW.png") }}'> <span class='currency_code'>TWD</span> <span class='currency_name'>New Taiwan Dollar</span>" value="146">TWD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/TZ.png") }}'> <span class='currency_code'>TZS</span> <span class='currency_name'>Tanzanian Shilling</span>" value="147">TZS</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/UA.png") }}'> <span class='currency_code'>UAH</span> <span class='currency_name'>Ukrainian Hryvnia</span>" value="148">UAH</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/UG.png") }}'> <span class='currency_code'>UGX</span> <span class='currency_name'>Uganda Shilling</span>" value="149">UGX</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/US.png") }}'> <span class='currency_code'>USD</span> <span class='currency_name'>United States Dollar</span>" value="150" selected>USD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/UY.png") }}'> <span class='currency_code'>UYU</span> <span class='currency_name'>Peso Uruguayo</span>" value="151">UYU</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/UZ.png") }}'> <span class='currency_code'>UZS</span> <span class='currency_name'>Uzbekistan Sum</span>" value="152">UZS</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/VE.png") }}'> <span class='currency_code'>VEF</span> <span class='currency_name'>Venezuelan Bolivar</span>" value="153">VEF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/VN.png") }}'> <span class='currency_code'>VND</span> <span class='currency_name'>Vietnamese Dong</span>" value="154">VND</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/VU.png") }}'> <span class='currency_code'>VUV</span> <span class='currency_name'>Vanuatu Vatu</span>" value="155">VUV</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/WS.png") }}'> <span class='currency_code'>WST</span> <span class='currency_name'>Samoan Tala</span>" value="156">WST</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CF.png") }}'> <span class='currency_code'>XAF</span> <span class='currency_name'>CFA Franc BEAC</span>" value="157">XAF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>XAG</span> <span class='currency_name'>Silver Ounces</span>" value="158">XAG</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>XAU</span> <span class='currency_name'>Gold Ounces</span>" value="159">XAU</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>XCD</span> <span class='currency_name'>East Caribbean Dollar</span>" value="160">XCD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>XDR</span> <span class='currency_name'>Special drawing rights</span>" value="161">XDR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>XOF</span> <span class='currency_name'>CFA Franc BCEAO</span>" value="162">XOF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>XPF</span> <span class='currency_name'>CFP Franc</span>" value="163">XPF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/YE.png") }}'> <span class='currency_code'>YER</span> <span class='currency_name'>Yemeni Rial</span>" value="164">YER</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/ZA.png") }}'> <span class='currency_code'>ZAR</span> <span class='currency_name'>South African Rand</span>" value="165">ZAR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>ZMK</span> <span class='currency_name'>Zambian Kwacha</span>" value="166">ZMK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/ZM.png") }}'> <span class='currency_code'>ZMW</span> <span class='currency_name'>Zambian Kwacha</span>" value="167">ZMW</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/ZW.png") }}'> <span class='currency_code'>ZWL</span> <span class='currency_name'>Zimbabwean Dollar</span>" value="168">ZWL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <label class="label"><br /></label>
                                    <div class="select text-center">
                                        <button type="button" class="exchange-btn"><i class="fas fa-exchange-alt"></i></button>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-12 col-xs-12">
                                    <label class="label">To</label>
                                    <div class="select">
                                        <div class="input-wrap">
                                            <p id="output" class="form-control"></p>
                                            <!--<input type="text" class="form-control" name="output" id="output" value="" pattern="/^-?\d*[.,]?\d{0,2}$/">-->
                                        </div>
                                        <select name="to" id="to" onchange="myFunction()" data-show-subtext="true" class="selectpicker bs-select form-control" data-live-search="true" data-size="8">
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/AE.png") }}'> <span class='currency_code'>AED</span> <span class='currency_name'>United Arab Emirates Dirham</span>" value="0">AED</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/AF.png") }}'> <span class='currency_code'>AFN</span> <span class='currency_name'>Afghan Afghani</span>"  value="1">AFN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/AL.png") }}'> <span class='currency_code'>ALL</span> <span class='currency_name'>Albanian Lek</span>" value="2">ALL</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/AM.png") }}'> <span class='currency_code'>AMD</span> <span class='currency_name'>Armenian Dram</span>" value="3">AMD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/AN.png") }}'> <span class='currency_code'>ANG</span> <span class='currency_name'>Netherlands Antillean Guilder</span>" value="4">ANG</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/AO.png") }}'> <span class='currency_code'>AOA</span> <span class='currency_name'>Angolan Kwanza</span>"  value="5">AOA</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/AR.png") }}'> <span class='currency_code'>ARS</span> <span class='currency_name'>Argentine Peso</span>" value="6">ARS</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/AU.png") }}'> <span class='currency_code'>AUD</span> <span class='currency_name'>Australian Dollar</span>" value="7">AUD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/AW.png") }}'> <span class='currency_code'>AWG</span> <span class='currency_name'>Aruban Florin</span>"  value="8">AWG</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/AZ.png") }}'> <span class='currency_code'>AZN</span> <span class='currency_name'>Azerbaijanian Manat</span>" value="9">AZN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BA.png") }}'> <span class='currency_code'>BAM</span> <span class='currency_name'>Convertible Mark</span>" value="10">BAM</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BB.png") }}'> <span class='currency_code'>BBD</span> <span class='currency_name'>Barbados Dollar</span>" value="11">BBD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BD.png") }}'> <span class='currency_code'>BDT</span> <span class='currency_name'>Bangladeshi Taka</span>" value="12">BDT</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BG.png") }}'> <span class='currency_code'>BGN</span> <span class='currency_name'>Bulgarian Lev</span>" value="13">BGN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BH.png") }}'> <span class='currency_code'>BHD</span> <span class='currency_name'>Bahraini Dinar</span>" value="14">BHD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BI.png") }}'> <span class='currency_code'>BIF</span> <span class='currency_name'>Burundi Franc</span>" value="15">BIF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BM.png") }}'> <span class='currency_code'>BMD</span> <span class='currency_name'>Bermudian Dollar</span>" value="16">BMD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BN.png") }}'> <span class='currency_code'>BND</span> <span class='currency_name'>Brunei Dollar</span>" value="17">BND</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BO.png") }}'> <span class='currency_code'>BOB</span> <span class='currency_name'>Boliviano</span>" value="18">BOB</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BR.png") }}'> <span class='currency_code'>BRL</span> <span class='currency_name'>Brazilian Real</span>" value="19">BRL</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BS.png") }}'> <span class='currency_code'>BSD</span> <span class='currency_name'>Bahamian Dollar</span>" value="20">BSD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BTC.png") }}'> <span class='currency_code'>BTC</span> <span class='currency_name'>Bitcoin</span>" value="21">BTC</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BT.png") }}'> <span class='currency_code'>BTN</span> <span class='currency_name'>Bhutanese Ngultrum</span>" value="22">BTN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BW.png") }}'> <span class='currency_code'>BWP</span> <span class='currency_name'>Botswana Pula</span>" value="23">BWP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BY.png") }}'> <span class='currency_code'>BYN</span> <span class='currency_name'>Belarussian Ruble</span>" value="24">BYN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>BYR</span> <span class='currency_name'>Belarusian Ruble</span>" value="25">BYR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/BZ.png") }}'> <span class='currency_code'>BZD</span> <span class='currency_name'>Belize Dollar</span>" value="26">BZD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CA.png") }}'> <span class='currency_code'>CAD</span> <span class='currency_name'>Canadian Dollar</span>" value="27">CAD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CD.png") }}'> <span class='currency_code'>CDF</span> <span class='currency_name'>Congolese Franc</span>" value="28">CDF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CH.png") }}'> <span class='currency_code'>CHF</span> <span class='currency_name'>Swiss Franc</span>" value="29">CHF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>CLF</span> <span class='currency_name'>Chilean Unit of Account</span>" value="30">CLF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CL.png") }}'> <span class='currency_code'>CLP</span> <span class='currency_name'>Chilean Peso</span>" value="31">CLP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CN.png") }}'> <span class='currency_code'>CNY</span> <span class='currency_name'>Chinese Yuan</span>" value="32">CNY</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CO.png") }}'> <span class='currency_code'>COP</span> <span class='currency_name'>Colombian Peso</span>" value="33">COP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CR.png") }}'> <span class='currency_code'>CRC</span> <span class='currency_name'>Costa Rican Colon</span>" value="34">CRC</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>CUC</span> <span class='currency_name'>Cuban peso</span>" value="35">CUC</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CU.png") }}'> <span class='currency_code'>CUP</span> <span class='currency_name'>Cuban Peso</span>" value="36">CUP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CV.png") }}'> <span class='currency_code'>CVE</span> <span class='currency_name'>Cabo Verde Escudo</span>" value="37">CVE</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CZ.png") }}'> <span class='currency_code'>CZK</span> <span class='currency_name'>Czech Koruna</span>" value="38">CZK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/DJ.png") }}'> <span class='currency_code'>DJF</span> <span class='currency_name'>Djibouti Franc</span>" value="39">DJF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/DK.png") }}'> <span class='currency_code'>DKK</span> <span class='currency_name'>Danish Krone</span>" value="40">DKK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/DO.png") }}'> <span class='currency_code'>DOP</span> <span class='currency_name'>Dominican Peso</span>" value="41">DOP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/DZ.png") }}'> <span class='currency_code'>DZD</span> <span class='currency_name'>Algerian Dinar</span>" value="42">DZD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/EG.png") }}'> <span class='currency_code'>EGP</span> <span class='currency_name'>Egyptian Pound</span>" value="43">EGP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/ER.png") }}'> <span class='currency_code'>ERN</span> <span class='currency_name'>Eritrean Nakfa</span>" value="44">ERN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/ET.png") }}'> <span class='currency_code'>ETB</span> <span class='currency_name'>Ethiopian Birr</span>" value="45">ETB</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/EU.png") }}'> <span class='currency_code'>EUR</span> <span class='currency_name'>Euro</span>" value="46" selected>EUR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/FJ.png") }}'> <span class='currency_code'>FJD</span> <span class='currency_name'>Fiji Dollar</span>" value="47">FJD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/FK.png") }}'> <span class='currency_code'>FKP</span> <span class='currency_name'>Falkland Islands Pound</span>" value="48">FKP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/GB.png") }}'> <span class='currency_code'>GBP</span> <span class='currency_name'>British Pound</span>" value="49">GBP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/GE.png") }}'> <span class='currency_code'>GEL</span> <span class='currency_name'>Georgian Lari</span>" value="50">GEL</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/GG.png") }}'> <span class='currency_code'>GGP</span> <span class='currency_name'>Guernsey Pound</span>" value="51">GGP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/GH.png") }}'> <span class='currency_code'>GHS</span> <span class='currency_name'>Ghana Cedi</span>" value="52">GHS</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/GI.png") }}'> <span class='currency_code'>GIP</span> <span class='currency_name'>Gibraltar Pound</span>" value="53">GIP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/GM.png") }}'> <span class='currency_code'>GMD</span> <span class='currency_name'>Gambian Dalasi</span>" value="54">GMD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/GN.png") }}'> <span class='currency_code'>GNF</span> <span class='currency_name'>Guinea Franc</span>" value="55">GNF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/GT.png") }}'> <span class='currency_code'>GTQ</span> <span class='currency_name'>Guatemalan Quetzal</span>" value="56">GTQ</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/GY.png") }}'> <span class='currency_code'>GYD</span> <span class='currency_name'>Guyana Dollar</span>" value="57">GYD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/HK.png") }}'> <span class='currency_code'>HKD</span> <span class='currency_name'>Hong Kong Dollar</span>" value="58">HKD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/HN.png") }}'> <span class='currency_code'>HNL</span> <span class='currency_name'>Honduran Lempira</span>" value="59">HNL</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/HR.png") }}'> <span class='currency_code'>HRK</span> <span class='currency_name'>Croatian Kuna</span>" value="60">HRK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/HT.png") }}'> <span class='currency_code'>HTG</span> <span class='currency_name'>Haitian Gourde</span>" value="61">HTG</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/HU.png") }}'> <span class='currency_code'>HUF</span> <span class='currency_name'>Hungarian Forint</span>" value="62">HUF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/ID.png") }}'> <span class='currency_code'>IDR</span> <span class='currency_name'>Indonesian Rupiah</span>" value="63">IDR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/IL.png") }}'> <span class='currency_code'>ILS</span> <span class='currency_name'>Israeli Shekel</span>" value="64">ILS</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>IMP</span> <span class='currency_name'>Isle of Man Pounds</span>" value="65">IMP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/IN.png") }}'> <span class='currency_code'>INR</span> <span class='currency_name'>Indian Rupee</span>" value="66">INR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/IQ.png") }}'> <span class='currency_code'>IQD</span> <span class='currency_name'>Iraqi Dinar</span>" value="67">IQD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/IR.png") }}'> <span class='currency_code'>IRR</span> <span class='currency_name'>Iranian Rial</span>" value="68">IRR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/IS.png") }}'> <span class='currency_code'>ISK</span> <span class='currency_name'>Iceland Krona</span>" value="69">ISK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/JE.png") }}'> <span class='currency_code'>JEP</span> <span class='currency_name'>Jersey Pound</span>" value="70">JEP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/JM.png") }}'> <span class='currency_code'>JMD</span> <span class='currency_name'>Jamaican Dollar</span>" value="71">JMD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/JO.png") }}'> <span class='currency_code'>JOD</span> <span class='currency_name'>Jordanian Dinar</span>" value="72">JOD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/JP.png") }}'> <span class='currency_code'>JPY</span> <span class='currency_name'>Japanese Yen</span>" value="73">JPY</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/KE.png") }}'> <span class='currency_code'>KES</span> <span class='currency_name'>Kenyan Shilling</span>" value="74">KES</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/KG.png") }}'> <span class='currency_code'>KGS</span> <span class='currency_name'>Kyrgyzstani Som</span>" value="75">KGS</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/KH.png") }}'> <span class='currency_code'>KHR</span> <span class='currency_name'>Cambodian Riel</span>" value="76">KHR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/KM.png") }}'> <span class='currency_code'>KMF</span> <span class='currency_name'>Comoro Franc</span>" value="77">KMF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/KP.png") }}'> <span class='currency_code'>KPW</span> <span class='currency_name'>North Korean Won</span>" value="78">KPW</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/KR.png") }}'> <span class='currency_code'>KRW</span> <span class='currency_name'>South Korean Won</span>" value="79">KRW</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/KW.png") }}'> <span class='currency_code'>KWD</span> <span class='currency_name'>Kuwaiti Dinar</span>" value="80">KWD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/KY.png") }}'> <span class='currency_code'>KYD</span> <span class='currency_name'>Cayman Islands Dollar</span>" value="81">KYD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/KZ.png") }}'> <span class='currency_code'>KZT</span> <span class='currency_name'>Kazakhstani Tenge</span>" value="82">KZT</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/LA.png") }}'> <span class='currency_code'>LAK</span> <span class='currency_name'>Lao Kip</span>" value="83">LAK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/LB.png") }}'> <span class='currency_code'>LBP</span> <span class='currency_name'>Lebanese Pound</span>" value="84">LBP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/LK.png") }}'> <span class='currency_code'>LKR</span> <span class='currency_name'>Sri Lanka Rupee</span>"  value="85">LKR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/LR.png") }}'> <span class='currency_code'>LRD</span> <span class='currency_name'>Liberian Dollar</span>" value="86">LRD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/LS.png") }}'> <span class='currency_code'>LSL</span> <span class='currency_name'>Lithuanian litas</span>" value="87">LSL</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>LTL</span> <span class='currency_name'>Lesotho Loti</span>" value="88">LTL</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>LVL</span> <span class='currency_name'>Latvian lats</span>" value="89">LVL</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/LY.png") }}'> <span class='currency_code'>LYD</span> <span class='currency_name'>Libyan Dinar</span>" value="90">LYD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MA.png") }}'> <span class='currency_code'>MAD</span> <span class='currency_name'>Moroccan Dirham</span>" value="91">MAD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MD.png") }}'> <span class='currency_code'>MDL</span> <span class='currency_name'>Moldovan Leu</span>"  value="92">MDL</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MG.png") }}'> <span class='currency_code'>MGA</span> <span class='currency_name'>Malagasy Ariary</span>" value="93">MGA</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MK.png") }}'> <span class='currency_code'>MKD</span> <span class='currency_name'>Macedonian Denar</span>" value="94">MKD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MM.png") }}'> <span class='currency_code'>MMK</span> <span class='currency_name'>Myanmar Kyat</span>" value="95">MMK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MN.png") }}'> <span class='currency_code'>MNT</span> <span class='currency_name'>Mongolian Tugrik</span>" value="96">MNT</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MO.png") }}'> <span class='currency_code'>MOP</span> <span class='currency_name'>Macanese Pataca</span>" value="97">MOP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MR.png") }}'> <span class='currency_code'>MRO</span> <span class='currency_name'>Mauritanian Ouguiya</span>" value="98">MRO</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MU.png") }}'> <span class='currency_code'>MUR</span> <span class='currency_name'>Mauritius Rupee</span>" value="99">MUR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MV.png") }}'> <span class='currency_code'>MVR</span> <span class='currency_name'>Maldivian Rufiyaa</span>" value="100">MVR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MW.png") }}'> <span class='currency_code'>MWK</span> <span class='currency_name'>Malawian Kwacha</span>" value="101">MWK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MX.png") }}'> <span class='currency_code'>MXN</span> <span class='currency_name'>Mexican Peso</span>" value="102">MXN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MY.png") }}'> <span class='currency_code'>MYR</span> <span class='currency_name'>Malaysian Ringgit</span>" value="103">MYR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/MZ.png") }}'> <span class='currency_code'>MZN</span> <span class='currency_name'>Mozambique Metical</span>" value="104">MZN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/NA.png") }}'> <span class='currency_code'>NAD</span> <span class='currency_name'>Namibia Dollar</span>" value="105">NAD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/NG.png") }}'> <span class='currency_code'>NGN</span> <span class='currency_name'>Nigerian Naira</span>" value="106">NGN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/NI.png") }}'> <span class='currency_code'>NIO</span> <span class='currency_name'>Cordoba Oro</span>" value="107">NIO</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/NO.png") }}'> <span class='currency_code'>NOK</span> <span class='currency_name'>Norwegian Krone</span>" value="108">NOK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/NP.png") }}'> <span class='currency_code'>NPR</span> <span class='currency_name'>Nepalese Rupee</span>" value="109">NPR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/NZ.png") }}'> <span class='currency_code'>NZD</span> <span class='currency_name'>New Zealand Dollar</span>" value="110">NZD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/OM.png") }}'> <span class='currency_code'>OMR</span> <span class='currency_name'>Rial Omani</span>" value="111">OMR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/PA.png") }}'> <span class='currency_code'>PAB</span> <span class='currency_name'>Panamanian Balboa</span>" value="112">PAB</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/PE.png") }}'> <span class='currency_code'>PEN</span> <span class='currency_name'>Peruvian Sol</span>" value="113">PEN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/PG.png") }}'> <span class='currency_code'>PGK</span> <span class='currency_name'>Papua New Guinean Kina</span>" value="114">PGK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/PH.png") }}'> <span class='currency_code'>PHP</span> <span class='currency_name'>Philippine Peso</span>" value="115">PHP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/PK.png") }}'> <span class='currency_code'>PKR</span> <span class='currency_name'>Pakistani Rupee</span>" value="116">PKR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/PL.png") }}'> <span class='currency_code'>PLN</span> <span class='currency_name'>Polish Zloty</span>" value="117">PLN</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/PY.png") }}'> <span class='currency_code'>PYG</span> <span class='currency_name'>Paraguayan Guarani</span>" value="118">PYG</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/QA.png") }}'> <span class='currency_code'>QAR</span> <span class='currency_name'>Qatari Rial</span>" value="119">QAR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/RO.png") }}'> <span class='currency_code'>RON</span> <span class='currency_name'>Romanian Leu</span>" value="120">RON</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/RS.png") }}'> <span class='currency_code'>RSD</span> <span class='currency_name'>Serbian Dinar</span>" value="121">RSD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/RU.png") }}'> <span class='currency_code'>RUB</span> <span class='currency_name'>Russian Ruble</span>" value="122">RUB</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/RW.png") }}'> <span class='currency_code'>RWF</span> <span class='currency_name'>Rwanda Franc</span>" value="123">RWF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SA.png") }}'> <span class='currency_code'>SAR</span> <span class='currency_name'>Saudi Riyal</span>" value="124">SAR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SB.png") }}'> <span class='currency_code'>SBD</span> <span class='currency_name'>Solomon Islands Dollar</span>" value="125">SBD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SC.png") }}'> <span class='currency_code'>SCR</span> <span class='currency_name'>Seychelles Rupee</span>" value="126">SCR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SD.png") }}'> <span class='currency_code'>SDG</span> <span class='currency_name'>Sudanese Pound</span>" value="127">SDG</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SE.png") }}'> <span class='currency_code'>SEK</span> <span class='currency_name'>Swedish Krona</span>" value="128">SEK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SG.png") }}'> <span class='currency_code'>SGD</span> <span class='currency_name'>Singapore Dollar</span>" value="129">SGD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SH.png") }}'> <span class='currency_code'>SHP</span> <span class='currency_name'>Saint Helena Pound</span>" value="130">SHP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>SLE</span> <span class='currency_name'>Sierra Leonean leone</span>" value="131">SLE</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SL.png") }}'> <span class='currency_code'>SLL</span> <span class='currency_name'>Sierra Leonean Leone</span>" value="132">SLL</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SO.png") }}'> <span class='currency_code'>SOS</span> <span class='currency_name'>Somali Shilling</span>" value="133">SOS</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SR.png") }}'> <span class='currency_code'>SRD</span> <span class='currency_name'>Surinam Dollar</span>" value="134">SRD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/ST.png") }}'> <span class='currency_code'>STD</span> <span class='currency_name'>Sao Tomean Dobra</span>" value="135">STD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SV.png") }}'> <span class='currency_code'>SVC</span> <span class='currency_name'>El Salvador Colon</span>" value="136">SVC</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SY.png") }}'> <span class='currency_code'>SYP</span> <span class='currency_name'>Syrian Pound</span>" value="137">SYP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/SZ.png") }}'> <span class='currency_code'>SZL</span> <span class='currency_name'>Swazi Lilangeni</span>" value="138">SZL</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/TH.png") }}'> <span class='currency_code'>THB</span> <span class='currency_name'>Thai Baht</span>" value="139">THB</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/TJ.png") }}'> <span class='currency_code'>TJS</span> <span class='currency_name'>Tajikistani Somoni</span>" value="140">TJS</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/TM.png") }}'> <span class='currency_code'>TMT</span> <span class='currency_name'>Turkmenistan New Manat</span>" value="141">TMT</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/TN.png") }}'> <span class='currency_code'>TND</span> <span class='currency_name'>Tunisian Dinar</span>" value="142">TND</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/TO.png") }}'> <span class='currency_code'>TOP</span> <span class='currency_name'>Tongan Pa'anga</span>" value="143">TOP</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/TR.png") }}'> <span class='currency_code'>TRY</span> <span class='currency_name'>Turkish Lira</span>" value="144">TRY</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/TT.png") }}'> <span class='currency_code'>TTD</span> <span class='currency_name'>Trinidad and Tobago Dollar</span>" value="145">TTD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/TW.png") }}'> <span class='currency_code'>TWD</span> <span class='currency_name'>New Taiwan Dollar</span>" value="146">TWD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/TZ.png") }}'> <span class='currency_code'>TZS</span> <span class='currency_name'>Tanzanian Shilling</span>" value="147">TZS</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/UA.png") }}'> <span class='currency_code'>UAH</span> <span class='currency_name'>Ukrainian Hryvnia</span>" value="148">UAH</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/UG.png") }}'> <span class='currency_code'>UGX</span> <span class='currency_name'>Uganda Shilling</span>" value="149">UGX</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/US.png") }}'> <span class='currency_code'>USD</span> <span class='currency_name'>United States Dollar</span>" value="150">USD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/UY.png") }}'> <span class='currency_code'>UYU</span> <span class='currency_name'>Peso Uruguayo</span>" value="151">UYU</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/UZ.png") }}'> <span class='currency_code'>UZS</span> <span class='currency_name'>Uzbekistan Sum</span>" value="152">UZS</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/VE.png") }}'> <span class='currency_code'>VEF</span> <span class='currency_name'>Venezuelan Bolivar</span>" value="153">VEF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/VN.png") }}'> <span class='currency_code'>VND</span> <span class='currency_name'>Vietnamese Dong</span>" value="154">VND</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/VU.png") }}'> <span class='currency_code'>VUV</span> <span class='currency_name'>Vanuatu Vatu</span>" value="155">VUV</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/WS.png") }}'> <span class='currency_code'>WST</span> <span class='currency_name'>Samoan Tala</span>" value="156">WST</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/CF.png") }}'> <span class='currency_code'>XAF</span> <span class='currency_name'>CFA Franc BEAC</span>" value="157">XAF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>XAG</span> <span class='currency_name'>Silver Ounces</span>" value="158">XAG</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>XAU</span> <span class='currency_name'>Gold Ounces</span>" value="159">XAU</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>XCD</span> <span class='currency_name'>East Caribbean Dollar</span>" value="160">XCD</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>XDR</span> <span class='currency_name'>Special drawing rights</span>" value="161">XDR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>XOF</span> <span class='currency_name'>CFA Franc BCEAO</span>" value="162">XOF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>XPF</span> <span class='currency_name'>CFP Franc</span>" value="163">XPF</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/YE.png") }}'> <span class='currency_code'>YER</span> <span class='currency_name'>Yemeni Rial</span>" value="164">YER</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/ZA.png") }}'> <span class='currency_code'>ZAR</span> <span class='currency_name'>South African Rand</span>" value="165">ZAR</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/_unknown.png") }}'> <span class='currency_code'>ZMK</span> <span class='currency_name'>Zambian Kwacha</span>" value="166">ZMK</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/ZM.png") }}'> <span class='currency_code'>ZMW</span> <span class='currency_name'>Zambian Kwacha</span>" value="167">ZMW</option>
                                            <option data-content="<img class='flag' src='{{ asset("assets/img/flags/ZW.png") }}'> <span class='currency_code'>ZWL</span> <span class='currency_name'>Zimbabwean Dollar</span>" value="168">ZWL</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="reverse"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="list-currencies">
        <div class="container">
            <h2 class="text-center">World currencies</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="section-currencies-table">
                        <div class="table-responsive">
                            <table class="table table-striped custab table-hover">
                                <thead>
                                    <tr>
                                        <th class="caption-col">Flag</th>
                                        <th class="caption-col">Code</th>
                                        <th class="caption-col">Currency name</th>
                                        <th class="caption-col">Country</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/AE.png') }}" width="24"  alt="National flag of The United Arab Emirates"></td>
<td>AED</td>
<td>United Arab Emirates Dirham</td>
<td>UAE</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/AF.png') }}" width="24"  alt="National flag of Afghanistan"></td>
<td>AFN</td>
<td>Afghan Afghani</td>
<td>Afghanistan</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/AL.png') }}" width="24"  alt="National flag of Albania"></td>
<td>ALL</td>
<td>Albanian Lek</td>
<td>Albania</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/AM.png') }}" width="24"  alt="National flag of Armenia"></td>
<td>AMD</td>
<td>Armenian Dram</td>
<td>Armenia</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/AN.png') }}" width="24"  alt="National flag of Netherlands Antilles"></td>
<td>ANG</td>
<td>Netherlands Antillean Guilder</td>
<td>Netherlands Antilles</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/AO.png') }}" width="24"  alt="National flag of Angola"></td>
<td>AOA</td>
<td>Angolan Kwanza</td>
<td>Angola</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/AR.png') }}" width="24"  alt="National flag of Argentine Republic"></td>
<td>ARS</td>
<td>Argentine Peso</td>
<td>Argentina</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/AU.png') }}" width="24"  alt="National flag of The Commonwealth of Australia"></td>
<td>AUD</td>
<td>Australian Dollar</td>
<td>Australia</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/AW.png') }}" width="24"  alt="National flag of Aruba"></td>
<td>AWG</td>
<td>Aruban Florin</td>
<td>Aruba</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/AZ.png') }}" width="24"  alt="National flag of Azerbaijan"></td>
<td>AZN</td>
<td>Azerbaijanian Manat</td>
<td>Azerbaijan</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/BA.png') }}" width="24"  alt="National flag of Bosnia and Herzegovina"></td>
<td>BAM</td>
<td>Convertible Mark</td>
<td>Bosnia and Herzegovina</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/BB.png') }}" width="24"  alt="National flag of Barbados"></td>
<td>BBD</td>
<td>Barbados Dollar</td>
<td>Barbados</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/BD.png') }}" width="24"  alt="National flag of The People's Republic of Bangladesh"></td>
<td>BDT</td>
<td>Bangladeshi Taka</td>
<td>Bangladesh</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/BG.png') }}" width="24"  alt="National flag of Bulgaria"></td>
<td>BGN</td>
<td>Bulgarian Lev</td>
<td>Bulgaria</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/BH.png') }}" width="24"  alt="National flag of Bahrain"></td>
<td>BHD</td>
<td>Bahraini Dinar</td>
<td>Bahrain</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/BI.png') }}" width="24"  alt="National flag of Burundi"></td>
<td>BIF</td>
<td>Burundi Franc</td>
<td>Burundi</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/BM.png') }}" width="24"  alt="National flag of Bermuda"></td>
<td>BMD</td>
<td>Bermudian Dollar</td>
<td>Bermuda</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/BN.png') }}" width="24"  alt="National flag of Brunei Darussalam"></td>
<td>BND</td>
<td>Brunei Dollar</td>
<td>Brunei Darussalam</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/BO.png') }}" width="24"  alt="National flag of Plurinational State of Bolivia"></td>
<td>BOB</td>
<td>Boliviano</td>
<td>Plurinational State of Bolivia</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/BR.png') }}" width="24"  alt="National flag of The Federative Republic of Brazil"></td>
<td>BRL</td>
<td>Brazilian Real</td>
<td>Brazil</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/BS.png') }}" width="24"  alt="National flag of The Bahamas"></td>
<td>BSD</td>
<td>Bahamian Dollar</td>
<td>The Bahamas</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/BTC.png') }}" width="24"  alt="National flag of Bitcoin"></td>
<td>BTC</td>
<td>Bitcoin</td>
<td>Crypto-currency</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/BT.png') }}" width="24"  alt="National flag of Bhutan"></td>
<td>BTN</td>
<td>Bhutanese Ngultrum</td>
<td>Bhutan</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/BW.png') }}" width="24"  alt="National flag of Botswana"></td>
<td>BWP</td>
<td>Botswana Pula</td>
<td>Botswana</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/BY.png') }}" width="24"  alt="National flag of Belarus"></td>
<td>BYN</td>
<td>Belarussian Ruble</td>
<td>Belarus</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/BZ.png') }}" width="24"  alt="National flag of Belize"></td>
<td>BZD</td>
<td>Belize Dollar</td>
<td>Belize</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/CA.png') }}" width="24"  alt="National flag of Canada"></td>
<td>CAD</td>
<td>Canadian Dollar</td>
<td>Canada</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/CD.png') }}" width="24"  alt="National flag of DR Congo"></td>
<td>CDF</td>
<td>Congolese Franc</td>
<td>DR Congo</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/CH.png') }}" width="24"  alt="National flag of Switzerland"></td>
<td>CHF</td>
<td>Swiss Franc</td>
<td>Switzerland</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/CL.png') }}" width="24"  alt="National flag of Chile"></td>
<td>CLP</td>
<td>Chilean Peso</td>
<td>Chile</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/CN.png') }}" width="24"  alt="National flag of The People's Republic of China"></td>
<td>CNY</td>
<td>Chinese Yuan</td>
<td>China</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/CO.png') }}" width="24"  alt="National flag of Colombia"></td>
<td>COP</td>
<td>Colombian Peso</td>
<td>Colombia</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/CR.png') }}" width="24"  alt="National flag of Costa Rica"></td>
<td>CRC</td>
<td>Costa Rican Colon</td>
<td>Costa Rica</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/CU.png') }}" width="24"  alt="National flag of Cuba"></td>
<td>CUP</td>
<td>Cuban Peso</td>
<td>Cuba</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/CV.png') }}" width="24"  alt="National flag of Cape Verde"></td>
<td>CVE</td>
<td>Cabo Verde Escudo</td>
<td>Cape Verde</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/CZ.png') }}" width="24"  alt="National flag of The Czech Republic"></td>
<td>CZK</td>
<td>Czech Koruna</td>
<td>Czech Republic</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/DJ.png') }}" width="24"  alt="National flag of Djibouti"></td>
<td>DJF</td>
<td>Djibouti Franc</td>
<td>Djibouti</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/DK.png') }}" width="24"  alt="National flag of Denmark"></td>
<td>DKK</td>
<td>Danish Krone</td>
<td>Denmark</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/DO.png') }}" width="24"  alt="National flag of The Dominican Republic"></td>
<td>DOP</td>
<td>Dominican Peso</td>
<td>Dominican Republic</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/DZ.png') }}" width="24"  alt="National flag of Algeria"></td>
<td>DZD</td>
<td>Algerian Dinar</td>
<td>Algeria</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/EG.png') }}" width="24"  alt="National flag of Egypt"></td>
<td>EGP</td>
<td>Egyptian Pound</td>
<td>Egypt</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/ER.png') }}" width="24"  alt="National flag of Eritrea"></td>
<td>ERN</td>
<td>Eritrean Nakfa</td>
<td>Eritrea</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/ET.png') }}" width="24"  alt="National flag of Ethiopia"></td>
<td>ETB</td>
<td>Ethiopian Birr</td>
<td>Ethiopia</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/EU.png') }}" width="24"  alt="National flag of The European Union"></td>
<td>EUR</td>
<td>Euro</td>
<td>European Union</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/FJ.png') }}" width="24"  alt="National flag of Fiji"></td>
<td>FJD</td>
<td>Fiji Dollar</td>
<td>Fiji</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/FK.png') }}" width="24"  alt="National flag of Falkland Islands"></td>
<td>FKP</td>
<td>Falkland Islands Pound</td>
<td>Falkland Islands</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/GB.png') }}" width="24"  alt="National flag of The United Kingdom of Great Britain and Northern Ireland"></td>
<td>GBP</td>
<td>British Pound</td>
<td>United Kingdom</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/GE.png') }}" width="24"  alt="National flag of Georgia"></td>
<td>GEL</td>
<td>Georgian Lari</td>
<td>Georgia</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/GG.png') }}" width="24"  alt="National flag of Guernsey"></td>
<td>GGP</td>
<td>Guernsey Pound</td>
<td>Guernsey</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/GH.png') }}" width="24"  alt="National flag of Ghana"></td>
<td>GHS</td>
<td>Ghana Cedi</td>
<td>Ghana</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/GI.png') }}" width="24"  alt="National flag of Gibraltar"></td>
<td>GIP</td>
<td>Gibraltar Pound</td>
<td>Gibraltar</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/GM.png') }}" width="24"  alt="National flag of The Gambia"></td>
<td>GMD</td>
<td>Gambian Dalasi</td>
<td>The Gambia</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/GN.png') }}" width="24"  alt="National flag of Guinea"></td>
<td>GNF</td>
<td>Guinea Franc</td>
<td>Guinea</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/GT.png') }}" width="24"  alt="National flag of Guatemala"></td>
<td>GTQ</td>
<td>Guatemalan Quetzal</td>
<td>Guatemala</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/GY.png') }}" width="24"  alt="National flag of Guyana"></td>
<td>GYD</td>
<td>Guyana Dollar</td>
<td>Guyana</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/HK.png') }}" width="24"  alt="National flag of Hong Kong"></td>
<td>HKD</td>
<td>Hong Kong Dollar</td>
<td>Hong Kong</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/HN.png') }}" width="24"  alt="National flag of Honduras"></td>
<td>HNL</td>
<td>Honduran Lempira</td>
<td>Honduras</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/HR.png') }}" width="24"  alt="National flag of Croatia"></td>
<td>HRK</td>
<td>Croatian Kuna</td>
<td>Croatia</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/HT.png') }}" width="24"  alt="National flag of Haiti"></td>
<td>HTG</td>
<td>Haitian Gourde</td>
<td>Haiti</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/HU.png') }}" width="24"  alt="National flag of Hungary"></td>
<td>HUF</td>
<td>Hungarian Forint</td>
<td>Hungary</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/ID.png') }}" width="24"  alt="National flag of The Republic of Indonesia"></td>
<td>IDR</td>
<td>Indonesian Rupiah</td>
<td>Indonesia</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/IL.png') }}" width="24"  alt="National flag of The State of Israel"></td>
<td>ILS</td>
<td>Israeli Shekel</td>
<td>Israel</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/IN.png') }}" width="24"  alt="National flag of The Republic of India"></td>
<td>INR</td>
<td>Indian Rupee</td>
<td>India</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/IQ.png') }}" width="24"  alt="National flag of Iraq"></td>
<td>IQD</td>
<td>Iraqi Dinar</td>
<td>Iraq</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/IR.png') }}" width="24"  alt="National flag of Iran"></td>
<td>IRR</td>
<td>Iranian Rial</td>
<td>Iran</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/IS.png') }}" width="24"  alt="National flag of Iceland"></td>
<td>ISK</td>
<td>Iceland Krona</td>
<td>Iceland</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/JE.png') }}" width="24"  alt="National flag of Jersey"></td>
<td>JEP</td>
<td>Jersey Pound</td>
<td>Jersey</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/JM.png') }}" width="24"  alt="National flag of Jamaica"></td>
<td>JMD</td>
<td>Jamaican Dollar</td>
<td>Jamaica</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/JO.png') }}" width="24"  alt="National flag of Jordan"></td>
<td>JOD</td>
<td>Jordanian Dinar</td>
<td>Jordan</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/JP.png') }}" width="24"  alt="National flag of Japan"></td>
<td>JPY</td>
<td>Japanese Yen</td>
<td>Japan</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/KE.png') }}" width="24"  alt="National flag of Kenya"></td>
<td>KES</td>
<td>Kenyan Shilling</td>
<td>Kenya</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/KG.png') }}" width="24"  alt="National flag of Kyrgyzstan"></td>
<td>KGS</td>
<td>Kyrgyzstani Som</td>
<td>Kyrgyzstan</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/KH.png') }}" width="24"  alt="National flag of Cambodia"></td>
<td>KHR</td>
<td>Cambodian Riel</td>
<td>Cambodia</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/KM.png') }}" width="24"  alt="National flag of The Comoros"></td>
<td>KMF</td>
<td>Comoro Franc</td>
<td>The Comoros</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/KP.png') }}" width="24"  alt="National flag of North Korea"></td>
<td>KPW</td>
<td>North Korean Won</td>
<td>North Korea</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/KR.png') }}" width="24"  alt="National flag of South Korea"></td>
<td>KRW</td>
<td>South Korean Won</td>
<td>South Korea</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/KW.png') }}" width="24"  alt="National flag of Kuwait"></td>
<td>KWD</td>
<td>Kuwaiti Dinar</td>
<td>Kuwait</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/KY.png') }}" width="24"  alt="National flag of The Cayman Islands"></td>
<td>KYD</td>
<td>Cayman Islands Dollar</td>
<td>The Cayman Islands</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/KZ.png') }}" width="24"  alt="National flag of Kazakhstan"></td>
<td>KZT</td>
<td>Kazakhstani Tenge</td>
<td>Kazakhstan</td>
</tr>

</tbody>
</table>
</div>
</div>
</div>
<div class="col-md-6">
<div class="section-currencies-table">
<div class="table-responsive">
<table class="table table-striped custab table-hover">
<thead>
<tr>
<th class="caption-col">Flag</th>
<th class="caption-col">Code</th>
<th class="caption-col">Currency name</th>
<th class="caption-col">Country</th>
</tr>
</thead>
<tbody>
                                    <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/LA.png') }}" width="24"  alt="National flag of Laos"></td>
<td>LAK</td>
<td>Lao Kip</td>
<td>Laos</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/LB.png') }}" width="24"  alt="National flag of Lebanon"></td>
<td>LBP</td>
<td>Lebanese Pound</td>
<td>Lebanon</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/LK.png') }}" width="24"  alt="National flag of Sri Lanka"></td>
<td>LKR</td>
<td>Sri Lanka Rupee</td>
<td>Sri Lanka</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/LR.png') }}" width="24"  alt="National flag of Liberia"></td>
<td>LRD</td>
<td>Liberian Dollar</td>
<td>Liberia</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/LS.png') }}" width="24"  alt="National flag of Lesotho"></td>
<td>LSL</td>
<td>Lesotho Loti</td>
<td>Lesotho</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/LY.png') }}" width="24"  alt="National flag of Libya"></td>
<td>LYD</td>
<td>Libyan Dinar</td>
<td>Libya</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/MA.png') }}" width="24"  alt="National flag of Morocco"></td>
<td>MAD</td>
<td>Moroccan Dirham</td>
<td>Morocco</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/MD.png') }}" width="24"  alt="National flag of Moldova"></td>
<td>MDL</td>
<td>Moldovan Leu</td>
<td>Moldova</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/MG.png') }}" width="24"  alt="National flag of Madagascar"></td>
<td>MGA</td>
<td>Malagasy Ariary</td>
<td>Madagascar</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/MK.png') }}" width="24"  alt="National flag of Macedonia"></td>
<td>MKD</td>
<td>Macedonian Denar</td>
<td>Macedonia</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/MM.png') }}" width="24"  alt="National flag of Myanmar"></td>
<td>MMK</td>
<td>Myanmar Kyat</td>
<td>Myanmar</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/MN.png') }}" width="24"  alt="National flag of Mongolia"></td>
<td>MNT</td>
<td>Mongolian Tugrik</td>
<td>Mongolia</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/MO.png') }}" width="24"  alt="National flag of Macao"></td>
<td>MOP</td>
<td>Macanese Pataca</td>
<td>Macao</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/MR.png') }}" width="24"  alt="National flag of Mauritania"></td>
<td>MRO</td>
<td>Mauritanian Ouguiya</td>
<td>Mauritania</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/MU.png') }}" width="24"  alt="National flag of Mauritius"></td>
<td>MUR</td>
<td>Mauritius Rupee</td>
<td>Mauritius</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/MV.png') }}" width="24"  alt="National flag of Maldives"></td>
<td>MVR</td>
<td>Maldivian Rufiyaa</td>
<td>Maldives</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/MW.png') }}" width="24"  alt="National flag of Malawi"></td>
<td>MWK</td>
<td>Malawian Kwacha</td>
<td>Malawi</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/MX.png') }}" width="24"  alt="National flag of The United Mexican States"></td>
<td>MXN</td>
<td>Mexican Peso</td>
<td>Mexico</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/MY.png') }}" width="24"  alt="National flag of Malaysia"></td>
<td>MYR</td>
<td>Malaysian Ringgit</td>
<td>Malaysia</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/MZ.png') }}" width="24"  alt="National flag of Mozambique"></td>
<td>MZN</td>
<td>Mozambique Metical</td>
<td>Mozambique</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/NA.png') }}" width="24"  alt="National flag of Namibia"></td>
<td>NAD</td>
<td>Namibia Dollar</td>
<td>Namibia</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/NG.png') }}" width="24"  alt="National flag of The Federal Republic of Nigeria"></td>
<td>NGN</td>
<td>Nigerian Naira</td>
<td>Nigeria</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/NI.png') }}" width="24"  alt="National flag of Nicaragua"></td>
<td>NIO</td>
<td>Cordoba Oro</td>
<td>Nicaragua</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/NO.png') }}" width="24"  alt="National flag of The Kingdom of Norway"></td>
<td>NOK</td>
<td>Norwegian Krone</td>
<td>Norway</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/NP.png') }}" width="24"  alt="National flag of Nepal"></td>
<td>NPR</td>
<td>Nepalese Rupee</td>
<td>Nepal</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/NZ.png') }}" width="24"  alt="National flag of New Zealand"></td>
<td>NZD</td>
<td>New Zealand Dollar</td>
<td>New Zealand</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/OM.png') }}" width="24"  alt="National flag of Oman"></td>
<td>OMR</td>
<td>Rial Omani</td>
<td>Oman</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/PA.png') }}" width="24"  alt="National flag of Panama"></td>
<td>PAB</td>
<td>Panamanian Balboa</td>
<td>Panama</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/PE.png') }}" width="24"  alt="National flag of Peru"></td>
<td>PEN</td>
<td>Peruvian Sol</td>
<td>Peru</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/PG.png') }}" width="24"  alt="National flag of Papua New Guinea"></td>
<td>PGK</td>
<td>Papua New Guinean Kina</td>
<td>Papua New Guinea</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/PH.png') }}" width="24"  alt="National flag of The Republic of the Philippines"></td>
<td>PHP</td>
<td>Philippine Peso</td>
<td>Philippines</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/PK.png') }}" width="24"  alt="National flag of The Islamic Republic of Pakistan"></td>
<td>PKR</td>
<td>Pakistani Rupee</td>
<td>Pakistan</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/PL.png') }}" width="24"  alt="National flag of Poland"></td>
<td>PLN</td>
<td>Polish Zloty</td>
<td>Poland</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/PY.png') }}" width="24"  alt="National flag of Paraguay"></td>
<td>PYG</td>
<td>Paraguayan Guarani</td>
<td>Paraguay</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/QA.png') }}" width="24"  alt="National flag of Qatar"></td>
<td>QAR</td>
<td>Qatari Rial</td>
<td>Qatar</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/RO.png') }}" width="24"  alt="National flag of Romania"></td>
<td>RON</td>
<td>Romanian Leu</td>
<td>Romania</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/RS.png') }}" width="24"  alt="National flag of Serbia"></td>
<td>RSD</td>
<td>Serbian Dinar</td>
<td>Serbia</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/RU.png') }}" width="24"  alt="National flag of The Russian Federation"></td>
<td>RUB</td>
<td>Russian Ruble</td>
<td>Russia</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/RW.png') }}" width="24"  alt="National flag of Rwanda"></td>
<td>RWF</td>
<td>Rwanda Franc</td>
<td>Rwanda</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/SA.png') }}" width="24"  alt="National flag of Saudi Arabia"></td>
<td>SAR</td>
<td>Saudi Riyal</td>
<td>Saudi Arabia</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/SB.png') }}" width="24"  alt="National flag of Solomon Islands"></td>
<td>SBD</td>
<td>Solomon Islands Dollar</td>
<td>Solomon Islands</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/SC.png') }}" width="24"  alt="National flag of Seychelles"></td>
<td>SCR</td>
<td>Seychelles Rupee</td>
<td>Seychelles</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/SD.png') }}" width="24"  alt="National flag of The Sudan"></td>
<td>SDG</td>
<td>Sudanese Pound</td>
<td>The Sudan</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/SE.png') }}" width="24"  alt="National flag of The Kingdom of Sweden"></td>
<td>SEK</td>
<td>Swedish Krona</td>
<td>Sweden</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/SG.png') }}" width="24"  alt="National flag of Singapore"></td>
<td>SGD</td>
<td>Singapore Dollar</td>
<td>Singapore</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/SH.png') }}" width="24"  alt="National flag of Saint Helena, Ascension And Tristan Da Cunha"></td>
<td>SHP</td>
<td>Saint Helena Pound</td>
<td>Saint Helena, Ascension And Tristan Da Cunha</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/SL.png') }}" width="24"  alt="National flag of Sierra Leone"></td>
<td>SLL</td>
<td>Sierra Leonean Leone</td>
<td>Sierra Leone</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/SO.png') }}" width="24"  alt="National flag of Somalia"></td>
<td>SOS</td>
<td>Somali Shilling</td>
<td>Somalia</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/SR.png') }}" width="24"  alt="National flag of Suriname"></td>
<td>SRD</td>
<td>Surinam Dollar</td>
<td>Suriname</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/ST.png') }}" width="24"  alt="National flag of Sao Tome And Principe"></td>
<td>STD</td>
<td>Sao Tomean Dobra</td>
<td>Sao Tome And Principe</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/SV.png') }}" width="24"  alt="National flag of El Salvador"></td>
<td>SVC</td>
<td>El Salvador Colon</td>
<td>El Salvador</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/SY.png') }}" width="24"  alt="National flag of Syrian Arab Republic"></td>
<td>SYP</td>
<td>Syrian Pound</td>
<td>Syrian Arab Republic</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/SZ.png') }}" width="24"  alt="National flag of Swaziland"></td>
<td>SZL</td>
<td>Swazi Lilangeni</td>
<td>Swaziland</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/TH.png') }}" width="24"  alt="National flag of The Kingdom of Thailand"></td>
<td>THB</td>
<td>Thai Baht</td>
<td>Thailand</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/TJ.png') }}" width="24"  alt="National flag of Tajikistan"></td>
<td>TJS</td>
<td>Tajikistani Somoni</td>
<td>Tajikistan</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/TM.png') }}" width="24"  alt="National flag of Turkmenistan"></td>
<td>TMT</td>
<td>Turkmenistan New Manat</td>
<td>Turkmenistan</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/TN.png') }}" width="24"  alt="National flag of Tunisia"></td>
<td>TND</td>
<td>Tunisian Dinar</td>
<td>Tunisia</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/TO.png') }}" width="24"  alt="National flag of Tonga"></td>
<td>TOP</td>
<td>Tongan Pa'anga</td>
<td>Tonga</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/TR.png') }}" width="24"  alt="National flag of The Republic of Turkey"></td>
<td>TRY</td>
<td>Turkish Lira</td>
<td>Turkey</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/TT.png') }}" width="24"  alt="National flag of Trinidad And Tobago"></td>
<td>TTD</td>
<td>Trinidad and Tobago Dollar</td>
<td>Trinidad And Tobago</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/TW.png') }}" width="24"  alt="National flag of Taiwan"></td>
<td>TWD</td>
<td>New Taiwan Dollar</td>
<td>Taiwan</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/TZ.png') }}" width="24"  alt="National flag of Tanzania"></td>
<td>TZS</td>
<td>Tanzanian Shilling</td>
<td>Tanzania</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/UA.png') }}" width="24"  alt="National flag of Ukraine"></td>
<td>UAH</td>
<td>Ukrainian Hryvnia</td>
<td>Ukraine</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/UG.png') }}" width="24"  alt="National flag of Uganda"></td>
<td>UGX</td>
<td>Uganda Shilling</td>
<td>Uganda</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/US.png') }}" width="24"  alt="National flag of The United States of America"></td>
<td>USD</td>
<td>United States Dollar</td>
<td>USA</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/UY.png') }}" width="24"  alt="National flag of Uruguay"></td>
<td>UYU</td>
<td>Peso Uruguayo</td>
<td>Uruguay</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/UZ.png') }}" width="24"  alt="National flag of Uzbekistan"></td>
<td>UZS</td>
<td>Uzbekistan Sum</td>
<td>Uzbekistan</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/VE.png') }}" width="24"  alt="National flag of Venezuela"></td>
<td>VEF</td>
<td>Venezuelan Bolivar</td>
<td>Venezuela</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/VN.png') }}" width="24"  alt="National flag of The Socialist Republic of Vietnam"></td>
<td>VND</td>
<td>Vietnamese Dong</td>
<td>Vietnam</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/VU.png') }}" width="24"  alt="National flag of Vanuatu"></td>
<td>VUV</td>
<td>Vanuatu Vatu</td>
<td>Vanuatu</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/WS.png') }}" width="24"  alt="National flag of Samoa"></td>
<td>WST</td>
<td>Samoan Tala</td>
<td>Samoa</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/CF.png') }}" width="24"  alt="National flag of Bank of Central African States"></td>
<td>XAF</td>
<td>CFA Franc BEAC</td>
<td>Bank of Central African States</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/_unknown.png') }}" width="24"  alt="National flag of Organisation of Eastern Caribbean States"></td>
<td>XCD</td>
<td>East Caribbean Dollar</td>
<td>Organisation of Eastern Caribbean States</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/_unknown.png') }}" width="24"  alt="National flag of Central Bank of West African States"></td>
<td>XOF</td>
<td>CFA Franc BCEAO</td>
<td>Central Bank of West African States</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/_unknown.png') }}" width="24"  alt="National flag of IEOM"></td>
<td>XPF</td>
<td>CFP Franc</td>
<td>IEOM</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/YE.png') }}" width="24"  alt="National flag of Yemen"></td>
<td>YER</td>
<td>Yemeni Rial</td>
<td>Yemen</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/ZA.png') }}" width="24"  alt="National flag of Republic of South Africa"></td>
<td>ZAR</td>
<td>South African Rand</td>
<td>Republic of South Africa</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/ZM.png') }}" width="24"  alt="National flag of Zambia"></td>
<td>ZMW</td>
<td>Zambian Kwacha</td>
<td>Zambia</td>
</tr>
                                        <tr>
<td class="flag"><img src="{{ asset('assets/img/flags/ZW.png') }}" width="24"  alt="National flag of Zimbabwe"></td>
<td>ZWL</td>
<td>Zimbabwean Dollar</td>
<td>Zimbabwe</td>
</tr>

</tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="footer text-center">
                <p class="copyright ">
                    Copyright &copy; {{ date('Y') }}  Currency Converter <br>
                </p>

            </div>

        </div>
    </footer>
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap-select.min.js')}}"></script>
        <script src="{{ asset('js/dark-mode-switch.js')}}"></script>
       @yield('scripts')
</body>

</html>
