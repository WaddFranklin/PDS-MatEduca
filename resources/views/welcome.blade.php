@extends('layouts.main')

@section('title','MatEduca')

@section('content')

<!-- Para ativar a div container é so descomentar as linhas de códigos-->
<div class="container">

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
</div>

<div id="professors-container" class="col-md-15">
    <div id="cards-container" class="row">
        <div class="tutor__cards card col-md-3">
            <img  class ="card-img-top" src="/img/cardBackground.jpeg" alt="imagem de fundo">
            <div class="card-body">
                <h5 class="card-title">Carlos Silveira</h5>
                <p class="card-text">Um exemplo qualquer</p>
                <p class="card-text star-icon">&#9733;<span>
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
        </div>
        <div class="tutor__cards card col-md-3">
            <img  class ="card-img-top" src="/img/cardBackground.jpeg" alt="imagem de fundo">
            <div class="card-body">
                <h5 class="card-title">Carlos Silveira</h5>
                <p class="card-text">Um exemplo qualquer</p>
                <p class="card-text star-icon">&#9733;<span>
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
        </div>
        <div class="tutor__cards card col-md-3">
            <img  class ="card-img-top" src="/img/cardBackground.jpeg" alt="imagem de fundo">
            <div class="card-body">
                <h5 class="card-title">Carlos Silveira</h5>
                <p class="card-text">Um exemplo qualquer</p>
                <p class="card-text star-icon">&#9733;<span>
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
        </div>
        <div class="tutor__cards card col-md-3">
            <img  class ="card-img-top" src="/img/cardBackground.jpeg" alt="imagem de fundo">
            <div class="card-body">
                <h5 class="card-title">Carlos Silveira</h5>
                <p class="card-text">Um exemplo qualquer</p>
                <p class="card-text star-icon">&#9733;<span>
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
        </div>
     </div>
</div>
@endsection
