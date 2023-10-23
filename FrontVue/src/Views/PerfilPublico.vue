<template>
  <div>
    <CustomNavBar :is-logged="userIsLogged"/>
    <ImagePerfil/>
    <MainInformation/>
    <Information/>
    <CardAgendar/>
    <CustomFooter/>
  </div>
</template>

<script>
import CardAgendar from '../components/layout/CardAgendar.vue'
import CustomFooter from '../components/layout/CustomFooter.vue'
import CustomNavBar from '../components/layout/CustomNavBar.vue'
import ImagePerfil from '../components/perfil_professor/ImagePerfil.vue'
import Information from '../components/perfil_professor/Information.vue'
import MainInformation from '../components/perfil_professor/MainInformation.vue'
export default {
  components: {
    CustomNavBar,
    CustomFooter,
    ImagePerfil,
    MainInformation,
    Information,
    CardAgendar,
  },
  data(){
    return{
        userIsLogged: false,
    }
  }

}
</script>

<style>

</style>
