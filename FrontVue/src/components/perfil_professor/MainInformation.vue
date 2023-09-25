<template>
  <section class = "Informations-about">
    <div class="main-information">
        <h2>{{ name }}</h2>
        <h4>{{ graduated }}</h4>
    </div>
</section>
</template>

<script>
export default {

    data(){
        return{
            name: 'Juliana Ribeiro',
            graduated: 'Graduanda em Engenharia Civil - UFMG'
        }
    }
}
</script>

<style>
section.informations-about{
    display: flex;
}
div.main-information{

    display: flex;
    position: relative;
    left: 23%;
    margin: 20px;
    flex-direction: row;
    flex-wrap: wrap;
}
.main-information h2{
    color: #1E1E1E;
    font-family: Helvetica Neue;
    font-size: 32px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    width: 75%;
}
.main-information h4{
    color: #787878;
    font-family: Helvetica Neue;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    width: 75%;
}
</style>