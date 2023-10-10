
<template>
<div>
   <header>
        <div class="container-header">
            <navbar class="navbar" id="navbar">
                <router-link to="/" id="logo">MatEduca</router-link>
                 <ul class="navs-links">
                    <li class="navs-items">
                        <router-link to="/" class="nav-link">Professores</router-link>
                    </li>
                    <li class="navs-items">
                        <router-link to="/help" class="nav-link">Como Funciona</router-link>
                    </li>
                    <div class="vertical-divider"></div>
                    <li v-if="!isLogged" class="navs-items">
                        <!--button @click="showModal()" type="button" id="button-login" class="nav-link">Entrar</button-->
                        <router-link @click.stop.prevent="showModal()" to="#" class="nav-link">Entrar</router-link>

                    </li>
                    <li v-if="!isLogged" class="navs-items">
                        <router-link to="/cadastro" id="cadastro" class="nav-link">Cadastrar-se</router-link>
                    </li>
                    <li v-if="isLogged" class="navs-items">
                        <router-link class ="nav-link" to="/perfil">
                            <div class="perfil-group">
                                <div class="navbar-perfil-description">
                                    <p>Juliana Ribeiro</p>
                                    <p class="career">Professora</p>
                                </div>
                                <img class="img-perfil-navbar" src="../../assets/img/JulianaRibeiro.png" alt="Foto de Perfil">
                            </div>
                        </router-link>
                    </li>
                </ul>
            </navbar>
        </div>
    </header>
    <FormLogin v-if="isVisible" @show-Modal="showModal"/>
</div>
</template>

<script>
import FormLogin from './FormLogin.vue'
export default {
  components: { FormLogin },
    name: 'CustomNavBar',
    data(){
        return{
            isVisible: false,
        }
    },
    methods:{
        showModal(){this.isVisible = !this.isVisible;},
    },
    props:{
        isLogged: Boolean,
    }
}
</script>

<style scoped>

*{
    margin: 0;
    padding: 0;
}
body{
    height: 100%;
    overflow-x: hidden;
}
header{
    width: 98%;
}
.container-header{
    display: flex;
    width: 100%;
    padding: 15px 35px;
    justify-content: center;
    align-items: center;
    gap: 537px;
    height: 100px;
    background: var(--primary-50, #F2F6FB);
}
#navbar{
    display: flex;
    width: 100%;
    justify-content: space-between;
    align-items: center;
    flex-shrink: 0;
    height: 2vh;
}
#navbar ul{
    list-style: none;
    display: flex;
    align-items: center;
    gap: 12px;
    margin-right: 9px;
}
#navbar li{
    padding: 0px 10px;
}
.nav-link{
    text-decoration: none;
    color: var(--primary-400, #054A91);
    font-family: Helvetica Neue;
    font-size: 17px;
    font-style: normal;
    line-height: normal;
}
#button-login{
    background: (--primary-50, #F2F6FB);
    border-style: none;
    padding: 10px;
    color: (--primary-50, #F2F6FB);
}
.active{
    font-weight: 900;
}
#logo{
    color: var(--primary-500, #003773);
    font-family: Helvetica Neue;
    font-size: 24px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    text-decoration: none;
    padding-left: 70px;
}
.vertical-divider{
    width: 1px;
    height: 20px;
    background-color: #000;
    margin: 7px 20px
}
#cadastro{

    border: 1px solid #E1E1E1; ;
    padding: 7px;
}

#cadastro:hover{

    background-color: #054A91;
    color: #F2F6FB;
    transition: 0.5s;
}
.perfil-group{
    width: 100%;
    justify-content: space-between;
}
.img-perfil-navbar{
    width: 74px;
    height: 74px;
    border-radius: 54px;
    display: inline-flex;
    flex-direction: row-reverse;
    position: relative;
    top: 50%;
    right: 0%;

}
.navbar-perfil-description{
    display: inline-flex;
    flex-direction: row;
    flex-wrap: wrap;
    width: 50%;
    position: relative;
    top: 10%;
}
.navbar-perfil-description p{
    /* Layout */
    display: flex;
    width: 100%;

    /* estilização */

    color: var(--primary-500, #003773);
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
}
.navbar-perfil-description p.career{

    color: var(--neutral-300, #5E6475);
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
</style>
