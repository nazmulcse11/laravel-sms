<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{

        public static function send_sms($phone, $message)
        {
            $to = $phone;
            $token = "58250957491743652669f58f977863da186ebe26464d74ef6bc3";
            $message = $message;
            $url = "https://api.bdbulksms.net/api.php?json";

            $data= array(
            'to'=>"$to",
            'message'=>"$message",
            'token'=>"$token"
            ); 

            $ch = curl_init(); 
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_ENCODING, '');
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $smsresult = curl_exec($ch);
        }
}
