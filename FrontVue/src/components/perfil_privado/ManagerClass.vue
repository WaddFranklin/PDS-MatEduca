<template>
  <section class="manager-class">
    <h1 class="title-section">Gerenciar Aulas</h1>
    <Divider/>
    <section class="manager-class-section">
        <section class="manager-class-left-block">
            <NavIndexPerfil/>
        </section>
        <section class="manager-class-right-block">
            <section class="manager-block-up">
                <h1>Próximas Aulas</h1>
                <SimpleSearchBar/>
            </section>
        </section>
        </section>
    </section>
</template>

<script>
import SearchBar from '../home/SearchBar.vue'
import Divider from '../layout/Divider.vue'
import SimpleSearchBar from '../layout/SimpleSearchBar.vue'
import NavIndexPerfil from './NavIndexPerfil.vue'
export default {
  components: { Divider, NavIndexPerfil, SearchBar, SimpleSearchBar },

}
</script>

<style scop,
    SimpleSearchBared>

.manager-class h1.title-section{
    color: var(--primary-500, #003773);
    font-family: Helvetica Neue;
    font-size: 24px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    margin: 10px 70px;
}
.manager-class .divider{

    background: #D9D9D9;
}
.manager-class-section{
    display: flex;
    margin: 30px 0px;
}
.manager-class-section .manager-class-left-block{

    width: 30%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}
.manager-class-section .manager-class-right-block{

    width: 100%;
    display: flex;
    flex-direction: row;

}
.manager-block-up{
    width: 100%;
}
.manager-block-up h1{
    color: var(--primary-500, #003773);
    font-family: Helvetica Neue;
    font-size: 20px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    margin: 0px 5px;
}
</style>
