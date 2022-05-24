<?php
namespace App\Services;

use GuzzleHttp\Client;

class SendSms
{

    public function sendCurlSMS($numbers, $message)
    {
        $apiKey = urlencode(env('SMS_GATEWAY_KEY'));
        // Message details
        $numbers = urlencode(count($numbers) > 1 ? implode(', ', $numbers) : $numbers[0]);
        $sender  = urlencode('MTGPOG');
        $message = rawurlencode($message);
        // Prepare data for POST request
        $data = '?APIKey=' . $apiKey . '&senderid=OTPSMS&channel=2&DCS=0&flashsms=0&number=91' . $numbers . "&text=" . $message . "&route=1";
        // Send the GET request with cURL
        $ch = curl_init('https://www.smsgatewayhub.com/api/mt/SendSMS' . $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        dd($response);
        curl_close($ch);
    }

    public function sendSMS($numbers, $message)
    {
        foreach ($numbers as &$number) {
            $number = "91" . $number;
        }

        unset($value);

        $apiKey = urlencode(env('SMS_GATEWAY_KEY'));
        // Message details
        $numbers = (count($numbers) > 1 ? implode(', ', $numbers) : $numbers[0]);
        $message = rawurlencode($message);
        // Prepare data for POST request
        $data    = '?APIKey=' . $apiKey . '&senderid=OTPSMS&channel=2&DCS=0&flashsms=0&number=' . $numbers . "&text=" . $message . "&route=1";
        $api_url = "https://www.smsgatewayhub.com/api/mt/SendSMS" . $data;

        $client = new Client(['verify' => false]);
        // $client = new Client();

        $res         = $client->request('GET', $api_url);
        $status_code = $res->getStatusCode();
        $body        = json_decode($res->getBody());
    }

}
