@extends('layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ isset($items->nom)? 'Modification ':'Ajout '}}de communauté</h4> <br>
                    <h6 class="text-danger card-subtitle">Tous les champs sont requis <b>(*)</b></h6>
                </div>
                <hr class="m-t-0">
                <form class="form-horizontal r-separator" action="{{ isset($items->nom)? route('updateCommunauteValid',['id'=>$items->id]) : route('validCommunaute') }}" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label"> Communauté</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nom" value="{{ isset($items->nom)? $items->nom : ''}}" class="form-control" id="inputEmail3" placeholder="Nom de la communauté">
                                        <input type="hidden" name="_token" class="form-control" value="{{ csrf_token() }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail0" class="col-sm-3 text-right control-label col-form-label"> Localité</label>
                                    <div class="col-sm-9">
                                        <select class="col-sm-12" name="localite" id="inputEmail0">
                                            <option selected value="Abidjan - Koumassi">Abidjan - Koumassi</option>
                                            <option value="Abidjan - Abobo">Abidjan - Abobo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-lg-12">
                                <div class="form-group row">
                                    <label for="inputEmail3"  class="col-sm-5 text-left control-label col-form-label"> Lien whatsApp ( <b class=" text-muted">https:web.whatsapp.com\group00</b> )</label>
                                    <div class="col-sm-12">
                                        <input type="url" name="lien" value="{{ isset($items->lien)? $items->lien : ''}}" class="form-control" id="inputEmail3" placeholder="Lien whatsApp de votre groupe ici ...">
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