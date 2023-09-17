@extends('layouts.main')

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

<section class="cards-professores">
    <div class="container-cards">
        <div class="card-professor">
        @foreach($array_professores as $professor)
            <div class="imagem-professor">
            <!--img src="img/JulianaRibeiro.jpeg" alt="Imagem do professor"-->
            </div>
            <div class="infopart">
                <div class="informacao-professor">
                    <h2 class="card_description nome-professor">{{$professor->name}}</h2>
                    <p class="card-text star-icon">
                        &#9733;
                        <span>
                        &#9733;
                        </span>
                        <span>
                        &#9733;
                        </span>
                        <span>
                        &#9733;
                        </span>
                        <span>
                        &#9733;
                        </span>
                        5.0 (23)
                    </p>
                </div>
                <div class="informacoes-experience">
                    <div class="experience">
                        <label for="">Experiência</label>
                        <p>{{$professor->experiece}}</p>
                    </div>

                    <ul>
                        @foreach($professor->materias as $materia)
                        <li>{{$materia}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>
@endsection
