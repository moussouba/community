@extends('layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Rapport de la campagne</h4>
                    <h6 class="card-subtitle">Veuillez enregistrer votre <code> rapport en format (.pdf, .doc)</code> s'il vous plaît.</h6>
                    <form method="POST" action="{{ route('uploadPV',['id'=>$id]) }}" enctype="multipart/form-data" >
                        <div class="fallback">
                            @csrf
                            <input type="file" name="pv" />
                        </div>
                        <div class="form-group m-b-0 text-right">
                            <button type="submit" class="btn btn-pure waves-effect ">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection