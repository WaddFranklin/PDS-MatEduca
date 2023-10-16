<template>
    <div v-if="usuarioAutenticado" class="etapas">
        <div v-if="etapaAtual === 1" class="etapa">
            <div class="cabecalho">
                <p class="titulo-etapa">Agendar Aula</p>
                <div class="informacoes">
                    <p class="nome-professor">Juliana Ribeiro</p>
                    <p class="info-adicional">Sessões de 1 hora aula (50 min)</p>
                </div>
            </div>
            <div class="selecao-dias">
                <div v-for="dia in diasSemana" :key="dia" class="dia" :class="{ 'selecionado': diaSelecionado === dia }" @click="selecionarDia(dia)">
                    {{ dia }}
                </div>
            </div>
            <div class="horarios">
                <div v-for="horario in horarios" :key="horario" class="horario">
                    {{ horario }}
                </div>
            </div>
            <button @click="redirectToProfessor">Cancelar</button>
            <button @click="proximo" class="botao-proxima-etapa">Próximo</button>
        </div>

        <div v-if="etapaAtual === 2" class="etapa">
            <div class="cabecalho">
                <p class="titulo-etapa">Agendar Aula</p>
                <div class="informacoes">
                    <p class="nome-professor">Juliana Ribeiro</p>
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

        <<div v-if="etapaAtual === 3" class="etapa">
        <div class="cabecalho">
            <p class="titulo-etapa">Agendar Aula</p>
            <div class="informacoes">
                <p class="nome-professor">Juliana Ribeiro</p>
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
                    <p class="nome-professor">Juliana Ribeiro</p>
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
                    <p class="nome-professor">Juliana Ribeiro</p>
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
</template>

<script>
export default {
    data() {
        return {
            usuarioAutenticado: false,
            etapaAtual: 1,
            diasSemana: ['Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
            diaSelecionado: null,
            horarios: ['8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00'],
            pesquisaAssunto: '',
            areas: [
                {
                    nome: 'Álgebra',
                    assuntos: ['Equações do 1º grau', 'Equações do 2º grau', 'Sistema de Equações', 'Funções e Gráficos']
                },
                {
                    nome: 'Geometria',
                    assuntos: ['Geometria Plana e espacial', 'Geometria Analítica', 'Teorema de Pitágoras']
                },
                // Adicione mais áreas e assuntos conforme necessário
            ],
            assuntosSelecionados: [],
            notasAssuntos: [],
            maioresDificuldades: '',

        };
    },
    methods: {
        redirectToProfessor() {
            this.$router.push('perfil');
        },
        proximo() {
            // Avança para a próxima etapa
            this.etapaAtual++;
        },
        selecionarDia(dia) {
            this.diaSelecionado = dia;
        },
        confirmarAgendamento() {
            console.log('Agendamento confirmado:');
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
    color: gray;
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
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.titulo-etapa {
    color: blue;
    font-size: 1.2em;
    font-weight: bold;
    margin-right: 10px;
}

.nome-professor {
    font-weight: bold;
}

.info-adicional {
    font-size: 0.8em;
    color: gray;
    margin-left: 10px;
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
    background-color: blue;
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
}

.botao-proxima-etapa {
    background-color: blue;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    float: right;
}
</style>
