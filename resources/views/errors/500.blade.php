@extends('layouts.errors')
@section('title','Erreur interne')

@section('content')
<div class="error-box">
    <div class="error-body text-center">
        <h1 class="error-title">500</h1>
        <h3 class="text-uppercase error-subtitle">Erreur interne du serveur</h3>
        <p class="text-muted m-t-30 m-b-30">Vous réessayer plutard</p>
    </div>
</div>
@endsection