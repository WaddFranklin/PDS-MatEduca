<template>
  <section class = "class">
    <h1>Próximas aulas</h1>
    <div class="classes">
        <section  class="aproved-requisitions" v-if="flag_classes">
            <card-student-classes/>
        </section>
        <div class="no-item" v-if="!flag_classes">
            <div class="item-img">
                <img
                    src="../../assets/img/agenda.png"
                    alt="Agenda"
                    class="img"
                />
            </div>
            <h1 style="font-weight: 100">Você ainda não agendeu nenhuma aula.</h1>
            <button class="button-classes">
                <router-link to="/" style="text-decoration: None">
                    <div class="button-items">
                        <img
                            src="../../assets/img/seta.png"
                            class="arrow"
                        />
                        <a class="a-classes">Ver Professores</a>
                    </div>
                </router-link>
            </button>
        </div>

        <div class="hist">
            <h4 class="hist-classes-title">Histórico de Aulas</h4>
            <div class="classes-hist" v-if="!have_classes">
                <a class="classes-hist-a">Nenhuma aula realizada</a>
            </div>
            <div class="classes-hist" v-if="have_classes">
                <SimpleSearchBar/>
            </div>
        </div>
    </div>
</section>
</template>

<script>
import { mapGetters } from 'vuex';
import CardStudentClasses from '../layout/CardStudentClasses.vue';

import Divider from '../layout/Divider.vue';
import LinkMeetModal from '../layout/LinkMeetModal.vue';
import SimpleSearchBar from '../layout/SimpleSearchBar.vue';
export default {
  components: { Divider, LinkMeetModal, SimpleSearchBar, CardStudentClasses },
    computed: {
        ...mapGetters(['isAuthenticated', 'user']),
    },
    async mounted() {
        const user = JSON.parse(JSON.stringify(this.user))
        if (user)
        {

        }
    },
    data(){
        return{
            classes: [],
            flag_classes: true,
            have_classes: true,
            isModalVisible: false,
            confirmedClasses: [{
                teacherName: 'Juliana Ribeiro',
                reservationTime: '29 de agosto de 2023 às 14:00',
                studentDificults: 'Não consegui identificar ainda minhas principais dificuldades e gostaria que você me ajudasse.',
                studentAutoAvaliation: [
                    { subject: 'Equação do 2º grau', avaliation: 1},
                    { subject: 'Geometria Analítica', avaliation: 4}]
            },{
                teacherName: 'Juliana Ribeiro',
                reservationTime: '29 de agosto de 2023 às 14:00',
                studentDificults: 'Não consegui identificar ainda minhas principais dificuldades e gostaria que você me ajudasse.',
                studentAutoAvaliation: [
                    { subject: 'Equação do 2º grau', avaliation: 1},
                    { subject: 'Geometria Analítica', avaliation: 4}]
            }]
        }
    },
    methods:{
        showModal(){
            this.isModalVisible = !this.isModalVisible
        }
    }
}
</script>

<style scoped>
section.class{
    display: flex;
    flex-direction: column;
    margin-left: 8%;
}
.p {
    padding-right: 10px;

}
div.links{
    display: flex;
    margin: 20px;
    flex-direction: row;
    flex-wrap: wrap;
    margin-left: 8%;
}
.links p{
    font-family: Helvetica Neue;
    font-weight: 400;
    margin: 5px;
}

.button-classes{
    background-color: #003773;
    border-radius: 4px;
    width: 166px;
    height: 48px;

}

.button-items {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}
.arrow{
    width: 24px;
    height: 24px;
    margin-right: 5px;
}

.classes-hist-a{
    font-family: 'Helvetica Neue';
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 150%;
}

.a-classes {
    font-family: 'Helvetica Neue';
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 150%;

    color: white;

}

.hist{
    margin-top: 5%;
}
.hist-classes-title{
    color: var(--neutral-600, #14161F);
    font-family: Helvetica Neue;
    font-size: 20px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}
.item-img{
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    padding: 32px;
    gap: 8px;

    /* Primary/50 */
    background: #F2F6FB;
    border-radius: 99px;

    width: 64px;
    height: 64px;
}

.img{
    /* Auto layout */


    /* Calendar / Calendar */
    width: 64px;
    height: 64px;

}
</style>
