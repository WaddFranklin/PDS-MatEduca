<template>
    <div class="modal-overlay">

        <section class="card-login meet-link">
            <section class="head">
                <h2 class="title-login">Insira aqui o link da chamada</h2>
                <button @click="$emit('showModal')"><i class="bi bi-x"></i></button>
            </section>

            <section class="student-requesition-resume">
                <h4>Nome do Estudante</h4>
                <p>29 de agosto de 2023 às 14:00</p>
            </section>

            <form class="link-form" action="">
                <label for="">Link da chamada</label>
                <input type="url" class="link-bar" placeholder="Cole aqui o link da chamada">
                <div class="button-options">
                    <button @click.prevent ="$emit('showModal')" type="button">Cancelar</button>
                    <button @click.prevent ="$emit('showModal')" class="save-btn" type="submit">Salvar</button>
                </div>
            </form>
        </section>
    </div>
</template>

<script>
export default {

    emits:['showModal'],
}
</script>

<style scoped>

.link-card{
    display: flex;
    width: 500px;
    padding: 32px;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    gap: 32px;
}
.link-form{
    width: 100%;
}
.student-requesition-resume h4{

    color: var(--primary-500, #003773);
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}
.student-requesition-resume p{

    color: #1E1E1E;
    font-family: Helvetica Neue;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 150%; /* 21px */
}
.meet-link input{

    width: 100%;
    height: 3.5vh;
    margin: 15px 0px;
    border-radius: 8px;
    background: #F9F9F9;
    border-style: none;
}
.meet-link label{
    color: #1E1E1E;
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
.meet-link input::placeholder{
    color: #1E1E1E;
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
.link-form .button-options{

    display: inline-flex;
    width: 100%;
    margin: 10px auto;
}
.button-options button{
    width: 50%;

    margin-inline: 10px;

    padding: 8px 0px;
    justify-content: center;
    border-radius: 4px;
    background: #FFF;
    border-style: none;
    color: #1E1E1E;
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: 150%; /* 24px */
}
button.save-btn{
    border-radius: 4px;
    background: var(--primary-500, #003773);
    color: #FFF;
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: 150%; /* 24px */
}
.button-options button:hover{
    background: #f1f1f1;
    transition: 1s;
}
button.save-btn:hover{
    background: var(--primary-500, #034fa0);
    transition: 1s;
}
</style>
