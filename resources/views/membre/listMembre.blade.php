@extends('layout')
@section('bread')
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title titre_white">Total Membres ({{$user->total()}})</h4>
            <div class="d-flex align-items-center">

            </div>
        </div>
        @if(Auth::user()->type != 3)
        <div class="col-7 align-self-center">
            <div class="d-flex no-block justify-content-end align-items-center">
                <a href="{{ route('registerWiew') }}" class="btn btn-pure nouvel">Nouveau membre</a>
            </div>
        </div>
        @endif
    </div>
@endsection
@section('content')
    <div class="row">
        @foreach($user as $usr)
            <div class="col-lg-4 col-md-4">
                <div class="card cadre">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9" style="vertical-align:bottom">
                                <h4 class="font-light">{{ $usr->name }} {{ $usr->prenom }} 
                                @if($usr->type == 2) 
                                    <img width="14" src="{{ asset('/assets/images/rating/star-on.png')}}" alt="">
                                @endif
                                @if($usr->type == 3)
                                    <img width="14" src="{{ asset('/assets/images/rating/star-off.png')}}" alt="">
                                @endif
                                </h4>
                                <small class="text-success">
                                        {{ $usr->communaute['nom'] }}
                                </small>
                            </div>
                            <div class="col-md-3">
                                <img style="border:3px solid rgba(49,230,0,0.7);cursor:pointer" width="50" src="{{ asset('/assets/images/users/user.png')}}" alt="" class="rounded-circle">
                            </div>
                        </div>
                        <div class="row p-t-10 p-b-10">
                            <div class="col text-left">
                                <h6 class="text-muted">{{ $usr->sexe }}</h6>
                                <h6 class="text-muted">{{ $usr->tel }}</h6>
                                <h6 class="text-muted">{{ $usr->email }}</h6>
                                <h6 class="text-muted">{{ $usr->localite }}</h6>
                                <h6 class="text-muted">{{ $usr->niveau }} ( {{ $usr->specialite }} )</h6>
                                <i>Membre depuis: <b>{{ $usr->created_at }}</b></i><br>
                                @if(Auth::user()->type != 1 && Auth::user()->type != 3)
                                    <small>Ce membre n'est plus actif ? <a href="{{ route('deleteMembre',['id'=>$usr->id])}}" style="cursor:pointer" class="text-danger"><u>  supprimez-le</u></a></small>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div class="row">
        <div style="margin-top:8%">
            <nav aria-label="Page navigation example" class="text-center">
                {{ $user->links() }}
            </nav>

        </div>
    </div>
@endsection