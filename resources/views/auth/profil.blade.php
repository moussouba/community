@extends('layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Mon profil</h4><br>
                    <h6 class="text-danger card-subtitle">Tous les champs sont requis <b>(*)</b></h6>
                </div>
                <hr class="m-t-0">
                <form class="form-horizontal r-separator" method="POST" action="{{ route('updateProfil') }}">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail0" class="col-sm-3 text-left control-label col-form-label"> Nom</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" value="{{ Auth::user()->name }}" required class="@error('name') is-invalid @enderror form-control" id="inputEmail0" placeholder="Nom du membre">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <input type="hidden" name="_token" class="form-control" value="{{ csrf_token() }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail1" class="col-sm-3 text-left control-label col-form-label"> Prenom(s)</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="prenom" value="{{ Auth::user()->prenom }}" required class="@error('prenom') is-invalid @enderror form-control" id="inputEmail1" placeholder="Prenom du membre">
                                        @error('prenom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail4" class="col-sm-3 text-left control-label col-form-label"> Telephone</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="tel" value="{{ Auth::user()->tel }}" class="form-control" id="inputEmail4" placeholder="Telephone du membre">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail6" class="col-sm-3 text-left control-label col-form-label"> E-mail</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" value="{{ Auth::user()->email }}" class="@error('email') is-invalid @enderror form-control" id="inputEmail6" placeholder="E-mail du membre">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail2" class="col-sm-3 text-left control-label col-form-label"> Sexe</label>
                                    <div class="col-sm-9">
                                        <select class="col-md-12 @error('sexe') is-invalid @enderror " name="sexe" id="2">
                                            <option  @if( Auth::user()->sexe == "Masculin" ) selected @endif value="Masculin">Masculin</option>
                                            <option @if( Auth::user()->sexe == "Feminin" ) selected @endif value="Feminin">Feminin</option>
                                        </select>
                                        @error('sexe')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-left control-label col-form-label"> Localité</label>
                                    <div class="col-sm-9">
                                        <select class="col-md-12 @error('localite') is-invalid @enderror " name="localite" id="3">
                                            <option selected value="Abidjan - Koumassi">Abidjan - Koumassi</option>
                                            <option value="Abidjan - Abobo">Abidjan - Abobo</option>
                                        </select>
                                        @error('localite')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail7" class="col-sm-3 text-left control-label col-form-label"> Niveau</label>
                                    <div class="col-sm-9">
                                        <select class="col-md-12 @error('niveau') is-invalid @enderror " name="niveau" id="7">
                                            @foreach($niveau as $nv)
                                                <option @if($nv == Auth::user()->niveau) selected @endif value="{{ $nv }}">{{ $nv }}</option>
                                            @endforeach
                                        </select>
                                        @error('niveau')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail8" class="col-sm-3 text-left control-label col-form-label"> Spécialité</label>
                                    <div class="col-sm-9">
                                        <select class="col-md-12 @error('specialite') is-invalid @enderror " name="specialite" id="8">
                                            @foreach($specialite as $sp)
                                                <option @if($sp == Auth::user()->specialite) selected @endif value="{{ $sp }}">{{ $sp }}</option>
                                            @endforeach
                                        </select>
                                        @error('specialite')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail14" class="col-sm-3 text-left control-label col-form-label"> Mot de passe</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" value="" class="@error('password') is-invalid @enderror form-control" id="inputEmail14" placeholder="Mot de passe du membre">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail124" class="col-sm-3 text-left control-label col-form-label"> Mot de passe</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password_confirmation" value="" class="form-control" id="inputEmail124" placeholder="Mot de passe du membre">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="form-group m-b-0 text-right">
                            <button type="submit" class="btn btn-pure ">{{ isset($items->nom)? 'Modifier maintenant ':'Modifier maintenant '}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection