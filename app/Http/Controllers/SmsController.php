<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sms;

class SmsController extends Controller
{
    public function sms_form()
    {
        return view('sms-form');
    }

    public function sms_send(Request $request)
    {     
       $phone = $request->phone;
       $message = 'Test Msg';
       $otp = rand(10000,99999);

    //    dd($otp);

    // $users = User::all();

       Sms::send_sms($phone,$otp);
       return back();
    }
}
