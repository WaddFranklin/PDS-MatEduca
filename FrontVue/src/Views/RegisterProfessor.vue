<template>
  <div>
    <CustomNavBar />
    <div class="base-register">
      <section class="base-register-card">
        <div class="head-register-card">
          <p class="title-register-card">Cadastre-se</p>
        </div>

        <div class="line"></div>

        <div class="identification-register">
          <p class="">{{ pageName }}</p>
          <p class="">{{value}}\3</p>
        </div>

        <div v-if="part_one">
          <div class="item-base">
            <p class="text-card">Nome</p>
            <input v-model="name" class="input-card" type="text">
          </div>

          <div class="item-base">
            <p class="text-card">Sobrenome</p>
            <input v-model="middlename" class="input-card" type="text">
          </div>

          <div class="item-base">
            <p class="text-card">E-mail</p>
            <input v-model="email" class="input-card" type="email">
          </div>

          <div class="item-base">
            <p class="text-card">Senha</p>
            <input v-model="password" class="input-card" type="password">
          </div>

          <div class="image-perfil">
            <p class="text-card">Imagem de Perfil</p>
            <button class="button-card-register" @click="openFileInput">
              <input
                type="file"
                accept="image/*"
                @change="handleImageUpload"
                style="display: none;"
                ref="fileInput"
              />
              <p class="text-card-button">Carregar foto</p>
            </button>
          </div>
          <img class="image-register" :src="photo" alt="">

          <div class="image-perfil">
            <p class="text-card">Imagem de Capa</p>
            <button class="button-card-register" @click="openCoverImageInput">
              <input
                type="file"
                accept="image/*"
                @change="handleCoverImageUpload"
                style="display: none;"
                ref="coverImageInput"
              />
              <p class="text-card-button">Carregar foto</p>
            </button>
          </div>
          <img class="image-register" :src="coverPhoto" alt="">

          <div class="line-footer"></div>

          <div class="identification-register">

            <button class="back-step">
              <Icon icon="ci:arrow-left-md" color="blue" width="24px"/>
              <p>
                <router-link to="/" style="text-decoration: none;">Voltar</router-link>
              </p>
            </button>

            <button class="next-step" @click="goToPageTwo">
              <Icon icon="ci:arrow-right-md" color="white" width="24px"/>
              <p>Informações Profissionais</p>
            </button>

          </div>
        </div>



        <div v-else-if="part_two">
          <div class="item-base">
            <p class="text-card">Título</p>
            <input v-model="tittle" class="input-card" type="text">
          </div>

          <div class="item-base">
            <p class="text-card">Bio</p>
            <textarea maxlength="256" v-model="bio" class="input-card" type="text" rows="5" style="resize: none; height: 150px;"/>
            <p class="char-count">{{ bio.length }}/256</p>
          </div>

          

          <div class="curriculo-base">
            <div class="item-base-curriculo">
            <p class="text-card-title">Currículo</p>
            <textarea maxlength="256" v-model="curriculo" class="input-card" type="text" rows="5" style="resize: none; height: 150px; width: 552px;"/>
            <p class="char-count">{{ curriculo.length }}/256</p>
          </div>
          


          <div class="item-base">
            <p class="text-card-title">Especialidades</p>

            <div class="specialty-card">
              <button
                class="specialty-item"
                :class="{ 'selected': selectedSpecialties.algebra }"
                @click="toggleSpecialty('algebra')"
              >
                Álgebra
              </button>

              <button
                class="specialty-item"
                :class="{ 'selected': selectedSpecialties.geometria }"
                @click="toggleSpecialty('geometria')"
              >
                Geometria
              </button>

              <button
                class="specialty-item"
                :class="{ 'selected': selectedSpecialties.trigonometria }"
                @click="toggleSpecialty('trigonometria')"
              >
                Trigonometria
              </button>

              <button
                class="specialty-item"
                :class="{ 'selected': selectedSpecialties.AnaliseCombinatoriaProbabilidade }"
                @click="toggleSpecialty('AnaliseCombinatoriaProbabilidade')"
              >
                Analise Combinatória e Probabilidade
              </button>

              <button
                class="specialty-item"
                :class="{ 'selected': selectedSpecialties.FuncoesExponenciaisLogaritmicas }"
                @click="toggleSpecialty('FuncoesExponenciaisLogaritmicas')"
              >
                Funções Exponenciais e Logarítmicas
              </button>

              <button
                class="specialty-item"
                :class="{ 'selected': selectedSpecialties.NumerosComplexos }"
                @click="toggleSpecialty('NumerosComplexos')"
              >
                Números Complexos
              </button>

              <button
                class="specialty-item"
                :class="{ 'selected': selectedSpecialties.MatrizesDeterminantes }"
                @click="toggleSpecialty('MatrizesDeterminantes')"
              >
                Matrizes e Determinantes
              </button>

              <button
                class="specialty-item"
                :class="{ 'selected': selectedSpecialties.GeometriaAnaliticaPlanoEspaco }"
                @click="toggleSpecialty('GeometriaAnaliticaPlanoEspaco')"
              >
                Geometria Analítica no Plano e no Espaço
              </button>

              <button
                class="specialty-item"
                :class="{ 'selected': selectedSpecialties.Estatistica }"
                @click="toggleSpecialty('Estatistica')"
              >
                Estatística
              </button>

              <button
                class="specialty-item"
                :class="{ 'selected': selectedSpecialties.GeometriaAnaliticaVetores }"
                @click="toggleSpecialty('GeometriaAnaliticaVetores')"
              >
                Geometria Analítica e Vetores
              </button>
            </div>


            <div class="item-base-exp">
              <p class="text-card-title">Experiência (anos): </p>
              <Selection :rate="this.rate" />
            </div>
          </div>

          </div>


          <div class="identification-register">

            <button class="back-step" @click="goToPageOne">
              <Icon icon="ci:arrow-left-md" color="blue" width="24px"/>
              <p>Voltar</p>
            </button>

            <button class="next-step" @click="goToPageThree">
              <Icon icon="ci:arrow-right-md" color="white" width="24px"/>
              <p>Disponibilidade</p>
            </button>

          </div>
        </div>

        <div v-if="part_three">
          <div class="card-part-3">
            <p class="text-card-part-3">Especifique quando você está disponível para ministrar aulas particulares. Isso ajudará os alunos a agendar aulas com você.</p>
            
            <div class="item-base-container">
            <div class="item-base-part-3">
              <div>
                <p class="text-card">Manhã</p>
                <p class="sub-text-card">Disponível de manhã, das 8h às 12h.</p>
              </div>
              <div class="check-box-card" >
                <p class="check-box-card-text">Disponível</p>
                  <Icon
                    class="check-box-icon"
                    :icon="checkboxIcon"
                    :color="checkboxColor"
                    @click="toggleCheckbox"
                  />
              </div>

              </div>
              <div v-if="isCheckedMorning">
                <div class="item-days-register">
                  <button
                    class="day-item-register"
                    :class="{ 'selected': selectedDaysMorning.dom }"
                    @click="toggleDayMorning('dom')"
                  >
                  <p class="day-item-text">Dom</p>
                    
                  </button>
                  <button
                    class="day-item-register"
                    :class="{ 'selected': selectedDaysMorning.seg }"
                    @click="toggleDayMorning('seg')"
                  >
                  <p class="day-item-text">seg</p>
                    
                  </button>
                  <button
                    class="day-item-register"
                    :class="{ 'selected': selectedDaysMorning.ter }"
                    @click="toggleDayMorning('ter')"
                  >
                  <p class="day-item-text">ter</p>
                    
                  </button>
                  <button
                    class="day-item-register"
                    :class="{ 'selected': selectedDaysMorning.qua }"
                    @click="toggleDayMorning('qua')"
                  >
                  <p class="day-item-text">qua</p>
                    
                  </button>
                  <button
                    class="day-item-register"
                    :class="{ 'selected': selectedDaysMorning.qui }"
                    @click="toggleDayMorning('qui')"
                  >
                  <p class="day-item-text">qui</p>
                    
                  </button>
                  <button
                    class="day-item-register"
                    :class="{ 'selected': selectedDaysMorning.sex }"
                    @click="toggleDayMorning('sex')"
                  >
                  <p class="day-item-text">sex</p>
                    
                  </button>
                  <button
                    class="day-item-register"
                    :class="{ 'selected': selectedDaysMorning.sab }"
                    @click="toggleDayMorning('sab')"
                  >
                  <p class="day-item-text">sab</p>
                    
                  </button>
                </div>
              </div>
            </div>

            <div class="item-base-container">
            <div class="item-base-part-3">
              <div>
                <p class="text-card">Tarde</p>
                <p class="sub-text-card">Disponível de tarde, das 12h às 17h.</p>
              </div>
              <div class="check-box-card" >
                <p class="check-box-card-text">Disponível</p>
                  <Icon
                    class="check-box-icon"
                    :icon="checkboxIconAfternoon"
                    :color="checkboxColorAfternoon"
                    @click="toggleCheckboxAfternoon"
                  />
              </div>

              </div>
              <div v-if="isCheckedAfternoon">
                <div class="item-days-register">
                  <button
                    class="day-item-register"
                    :class="{ 'selected': selectedDaysAfternoon.dom }"
                    @click="toggleDayAfternoon('dom')"
                  >
                  <p class="day-item-text">Dom</p>
                    
                  </button>
                  <button
                    class="day-item-register"
                    :class="{ 'selected': selectedDaysAfternoon.seg }"
                    @click="toggleDayAfternoon('seg')"
                  >
                  <p class="day-item-text">seg</p>
                    
                  </button>
                  <button
                    class="day-item-register"
                    :class="{ 'selected': selectedDaysAfternoon.ter }"
                    @click="toggleDayAfternoon('ter')"
                  >
                  <p class="day-item-text">ter</p>
                    
                  </button>
                  <button
                    class="day-item-register"
                    :class="{ 'selected': selectedDaysAfternoon.qua }"
                    @click="toggleDayAfternoon('qua')"
                  >
                  <p class="day-item-text">qua</p>
                    
                  </button>
                  <button
                    class="day-item-register"
                    :class="{ 'selected': selectedDaysAfternoon.qui }"
                    @click="toggleDayAfternoon('qui')"
                  >
                  <p class="day-item-text">qui</p>
                    
                  </button>
                  <button
                    class="day-item-register"
                    :class="{ 'selected': selectedDaysAfternoon.sex }"
                    @click="toggleDayAfternoon('sex')"
                  >
                  <p class="day-item-text">sex</p>
                    
                  </button>
                  <button
                    class="day-item-register"
                    :class="{ 'selected': selectedDaysAfternoon.sab }"
                    @click="toggleDayAfternoon('sab')"
                  >
                  <p class="day-item-text">sab</p>
                    
                  </button>
                </div>
              </div>
            </div>


            <div class="item-base-container">
            <div class="item-base-part-3">
              <div>
                <p class="text-card">Noite</p>
                <p class="sub-text-card">Disponível de noite, das 17h às 21h.</p>
              </div>
              <div class="check-box-card" >
                <p class="check-box-card-text">Disponível</p>
                  <Icon
                    class="check-box-icon"
                    :icon="checkboxIconNight"
                    :color="checkboxColorNight"
                    @click="toggleCheckboxNight"
                  />
              </div>

              </div>
              <div v-if="isCheckedNight">
                <div class="item-days-register">
                  <button
                    class="day-item-register"
                    :class="{ 'selected': selectedDaysNight.dom }"
                    @click="toggleDayNight('dom')"
                  >
                  <p class="day-item-text">Dom</p>
                    
                  </button>
                  <button
                    class="day-item-register"
                    :class="{ 'selected': selectedDaysNight.seg }"
                    @click="toggleDayNight('seg')"
                  >
                  <p class="day-item-text">seg</p>
                    
                  </button>
                  <button
                    class="day-item-register"
                    :class="{ 'selected': selectedDaysNight.ter }"
                    @click="toggleDayNight('ter')"
                  >
                  <p class="day-item-text">ter</p>
                    
                  </button>
                  <button
                    class="day-item-register"
                    :class="{ 'selected': selectedDaysNight.qua }"
                    @click="toggleDayNight('qua')"
                  >
                  <p class="day-item-text">qua</p>
                    
                  </button>
                  <button
                    class="day-item-register"
                    :class="{ 'selected': selectedDaysNight.qui }"
                    @click="toggleDayNight('qui')"
                  >
                  <p class="day-item-text">qui</p>
                    
                  </button>
                  <button
                    class="day-item-register"
                    :class="{ 'selected': selectedDaysNight.sex }"
                    @click="toggleDayNight('sex')"
                  >
                  <p class="day-item-text">sex</p>
                    
                  </button>
                  <button
                    class="day-item-register"
                    :class="{ 'selected': selectedDaysNight.sab }"
                    @click="toggleDayNight('sab')"
                  >
                  <p class="day-item-text">sab</p>
                    
                  </button>
                </div>
              </div>
            </div>

          </div>
          <div class="line"></div>
          <div class="identification-register">

            <button class="back-step" @click="goToPageTwo">
              <Icon icon="ci:arrow-left-md" color="blue" width="24px"/>
              <p>Voltar</p>
            </button>

            <button class="next-step" @click="sendRequest">
              <Icon icon="ci:arrow-right-md" color="white" width="24px"/>
              <p>Finalizar</p>
            </button>

          </div>


        </div>

      </section>
    </div>
    <CustomFooter />
  </div>
