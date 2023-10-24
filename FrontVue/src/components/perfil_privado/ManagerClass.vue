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
                <div class="block-up-head">
                    <h1>Próximas Aulas</h1>

                    <div class="block-up-head-group">
                        <p>Vizualizar como</p>
                        <div class =" block-up-head-icons">
                            <i class="bi bi-list-ul"></i>
                        </div>
                        <div class="block-up-head-icons" >
                            <i class="bi bi-calendar"></i>
                        </div>
                    </div>
                </div>
                <SimpleSearchBar/>
                <confirmation-section/>
            </section>
        </section>
        </section>
    </section>
</template>

<script>
import SearchBar from '../home/SearchBar.vue'
import Divider from '../layout/Divider.vue'
import SimpleSearchBar from '../layout/SimpleSearchBar.vue'
import ConfirmationSection from './ConfirmationSection.vue'
import NavIndexPerfil from './NavIndexPerfil.vue'
export default {
  components: { Divider, NavIndexPerfil, SearchBar, SimpleSearchBar, ConfirmationSection },

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
    margin: 20px 0px;
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
.block-up-head{
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
.block-up-head h1{
    width: 20%;

    color: var(--primary-500, #003773);
    font-family: Helvetica Neue;
    font-size: 20px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    margin: 0px 5px;
}
.block-up-head-group{
    width: 35%;
    display: inline-flex;
    flex-direction: row;
}
.block-up-head-group p{

    margin: 6px 10px;
}
.block-up-head-icons{

    width: fit-content;
    padding: 8px;
    align-items: flex-start;
    gap: 8px;
    border-radius: 4px;
}
.block-up-head-icons i{

    color: orangered;
    width: 24px;
    height: 24px;
    margin: 0px 10px;
}
</style>
