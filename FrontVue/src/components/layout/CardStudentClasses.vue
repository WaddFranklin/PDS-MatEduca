<template>
   <ul>
    <li  class="small-class-list" v-for="(reservationClasses, index) in confirmedClasses" :key="index">
        <section class="class-requesition">
            <div class="student-requesition-information-up">
                <div class="requesition-information-left">
                    <h3>{{ reservationClasses.teacherName }}</h3>
                        <p>{{ reservationClasses.reservationTime }}</p>
                </div>
            </div>
            <divider/>

            <div class="student-requesition-information-down">
                <table>
                    <tr>
                        <th>Assuntos</th>
                        <th class="score-avaliation-table-data">Nível de Conhecimento</th>
                    </tr>
                    <tr v-for="(answersAutoAvaliation, index) in reservationClasses.studentAutoAvaliation" :key="index">
                        <td>{{ answersAutoAvaliation.subject }}</td>
                        <td class="score-avaliation-table-data">{{ answersAutoAvaliation.avaliation }}</td>
                    </tr>

                </table>
                <p class="majority-problems">Maiores Dificuldades</p>
                <p>{{reservationClasses.studentDificults }}</p>
            </div>

                <div class = "cards-class-buttons">
                    <div class="class-btn-icons">
                        <h2><i class="bi bi-calendar2-x"></i></h2>
                        <h2><i class="bi bi-pencil"></i></h2>
                    </div>
                    <button class="meet-link-btn"> <i class="bi bi-box-arrow-up-right"></i> Link da chamada</button>
                </div>
        </section>
    </li>
</ul>
</template>

<script>
import Divider from '../layout/Divider.vue';
export default {
  components: { Divider },

    data(){
        return{
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
    }
}
</script>

<style scoped>
.divider{
    background: #D9D9D9;
}
.meet-link-btn{
    width: fit-content;
    display: flex;
    padding: 16px 24px;
    height: fit-content;


    color: var(--neutral-white, #FFF);
    font-family: Helvetica Neue;
    font-size: 14px;
    font-style: normal;
    font-weight: 700;
    line-height: 150%; /* 21px */
    text-align: center;
    border-radius: 4px;
    border: 1px solid #D9D9D9;
    border-radius: 8px;
    background: var(--primary-500, #003773);
}
.meet-link-btn i{
    position: relative;
    top: -2px;
    left: -5px;
}
.aproved-requisitions{
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;

}
.aproved-requisitions ul{
    display: inline-flex;
    flex-direction: row;
    flex-wrap: wrap;
    width: 100%;
    list-style: none;
    padding-inline: 0px;
}
.class-requesition{
    display: flex;
    width: 392px;
    padding: 24px;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    gap: 16px;
}
.small-class-list{
    padding: 0px;
    margin-top: 10px;
    margin-right: 20px;
}
.score-avaliation-table-data{
    text-align: center;
}
div.cards-class-buttons{
    width: 100%;
    display: inline-flex;
    flex-direction: row;
    justify-content: space-between;
}
.class-btn-icons{
    display: flex;
    flex-direction: row;
    padding-inline: 20px;
}
.class-btn-icons i{
    margin-right: 30px;
}
.bi-calendar2-x{
    color: #8B0A03;
}
</style>
