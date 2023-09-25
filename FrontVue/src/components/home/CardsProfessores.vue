<template>
    <section class="cards-professores">
        <div class="container-cards">
            <div class="card-professor" v-for="(professor,index) in professores" v-bind:key="index">
                <div class="imagem-professor">
                <!--img src="img/JulianaRibeiro.jpeg" alt="Imagem do professor"-->
                </div>
                <div class="infopart">
                    <div class="informacao-professor">
                        <h2 class="card_description nome-professor">{{professor.nome}}</h2>
                        <p class="card-text star-icon">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            4.5 (23)
                        </p>
                    </div>
                    <div class="informacoes-experience">
                        <div class="experience">
                            <label for="">Experiência</label>
                            <p>{{professor.experience}}</p>
                        </div>

                        <listsubjects/>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import Listsubjects from '../layout/Listsubjects.vue'
export default {
  components: { Listsubjects },
    name: 'CardsProfessores',
    data(){
        return{
            professores:[
                {
                    nome: 'Juliana Ribeiro',
                    experience: '3 anos',

                },
                {
                    nome: 'Carlos Silveira',
                    experience: '5 anos',
                },
                {
                    nome: 'Carlos Silveira',
                    experience: '5 anos',
                },
                {
                    nome: 'Carlos Silveira',
                    experience: '5 anos',
                },
                {
                    nome: 'Carlos Silveira',
                    experience: '5 anos',
                },
            ]
        }
    }
}
</script>

<style>
    .cards-professores {
        display: inline-flex;
        align-items: flex-start;
        gap: 24px;
        width: 100%;
    }
    .container-cards{
        margin: 0px 150px;
        display: flex;
        align-items: flex-start;
        flex-direction: row;
        flex-wrap: wrap;
    }
    .card-professor{

        word-wrap: break-word;
        width: 320px;
        height: 75%;
        margin-top: 50px;
        margin-left: 40px;
        border-radius: 4px;
        border: 1px solid #E1E1E1;

    }

    .imagem-professor{
        width: 100%;
        background: url("../../assets/img/JulianaRibeiro.png");
        background-repeat: no-repeat;
        background-size:100%;
        flex-direction: column;
        padding: 104px 0px;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
        align-self: stretch;
    }
    .infopart{
        background: var(--neutral-white, #FFF);
    }
    .informacao-professor{
        padding: 10px 10px;
    }
    .informacoes-experience{

        display: flex;
        justify-content: space-between;
        padding: 15px 10px;
        margin-top: 15px;
    }
    .informacoes-experience label{

        font-weight: 700;
        margin: 6px 0px;
    }

    .informacoes-experience ul{
        list-style: none;
        align-items: flex-start;
        margin: 0px 5px;
        width: 40%;
    }
    .informacoes-experience li{

        padding: 5px 0px;
        border-radius: 4px;
        margin-bottom: 5px;
        color: var(--highlight-600, #803900);
        background: var(--highlight-50, #FFF8F2); 
    }
    .experience{
        display: flex;
        flex-direction: column;
    }
    p.card-text.star-icon i{

        color: orange;
        padding: 0px 4px;
    }
</style>