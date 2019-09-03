@extends('layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="page-breadcrumb">
                        <div class="row">
                            <div class="col-5 align-self-center">
                                <h4 class="page-title">Communautés enregistrées ({{$items->count()}})</h4>
                                <div class="d-flex align-items-center">

                                </div>
                            </div>
                            @if(Auth::user()->type == 1)
                            <div class="col-7 align-self-center">
                                <div class="d-flex no-block justify-content-end align-items-center">
                                    <a href="{{ route('addCommunauteView') }}" class="btn btn-pure nouvel">Créer communauté</a>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="demo-foo-addrow" class="table m-t-30 no-wrap table-hover contact-list" data-page-size="10">
                            <thead class="bg-inverse text-white">
                            <tr>
                                <th>Communauté</th>
                                <th>Localité</th>
                                <th>Responsable</th>
                                <th>Numéro</th>
                                <th>lien whatsApp</th>
                                <th>Total membre</th>
                                @if(Auth::user()->type == 1)
                                <th>Actions</th>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{ $item->nom }}</td>
                                    <td>{{ $item->localite }}</td>
                                    <td>respo</td>
                                    <td>tel</td>
                                    <td><a href="{{ $item->lien }}" target="_blank">{{ $item->lien }}</a></td>
                                    <td>20</td>
                                    @if(Auth::user()->type == 1)
                                    <td>
                                        <a href="{{ route('updateCommunauteView', ['id'=>$item->id]) }}" class="btn btn-xs btn-pure nouvel">Modifier</a>
                                        <a href="{{ route('deleteCommunaute', ['id'=>$item->id]) }}" class="btn btn-xs btn-pure nouvel">Supprimer</a>
                                    </td>
                                    @endif
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