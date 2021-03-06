@if(Session::has('success'))
    <div class="container">
        <div class="row">
            <div class=" col-md-12 col-sm-12 col-lg-12 alert alert-success alert-rounded">
                {{ Session::get('success')}}
            </div>
        </div>
    </div>
@endif

@if(Session::has('error'))
    <div class="container">
        <div class="row">
            <div class=" col-md-12 col-sm-12 col-lg-12 alert alert-danger alert-rounded">
                {{ Session::get('error')}}
            </div>
        </div>
    </div>
@endif