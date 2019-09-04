@extends('layout');
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ajout</h4> <br>
                    <h6 class="text-danger card-subtitle">Tous les champs sont requis <b>(*)</b></h6>
                </div>
                <hr class="m-t-0">
                <form class="form-horizontal r-separator" action="" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail0" class="col-sm-3 text-left control-label col-form-label"> Nom</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" value="" class="form-control" id="inputEmail0" placeholder="Nom du membre">
                                        <input type="hidden" name="_token" class="form-control" value="{{ csrf_token() }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail1" class="col-sm-3 text-left control-label col-form-label"> Prenom(s)</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="prenom" value="" class="form-control" id="inputEmail1" placeholder="Prenom du membre">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail4" class="col-sm-3 text-left control-label col-form-label"> Telephone</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="tel" value="" class="form-control" id="inputEmail4" placeholder="Telephone du membre">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail6" class="col-sm-3 text-left control-label col-form-label"> E-mail</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" value="" class="form-control" id="inputEmail6" placeholder="E-mail du membre">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail2" class="col-sm-3 text-left control-label col-form-label"> Sexe</label>
                                    <div class="col-sm-9">
                                        <select class="col-md-12" name="sexe" id="2">
                                            <option selected value="Masculin">Masculin</option>
                                            <option value="Feminin">Feminin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-left control-label col-form-label"> Localité</label>
                                    <div class="col-sm-9">
                                        <select class="col-md-12" name="sexe" id="3">
                                            <option selected value="Abidjan - Koumassi">Abidjan - Koumassi</option>
                                            <option value="Abidjan - Abobo">Abidjan - Abobo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail7" class="col-sm-3 text-left control-label col-form-label"> Niveau</label>
                                    <div class="col-sm-9">
                                        <select class="col-md-12" name="sexe" id="7">
                                            <option selected value="Licence 1">Licence 1</option>
                                            <option value="Licence 2">Licence 2</option>
                                            <option value="Licence 3">Licence 3</option>
                                            <option value="Master 1">Master 1</option>
                                            <option value="Master 2">Master 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail8" class="col-sm-3 text-left control-label col-form-label"> Spécialité</label>
                                    <div class="col-sm-9">
                                        <select class="col-md-12" name="sexe" id="8">
                                            <option selected value="RSI">RSI</option>
                                            <option value="DAS">DAS</option>
                                            <option value="BD">BD</option>
                                            <option value="MMX">MMX</option>
                                            <option value="CMD">CMD</option>
                                            <option value="CD">CD</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail9" class="col-sm-3 text-left control-label col-form-label"> Communauté</label>
                                    <div class="col-sm-9">
                                        <select class="col-md-12" name="sexe" id="9">
                                            <option selected value="1">Com 1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail10" class="col-sm-3 text-left control-label col-form-label"> Localité</label>
                                    <div class="col-sm-9">
                                        <select class="col-md-12" name="sexe" id="10">
                                            <option selected value="1">Admin</option>
                                            <option selected value="2">Président de la communauté</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail14" class="col-sm-3 text-left control-label col-form-label"> Mot de passe</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" value="" class="form-control" id="inputEmail14" placeholder="Mot de passe du membre">
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
                            <button type="submit" class="btn btn-pure ">{{ isset($items->nom)? 'Modifier maintenant ':'Ajouter maintenant '}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection