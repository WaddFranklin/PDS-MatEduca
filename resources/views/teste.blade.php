@extends('layouts.main')

@section('title','MatEduca')

@section('content')

<div class="bg-image perfil-professor">
<!--img style="width: 1880px; height: 368px" src="img/BannerBackground.png"/-->
</div>
<section class = "box-image-perfil">
    <img src="img/JulianaRibeiro.jpeg" alt="Imagem do professor" class="image-perfil">
</section>

<section class = "Informations-about">
    <div class="main-information">
        <h2>Juliana Ribeiro</h2>
        <h4>Graduanda em Engenharia Civil - UFMG</h4>
    </div>
</section>

<section class="more-informations">

    <div class="resume">

        <div class="resume-up">

            <p class="resume-text">Acredito em tornar a matemática acessível e interessante para todos os alunos. Minhas aulas são interativas e focam em aplicar conceitos a situações do cotidiano.</p>

            <p class="register-time">Inscrita desde 20 de fevereiro de 2019</p>
        </div>

        <hr />

        <div class="resume-middle">

            <p>Especialidades</p>

            <ul class="special-subjects">
                <div>
                    <li>Álgebra</li>
                </div>

                <div>
                    <li>Geometria</li>
                </div>
            </ul>
        </div>

        <hr>

        <div class="resume-down">
            <p class = "curr">Curriculo</p>
            <p>Graduanda em Engenharia Elétrica pela Universidade Federal de Minas Gerais</p>
            <p>Técnico em Eletrotécnica no Instituto Federal de Minas Gerais</p>
        </div>
    </div>
</section>
@endsection
