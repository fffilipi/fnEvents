@extends('layouts.main')

@section('title', 'FN Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar evento">
    </form>
</div>

<div id="events-container" class="col-md-12">
    <h2>proximos eventos</h2>
    <p class="subtitle">veja os eventos dos proximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
                <img src="img/banner.jpeg" alt="{{ $event->title }}">
                <div class="card-body">
                    <p class="card-date">12/12/2022</p>
                    <h5 class="card-title"> {{ $event->title }}</h5>
                    <p class="card-participants"> x participantes</p>
                    <a href="#" class="btn btn-primary">Saber Mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
 
