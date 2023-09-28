<template>
  <HomeView/>
</template>

<script>
import HomeView from './Views/HomeView.vue'
import Perfil from './Views/Perfil.vue'
import PerfilPublico from './Views/PerfilPublico.vue'

export default {
  name:'App',
  components: {
    HomeView,
    PerfilPublico,
    Perfil,
  }
}
</script>

<style>
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css");
#app{
  padding: 0;
  margin: 0;
}
body{
    height: 100%;
    overflow-x: hidden;
}
</style>

