@extends('layouts.main')

@section('title','MatEduca')

@section('content')

    <div id = "title-container" class ="col-md-12 ">
        <h3>Ensino personalizado do seu jeito e no seu tempo.</h3>
    </div>
    <div id="search-container" class="col-md-12">

        <input type="text" id="search-input" class="form-control" placeholder="Pesquisar professores ou assunto...">

        <span><img id= "search-icon" src="/img/search-icon-svg-28.jpg" alt="search symbol"></span>
    </div>
@endsection
