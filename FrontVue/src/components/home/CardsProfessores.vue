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
                        <h2 class="card-description nome-professor">{{professor.nome + ' ' + professor.sobrenome}}</h2>
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
                            <p>{{professor.experiencia}} anos</p>
                        </div>

                        <listsubjects :id="professor.id"/>
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
                professores: ''
            }
        },
        async mounted(){
            console.log(this.professores)
            let result = await this.$store.dispatch('getTutors');
            if (result) {
                console.log(result.data)
                this.professores = result.data
            } else {
                alert('Falha no login. Verifique suas credenciais.');
            }
        },
        methods:{
            async getImage(id){
                let data = JSON.stringify(this.professores)
                data = JSON.parse(data);

                let path = ''
                for (let i = 0; i < data.length; i++){
                    if (data[i]['id'] == id) {
                        path = data[i]['foto_perfil_path']
                    }
                }
                let image = await this.$store.dispatch('getImage', path);
                return image
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
    .card-description.nome-professor{
        color: #1E1E1E;
        font-family: Helvetica Neue;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        margin-inline: 12px;

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
        padding: 5px 0px;
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
    p.card-text{
        margin-inline: 10px;
    }
    p.card-text.star-icon i{

        color: orange;
        padding: 0px 4px;
    }
</style>
