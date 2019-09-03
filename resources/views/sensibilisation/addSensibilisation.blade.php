@extends('layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ isset($items->id)? 'Modification' : 'Ajout' }} de campagne {{ isset($items->libelle)? $items->libelle : '' }}  </h4> <br>
                    <h6 class="text-danger card-subtitle">Tous les champs sont requis <b>(*)</b></h6>
                </div>
                <hr class="m-t-0">
                <form class="form-horizontal r-separator" action="{{ isset($items->id)? route('updateS',['id'=>$items->id]) : route('validS') }}" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-lg-12">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 text-left control-label col-form-label"> Campagne</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="libelle" value="{{ isset($items->libelle)? $items->libelle : '' }}" class="form-control" id="inputEmail3" placeholder="Nom de la campagne">
                                        <input type="hidden" name="_token" class="form-control" value="{{ csrf_token() }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-left control-label col-form-label">Début</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="beginAt" value="{{ isset($items->beginAt)? $items->beginAt : '' }}" class="form-control" id="inputEmail3" placeholder="debut de la campagne">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-left control-label col-form-label">Fin</label>
                                    <div class="col-sm-9">
                                        <input type="date"name="endAt" value="{{ isset($items->endAt)? $items->endAt : '' }}"  class="form-control" id="inputEmail3" placeholder="lieu ou aura lieu la campagne">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-lg-12">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-left control-label col-form-label">Description</label>
                                    <div class="col-sm-12">
                                        <textarea class="col-sm-12" name="description" id="" cols="100" rows="5">{{ isset($items->description)? $items->description : '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="form-group m-b-0 p-3 text-right">
                            <button type="submit" class="btn btn-pure ">{{ isset($items->id)? 'Modifier' : 'Créer maintenant' }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection