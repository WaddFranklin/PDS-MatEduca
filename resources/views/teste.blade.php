@extends('layouts.main_teste')

@section('title','MatEduca')

@section('content')

<div class="container-conjunto">

    <div class="divider">
        <div class="title">
            <h1>Ensino personalizado do <span>seu jeito</span> e <span>no seu tempo</span>.</h1>
        </div>
        <div class="container-search">
            <form action="" id="search-form">
                        <input name = "search" type="text" class="form-control" id ="search-input" placeholder="Pesquisar professores ou assunto...">
                        <div class="filter-container">
                            <label for="Filtro">Filtrar por </label>
                            <button type = "submit" class="filter-buttons" id = "Assunto">Assunto</button>
                            <button type = "submit" class="filter-buttons" >Disponibilidade</button>
                        </div>
            </form>
        </div>
    </div>
</div>
@endsection
