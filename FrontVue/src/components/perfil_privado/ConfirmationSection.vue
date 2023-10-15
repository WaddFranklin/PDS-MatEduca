<template>

    <section class="class-confimation">
        <h2 class="month-title">Agosto</h2>
        <divider/>
        <ul class="waiting-list">
            <li><section class="class-requesition">

                <div class="student-requesition-information-up">
                    <div class="requesition-information-left">
                        <h3>Nome do estudante</h3>
                        <p>29 de agosto de 2023 às 14:00</p>
                    </div>
                    <div class="requesition-information-right">
                        <button class="negate-btn" type="button"> <i class="bi bi-x-circle-fill"></i>Recusar</button>
                        <button class="confirmation-btn" type="button"><i class="bi bi-check-circle-fill"></i> Aprovar</button>
                    </div>
                </div>
                <divider/>
            </section></li>
        </ul>
    </section>
</template>

<script>
import Divider from '../layout/Divider.vue'
export default {
  components: { Divider },

}
</script>

<style scoped>

.class-confirmation{
    width: 100%;
    display: flex;
    flex-direction: row-reverse;
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
    width: fit-content;
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
    left: -8px;
    top: 0px;
}
.requesition-information-right .negate-btn i{

    position: relative;
    left: -8px;
}

.requesition-information-right .negate-btn{
    background: var(--negative-50, #FFF3F2);
    color: var(--negative-600, #8B0A03);
}
.requesition-information-right .confirmation-btn{
    background: var(--positive-50, #E3F5E1);
    color: var(--positive-600, #154C21);
}
.requesition-information-right .negate-btn:hover{
    background: var(--negative-50, #d8c4c2);
    transition: 1s;
}
.requesition-information-right .confirmation-btn:hover{
    background: var(--positive-50, #bdd5ba);
    transition: 1s;
}
.requesition-information-left{
    width: 100%;
    display: flex;
    flex-direction: column;
}
</style>
