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

<section class="cards-professores">
    <div class="card-professor">
        <div class="imagem-professor">
        <!--img src="img/JulianaRibeiro.jpeg" alt="Imagem do professor"-->
        </div>
        <div class="infopart">
            <div class="informacao-professor">
                <h2 class="card_description nome-professor">Carlos Silveira</h2>
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
                    <p>5 anos</p>
                </div>

                <ul>
                    <li>Álgebra</li>
                    <li>Geometria</li>
                    <li>Equação do 2º grau</li>
                </ul>
            </div>
        </div>
    </div>

</section>
@endsection
