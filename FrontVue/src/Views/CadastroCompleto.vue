<template>
  <div>
    <CustomNavBar/>
    <div class="complete-base">
      <section class="base-complete-card">
        <div class="head-register-card">
          <p class="title-complete-card">Cadastro realizado com sucesso</p>
          <div class="line-complete"></div>
          <div class="card-icon">
            <div class="icon-complete">
            </div>
            <p class="complete-text">Você agora faz <b>parte da comunidade MatEduca</b>. Este é o primeiro passo para compartilhar seu conhecimento e ajudar alunos a melhorarem seu desempenho acadêmico.</p>
          </div>
          <div class="line-complete"></div>
          <div class="button-complete-card">
            <button class="button-complete">
              <Icon icon="ci:arrow-right-md" color="white" width="24px"/>
              <router-link to="/" class="complete-button-text"> Finalizar </router-link>
            </button>
          </div>
        </div>
      </section>
    </div>
    <CustomFooter/>
  </div>
</template>

<script>
import CustomFooter from '../components/layout/CustomFooter.vue'
import CustomNavBar from '../components/layout/CustomNavBar.vue'
import Links from '../components/layout/Links.vue'
import Classes from '../components/aluno/Classes.vue'
import { Icon } from '@iconify/vue';
export default {
  components: { 
    CustomNavBar, 
    CustomFooter,
    Links,
    Classes,
    Icon,
  },

}
</script>

<style>
.complete-base{
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.base-complete-card{
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 32px;
  gap: 32px;

  margin-top: 2%;

  width: 664px;
  height: 491px;

  /* Neutral/White */
  background: #FFFFFF;
  box-shadow: 0px 0px 15px rgba(30, 30, 30, 0.08);
  border-radius: 8px;
}

.button-complete-card{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: flex-start;
  padding: 0px;
  gap: 397px;

  width: 600px;
  height: 40px;
}

.complete-button-text{
  text-decoration: none;
  width: 54px;
  height: 21px;

  font-family: 'Helvetica Neue';
  font-style: normal;
  font-weight: 500;
  font-size: 14px;
  line-height: 150%;
  /* identical to box height, or 21px */

  /* Neutral/White */
  color: #FFFFFF;
}

.button-complete{
  box-sizing: border-box;

  /* Auto layout */
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  padding: 8px 12px;
  gap: 8px;

  margin: 0 auto;
  width: 600px;
  height: 40px;

  margin-top: 5%;

  /* Primary/400 */
  background: #054A91;
  /* Neutral/100 */
  border: 1px solid #DBDDE5;
  border-radius: 4px;
}

.title-complete-card{
  width: 600px;
  height: 24px;

  font-family: 'Helvetica Neue';
  font-style: normal;
  font-weight: 700;
  font-size: 20px;
  line-height: 24px;

  /* Neutral/500 */
  color: #252833;
}
.line-complete{
  height: 0px;
  margin-top: 1%;
  width: 600px;
  border: 1px solid #DBDDE5;
}

.card-icon{
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.icon-complete{
  display: flex;
  justify-content: center;
  padding: 24px;
  gap: 9.14px;
  
  margin-top: 4%;

  width: 112px;
  height: 112px;

  /* Primary/50 */
  background: #F2F6FB;
  border-radius: 285.714px;
}

.button-complete{

}

.complete-text{
  width: 600px;
  height: 91px;

  font-family: 'Helvetica Neue';
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 150%;
  /* or 30px */
  text-align: center;

  /* Primary/500 */
  color: #003773;
}
</style>