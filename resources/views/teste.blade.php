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

    <div class="avaliations">

        <section class="classification">
            <div class="student-avaliation">
                    <p> <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                        (4.0)
                    </p>

                <p class="text-avaliation student">"A Professora Juliana é incrível! Ela tornou a matemática divertida e me ajudou a melhorar minhas notas."</p>

                <h5 class="name-student">Maria A.</h5>
            </div>

            <div class="student-avaliation">
                    <p> <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        (5.0)
                    </p>

                <p class="text-avaliation student">""Aprendi mais com a Professora Juliana em um mês do que em um ano na escola.""</p>

                <h5 class="name-student">João S.</h5>
            </div>
        </section>
    </div>
</section>

<section class="agendar-aula">
    <div class="marcar-aula">
        <div class="marcar-up">
            <p class="total-avaliation">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
                4,5 (23)
            </p>
        </div>
        <hr>
        <div class="resume-middle">

            <p class="sessions-time">Sessões de 1 hora aula (50 minutos)</p>

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
        <div class="marcar-down">

        <p id = "free-time">Próximo horário disponível</p>
        <p id="time">14:00 - 29 de Agosto</p>


        </div>
        <button id="agendar" type ="button">Agendar Aula com Juliana</button>
    </div>
</section>
@endsection
