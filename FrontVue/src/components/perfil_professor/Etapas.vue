<template>
<div class="modal-overlay">
    <div v-if="this.isAuthenticated" class="etapas">
        <div v-if="etapaAtual === 1" class="etapa">
            <div class="cabecalho">
                <div class="head">
                    <p class="title-login">Agendar Aula</p>
                    <button @click="redirectToProfessor"><i class="bi bi-x"></i></button>
                </div>
                <div class="informacoes">
                    <div>
                        <p class="nome-professor">{{this.currentTutor['nome'] + " "+this.currentTutor['sobrenome']}}</p>
                        <p class="graduation-teacher">{{ this.currentTutor.titulo }}</p>
                    </div>
                    <p class="info-adicional">Sessões de 1 hora aula (50 min)</p>
                </div>
            </div>
            <div class="selecao-dias">
                <div v-for="dia in diasSemana" :key="dia" class="dia" :class="{ 'selecionado': diaSelecionado === dia }" @click="selecionarDia(dia)">
                    {{ dia }}
                </div>
            </div>
            <div class="question-section">
                <div class="questions-paragraphs">
                    <h3 class="question-title-paragraphs">Qual o melhor horário para você?</h3>
                    <p>Selecione uma das opções abaixo</p>
                </div>
                <p class="marcador-etapa">{{ this.etapaAtual }}/5</p>
            </div>
            <div class="horarios">
                <div v-for="horario in horarios[this.diaSelecionado]" :key="horario" class="horario" :class="{ 'selecionado': horaSelecionada === horario }" @click="selecionarHora(horario)">
                    {{ horario["hora"].slice(0,5) }}
                </div>
            </div>
            <div class="options-steps-card">
                <button class="back-redirect-button" @click="redirectToProfessor">Cancelar</button>
                <button @click="proximo" class="botao-proxima-etapa">Próximo</button>
            </div>

        </div>

        <div v-if="etapaAtual === 2" class="etapa">
            <div class="cabecalho">
                <p class="titulo-etapa">Agendar Aula</p>
                <div class="informacoes">
                    <p class="nome-professor">{{this.currentTutor['nome']}}</p>
                    <p class="info-adicional">Sessões de 1 hora aula (50 min)</p>
                </div>
                <p>Qual o assunto que deseja estudar?</p>
                <p style="color: darkgrey">Selecione todas as opções desejáveis</p>

            </div>
            <div class="assunto-selecao">
                <p>Selecione todas as opções desejáveis</p>
                <input type="text" placeholder="Pesquise por assunto" v-model="pesquisaAssunto" />
                <div v-for="(area, index) in areas" :key="index">
                    <p>{{ area.nome }}</p>
                    <div class="linha-sutil"></div>
                    <div v-for="(assunto, aIndex) in area.assuntos" :key="aIndex" class="assunto">
                        <input type="checkbox" v-model="assuntosSelecionados" :value="assunto" />
                        <label>{{ assunto }}</label>
                    </div>
                </div>
            </div>
            <button @click="etapaAtual--">Voltar</button>
            <button @click="proximo" class="botao-proxima-etapa">Próximo</button>
        </div>

        <div v-if="etapaAtual === 3" class="etapa">
        <div class="cabecalho">
            <p class="titulo-etapa">Agendar Aula</p>
            <div class="informacoes">
                <p class="nome-professor">{{this.currentTutor['nome']}}</p>
                <p class="info-adicional">Sessões de 1 hora aula (50 min)</p>
            </div>
        </div>
        <div class="avaliacao-assuntos">
            <div v-for="(assunto, index) in assuntosSelecionados" :key="index">
                <p>{{ assunto }}</p>
                <div class="nota-assunto">
                    <span>Nota: </span>
                    <input type="number" v-model="notasAssuntos[index]" min="1" max="7" />
                </div>
            </div>
        </div>
        <button @click="etapaAtual--">Voltar</button>
        <button @click="proximo" class="botao-proxima-etapa">Próximo</button>
    </div>

        <div v-if="etapaAtual === 4" class="etapa">
            <div class="cabecalho">
                <p class="titulo-etapa">Agendar Aula</p>
                <div class="informacoes">
                    <p class="nome-professor">{{this.currentTutor['nome']}}</p>
                    <p class="info-adicional">Sessões de 1 hora aula (50 min)</p>
                </div>
            </div>
            <div class="maiores-dificuldades">
                <textarea placeholder="Descreva suas maiores dificuldades nesse(s) assunto(s)" v-model="maioresDificuldades"></textarea>
            </div>
            <button @click="etapaAtual--">Voltar</button>
            <button @click="proximo" class="botao-proxima-etapa">Próximo</button>
        </div>

        <div v-if="etapaAtual === 5" class="etapa">
            <div class="cabecalho">
                <p class="titulo-etapa">Agendar Aula - Confirmação</p>
                <div class="informacoes">
                    <p class="nome-professor">{{this.currentTutor['nome']}}</p>
                    <p class="info-adicional">Sessões de 1 hora aula (50 min)</p>
                </div>
            </div>
            <div class="resumo-dados">
                <p><span>Assuntos Selecionados:</span> {{ assuntosSelecionados.join(', ') }}</p>
                <p><span>Notas dos Assuntos:</span> {{ notasAssuntos.join(', ') }}</p>
                <p><span>Maiores Dificuldades:</span> {{ maioresDificuldades }}</p>
            </div>
            <button @click="etapaAtual--">Voltar</button>
            <button @click="confirmarAgendamento" class="botao-proxima-etapa">Confirmar Agendamento</button>
        </div>
    </div>
