<template>
    <section class="cards-professores">
        <div class="container-cards">
            <div class="card-professor" v-for="(professor,index) in professores" v-bind:key="index">
                <router-link class="link-card" :to="{name:'professor',params:{id: professor.id}}">
                <div class="imagem-professor">
                <!--img src="img/JulianaRibeiro.jpeg" alt="Imagem do professor"-->
                </div>
                <div class="infopart">
                    <div class="informacao-professor">
                        <h2 class="card-description nome-professor">{{professor.nome}}</h2>
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
                </router-link>
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
                        id:178821,
                        nome: 'Juliana Ribeiro',
                        experience: '3 anos',

                    },
                    {
                        id:173321,
                        nome: 'Carlos Silveira',
                        experience: '5 anos',
                    },
                    {
                        id:1721,

                        nome: 'Carlos Silveira',
                        experience: '5 anos',
                    },
                    {
                        id:199829,

                        nome: 'Carlos Silveira',
                        experience: '5 anos',
                    },
                    {
                        id:178222121,
                        nome: 'Carlos Silveira',
                        experience: '5 anos',
                    },
                ]
            }
        }
}
</script>

<style scoped>
    .link-card{
        text-decoration: none;
        color: black;
    }
    .cards-professores {
        display: flex;
        align-items: flex-start;
        gap: 24px;
        width: 100%;
    }
    .container-cards{
        margin: 10px 150px;
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
    .card-description .nome-professor{
        color: #1E1E1E;
        font-family: Helvetica Neue;
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
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
        width: 100%;
    }
    .informacoes-experience label{

        font-weight: 500;
        margin: 6px 0px;
    }

    .informacoes-experience ul{
        list-style: none;
        align-items: flex-start;
        display: block;
        margin: 10px 5px;
        width: 100%;

    }
    .informacoes-experience li{

        display: inline-flex;
        padding: 5px 15px;
        border-radius: 4px;
        margin-bottom: 5px;
        color: var(--highlight-600, #803900);
        background: var(--highlight-50, #FFF8F2);
        width: 120%;
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
