@extends('layouts.main')

@section('title','MatEduca')

@section('content')

    <div id = "title-container" class ="col-md-12 ">
        <h3>Ensino personalizado do seu jeito e no seu tempo.</h3>
    </div>
    <div id="search-container" class="col-md-12">

        <form action="" id="search-form">
            <input name = "search" type="text" class="form-control" id ="search-input" placeholder="Pesquisar professores ou assunto...">
            <div class="filter-container">
                <label for="Filtro">Filtrar por </label>
                <button type = "submit" class="filter-buttons" id = "Assunto">Assunto</button>
                <button type = "submit" class="filter-buttons" >Disponibilidade</button>
            </div>
        </form>
    </div>
@endsection
