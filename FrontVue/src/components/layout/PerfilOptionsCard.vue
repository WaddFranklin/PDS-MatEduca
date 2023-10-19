<template>
  <div id="perfil-options-mini-menu">
    <div v-if="userType == 2">
        <router-link :to="'/aluno/' + userId" class="options-nav-link">
                <p>
                    <i class="bi bi-list-task"></i>
                    Gerenciar Aulas
                </p>

        </router-link>
    </div>
    <div v-if="userType == 3">
        <router-link :to="'/perfil/' + userId" class="options-nav-link">
                <p>
                    <i class="bi bi-list-task"></i>
                    Gerenciar Aulas
                </p>

        </router-link>
    </div>
    <div>
        <p><i class="bi bi-person"></i>
            Configurar Perfil
        </p>
    </div>
    <div class="exit-option">
        <p>
            <i class="bi bi-box-arrow-in-right"></i>
            Sair
        </p>
    </div>
  </div>
</template>

<script>
export default {

    data(){
        return{

            userType: null,
            userId: null,
        }
    },
    props:{
        userType: Number,
        userId: Number,
    }
}
</script>

<style>
#perfil-options-mini-menu{
    position: absolute;
    top: 100px;
    right: 15px;
    display: inline-flex;
    flex-direction: column;
    width: fit-content;
    padding: 12px;
    align-items: flex-start;
    gap: 6px;

    border-radius: 8px;
    background: var(--neutral-white, #FFF);
    box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.20);
}
#perfil-options-mini-menu div{
    width: 100%;
    border-radius: 4px;
}
#perfil-options-mini-menu div:hover{
    background: var(--primary-50, #F2F6FB);
}
.bi.bi-person{
    color: #054A91;
}
.exit-option{
    color: var(--negative-600, #8B0A03);
}
.options-nav-link{
    text-decoration: none;
    color: black;
}

</style>
