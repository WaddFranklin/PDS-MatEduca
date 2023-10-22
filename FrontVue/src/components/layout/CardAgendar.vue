<template>
    <section class="agendar-aula">
        <div class="marcar-aula">
            <div class="marcar-up">
                <p class="total-avaliation">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    4,5 (23)
                </p>
            </div>
            <divider/>
            <div class="resume-middle">

                <p class="sessions-time">Sessões de 1 hora aula (50 minutos)</p>

                <p>Especialidades</p>

                <listsubjects :id="tutor.id"/>
            </div>
            <divider/>
            <div class="marcar-down">

            <p id = "free-time">Próximo horário disponível</p>
            <p id="time">14:00 - 29 de Agosto</p>


            </div>
            <button @click="viewCard" class="agendar" type ="button">Agendar Aula com {{tutor.nome }}</button>
            <Etapas :viewCardFunc="this.showModal" :tutor="this.tutor" v-if= "this.isAuthenticated && isVisible"/>

            <FormLogin v-if= "!this.isAuthenticated && isVisible" @show-Modal="showModal"/>
        </div>
    </section>
</template>

<script>
import Divider from './Divider.vue'
import FormLogin from './FormLogin.vue'
import Listsubjects from './Listsubjects.vue'
import Etapas from "@/components/perfil_professor/Etapas.vue";
import { mapGetters } from 'vuex';
export default {
  components: {Etapas, Listsubjects, Divider, FormLogin },
  computed: {
        ...mapGetters(['isAuthenticated', 'user']),
    },
    data(){

        return{

            isLogged: false,
            isVisible: false,
            tutor: {}
        }
    },
    methods:{
            showModal(){
                this.isVisible = !this.isVisible;
            },
            viewCard(){
                this.isVisible = true;
            },
    },
    async mounted(){
        let id = window.location.href.split('/')
        id = parseInt(id[id.length-1])

        let result = await this.$store.dispatch('getTutors');
        if (result) {
            for (let i = 0; i < result.data.length; i++){
                if (result.data[i]['id'] == id){
                this.tutor = result.data[i]
                console.log(this.tutor)
                }
            }
        } else {
            alert('Falha ao pegar os tutores. Verifique sua conexão com o backend');
        }
    },


}

</script>

<style>
.agendar-aula{
    position: absolute;
    top: 30%;
    right: 10%;
}
.marcar-aula{
    display: flex;
    width: 392px;
    padding: 24px;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    gap: 24px;
    border-radius: 8px;
    border: 1px solid #D9D9D9;
    background: #FFF;
}
.total-avaliation i{
    color: orange;
    padding: 0px 2px;
}
.resume-middle ul{
    padding: 0px 10px;
}
.resume-middle .sessions-time{
    color: #1E1E1E;
    font-family: Helvetica neue;
    font-size: 14px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    border-radius: 4px;
    background:  #FFF;
    margin: 0px 5px;
    margin-bottom: 30px;
}
#free-time{

    color: #000;
    font-family: Helvetica neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
}
#time{
    color: #1E1E1E;
    font-family: Helvetica Neue;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
.agendar{
    width: 100%;
    display: flex;
    padding: 8px 0px;
    justify-content: center;
    align-items: flex-start;
    gap: 8px;
    align-self: stretch;
    border-radius: 4px;
    background: var(--highlight-500, #BF5600);
    color: #FFF;
    font-family: Helvetica;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: 150%;
    border-style: none;
}
.agendar:hover{
    background-color: #BF5600;
    opacity: 0.8;
    transition: 1s;
}
</style>
