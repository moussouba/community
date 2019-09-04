@extends('layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="page-breadcrumb">
                        <div class="row">
                            <div class="col-5 align-self-center">
                                <h4 class="page-title">Personnes enregistrées - {{ $sensib->libelle }} ({{$items->count()}})</h4>
                                <div class="d-flex align-items-center">

                                </div>
                            </div>
                            <div class="col-7 align-self-center">
                                <div class="d-flex no-block justify-content-end align-items-center">
                                    <a href="{{ route('addRecense',['id'=>$id]) }}" class="btn btn-pure nouvel">Récenser maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="demo-foo-addrow" class="table m-t-30 no-wrap table-hover contact-list" data-page-size="10">
                            <thead class="bg-inverse text-white">
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Sexe</th>
                                <th>Email</th>
                                <th>Numéro</th>
                                <th>Niveau</th>
                                <th>Matricule</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{ $item->nom }}</td>
                                    <td>{{ $item->prenom }}</td>
                                    <td>{{ $item->sexe }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->tel }}</td>
                                    <td>{{ $item->niveau }}</td>
                                    <td>{{ $item->matricule }}</td>
                                    <td>
                                        <a href="{{ route('deleteRecense', ['sensi'=>$id,'id'=>$item->id]) }}" class="btn btn-xs btn-pure nouvel">Supprimer</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection