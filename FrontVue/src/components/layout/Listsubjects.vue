<template>
  <ul class="subject-list">
    <li class="subject-item" v-for="(subject, index) in subjects" :key="index">{{ subject[0].toUpperCase() + subject.slice(1,subject.length).toLowerCase() }}</li>
  </ul>
</template>

<script>
export default {
    props: ['id'],
    data(){
        return{
            subjects: '',
            id: this.id
        }
    },
    async mounted(){
            let result = await this.$store.dispatch('getSpeciality');
            let specialityNames = await this.$store.dispatch('getSpecialityNames');

            let speciality_ids = []
            let subjects_temp = []
            if (result) {
                for(let i = 0; i < result.data.length; i++)
                {
                    if (result.data[i]['usuario_id'] == this.id) {
                        speciality_ids.push(result.data[i]['especialidade_id'])
                    }
                }

                for(let i = 0; i < speciality_ids.length; i++)
                {
                    for(let j = 0; j < specialityNames.data.length; j++)
                    {
                        if(specialityNames.data[j]['id'] == speciality_ids[i]){
                            subjects_temp.push(specialityNames.data[j]['descricao'])
                        }
                    }
                }
                this.subjects = subjects_temp
            } else {
                alert('Falha no login. Verifique suas credenciais.');
            }
        }
}
</script>

<style scoped>
    ul.subject-list{
        list-style: none;
        align-items: flex-start;
        display: inline-flex;
        width: 100%;
    }
    ul.subject-list li.subject-item{
        padding: 7px 0px;
        border-radius: 4px;
        margin-inline: 5px;
        margin-bottom: 5px;
        color: var(--highlight-600, #803900);
        background: var(--highlight-50, #FFF8F2);
        width: 90%;
        height: fit-content;
        text-align: center;
}
</style>
