<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;


class CurrencyConverterController extends Controller
{
    public function index()
    {
        return view("convert.index", compact('currencyRates', 'title'));
    }

    public function convert(Request $request, $currencyIdentifier)
    {
        //get currency identifier and split
        $splittedCurrencyIdentifier = explode("-", $currencyIdentifier);

        $from = strToUpper($splittedCurrencyIdentifier[0]);
        $to = strToUpper($splittedCurrencyIdentifier[2]);
        $amount = $request->amount > 0 ? $request->amount : 1;

        $title = "{$from} To {$to}";

        //formulate the URL
        $url = "https://api.exchangerate.host/convert?from={$from}&to={$to}&amount={$amount}";

        $ratesAPIUrl = "https://api.exchangerate.host/latest?base=usd";

        //make api request
        $ratesAPIRequest = Http::get($ratesAPIUrl);

        // $apiRequest = Http::get($url);

         $currencyRates =  json_encode($ratesAPIRequest['rates']);

        // $decodedResponse = json_decode($apiRequest);

        // $reverseRate =  1 / $decodedResponse->info->rate;

        // $conversionData = ["amount" => $amount, "result" => $decodedResponse->result, "rate" => $decodedResponse->info->rate, "reverseRate" => $reverseRate];

        return view("convert.index", compact('currencyRates', 'title'));
    }
}
