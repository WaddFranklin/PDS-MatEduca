<template>
  <div class="resume">

        <div class="resume-up">

            <p class="resume-text">{{ resume }}</p>

            <p class="register-time">{{ registered }}</p>
        </div>
    <div class = 'divider'></div>

    <div class="resume-middle">
        <p>Especialidades</p>

        <listsubjects/>
    </div>

    <divider/>

    <div class="resume-down">
        <p class = "curr">Curriculum</p>
        <p v-for= "(text,index) in curriculum" :key="index">{{ text }}</p>
    </div>
</div>
</template>

<script>
import Divider from '../layout/Divider.vue'
import Listsubjects from '../layout/Listsubjects.vue'
export default {
  components: { Listsubjects, Divider },

    data(){

        return{
            resume: 'Acredito em tornar a matemática acessível e interessante para todos os alunos. Minhas aulas são interativas e focam em aplicar conceitos a situações do cotidiano.',

            registered: 'Inscrita desde 20 de fevereiro de 2019',

            subjects: ['Álgebra', 'Geometria'],

            curriculum: ['Graduanda em Engenharia Elétrica pela Universidade Federal de Minas Gerais', 'Técnico em Eletrotécnica no Instituto Federal de Minas Gerais'],
        }
    }
}
</script>

<style>
    .resume{
    display: flex;
    width: 50%;
    padding: 32px;
    margin: 65px 100px;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    gap: 32px;
    border-radius: 8px;
    border: 1px solid #D9D9D9;
}
.resume-text{

    color: #1E1E1E;
    font-family: Helvetica Neue;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: 150%; /* 30px */
}
.register-time{
    color: #A3A3A3;
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 150%; /* 24px */
    padding: 10px 0px;
}
.resume-middle p{

    color: #000;
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}

.resume-middle li{
    padding: 10px 10px;
    color: var(--highlight-600, #803900);
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    width: 100%;
    background: var(--highlight-50, #FFF8F2);
    margin: 7px 4px;
}
.resume-down p{
    color: #000;
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    padding: 10px 0px;
}
.resume-down :first-child{

    color: #000;
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    padding: 10px 0px;
}
</style>
