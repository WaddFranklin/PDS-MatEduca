<template>
  <div>
    <CustomNavBar :is-logged="userIsLogged"/>
    <SearchBar/>
    <CardsProfessores/>
    <CustomFooter/>
  </div>
</template>

<script>
import  CustomFooter from '../components/layout/CustomFooter.vue'
import  CustomNavBar from '../components/layout/CustomNavBar.vue'
import CardsProfessores from '../components/home/CardsProfessores.vue'
import SearchBar from '../components/home/SearchBar.vue'

export default {
    name:'HomeView',
  components: {
    CustomNavBar,
    CustomFooter,
    SearchBar,
    CardsProfessores,
  },
  data(){
    return{
        userIsLogged: false
    }
  }
}
</script>

<style>

</style>
