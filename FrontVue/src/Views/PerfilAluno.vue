<template>
  <div>
    <CustomNavBar/>
    <Links current="Minha Área"/>
    <Classes></Classes>
    <CustomFooter/>
  </div>
</template>

<script>
import CustomFooter from '../components/layout/CustomFooter.vue'
import CustomNavBar from '../components/layout/CustomNavBar.vue'
import Links from '../components/layout/Links.vue'
import Classes from '../components/aluno/Classes.vue'
export default {
  components: { 
    CustomNavBar, 
    CustomFooter,
    Links,
    Classes
  },

}
</script>

<style>

</style>