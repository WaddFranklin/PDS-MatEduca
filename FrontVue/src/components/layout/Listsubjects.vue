<template>
  <ul class="subject-list">
    <li class="subject-item" v-for="(subject, index) in subjects" :key="index">{{ subject }}</li>
  </ul>
</template>

<script>
export default {

    data(){
        return{
            subjects: ['Álgebra', 'Geometria', 'Equação do 2º grau'],
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
    li.subject-item{
        padding: 5px 0px;
        border-radius: 4px;
        align-items: flex-start;
        margin-inline: 5px;
        margin-bottom: 5px;
        color: var(--highlight-600, #803900);
        background: var(--highlight-50, #FFF8F2);
        width: 90%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;

}
</style>
