@extends('layouts.master')

@section('content')

    <div class="row">

    @foreach( $peliculas as $peli )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center" style="width:auto">

        <a href="{{ url('/peliculas/' . $peli->id ) }}">
            <img src="{{$peli->imagen}}" style="height:350px; width: 300px;" class="img-rounded"/>
            <h4 style="min-height:45px; margin:5px 0 10px 0">
                {{$peli->nombre}}
            </h4>
        </a>

    </div>
    @endforeach

</div>

@stop