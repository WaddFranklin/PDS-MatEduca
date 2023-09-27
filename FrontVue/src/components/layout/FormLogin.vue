<template>
    <div class="modal-overlay">
        <section class="card-login">
      <div class = "head">
        <p class="title-login">Entrar </p>
        <button @click="$emit('showModal')"><i class="bi bi-x"></i></button>
      </div>

      <div class="login-area">
        <form  class="form-login" action="">
        <label for="login">E-mail</label>
        <input type="text" name="login" placeholder="Digite aqui seu e-mail">

        <label for="password">Senha</label>
        <input type="text" name="password" placeholder="Digite aqui sua senha">

        <button  class="agendar" type="submit">Entrar</button>
      </form>
      </div>

      <div class="google-option">

          <div class="mid-divider"></div>
          <span>ou</span>
          <div class="mid-divider"></div>
      </div>

      <button class="login-with-gmail" type="button">Entrar com o google</button>


      <div class="another-options">
        <ul class="options-card-login">
        <li>
          <a href="/">Cadastrar-se</a>
        </li>
        <li>
          <a href="/">Esqueci a minha senha</a>
          </li>
      </ul>
      </div>
    </section>
    </div>
</template>

<script>
import Divider from './Divider.vue'
export default {
  components: { Divider },
  emits:['showModal'],

}
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
  background-color: #0000002f;
  z-index: 1;
}
.card-login{
    display: flex;
    width: 500px;
    padding: 32px;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    gap: 32px;
    position: fixed;
    top: 30%;
    left: 30%;
    background: #fff;
    opacity: 1;
}
.head{
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  width: 100%;
}
.title-login{
    color: var(--primary-500, #003773);
    font-family: Helvetica Neue;
    font-size: 20px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}
.head button{
  border-style: none;
  background-color: #FFF;
}
.head i{
  display: inline-flex;
  flex-direction: row-reverse;
  font-size: 25px;
}
.google-option{
  width: 100%;
  display: inline-flex;
  color: #D1D1D1;
  justify-content: space-between;
}
.google-option .mid-divider{

  width: 70%;
  height: 1px;
  background-color: #D1D1D1;
}
.google-option span{
  font-size: 16px;
  width: 10%;
  margin: 0px 10px 10px 10px;
  padding: 0px 10px 10px 10px;
}
.form-login label{

  color: #1E1E1E;
  font-family: Helvetica Neue;
  font-size: 16px;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
}
.form-login input{
  display: flex;
  align-items: center;
  gap: 8px;
  align-self: stretch;
  width: 200%;
  height: 1vh;
  padding: 20px;
  border-radius: 8px;
  background: #F9F9F9;
  margin: 10px 0px;
  border-style: none;
}
.card-login .agendar{
    width: 235%;
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
    text-align: center;
    line-height: 150%;
    border-style: none;
    margin: 30px 0px;
}
.agendar:hover{
    background-color: #BF5600;
    opacity: 0.8;
    transition: 1s;
}
.login-with-gmail{

  display: flex;
  padding: 8px 0px;
  justify-content: center;
  align-items: flex-start;
  gap: 8px;
  align-self: stretch;
  border-radius: 4px;
  border: 1px solid #D9D9D9;
  text-align: center;
  color: #1E1E1E;
  font-family: Helvetica Neue;
  font-size: 16px;
  font-style: normal;
  font-weight: 700;
  line-height: 150%;
  background-color: #fff;
}
.login-with-gmail:hover{
  background-color: #dfdadd;
  transition: 0.8s;
}
.another-options{
  width: 100%;
}
.options-card-login{

  display: flex;
  justify-content: space-between;
  list-style: none;
  flex-direction: row;
}
</style>
