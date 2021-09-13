<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        * {
            margin: 0px auto;
            padding: 0px;
            text-align: center;
            font-family: 'Open Sans', sans-serif;
        }

        .cotn_principal {
            position: absolute;
            width: 100%;
            height: 100%;
            /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#cfd8dc+0,607d8b+100,b0bec5+100 */
            background: #cfd8dc; /* Old browsers */
            background: -moz-linear-gradient(-45deg,  #ffffff 0%, #65c4d4 100%, #6b4188 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(-45deg,  #ffffff 0%,#65c4d4 100%,#6b4188 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(135deg,  #ffffff 0%,#65c4d4 100%,#6b4188 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cfd8dc', endColorstr='#b0bec5',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
        }

        .cont_centrar {
            position: relative;
            float: left;
            width: 100%;
        }

        .cont_login {
            position: relative;
            width: 640px;
            left: 50%;
            margin-left: -320px;
        }

        .cont_back_info {  
            position: relative;
            float: left;
            width: 640px;
            height: 280px;
            overflow: hidden;
            background-color: #fff;
            margin-top: 100px;
            box-shadow: 1px 10px 30px -10px rgba(0,0,0,0.5);
        }

        .cont_forms {
            position: absolute;
            overflow: hidden;
            top:100px;
            left: 0px;
            width: 320px;
            height: 280px;
            background-color: #eee;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }

        .cont_forms_active_login {
            box-shadow: 1px 10px 30px -10px rgba(0,0,0,0.5);
            height: 420px;  
            top:20px;
            left: 0px;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }

        .cont_forms_active_sign_up {
            box-shadow: 1px 10px 30px -10px rgba(0,0,0,0.5);
            height: 480px;  
            top:20px;
            left:320px;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }

        .cont_img_back_grey {
            position: absolute;
            width: 950px;
            top:-10px;
            left: -116px;
        }

        .cont_img_back_grey > img {
            width: 100%;
            -webkit-filter: grayscale(100%);     filter: grayscale(100%);
            opacity: 0.2;
            animation-name: animar_fondo;
            animation-duration: 20s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-direction: alternate;
        }

        .cont_img_back_ {
            position: absolute;
            width: 950px;
            top:-10px;
            left: -116px;
        }

        .cont_img_back_ > img {
            width: 100%;
            opacity: 0.3;
            animation-name: animar_fondo;
            animation-duration: 20s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-direction: alternate;
        }

        .cont_forms_active_login > .cont_img_back_ {
            top:0px;  
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }

        .cont_forms_active_sign_up > .cont_img_back_ {
            top:50px;  
            left: -435px;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }
        

        .cont_info_log_sign_up {
            position: absolute;
            width: 640px;
            height: 280px;
            top: 100px;
            z-index: 1;
        } 

        .col_md_login {
            position: relative;
            float: left;
            width: 50%;
        }

        .col_md_login > h2 {
            font-weight: 400;
            margin-top: 70px;
                color: #757575;
        }

        .col_md_login > p {
            font-weight: 400;
            margin-top: 15px;
            width: 80%;
                color: #37474F;
        }

        .btn_login { 
            background-color: #26C6DA;
            border: none;
            padding: 10px;
            width: 200px;
            border-radius:3px;
            box-shadow: 1px 5px 20px -5px rgba(0,0,0,0.4);
            color: #fff;
            margin-top: 10px;
            cursor: pointer;
        }

        .col_md_sign_up {
            position: relative;
            float: left;
            width: 50%;  
        }

        .cont_ba_opcitiy > h2 {
            font-weight: 400;
            color: #fff;
        }

        .cont_ba_opcitiy > p {
            font-weight: 400;
            margin-top: 15px;
            color: #fff;
        }
        /* ----------------------------------
        background text    
        ------------------------------------
        */
        .cont_ba_opcitiy {
            position: relative;
            background-color: rgba(120, 144, 156, 0.55);
            width: 80%;
            border-radius:3px ;
            margin-top: 60px;
            padding: 15px 0px;
        }

        .btn_sign_up { 
            background-color: #ef5350;
            border: none;
            padding: 10px;
            width: 200px;
            border-radius:3px;
            box-shadow: 1px 5px 20px -5px rgba(0,0,0,0.4);
            color: #fff;
            margin-top: 10px;
            cursor: pointer;
        }
        .cont_forms_active_sign_up {
            z-index: 2;  
        }


        @-webkit-keyframes animar_fondo {
            from { -webkit-transform: scale(1) translate(0px);
            -moz-transform: scale(1) translate(0px);
            -ms-transform: scale(1) translate(0px);
            -o-transform: scale(1) translate(0px);
            transform: scale(1) translate(0px); }
            to { -webkit-transform: scale(1.5) translate(50px);
            -moz-transform: scale(1.5) translate(50px);
            -ms-transform: scale(1.5) translate(50px);
            -o-transform: scale(1.5) translate(50px);
            transform: scale(1.5) translate(50px); }
        }
        @-o-keyframes identifier {
            from { -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1); }
            to { -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -ms-transform: scale(1.5);
            -o-transform: scale(1.5);
            transform: scale(1.5); }
        }
        @-moz-keyframes identifier {
            from { -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1); }
            to { -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -ms-transform: scale(1.5);
            -o-transform: scale(1.5);
            transform: scale(1.5); }
        }
        @keyframes identifier {
            from { -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1); }
            to { -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -ms-transform: scale(1.5);
            -o-transform: scale(1.5);
            transform: scale(1.5); }
        }
        .cont_form_login {
            position: absolute;
            opacity: 0;
            display: none;
            width: 320px;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }

        .cont_forms_active_login {
            z-index: 2;  
        }
        .cont_forms_active_login  >.cont_form_login {
        }

        .cont_form_sign_up {
            position: absolute;
            width: 320px;
            float: left;
            opacity: 0;
            display: none;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }

        
        .cont_form_sign_up > input {
            text-align: left;
            padding: 15px 5px;
            margin-left: 10px;
            margin-top: 20px;
            width: 260px;
            border: none;
                color: #757575;
        }

        .cont_form_sign_up > h2 {
            margin-top: 50px; 
            font-weight: 400;
            color: #757575;
        }


        .cont_form_login > input {
            padding: 15px 5px;
            margin-left: 10px;
            margin-top: 20px;
            width: 260px;
            border: none;
            text-align: left;
            color: #757575;
        }

        .cont_form_login > h2 {
            margin-top: 110px; 
            font-weight: 400;
            color: #757575;
        }
        .cont_form_login > a,.cont_form_sign_up > a  {
            color: #757575;
                position: relative;
                float: left;
                margin: 10px;
            margin-left: 30px;
        }
    </style>

