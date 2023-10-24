<template>
  <router-view/>
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
@import url('https://fonts.cdnfonts.com/css/helvetica-neue-55?styles=16016,16018,16008,16022,16009,15985,15987,15992,15995,30128,30129,15999,30123,15997,15998');
#app{
  padding: 0;
  margin: 0;
}
body{
    height: 100%;
    overflow-x: hidden;
}
</style>

