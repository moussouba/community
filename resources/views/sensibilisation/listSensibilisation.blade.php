@extends('layout')
@section('bread')
    <div class="row">
        <div class="col-3 align-self-center">
            <h4 class="page-title titre_white">Liste des Campagnes({{ $items->total() }})</h4>
            <div class="d-flex align-items-center">

            </div>
        </div>

    @if(Auth::user()->type != 1 || Auth::user()->type != 3)
        <div class="col-9 text-right">
            {{--            Search bar--}}
            <div class="d-inline-block no-block justify-content-end align-items-center">
                <input class="" type="search" placeholder="Rechercher ...">
            </div>
            {{--            Search bar--}}
            <div class="d-inline-block no-block justify-content-end align-items-center">
                <a href="{{ route('addS') }}" class="btn btn-pure nouvel">Nouvelle Campagne</a>
            </div>
        </div>
    @endif
    </div>
@endsection
@section('content')
    <div class="row">
        <!-- Column -->
        @foreach($items as $item)
            <div class="col-lg-4">
                <div class="card">
                @if(Auth::user()->type != 1)
                    <a class="m-2 text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <i class="fa fa-ellipsis-v" style="font-size:16px"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                        <span class="with-arrow">
                            <span class="bg-primary"></span>
                        </span>
                        <a class="dropdown-item" href="{{ route('listRecense',['id'=>$item->id]) }}"> Afficher</a>
                        @if(Auth::user()->type == 2)
                            <a class="dropdown-item" href="{{ route('uploadPVView',['id'=>$item->id]) }}"> Charger le pv de cette campagne</a>
                        @endif
                        <a class="dropdown-item" href="{{ route('addRecense',['id'=>$item->id]) }}" target="_blank"> Récenser maintenant</a>
                        <a class="dropdown-item" href="{{ route('updateView',['id'=>$item->id]) }}"> Modifier</a>
                        <a class="dropdown-item" href="{{ route('deleteS',['id'=>$item->id]) }}"> Supprimer</a>
                    </div>
                @endif
                    <div class="card-body">
                        <center><h3>{{ $item->libelle }}</h3></center>
                        <small class="text-center">{{ $item->description }}</small><br>
                        <div class="d-flex no-block align-items-center m-b-15">
                            <span><i class="fa fa-calendar">&nbsp;{{ $item->beginAt }}</i></span>
                            <div class="ml-auto">
                                <span><i class="fa fa-calendar">&nbsp;{{ $item->endAt }}</i></span>
                            </div>
                        </div>
                        <div class="d-flex no-block align-items-center m-b-15">
                            @if(Auth::user()->type == 1 && $item->path != 'NULL' && $item->path != "")
                                <a class="dropdown-item" href="{{ Storage::path($item->path) }}"> Charger le pv de cette campagne</a>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
    @endforeach
    <!-- Column -->
    </div>
    <div style="margin-top:8%">
        <nav aria-label="Page navigation example" class="text-center">
            {{ $items->links() }}
        </nav>

    </div>
@endsection