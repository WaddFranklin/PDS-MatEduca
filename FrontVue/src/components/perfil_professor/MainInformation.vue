<template>
  <section class = "Informations-about">
    <div class="main-information">
        <h2>{{ tutor.nome + ' ' + tutor.sobrenome}}</h2>
        <h4>{{ tutor.titulo }}</h4>
    </div>
</section>
</template>

<script>
export default {
    data(){
    return{
        tutor: {}
    }
  },
  async mounted(){
      let id = window.location.href.split('/')
      id = parseInt(id[id.length-1])

      let result = await this.$store.dispatch('getTutors');
      if (result) {
          for (let i = 0; i < result.data.length; i++){
            if (result.data[i]['id'] == id){
              this.tutor = result.data[i]
            }
          }
      } else {
          alert('Falha no login. Verifique suas credenciais.');
      }
  },
}
</script>

<style>
section.informations-about{
    display: flex;
}
div.main-information{
    width: fit-content;
    display: flex;
    position: relative;
    left: 23%;
    margin: 20px 20px;
    flex-direction: row;
    flex-wrap: wrap;
}
.main-information h2{
    color: #1E1E1E;
    font-family: Helvetica Neue;
    font-size: 32px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    width: 75%;

    position: relative;

    top: -30px;
    margin-inline: 15px;
}
.main-information h4{
    color: #787878;
    font-family: Helvetica Neue;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    width: 75%;

    margin: 3px 15px;

    position: relative;
    top: -40px;
}
</style>
