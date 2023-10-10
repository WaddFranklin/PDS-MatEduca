<template>
    <CustomNavBar :isLogged="userIsLogged"/>
    <PrincipalSection/>
</template>

<script>
import CustomNavBar from '../layout/CustomNavBar.vue'
import PrincipalSection from './PrincipalSection.vue';
export default {
  components: { CustomNavBar, PrincipalSection },
  data(){
        return{
            userIsLogged: true,
        }
    },

}
</script>

<style>

</style>
