<template>
  <div class="modal-overlay">
    <section class="card-register">
      <div class="head-register">
        <p class="title-register">Cadastre-se</p>
        <button @click="$emit('showModalRegister')">
          <i class="bi bi-x"></i>
        </button>
      </div>

      <div>

      <div class="description-two">
        <p>Selecione o tipo de perfil que melhor descreve você na plataforma.</p>
      </div>

      <div class="frame-152">
        <button class="card-base" @click="{{ this.$router.push('/registroProfessor'); }}">
          <div class="frame-150">
            <i class="bi bi-person-vcard"></i>
          </div>
          <div class="frame-151">
            <div class="name-type">
              Professor
            </div>
            <div class="description-one">
              Você é um educador ou instrutor que deseja oferecer aulas e orientação personalizada aos alunos.
            </div>
          </div>
        </button>

        <button class="card-base" @click="{{ this.$router.push('/registroAluno'); }}">
          <div class="frame-150">
            <i class="bi bi-person"></i>
          </div>
          <div class="frame-151">
            <div class="name-type">
              Aluno
            </div>
            <div class="description-one">
              Você é um estudante em busca de aulas particulares e orientação para melhorar seu desempenho acadêmico.
            </div>
          </div>
        </button>
      </div>

      <div class="line-5"></div>

      </div>
      <div class="another-options-register">
        <p>Já tem uma conta?</p>
        <router-link @click="$emit('showModalLogin')" to="#" class="nav-link">Entrar</router-link>
      </div>
    </section>
  </div>
</template>

<script>
  import Divider from './Divider.vue'
export default {
  data() {
    return {
      email: '',
      password: '',
    };
  },
  components: { Divider },
  emits: ['showModalRegister'],
};
</script>

<style>
.modal-overlay{
position: fixed;
width: 100%;
height: 100%;
top: 0;
right: 0;
bottom: 0;
left: 0;
background-color: #0000007f;
z-index: 1;
display: flex;
justify-content: center;
align-items: center;
font-family: 'Helvetica Neue';
font-style: normal;
font-weight: 400;
font-size: 16px;
line-height: 150%;
color: #5E6475;

}
.another-options-register{
  display: flex;
  align-items: center;
  justify-content: center;
}
.head-register{
  margin-bottom: -10%;
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  width: 100%;
}

.head-register button{
  border-style: none;
  background-color: #FFF;
}

.line-5 {
  width: 436px;
  height: 0px;

  border: 1px solid #D9D9D9;
  margin-top: 8%;
}

.head-register i{
display: inline-flex;
flex-direction: row-reverse;
font-size: 25px;
}

.card-register{
  display: flex;
  width: 440px;
  padding: 32px;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  gap: 32px;
  position: fixed;
  background: #fff;
  opacity: 1;
  border-radius: 10px;
}
.title-register{
  color: var(--primary-500, #003773);
  font-family: Helvetica Neue;
  font-size: 20px;
  font-style: normal;
  font-weight: 700;
  line-height: normal;
}
.agendar:hover{
  background-color: #BF5600;
  opacity: 0.8;
  transition: 1s;
}

.card-base{
  box-sizing: border-box;

  /* Auto layout */
  display: flex;
  flex-direction: row;
  align-items: center;
  padding: 16px;
  gap: 16px;

  width: 436px;
  height: 132px;

  /* Neutral/100 */
  border: 1px solid #DBDDE5;
  border-radius: 4px;
  background-color: white;
}

.card-base:hover{
  background-color: rgba(128, 128, 128, 0.5);
  opacity: 0.9;
  transition: 1s;
}

.frame-150{
  /* Auto layout */
display: flex;
flex-direction: row;
justify-content: center;
align-items: flex-start;
padding: 16px;
gap: 8px;

width: 64px;
height: 64px;

/* Primary/50 */
background: #F2F6FB;
border-radius: 99px;

/* User / User_Card_ID */

width: 32px;
height: 32px;

/* Primary/400 */
border: 2px solid #054A91;
}
.frame-150 .bi-person-vcard{

    width: 100%;
    font-size: 30px;
    color: #054A91;
}
.frame-150 .bi-person{

    font-size: 35px;
}

.frame-151 {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  padding: 0px;
  gap: 4px;

  width: 324px;
  height: 100px;
}

.name-type {
  width: 75px;
  height: 24px;

  font-family: 'Helvetica Neue';
  font-style: normal;
  font-weight: 700;
  font-size: 16px;
  line-height: 150%;
  /* identical to box height, or 24px */

  color: #000000;
}

.description-one {
  width: 324px;
  height: 72px;

  font-family: 'Helvetica Neue';
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 150%;
  text-align: justify;

  /* Neutral/300 */
  color: #5E6475;
}

.description-two {
  font-family: 'Helvetica Neue';
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 150%;
  /* or 24px */

  /* Neutral/300 */
  color: #5E6475;
}

.frame-152 {

  /* Auto layout */
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  padding: 0px;
  gap: 16px;

  width: 436px;
  height: 280px;

}
</style>



