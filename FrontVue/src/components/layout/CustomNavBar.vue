
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
                    <li class="navs-items" v-if="!this.isAuthenticated">
                        <!--button @click="showModal()" type="button" id="button-login" class="nav-link">Entrar</button-->
                        <router-link @click.stop.prevent="showModal()" to="#" class="nav-link">Entrar</router-link>

                    </li>
                    <li class="navs-items" v-if="!this.isAuthenticated">
                        <router-link @click.stop.prevent="showModalRegister()" to="#" class="nav-link">Cadastrar-se</router-link>
                    </li>
                    <li class="navs-items" v-if="isAuthenticated">
                        <div style="display: flex; align-items: center;">
                            <div style="display: flex; flex-direction: column; align-items: flex-start;">
                                <p class="user-name">{{ user.data.nome }}</p>
                                <p  class="career" >{{type}}</p>
                            </div>
                            <img @click="showModalOptionsPerfil"
                                src="../../assets/img/perfil.png"
                                alt="Imagem do usuário"
                                style="border-radius: 50%; width: 48px; height: 48px; margin-left: 10px;"
                            />
                        </div>
                    </li>
                </ul>
            </navbar>
        </div>
    </header>
    <FormLogin v-if="isVisible" @show-Modal="showModal" @show-Modal-Register="showModalRegister" :modal="showModal"/>
    <RegisterForm v-if="isVisibleRegister" @show-Modal-Register="showModalRegister" @show-Modal-Login="showModalLogin" :modal="showModalRegister"/>
    <PerfilOptionsCard v-if="areOptionsVisible" :userId="user.data.id" :userType="user.data.usuario_tipo_id"/>
</div>
</template>

<script>
import FormLogin from './FormLogin.vue'
import RegisterForm from './RegisterForm.vue';
import { mapGetters } from 'vuex';
import PerfilOptionsCard from './PerfilOptionsCard.vue';
export default {
    computed: {
        ...mapGetters(['isAuthenticated', 'user']),
    },
    mounted() {
        this.setType()
    },
    components: { FormLogin, RegisterForm, PerfilOptionsCard },
        name: 'CustomNavBar',
        data(){
            return{
                isVisible: false,
                isVisibleRegister: false,
                areOptionsVisible: false,
                type: ''
            }
        },
        methods:{
            showModal(){
                this.isVisible = !this.isVisible;
                this.setType()
            },
            showModalRegister(){
                if (this.isVisible)
                    this.isVisible = !this.isVisible;
                this.isVisibleRegister = !this.isVisibleRegister;
            },
            showModalLogin(){
                this.isVisibleRegister = !this.isVisibleRegister;
                this.isVisible = !this.isVisible;
                this.setType()
            },
            showModalOptionsPerfil(){

                this.areOptionsVisible = !this.areOptionsVisible;
            },
            setType(){
                const user = JSON.parse(JSON.stringify(this.user))
                if (user)
                {
                    if (user.data.usuario_tipo_id == 2) {
                        this.type = "Aluno"
                    }
                    if (user.data.usuario_tipo_id == 3) {
                        this.type = "Tutor"
                    }
                }
            }
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
    width: 98.5%;
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
    position: relative;
    right: 50px;
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
    font-family: Helvetica Neue,sans-serif;
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
    display: flex;
    flex: row;
}
.navbar-container-image{

    width: 50%;
    display: flex;
    flex: column;
}
.img-perfil-navbar{
    width: 64px;
    height: 64px;
    border-radius: 50%;
    display: flex;
    flex-direction: row-reverse;
    position: relative;
    top: 0%;
    right: 90%;
}
.navbar-perfil-description{
    display: flex;
    flex: column;
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
p.career{

    color: var(--neutral-300, #5E6475);
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
p.user-name{
    color: var(--primary-500, #003773);
    font-family: Helvetica Neue;
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
</style>
