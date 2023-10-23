<template>
  <section class = "class">
    <h1>Próximas aulas</h1>
    <div class="classes">
        <section  class="aproved-requisitions" v-if="flag_classes">
            <card-student-classes :confirmedClasses="confirmedClasses"/>
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
        let result = await this.$store.dispatch('getTutoriasMarcadas', {id: user.data.id, type: 'aluno_id'});


        console.log(result)
        let tutoriaStatus = await this.$store.dispatch('getTutoriaStatus');
        let subjects = await this.$store.dispatch('getSubjects');

        
        if (result.data.length > 0)
        {
            for (let i = 0; i < result.data.length; i++){
                const tutor_id = result.data[i]['tutor_id']
                
                let tutor = await this.$store.dispatch('getTutorByID', {id: tutor_id});
                
                let dataFormatada = undefined

                let horarios = await this.$store.dispatch('getHorarios');
                for (let n = 0; n < horarios.data.length; n++){
                        if (result.data[i]['horario_id'] == horarios.data[n]['id'])
                            dataFormatada = this.formatarData(horarios.data[n]['data'], horarios.data[n]['hora']);
                }
                
                let agendada = false
                let analise = false
                let recusada = false
                for (let j = 0; j < tutoriaStatus.data.length; j++){
                    if (tutoriaStatus.data[j]['id'] === result.data[i]['tutoria_status_id']) {
                        if (tutoriaStatus.data[j]['descricao'] === "AGENDADA")
                            agendada = true
                        if (tutoriaStatus.data[j]['descricao'] === "EM ANALISE")
                            analise = true
                        if (tutoriaStatus.data[j]['descricao'] === "RECUSADA")
                            recusada = true
                    }
                }


                let studentAutoAvaliation = []
                for (let m = 0; m < subjects.length; m++){
                    if (subjects[m]['aluno_id'] === user.data.id) {
                        if (subjects[m]['tutor_id'] === tutor_id) {
                            studentAutoAvaliation.push({
                                subject: subjects[m]['assunto_selecionado'], 
                                avaliation: subjects[m]['nota']
                            })
                        }
                    }
                }

                this.confirmedClasses.push({
                    teacherName: tutor.data[0]['nome'] + " " + tutor.data[0]['sobrenome'],
                    reservationTime: dataFormatada,
                    studentDificults: result.data[i]['maiores_dificuldades'],
                    studentAutoAvaliation: studentAutoAvaliation,
                    agendada: agendada,
                    analise: analise,
                    recusada: recusada
                })

                this.flag_classes = true
            }
        }
    },
    data(){
        return{
            classes: [],
            flag_classes: false,
            have_classes: true,
            isModalVisible: false,
            confirmedClasses: []
        }
    },
    methods:{
        showModal(){
            this.isModalVisible = !this.isModalVisible
        },
        formatarData(data, hora) {
            const dataHora = new Date(`${data}T${hora}`);

            const dia = dataHora.getDate();
            const mes = dataHora.toLocaleString('pt-BR', { month: 'long' }); // Nome completo do mês
            const ano = dataHora.getFullYear();
            const horas = dataHora.getHours();
            const minutos = dataHora.getMinutes();

            const dataFormatada = `${dia} de ${mes} de ${ano} às ${horas}:${minutos}`;

            return dataFormatada;
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