</div>
</template>

<script>
import { mapGetters } from 'vuex';
export default {
    props: ['viewCardFunc', 'tutor'],
    name: 'Etapas',
    computed: {
        ...mapGetters(['isAuthenticated', 'user']),
    },
    data() {
        return {
            usuarioAutenticado: false,
            etapaAtual: 1,
            diasSemana: [],
            diaSelecionado: null,
            horaSelecionada: null,
            currentTutor: {},
            horarios: {
                "Seg": [],
                "Ter": [],
                "Qua": [],
                "Qui": [],
                "Sex": [],
                "Sáb": [],
                "Dom": []
            },
            pesquisaAssunto: '',
            areas: [],
            assuntosSelecionados: [],
            notasAssuntos: [],
            maioresDificuldades: '',

        };
    },
    async mounted(){
        this.currentTutor = JSON.parse(JSON.stringify(this.tutor))

        let result = await this.$store.dispatch('getHorarios');
        if (result) {
            for (let i = 0; i < result.data.length; i++){
                if (result.data[i]['usuario_id'] == this.currentTutor['id']) {
                    const data = new Date(result.data[i]['data']);
                    let diaDaSemana = data.toLocaleDateString('pt-BR', { weekday: 'long' });
                    diaDaSemana = diaDaSemana.charAt(0).toUpperCase() + diaDaSemana.slice(1)
                    diaDaSemana = diaDaSemana.slice(0,3)

                    if (!this.diasSemana.includes(diaDaSemana)) {
                        this.diasSemana.push(diaDaSemana)
                    }

                    if (this.diaSelecionado === null)
                        this.diaSelecionado = diaDaSemana

                    this.horarios[diaDaSemana].push({"hora": result.data[i]['hora'], "id": result.data[i]['id']})
                }
            }
        } else {
            alert('Falha no login. Verifique suas credenciais.');
        }

        this.getAreas()
    },
    methods: {
        redirectToProfessor() {
            this.viewCardFunc()
        },
        proximo() {
            // Avança para a próxima etapa
            this.etapaAtual++;
        },
        selecionarDia(dia) {
            this.diaSelecionado = dia;
        },
        async confirmarAgendamento() {
            const user = JSON.parse(JSON.stringify(this.user))

            let result = await this.$store.dispatch('getStatus');
            let status_type = undefined
            for (let i = 0; i < result.data.length; i++){
                if (result.data[i]['descricao'] === 'EM ANALISE')
                {
                    status_type = result.data[i]['id']
                }
            }

            const assuntos = JSON.parse(JSON.stringify(this.assuntosSelecionados));
            const notas = JSON.parse(JSON.stringify(this.notasAssuntos));

            let notas_assuntos = []
            for (let i = 0; i < assuntos.length; i++){
                notas_assuntos.push({
                    "nota": notas[i],
                    "assunto": assuntos[i]
                })
            }

            const send = {
                horario_id: JSON.parse(JSON.stringify(this.horaSelecionada))['id'],
                aluno_id: user.data.id,
                tutor_id: this.currentTutor.id,
                notas_Assuntos: notas_assuntos,
                maiores_dificuldades: JSON.parse(JSON.stringify(this.maioresDificuldades)),
                tutoria_status_id: status_type,
                link: "vazio",
            }

            console.log(send);

            let schedule = await this.$store.dispatch('scheduleTutoring', send);
            console.log(schedule)
            if (schedule) {
                this.$router.push('/')
            } else {
                alert('Falha ao marcar a tutoria');
            }
        },
        getHorarios() {

        },
        selecionarHora(hora){
            this.horaSelecionada = hora
        },
        async getAreas(){
            let result = await this.$store.dispatch('getSpeciality');
            let specialityNames = await this.$store.dispatch('getSpecialityNames');

            const areas = [
                {
                    nome: 'Álgebra',
                    assuntos: ['Equações do 1º grau', 'Equações do 2º grau', 'Sistema de Equações', 'Funções e Gráficos']
                },
                {
                    nome: 'Geometria',
                    assuntos: ['Geometria Plana e espacial', 'Geometria Analítica', 'Teorema de Pitágoras']
                },
                {
                    nome: 'Estatística',
                    assuntos: ['Estatística Descritiva', 'Probabilidade', 'Inferência Estatística', 'Análise de Regressão', 'Estatística Multivariada']
                },
                {
                    nome: 'Matrizes e Determinantes',
                    assuntos: ['Operações com Matrizes', 'Determinantes e Regra de Cramer', 'Matrizes Inversas']
                }
            ]

            let speciality_ids = []
            let subjects_temp = []
            if (result) {
                for(let i = 0; i < result.data.length; i++)
                {
                    if (result.data[i]['usuario_id'] == this.currentTutor['id']) {
                        speciality_ids.push(result.data[i]['especialidade_id'])
                    }
                }

                for(let i = 0; i < speciality_ids.length; i++)
                {
                    for(let j = 0; j < specialityNames.data.length; j++)
                    {
                        if(specialityNames.data[j]['id'] == speciality_ids[i]){
                            subjects_temp.push(specialityNames.data[j]['descricao'].toLowerCase())
                        }
                    }
                }


                for(let i = 0; i < areas.length; i++)
                {
                    let name = areas[i]['nome'].toLowerCase();

                    if (subjects_temp.includes(name)) {
                        this.areas.push(areas[i])
                    }
                }

            } else {
                alert('Falha na solitação das especialidades.');
            }
        }
    }
};
</script>

