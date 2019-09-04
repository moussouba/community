<!DOCTYPE html>
<html dir="ltr" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    @include('share.stylesheets')

</head>
<body>
    <style type="text/css">
        .vh-100{
            height:100vh;
            color:#fff;
        }
        .banner-left{
            font-family:roboto;
        }
        .big-font{
            font-weight:bold;
            padding:0;
        }
        .btn-circle{
            height: 90px;
            width: 90px;
        }
        #droite{
            display:none;
            background:#eeeeee;
            color: #091638
        }
    </style>
    <div class="row">
        <div id="gauche" class="col-lg-12 vh-100" 
            style="
                background:linear-gradient(rgba(0,0,0,0.5) 100%, rgba(0,0,0,0.5) 100%), url('/assets/images/img5.jpg');
                background-position:right;
                background-repeat: no-repeat;
                background-size: cover;
            ">
            <div class="mt-4 mb-4 text-center">
                <img width="80" src="{{ asset('/assets/images/logo-icon.png') }}" alt="">
            </div>
            <div class="container banner-left ">
                <div class="col-12 p-0 m-0 text-center text- fa-3x">
                    COMMUNITY
                </div>
                <div class="col-12 p-0 m-0  big-font text-center fa-2x text-upper">
                    La plateforme des communautés uvci
                </div>
                <div class="col-12 mt-4 mb-4 text-center text- fa-3x" style="font-size:16px">
                    Community est une plateforme de récensement pour les communautés de l'Université Virtuelle de Cote d'Ivoire(UVCI) , elle va les permettre de mener à bien leurs différentes campagnes de sensibilisation , notement par le récensement de facon numerique des nouveaux bacheliers et ou toutes personnes desireuse d'en savoir plus sur l'Universite Virtuelle de Cote d Ivoire.
                    Cette plateforme a été mise en place par la communauté BOSSER POUR ETRE BOSS DE KOUMASSI.
                </div>
                <div class="container" style="bottom:0px;position:absolute">
                    <div class="row" style="bottom :0 !important">
                        <div class="col-6 text-left" style="font-size: 30px;margin-top: 40px !important">
                            <a href="https://youtube.com"><i class="fab fa-youtube" style="color: red"></i></a>
                            <a href="https://youtube.com"><i class="fab fa-github" style="color: grey"></i></a>
                            <a href="https://youtube.com"><i class="fab fa-facebook" style="color: blue"></i></a>
                            <a href="https://youtube.com"><i class="fab fa-whatsapp" style="color: green"></i></a>
                        </div>
                        <div class="col-6 text-right ">
                            <button id="test" type="button" class="mt-2 mr-5 btn btn-outline-light btn-circle">
                                <i class=" fa fa-arrow-left fa-2x" id="icon"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div id="droite" class="col-md-6 vh-100 noir">
            <div class="container" style="margin-top:20%;">
                <div class="mt-5">
                    <div class="col-md-12 mt-5 pt-0">
                        
                        <form method="post" action="{{ route('login') }}" class="mt-5 mt-5 p-3">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12 col-lg-12 mb-3">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 text-left control-label col-form-label colortext">E-mail 
                                            <small class="text-danger ml-1 fa-1x">*</small>
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-sm-12 col-lg-12">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 text-left control-label col-form-label colortext">Mot de passe
                                        <small class="text-danger ml-1 fa-1x">*</small>
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-lg-12">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2"></label>
                                        <div class="text-left col-sm-10">
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><label for="">Remember me</label>
                                            @if (Route::has('password.request'))
                                                <label class="float-right" for=""><a href="{{ route('password.request') }}">Mot de passe oublié</a></label>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-b-0 mt-4 text-right">
                                <button type="submit" class="btn btn-pure col-md-10 ">CONNEXION</button>
                            </div>
                        </form>
                    </div>
                    <div>
                        @include('share.alert')
                    </div>
                </div>
            </div>            
        </div>
    </div>

    @include('share.scripts')
    <script type="text/javascript">
        $("#test").on("click",
            function(){
                $("#droite").toggle();
                $("#gauche").hasClass("col-lg-6")?($("#gauche").removeClass("col-lg-6").addClass("col-lg-12").removeClass("col-sm-6").addClass("col-sm-12").removeClass("col-md-6").addClass("col-md-12").addClass('animated slide'),$("#icon").removeClass("fa-arrow-right").addClass("fa-arrow-left")):($("#gauche").removeClass("col-lg-12").addClass("col-lg-6").removeClass("col-sm-12").addClass("col-sm-6").removeClass("col-md-12").addClass("col-md-6"),$("#icon").removeClass("fa-arrow-left").addClass("fa-arrow-right"))});
    </script>
</body>
</html>