@extends('layaouts.app')

@section('content')

<div class="container">
    <div class="row ">

        @foreach($trains as $train)
        <div class="col-4 my-3">
            <div class="card p-1 gap-1">
                <div class="card-img-top">
                    <img src="{{$train->img}}" alt="">
                </div>
                <ul>
                    <li>Partenza: {{$train->stazione_di_partenza}} alle {{$train->Orario_di_partenza}}</li>
                    <li>Arrivo: {{$train->stazione_di_arrivo}} alle {{$train->Orario_di_arrivo}}</li>
                    <li>Codice treno: {{$train->codice_treno}}</li>
                    <li>Numero di carrozze {{$train->numero_carozza}}</li>
                    <li>In orario {{$train->in_orario === 1 ? 'si' : 'no'}}</li>
                    <li>{{$train->cancellato === 1 ? 'Il treno è stato cancellato' : ''}}</li>
                </ul>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection