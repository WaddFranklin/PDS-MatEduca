<template>
    <section class="class-confirmation">
        <h2 class="month-title">Agosto</h2>
        <divider/>
        <ul class="waiting-list">
            <li v-for="(requistionClass, index) in requisitionClassExample" :key="index">
                <section class="class-requesition">

                    <div class="student-requesition-information-up">
                        <div class="requesition-information-left">
                            <h3>{{ requistionClass.studentName }}</h3>
                            <p>{{ requistionClass.timeStampOfRequisitionClass }}</p>
                        </div>
                        <div class="requesition-information-right">
                            <button @click="Recuse(requistionClass)" v-if="requistionClass.isNotSelect" class="negate-btn" type="button"> <i class="bi bi-x-circle-fill"></i>Recusar</button>
                            <div class="msg-denial-class" v-if="requistionClass.recusada"><p>Aula Recusada</p></div>

                            <button @click="Aprove(requistionClass)" v-if="requistionClass.isNotSelect" class="confirmation-btn" type="button"><i class="bi bi-check-circle-fill"></i> Aprovar</button>

                            <button v-if="requistionClass.agendada" @click="showModal()" class="meet-link-btn"> Link da chamada</button>
                            <button v-if="requistionClass.agendada" class="confirmation-btn simple" type="button"><i class="bi bi-check"></i> Confirmada</button>
                        </div>
                    </div>
                    <divider/>

                    <div class="student-requesition-information-down">
                        <table>
                            <tr>
                                <th>Assuntos</th>
                                <th>Nível de Conhecimento</th>
                            </tr>
                            <tr v-for="(answersAutoAvaliation, index) in requistionClass.studentAutoAvaliation" :key="index">
                                <td>{{ answersAutoAvaliation.subject }}</td>
                                <td>{{ answersAutoAvaliation.autoAvaliation }}</td>
                            </tr>

                        </table>
                        <p class="majority-problems">Maiores Dificuldades</p>
                        <p>{{requistionClass.studentDifficult }}</p>
                    </div>
                </section>
            </li>
        </ul>
        <LinkMeetModal v-if="isModalVisible" @show-modal="showModal"/>
    </section>
</template>

<script>
import Divider from '../layout/Divider.vue'
import { mapGetters } from 'vuex';
import LinkMeetModal from '../layout/LinkMeetModal.vue';
export default {
  components: { Divider, LinkMeetModal },
  computed: {
        ...mapGetters(['isAuthenticated', 'user']),
    },

    updated(){
        console.log("ok")
        if (this.update) {
            this.dataTutoria()
            this.update = false
        }
    },

    async mounted() {
            this.dataTutoria()
    },

  data(){
    return{
        update: false,
        isAproved: false,
        isRecused: false,
        isModalVisible:false,
        requisitionClassExample: []
    }
  },
  methods:{
    async Aprove(requistionClass){
        const temp = JSON.parse(JSON.stringify(requistionClass))
        temp.currentTutoria.tutoria_status_id = 2
        let update = await this.$store.dispatch('updateTutoria', temp.currentTutoria);

        this.dataTutoria()
    },
    async Recuse(requistionClass){
        const temp = JSON.parse(JSON.stringify(requistionClass))
        temp.currentTutoria.tutoria_status_id = 3
        let update = await this.$store.dispatch('updateTutoria', temp.currentTutoria);

        this.dataTutoria()
    },
    showModal(){

        this.isModalVisible = !this.isModalVisible;
    },
    formatarData(dataStr) {
            // Crie um objeto Date com a data original
            const data = new Date(dataStr);

            // Defina os nomes dos meses
            const meses = [
                'janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho',
                'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'
            ];

            // Extraia o dia, mês, ano, hora e minutos
            const dia = data.getDate();
            const mes = meses[data.getMonth()];
            const ano = data.getFullYear();
            const hora = data.getHours();
            const minutos = data.getMinutes();

            // Formate a data no estilo desejado
            const dataFormatada = `${dia} de ${mes} de ${ano} às ${hora}:${minutos}`;

            return dataFormatada;
    },
    async dataTutoria(){
        const user = JSON.parse(JSON.stringify(this.user))
        this.requisitionClassExample = []
        let result = await this.$store.dispatch('getTutoriasMarcadas', {id: user.data.id, type: 'tutor_id'});

        let tutoriaStatus = await this.$store.dispatch('getTutoriaStatus');
        let subjects = await this.$store.dispatch('getSubjects');

        
        if (result.data.length > 0)
        {
            for (let i = 0; i < result.data.length; i++){
                
                const dataFormatada = this.formatarData(result.data[i]['created_at']);

                let aluno = await this.$store.dispatch('getTutorByID', {id: result.data[i]['aluno_id']});
                
                let agendada = false
                let analise = false
                let recusada = false
                for (let j = 0; j < tutoriaStatus.data.length; j++){
                    console.log(tutoriaStatus.data[j]['descricao'])
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
                    if (subjects[m]['aluno_id'] === result.data[i]['aluno_id']) {
                        if (subjects[m]['tutor_id'] === user.data.id) {
                            studentAutoAvaliation.push({
                                subject: subjects[m]['assunto_selecionado'], 
                                autoAvaliation: subjects[m]['nota']
                            })
                        }
                    }
                }

                this.requisitionClassExample.push({
                    studentName: aluno.data[0]['nome'] + " " + aluno.data[0]['sobrenome'],
                    timeStampOfRequisitionClass: dataFormatada,
                    studentDifficult:result.data[i]['maiores_dificuldades'],
                    studentAutoAvaliation: studentAutoAvaliation,
                    isNotSelect: analise,
                    agendada: agendada,
                    recusada: recusada,
                    currentTutoria: result.data[i]
                })
            }
        }
    }
  }
}
</script>


<style>

.class-confirmation{
    width: 100%;
    display: flex;
    flex-direction: column;
}
.month-title{

    margin-top: 45px;

    /*style*/
    color: var(--primary-500, #003773);
    font-family: Helvetica Neue;
    font-size: 20px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}
.waiting-list{
    list-style: none;
    width: 100%;
    padding-inline: 0px;
}
.class-requesition{
    display: flex;
    width: 85%;
    padding: 16px;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    gap: 16px;

    /*style*/

    border-radius: 8px;
    border: 1px solid #D9D9D9;
}
.class-requesition h3{
    color: var(--primary-500, #003773);
    font-family: Helvetica Neue;
    font-size: 18px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}
.class-requesition p{
    color: #1E1E1E;
    font-family: Helvetica Neue;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 150%; /* 21px */
}
.student-requesition-information-up{
    display: flex;
    width: 100%;
    flex-direction: row;
    justify-content: space-between;
}
.requesition-information-right{
    width: 60%;
    display: flex;
}
.requesition-information-right button{

    width: 100%;
    display: flex;
    padding: 12px 20px;
    justify-content: center;
    text-align: center;
    height: 5vh;
    margin: 15px 7px;

    border-radius: 4px;
    border: 1px solid #D9D9D9;


    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: 150%; /* 21px */
}
.requesition-information-right .confirmation-btn i{

    position: relative;
    left: -10px;
    top: 0px;
}
.requesition-information-right .negate-btn i{

    position: relative;
    left: -10px;
}

.requesition-information-right .negate-btn{
    background: var(--negative-50, #FFF3F2);
    color: var(--negative-600, #8B0A03);
}
.requesition-information-right .confirmation-btn{
    background: var(--positive-50, #E3F5E1);
    color: var(--positive-600, #154C21);
}
.requesition-information-right .meet-link-btn{
    width: 100%;
    display: flex;
    padding: 16px 24px;


    color: var(--primary-500, #003773);
    font-family: Helvetica Neue;
    font-size: 14px;
    font-style: normal;
    font-weight: 700;
    line-height: 150%; /* 21px */
    border-radius: 4px;
    border: 1px solid #D9D9D9;
    background: var(--neutral-white, #FFF);
}
.meet-link-btn:hover{
    background: var(--neutral-white, #cac7c7);
    transition: 1s;
}
.requesition-information-right .negate-btn:hover{
    background: var(--negative-50, #d8c4c2);
    transition: 1s;
}
.requesition-information-right .confirmation-btn:hover{
    background: var(--positive-50, #bdd5ba);
    transition: 1s;
}
.confirmation-btn .simple:hover{
    background: var(--positive-50, #E3F5E1);
}
.requesition-information-left{
    width: 100%;
    display: flex;
    flex-direction: column;
}
.student-requesition-information-down{
    display: flex;
    flex-direction: column;
    width: 100%;
}
.student-requesition-information-down table{

    justify-content: space-between;
    width: 100%;
}
.student-requesition-information-down td{
    padding: 15px 0px;

    color: #1E1E1E;
    font-family: Helvetica Neue;
    font-size: 14px;
    font-style: normal;
    font-weight: 300;
    line-height: normal;
}
.student-requesition-information-down th{
    padding-bottom: 30px;

    color: #000;
    font-family: Helvetica Neue;
    font-size: 18px;
    font-style: normal;
    font-weight: 500;
    line-height: 150%; /* 21px */
}
.student-requesition-information-down p{
    color: #1E1E1E;
    font-family: Helvetica Neue;
    font-size: 14px;
    font-style: italic;
    font-weight: 400;
    line-height: 150%; /* 21px */
}
.student-requesition-information-down .majority-problems{
    color: #000;
    font-family: Helvetica Neue;
    font-size: 14px;
    font-style: normal;
    font-weight: 500;
    line-height: 150%; /* 21px */
}
.msg-denial-class{

    width: 100%;
    background: var(--negative-50, #FFF3F2);
    text-align: center;
    height: fit-content;
    align-items: center;
}
.msg-denial-class p{

    color: red;
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 500;
    line-height: 150%;
}
</style>
