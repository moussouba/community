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
    <style>
        label{ color:#fff}
        .big-font{
            font-weight:bold;
            padding:0;
            font-family:roboto;
            text-transform:uppercase;
            color:#fff;
        }
    </style>

</head>
<body>
    <div class="row violet_bg" style="height: 100vh">
        <div class="col-md-12">
            <div class="container" style="margin-top:18%;">
                <div class="mt-5">
                    <div class="col-md-12 mt-5 pt-0">
                        <div class="col-sm-12 text-center big-font fa-2x">
                            Réinitialisez votre mot de passe
                        </div>
                        <form method="post" action="{{ route('password.email') }}" class="mt-5 mt-5 p-3">
                            @csrf
                            @if (session('status'))
                                <div class="m-3 alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-sm-12 col-lg-12 mb-3">
    
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 text-left control-label col-form-label colortext">E-mail 
                                            <small class="text-danger ml-1 fa-1x">*</small>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-3" style="background-color: green">
                                            <input type="submit" style="background-color: green;color: white" value="RECEVOIR LE LIEN" class="btn btn-pure col-md-12">
                                        </div>
                                    </div>
                                </div>
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
</body>
</html>
