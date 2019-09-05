@extends('layout')
@section('content')
<div class="row ">
    <div class="col-12">
        <div class=" card_graph">
            <div class="card-body">
                <h4 class="card-title"></h4>
                <div id="area-chart"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('chartCss')
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/lib/c3/c3.min.css') }}">
@endsection

@section('chartScript')
    
    <script src="{{ asset('/assets/lib/c3/d3.min.js') }}"></script>
    <script src="{{ asset('/assets/lib/c3/c3.min.js') }}"></script>

    <!-- line chart -->
    <script src="{{ asset('/assets/lib/c3/line/c3-area.js') }}"></script>

    <script>
        $(function() {
            var a = c3.generate({
                bindto: "#area-chart",
                size: { height: 400 },
                point: { r: 4 },
                color: { pattern: ["#2962FF", "#4fc3f7", "#f00"] },
                data: {
                    columns: [
                        ["Total", @foreach($total as $t) {{ $t }}, @endforeach],
                        ["Fille", @foreach($fille as $f) {{ $f }}, @endforeach],
                        ["Garçon", @foreach($garcon as $g) {{ $g }}, @endforeach],

                    ],
                    types: { Fille: "area-spline", Garçon: "area-spline" , Total: "area-spline" }
                },
                grid: { y: { show: !0 } }
            });
        });
    </script>
@endsection