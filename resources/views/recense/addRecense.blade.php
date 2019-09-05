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
        .bg-vh{
            background:red url('{{ asset("/assets/images/img5.jpg") }}');
            background-position:center;
            background-repeat: no-repeat;
            background-size: contain;
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
        }
    </style>
    <div class="row">
        <div id="gauche" class="col-lg-6 vh-100" 
            style="
                background:linear-gradient(rgba(0,0,0,0.6) 100%, rgba(0,0,0,0.6) 100%), url('/assets/images/img5.jpg');
                background-position:right;
                background-repeat: no-repeat;
                background-size: cover;
            ">
            <div class="mt-4 mb-4 text-center">
                <img width="50" src="{{ asset('/assets/images/logo-icon.png') }}" alt="">
            </div>
            <div class="container banner-left ">
                <div class="col-12 big-font p-0 m-0 text-center text-upper fa-3x">
                    {{ $sensib->libelle }}
                </div>
                <div class="col-12 p-0 m-0  big-font text-muted text-center fa-2x text-upper">
                    {{ Auth::user()->communaute->nom }}
                </div>
                <div class="col-12 mt-4 mb-4 text-muted text-center" style="font-size:20px">
                    {{ $sensib->description }}
                </div>
                <div class="container" style="bottom:0px;position:absolute">
                    <div class="row">
                        <div class="col-6 text-left text-muted">
                            <p class="big-font banner-left fa-5x">{{ $perso->count() }}</p>
                        </div>
                        <div class="col-6 text-right ">
                            <button id="test" type="button" class="mt-2 mr-5 btn btn-outline-light btn-circle">
                                <i class=" fa fa-arrow-right fa-2x" id="icon"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div id="droite" class="col-md-6 vh-100 noir violet_bg">
            <div class="container">
                <div class="">
                    <div class="col-md-12 text-center pt-0">
                        
                        <form method="post" action="{{route('validRecense',['id'=>$id])}}" class=" mt-5 p-3">
                            <div class="row">
                                <div class="col-sm-12 col-lg-12">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 text-left control-label col-form-label colortext">Nom 
                                            <small class="text-danger ml-1 fa-1x">*</small>
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text"  name="nom" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-sm-12 col-lg-12">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 text-left control-label col-form-label colortext">Prénom
                                        <small class="text-danger ml-1 fa-1x">*</small>
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text"  name="prenom" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-lg-12">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 text-left control-label col-form-label colortext">Sexe
                                        <small class="text-danger ml-1 fa-1x">*</small>
                                        </label>
                                        <div class="col-sm-10">
                                            <select name="sexe" class="select2 form-control custom-select" style="width: 100%; height:53px;">
                                                <option selected value="Masculin">Masculin</option>
                                                <option value="Feminin">Feminin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-lg-12">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 text-left control-label col-form-label colortext">Niveau
                                        <small class="text-danger ml-1 fa-1x">*</small>
                                        </label>
                                        <div class="col-sm-10">
                                            <select name="niveau" class="select2 form-control custom-select" style="width: 100%; height:53px;">
                                                <option value="Premiere">Première</option>
                                                <option selected value="Terminale">Terminale</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-lg-12">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 text-left control-label col-form-label colortext">Phone
                                        <small class="text-danger fa-1x">*</small>
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="tel" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-lg-12">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 text-left control-label col-form-label colortext">Matricule</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="matricule" class="form-control">
                                            <input type="hidden"  name="_token" value="{{ csrf_token() }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-b-0 mt-4">
                                <button type="submit" class="btn btn-pure col-md-12 ">ENREGISTRER</button>
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