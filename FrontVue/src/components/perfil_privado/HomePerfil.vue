<template>
    <CustomNavBar :isLogged="userIsLogged"/>
</template>

<script>
import CustomNavBar from '../layout/CustomNavBar.vue'
export default {
  components: { CustomNavBar },
  data(){
        return{
            userIsLogged: true,
        }
    },

}
</script>

<style>

</style>