</head>
<body>
    <div class="cotn_principal">
        <div class="cont_centrar">
        
        <div class="cont_login col-sm-10 col-12">
        <div class="cont_info_log_sign_up col-sm-10 col-12">
              <div class="col_md_login">
        <div class="cont_ba_opcitiy">
                
        <h2>LOGOWANIE</h2>  
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> 
          <button class="btn_login" onclick="cambiar_login()">LOGOWANIE</button>
          </div>
          </div>
        <div class="col_md_sign_up">
        <div class="cont_ba_opcitiy">
          <h2>REJESTRACJA</h2>
        
          
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        
          <button class="btn_sign_up" onclick="cambiar_sign_up()">REJESTRACJA</button>
        </div>
          </div>
               </div>
        
            
            <div class="cont_back_info">
               <div class="cont_img_back_grey">
               <img src="./assets/img/reception.jpg" alt="" />
               </div>
               
            </div>
        <div class="cont_forms" >
            <div class="cont_img_back_">
               <img src="./assets/img/reception.jpg" alt="" />
        </div>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="cont_form_login">
                <h2>LOGOWANIE</h2>
                <input placeholder="Email"  type="email" name="email" autofocus/>
                <input placeholder="Password"  type="password" name="password"/>
                <button type="submit" class="btn_login">ZATWIERDŹ</button>
                </div>
            </form>

            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="cont_form_sign_up col-sm-10 col-12">
        
                    <h2>REJESTRACJA</h2>

                            <input type="text"  name="name" required autocomplete="name" autofocus placeholder="Imie">
                            <input type="text"  name="surname" required autocomplete="surname" autofocus placeholder="Nazwisko">
                            <input  type="email" name="email" required autocomplete="email" placeholder="E-mail">
                            <input  type="password" name="password" required autocomplete="new-password" placeholder="Hasło">
                            <input  type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Powtórz hasło">
                            <button type="submit" class="btn_login">ZATWIERDŹ</button>

               
                </div>
            </form>

        
            </div>
            
          </div>
         </div>
        </div>
        <script>
            function cambiar_login() {
                document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";  
                document.querySelector('.cont_form_login').style.display = "block";
                document.querySelector('.cont_form_sign_up').style.opacity = "0";               
                setTimeout(function(){document.querySelector('.cont_form_login').style.opacity = "1"; },400);  
                setTimeout(function(){document.querySelector('.cont_form_sign_up').style.display = "none";},200);  
            }

            function cambiar_sign_up(at) {
                document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
                document.querySelector('.cont_form_sign_up').style.display = "block";
                document.querySelector('.cont_form_login').style.opacity = "0";
                setTimeout(function(){  document.querySelector('.cont_form_sign_up').style.opacity = "1";},100);  
                setTimeout(function(){   document.querySelector('.cont_form_login').style.display = "none";},400);  
            }    

        </script>
</body>
</html>





<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input rd" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" er" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>