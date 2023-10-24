<template>
    <div>
        <CustomNavBar :isLogged="userIsLogged"/>
        <PrincipalSection/>
        <CustomFooter/>
    </div>
</template>

<script>
import CustomFooter from '../layout/CustomFooter.vue';
import CustomNavBar from '../layout/CustomNavBar.vue'
import PrincipalSection from './PrincipalSection.vue';
export default {
  components: { CustomNavBar, PrincipalSection, CustomFooter},
  data(){
        return{
            userIsLogged: true,
        }
    },

}
</script>

<style>

</style>
