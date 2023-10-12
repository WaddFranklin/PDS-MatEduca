<template>
  <navbar class="perfil-index">
    <div class="perfil-index-item">
        <p>Próximas Aulas</p>
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

}
</script>

<style scoped>
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
    padding: 6px 65px;
}

</style>

