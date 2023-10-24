<template>
  <navbar class="perfil-index">
    <div class="perfil-index-item" :class="{ 'index-activate': isActive === 1 }">
        <button class="button-perfil" @click="activateIndex(1)">
            <p>Próximas Aulas</p>
        </button>
    </div>
    <div class="perfil-index-item" :class="{ 'index-activate': isActive === 2 }">
        <button class="button-perfil" @click="activateIndex(2)">
            <p>Minhas aulas Solicitadas</p>
        </button>
    </div>
    <div class="perfil-index-item">
        <p>Histórico</p>
    </div>
    <div class="perfil-index-item">
        <p>Solicitações Recusadas</p>
    </div>
    <div class="perfil-index-item">
        <p>Configurações</p>
    </div>
  </navbar>
</template>

<script>
export default {
    props: ["setPage"],
    data() {
        return {
            isActive: 1 
        };
    },
    methods:{
        activateIndex(id){
            this.setPage(id)
            this.isActive = id
        }
    }
}
</script>

<style scoped>

.button-perfil {
    background: none;
    border: none;
    font: inherit;
    color:inherit;
}
navbar.perfil-index{
    width: 100%;
    display: flex;
    flex-direction: column;
}
.perfil-index .perfil-index-item{
    color: #1E1E1E;
    font-family: Helvetica Neue;
    font-size: 14px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    padding: 6px 10px;
    width: 70%;
    margin: 0px 65px;
}
.perfil-index-item.index-activate{
    background: var(--primary-50, #F2F6FB);
    background-size: 10%;
    color: var(--primary-500, #003773);
}
</style>

