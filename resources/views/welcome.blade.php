@extends('layouts.main')

@section('title','MatEduca')

@section('content')

    <div id = "title-container" class ="col-md-12 ">
        <h3>Ensino personalizado do seu jeito e no seu tempo.</h3>
    </div>
    <div id="search-container" class="col-md-12">

        <input type="text" id="search-input" class="form-control" placeholder="Pesquisar professores ou assunto...">

        <div class="filter-container">
            <label for="Filtro">Filtrar por </label>
            <button class="assunto">Assunto</button>
            <button class="Professor">Professor</button>
        </div>
    </div>
@endsection