<style scoped>
.resumo-dados {
    margin-top: 20px;
}

.resumo-dados p {
    margin-bottom: 10px;
}

.resumo-dados p span {
    font-weight: bold;
}

.maiores-dificuldades textarea {
    width: 100%;
    height: 100px;
    padding: 10px;
}

.avaliacao-assuntos {
    margin-top: 20px;
}

.avaliacao-assuntos p {
    font-weight: bold;
}

.nota-assunto {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.nota-assunto span {
    margin-right: 10px;
}

.nota-assunto input {
    width: 40px;
    padding: 5px;
}

.assunto-selecao {
    margin-top: 20px;
}

.assunto-selecao p {
    color: grey;
}

.assunto-selecao input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
}

.assunto {
    display: flex;
    align-items: center;
    margin-bottom: 5px;
}

.assunto label {
    margin-left: 10px;
}

.linha-sutil {
    border-top: 1px solid #ccc;
    margin: 5px 0;
}

.etapas {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    width: 70%;
    max-width: 800px;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.cabecalho {
    align-items: center;
    margin-bottom: 10px;
}

.titulo-etapa {
    color: #003773;;
    font-size: 1.2em;
    font-weight: bold;
    margin-right: 10px;
}

.nome-professor {
    color: #000;
    font-family: Helvetica Neue;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}

.info-adicional {
    color: #1E1E1E;
    font-family: Helvetica Neue;
    font-size: 14px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    background: #F9F9F9;
    height: fit-content;
}
.graduation-teacher{
    color: #787878;
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
.selecao-dias {
    display: flex;
    margin-bottom: 10px;
}

.dia {
    flex: 1;
    padding: 10px;
    text-align: center;
    cursor: pointer;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-right: 5px;
}

.dia.selecionado {
    background-color: #003773;;
    color: white;
}

.horario.selecionado {
    background-color: #003773;;
    color: white;
}

.horarios {
    display: flex;
    flex-direction: column;
}

.horario {
    padding: 10px;
    margin-bottom: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    text-align: center;
    border-radius: 8px;
}

.botao-proxima-etapa {
    background-color: #003773;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    float: right;

    color: #FFF;
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: 150%; /* 24px */
}
.informacoes{
    width: 100%;
    display: inline-flex;
    justify-content: space-between;
}
.questions-paragraphs p{
    color: #8D8D8D;
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
.question-title-paragraphs{
    color: #000;
    font-family: Helvetica Neue;
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
}
.question-section{
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin: 10px 5px;
}
.marcador-etapa{
    color: #000;
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 500;
    line-height: 150%;
    margin-inline: 10px; /* 24px */
}
.options-steps-card{
    width: 100%;
    display: inline-flex;
}
.options-steps-card button{
    width: 100%;
    margin-inline: 1px;
    margin-top: 30px;
}
.back-redirect-button{
    border-radius: 4px;
    border-style: none;
    background: #FFF;

    color: #1E1E1E;
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: 150%; /* 24px */
}
</style>