</template>

<script>
import CustomFooter from '../components/layout/CustomFooter.vue'
import CustomNavBar from '../components/layout/CustomNavBar.vue'
import Links from '../components/layout/Links.vue'
import Classes from '../components/aluno/Classes.vue'
import Selection from '../components/layout/Selection.vue'
import { Icon } from '@iconify/vue';
export default {
  data() {
    return {
      part_one: true,
      part_two: false,
      part_three: false,
      name: '',
      middlename: '',
      email: '',
      photo: '',
      coverPhoto: '',
      value: 1,
      tittle: '',
      bio: '',
      curriculo: '',
      password: '',
      photoform: '',
      coverPhotoform: '',
      isCheckedMorning: false,
      isCheckedAfternoon: false,
      isCheckedNight: false,
      selectedStar: 0,
      pageName: 'Identificação',
      selectedDaysMorning:{
        dom: false,
        seg: false,
        ter: false,
        qua: false,
        qui: false,
        sex: false,
        sab: false
      },
      selectedDaysAfternoon:{
        dom: false,
        seg: false,
        ter: false,
        qua: false,
        qui: false,
        sex: false,
        sab: false
      },
      selectedDaysNight:{
        dom: false,
        seg: false,
        ter: false,
        qua: false,
        qui: false,
        sex: false,
        sab: false
      },
      selectedSpecialties: {
        algebra: false,
        geometria: false,
        trigonometria: false,
        AnaliseCombinatoriaProbabilidade: false,
        FuncoesExponenciaisLogaritmicas: false,
        NumerosComplexos: false,
        MatrizesDeterminantes: false,
        GeometriaAnaliticaPlanoEspaco: false,
        Estatistica: false,
        GeometriaAnaliticaVetores: false
      },

    }
  },
  computed: {
    checkboxIcon() {
      return this.isCheckedMorning ? 'ri:checkbox-circle-fill' : 'ri:checkbox-circle-line';
    },
    checkboxColor() {
      return this.isCheckedMorning ? 'blue' : 'gray';
    },
    checkboxIconAfternoon() {
      return this.isCheckedAfternoon ? 'ri:checkbox-circle-fill' : 'ri:checkbox-circle-line';
    },
    checkboxColorAfternoon() {
      return this.isCheckedAfternoon ? 'blue' : 'gray';
    },
    checkboxIconNight() {
      return this.isCheckedNight ? 'ri:checkbox-circle-fill' : 'ri:checkbox-circle-line';
    },
    checkboxColorNight() {
      return this.isCheckedNight ? 'blue' : 'gray';
    },
  },
  components: {
    CustomNavBar,
    CustomFooter,
    Links,
    Classes,
    Selection,
    Icon
  },
  methods: {
    rate(star) {
      this.selectedStar = star;
    },
    toggleCheckbox() {
      this.isCheckedMorning = !this.isCheckedMorning;
    },
    toggleCheckboxAfternoon() {
      this.isCheckedAfternoon = !this.isCheckedAfternoon;
    },
    toggleCheckboxNight() {
      this.isCheckedNight = !this.isCheckedNight;
    },
    openFileInput() {
      this.$refs.fileInput.click()
    },
    toggleDayNight(day){
      this.selectedDaysNight[day] = !this.selectedDaysNight[day];
    },
    toggleDayAfternoon(day){
      this.selectedDaysAfternoon[day] = !this.selectedDaysAfternoon[day];
    },
    toggleDayMorning(day){
      this.selectedDaysMorning[day] = !this.selectedDaysMorning[day];
    },
    toggleSpecialty(specialty) {
      this.selectedSpecialties[specialty] = !this.selectedSpecialties[specialty];
    },
    handleImageUpload(event) {
      const file = event.target.files[0]
      if (file) {
        const reader = new FileReader()
        reader.readAsDataURL(file)
        reader.onload = () => {
          // Atribui a imagem à variável photo
          this.photo = reader.result
        }
      }
      let form = ''
        form = new FormData()
        form.append("image", file)
        this.photoform = file
    },
    openCoverImageInput() {
      this.$refs.coverImageInput.click()
    },

    getNextDayDate(day) {
      const today = new Date();
      const dayIndex = day === "seg" ? 1
        : day === "ter" ? 2
        : day === "qua" ? 3
        : day === "qui" ? 4
        : day === "sex" ? 5
        : day === "sab" ? 6
        : 0; // Se não for um dia válido, usamos domingo (0).
      const daysUntilNext = (dayIndex + 7 - today.getDay()) % 7;
      const nextDate = new Date(today);
      nextDate.setDate(today.getDate() + daysUntilNext);
      
      // Formate a data no formato "ano-mes-dia"
      const formattedDate = nextDate.toISOString().split('T')[0];
      
      return formattedDate;
    },

    async sendRequest(){
      let names = {
        algebra: "ÁLGEBRA",
        geometria: "GEOMETRIA",
        trigonometria: "TRIGONOMETRIA",
        AnaliseCombinatoriaProbabilidade: "ANÁLISE COMBINATÓRIA E PROBABILIDADE",
        FuncoesExponenciaisLogaritmicas: "FUNÇÕES EXPONENCIAIS E LOGARÍTMICAS",
        NumerosComplexos: "NÚMEROS COMPLEXOS",
        MatrizesDeterminantes: "MATRIZES E DETERMINANTES",
        GeometriaAnaliticaPlanoEspaco: "GEOMETRIA ANALÍTICA NO PLANO E NO ESPAÇO",
        Estatistica: "ESTATÍSTICA",
        GeometriaAnaliticaVetores: "GEOMETRIA ANALÍTICA E VETORES"
      }

      // Criando o novo objeto com base no objeto 'names'
      const speciality = [];
      for (const key in this.selectedSpecialties) {
        if (this.selectedSpecialties[key] === true) {
          speciality.push(names[key]);
        }
      }

      let horarioDia =  [];
      let horarioTarde =  [];
      let horarioNoite =  [];

      for (const day in this.selectedDaysMorning) {
        if (this.selectedDaysMorning[day]) {
          horarioDia.push({"day": this.getNextDayDate(day), "hour": "10:00"});
        }
      }

      for (const day in this.selectedDaysAfternoon) {
        if (this.selectedDaysAfternoon[day]) {
          horarioTarde.push({"day": this.getNextDayDate(day), "hour": "13:00"});
        }
      }

      for (const day in this.selectedDaysNight) {
        if (this.selectedDaysNight[day]) {
          horarioNoite.push({"day": this.getNextDayDate(day), "hour": "20:00"});
        }
      }

      const send = {
        usuario_tipo_id: 3,
        nome: this.name,
        sobrenome: this.middlename,
        foto_perfil_path: this.photoform,
        foto_capa_path: this.coverPhotoform,
        titulo: this.tittle,
        bio: this.bio,
        curriculo: this.curriculo,
        email: this.email,
        senha: this.password,
        speciality: speciality,
        horarioDia: horarioDia,
        horarioTarde: horarioTarde,
        horarioNoite: horarioNoite,
        experiencia: this.selectedStar
      }


      let result = await this.$store.dispatch('createTutor', send);
      if (result) {
        this.$router.push('/cadastroCompleto').then(()=>{
          window.location.reload();
        })
      } else {
        alert('Falha no login. Verifique suas credenciais.');
      }
    },

    // Método para lidar com o upload da imagem de capa
    handleCoverImageUpload(event) {
      const file = event.target.files[0]
      if (file) {
        const reader = new FileReader()
        reader.readAsDataURL(file)
        reader.onload = () => {
          this.coverPhoto = reader.result
        }
        let form = ''
        form = new FormData()
        form.append("image", file)
        this.coverPhotoform = file
      }
    },
    goToPageOne() {
      this.value = 1
      this.part_one = true;
      this.part_two = false;
      this.pageName = 'Identificação';
    },
    goToPageTwo() {
      this.value = 2
      this.part_one = false;
      this.pageName = 'Informações Profissionais';
      this.part_two = true;
      this.part_three = false;
    },
    goToPageThree(){
      this.value = 3
      this.pageName = 'Disponibilidade';
      this.part_one = false;
      this.part_two = false;
      this.part_three = true;
    }
  },
}
</script>
  <style>
  .base-register{
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .base-register-card{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }

  .identification-register{
    display: flex;
    width: 100%;
    margin-top: 3%;
    align-items: center;
    justify-content: space-between;
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
  }

  .item-days-register{
    display: flex;
    flex-direction: row;
  }

  .day-item-text{
    font-family: 'Helvetica Neue';
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 20px;
    /* identical to box height */
    color: #252833;
  }

  .rating {
  font-size: 0;
  }

  .rating span {
    font-size: 24px;
    cursor: pointer;
    transition: color 0.3s;
  }

  .rating span.star-filled {
    color: gold;
  }

  .sub-text-card{
    width: 447px;
    height: 21px;

    font-family: 'Helvetica Neue';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 150%;
    /* identical to box height, or 21px */

    /* Neutral/300 */
    color: #5E6475;
  }

  .day-item-register{
    box-sizing: border-box;

    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 12px;
    margin: 5px;
    gap: 8px;

    margin-top: -4%;

    width: 78.86px;
    height: 44px;

    /* Neutral/White */
    background: #FFFFFF;
    border: 1px solid #D9D9D9;
    border-radius: 8px;
  }

  .item-base{
    margin-bottom: 25px;
    width: 100%;
  }

  .item-base-exp{
    margin-bottom: 25px;
    width: 100%;
    margin-top: 8%;
  }

  .check-box-card{
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 0px;
    justify-content: space-between;
    gap: 8px;

    width: 129px;
    height: 32px;
  }

  .check-box-icon{
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    padding: 0px;

    width: 26px;
    height: 26px;
  }

  .check-box-card-text{
    width: 65px;
    height: 24px;

    font-family: 'Helvetica Neue';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 170%;
    /* identical to box height, or 24px */
    display: flex;
    align-items: center;

    /* Neutral/Dark 2 */
    color: #333333;
  }

  .item-base-part-3{
    margin-bottom: 25px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .card-part-3{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 0px;

    width: 600px;
    height: auto;

    /* Neutral/White */
    background: #FFFFFF;
    border-radius: 8px;
  }

  .specialty-item{
    font-family: 'Helvetica Neue';
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 20px;
    box-sizing: border-box;

    /* Auto layout */
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 12px;
    gap: 8px;

    width: auto;
    height: 44px;

    /* Primary/50 */
    background: white;
    border: 1px solid #D9D9D9;
    border-radius: 8px;
  }

  .specialty-item:hover{
    color: #003773;
  }

  .selected {
    background: #F2F6FB;
    color: #003773;
  }

  .specialty-card{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    align-content: flex-start;
    padding: 0px;
    gap: 12px;

    width: 552px;
    height: 324px;
  }

  .curriculo-base{
    box-sizing: border-box;

    /* Auto layout */
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    padding: 24px;
    gap: 24px;

    width: 600px;
    height: 820px;

    /* Neutral/100 */
    border: 1px solid #DBDDE5;
    border-radius: 8px;
  }

  .image-perfil{
    display: flex;
    align-items: center;
    height: 0%;
    justify-content: space-between;
  }

  .char-count{
    display: flex;
    align-items: right;
    justify-content: flex-end;
    width: 100%;
  }

  .item-base-curriculo{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    padding: 0px;
    gap: 8px;

    width: 552px;
    height: 254px;
  }

  .next-step{
    /* Frame 137 */

    box-sizing: border-box;

    /* Auto layout */
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 8px 12px;
    gap: 8px;

    width: 224px;
    height: 40px;

    /* Primary/400 */
    background: #054A91;
    /* Neutral/100 */
    border: 1px solid #DBDDE5;
    border-radius: 4px;

  }

  .next-step p{
    width: 224px;
    font-family: 'Helvetica Neue';
    font-style: normal;
    font-weight: 500;
    font-size: 13px;
    line-height: 150%;
    /* identical to box height, or 21px */

    /* Neutral/White */
    color: #FFFFFF;
  }

  .back-step {

    box-sizing: border-box;

    /* Auto layout */
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 8px 12px;
    gap: 8px;

    width: 93px;
    height: 40px;

    /* Neutral/White */
    background: #FFFFFF;
    /* Neutral/100 */
    border: 1px solid #DBDDE5;
    border-radius: 4px;

  }

  .back-step p {
    width: 37px;
    height: 21px;

    font-family: 'Helvetica Neue';
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 150%;
    /* identical to box height, or 21px */

    /* Primary/400 */
    color: #054A91;
  }

  .line{
    width: 100%;
    height: 0px;
    border: 1px solid #D9D9D9;
  }

  .line-footer{
    width: 100%;
    height: 0px;
    border: 1px solid #D9D9D9;
    margin-top: 2%;
  }

  .image-register{
    max-width: 600px;
  }

  .button-card-register{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 8px 12px;
    gap: 8px;

    width: 188px;
    height: 40px;
    background: #FFFFFF;
    border: 1px solid #DBDDE5;
    box-sizing: border-box;
    border-radius: 4px;
  }

  .button-card-register:hover{
    background-color: rgba(128, 128, 128, 0.5);
    opacity: 0.9;
    transition: 1s;
  }
  
  .text-card-button{
    font-family: Helvetica Neue;
    font-size: 14px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;

    /* Primary/400 */
    color: #054A91;

  }

  .image-perfil p{
    margin: 0;
    padding: 0;
  }

  .head-register-card{
    display: flex;
    width: 100%;
    justify-content: flex-start;
  }

  .text-card{
    font-family: 'Helvetica Neue';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    /* identical to box height */

    /* Neutral/500 */
    color: #252833;
  }

  .text-card-part-3 {
    width: 600px;
    height: 48px;

    font-family: 'Helvetica Neue';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 150%;
    /* or 24px */

    /* Neutral/300 */
    color: #5E6475;
  }

  .text-card-title{
    font-family: 'Helvetica Neue';
    font-style: normal;
    font-weight: 600;
    font-size: 16px;
    line-height: 19px;
    /* identical to box height */

    /* Neutral/500 */
    color: #252833;
  }

  .input-card{
    padding: 0px;
    gap: 8px;

    width: 600px;
    height: 51px;

    background: #f6f7fa;
    border-radius: 8px;

    border: 0;

    font-family: 'Helvetica Neue';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    /* identical to box height */

    /* Neutral/500 */
    color: #252833;
  }

  .title-register-card{
    color: #2f3136;
    font-family: Helvetica Neue;
    font-size: 20px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
  }
  </style>