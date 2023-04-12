@extends('layouts.main')

@section('title', 'Editar' . $event->title)

@section('content')

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Editando: {{ $event->title }}</h1>
  <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="image">Imagem do evento:</label>
      <input type="file" id="image" name="image" class="form-control-file">
      <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
    </div>
    <div class="form-group">
      <label for="title">Evento:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" value="{{ $event->title }}" required>
    </div>
    <div class="form-group">
      <label for="date">Data do evento:</label>
      <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}" required>
    </div>
    <div class="form-group">
      <label for="title">Cidade:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" value="{{ $event->city }}" required>
    </div>
    <div class="form-group">
      <label for="title">O evento é privado?</label>
      <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1" {{ $event->private == 1 ? "selected='selected'" : "" }}>Sim</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?" required> {{ $event->description }}</textarea>
    </div>
    <div class="form-group">
      <label for="title">Adicione itens de infraestrutura:</label>
      <div class="form-group">	
        <input type="checkbox" name="itens[]" value="Cadeiras"> Cadeiras
      </div>
      <div class="form-group">	
        <input type="checkbox" name="itens[]" value="Palco"> Palco
      </div>
      <div class="form-group">	
        <input type="checkbox" name="itens[]" value="bebida grátis"> Bebida grátis
      </div>
      <div class="form-group">	
        <input type="checkbox" name="itens[]" value="Open Food"> Open food
      </div>
      <div class="form-group">	
        <input type="checkbox" name="itens[]" value="Brindes"> Brindes
      </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Salvar">
  </form>
</div>

@endsection
 