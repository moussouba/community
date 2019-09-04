@extends('layouts.errors')
@section('title','Accès non autorisé')

@section('content')
<div class="error-box">
    <div class="error-body text-center">
        <h1 class="error-title">403</h1>
        <h3 class="text-uppercase error-subtitle">Accès non autorisé</h3>
        <p class="text-muted m-t-30 m-b-30">Vous essayer d'accéder à une page non autorisée</p>
        <a href="{{route('home')}}" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Retour à la page d'accueil</a> 
    </div>
</div>
@endsection