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
          <p class="">{{value}}\1</p>
        </div>

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

          <div class="line-footer"></div>

          <div class="identification-register">

            <button class="back-step">
              <Icon icon="ci:arrow-left-md" color="blue" width="24px"/>
              <p>
                <router-link to="/" style="text-decoration: none;">Voltar</router-link>
              </p>
            </button>

            <button class="next-step" @click="sendRequest">
              <Icon icon="ci:arrow-right-md" color="white" width="24px"/>
              <p>Enviar</p>
            </button>

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
import { mapActions } from 'vuex'

export default {
  data() {
    return {
      name: '',
      middlename: '',
      email: '',
      photo: '',
      value: 1,
      tittle: 'vazio',
      bio: 'vazio',
      curriculo: 'vazio',
      password: '',
      photoform: '',
      pageName: 'Identificação',
      selectedStar: 0,
    }
  },
  mounted() {
  },  
  computed: {
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

    async sendRequest(){
      const send = {
        usuario_tipo_id: 2,
        nome: this.name,
        sobrenome: this.middlename,
        foto_perfil_path: this.photoform,
        foto_capa_path: this.photoform,
        titulo: this.tittle,
        bio: this.bio,
        curriculo: this.curriculo,
        email: this.email,
        senha: this.password,
        experiencia: this.selectedStar,
        speciality: [],
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