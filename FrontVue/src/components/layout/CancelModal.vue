<template>
    <div class="modal-overlay">
        <section class="card-login">
            <div class = "head">
                <p class="title-login">Cancelar Aula </p>
                <button @click="$emit('showCancelModal')"><i class="bi bi-x"></i></button>
            </div>

            <p class="warning">Deseja cancelar a aula marcada abaixo? Esta ação não pode ser desfeita.</p>

            <div>
                <h3 class="title-login">Juliana Ribeiro</h3>
                <p class="restant-time">Em 12d • 29 de agosto de 2023 às 14:00</p>
            </div>

            <div class="card-cancel-buttons">
                <button class="redirect-button" @click="$emit('showCancelModal')">Voltar</button>
                <button class="cancel-class"><i class="bi bi-calendar2-x"></i>Desmarcar Aula</button>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    emits:['showCancelModal'],
}
</script>

<style scoped>
.head{
    margin-bottom: 5px;
}
p.warning{
    align-self: stretch;
    color: #1E1E1E;
    font-family: Helvetica Neue;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 150%; /* 21px */
}
.restant-time{
    color: #1E1E1E;
    font-family: Helvetica Neue;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 150%; /* 21px */
}
.card-cancel-buttons{
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
.card-cancel-buttons button{

    width: 50%;
    margin-inline: 5px;
    border-radius: 4px;
    border-style: none;
    padding: 3px 0px;

    color: #1E1E1E;
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: 150%; /* 24px */

}
.redirect-button{
    background: #FFF;
}
.redirect-button:hover{
    background: #d5d5d5;
}
button.cancel-class{

    color: #FFF;
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: 150%; /* 24px */

    border-radius: 4px;
    background: var(--negative-400, #E60000);
}
button.cancel-class i{
    position: relative;
    left: -10px;
}
</style>
