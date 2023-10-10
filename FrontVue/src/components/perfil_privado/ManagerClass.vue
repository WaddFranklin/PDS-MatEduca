<template>
  <section class="manager-class-section">
    <h1 class="title-section">Gerenciar Aulas</h1>
    <Divider/>
  </section>
</template>

<script>
import Divider from '../layout/Divider.vue'
export default {
  components: { Divider },

}
</script>

<style>

p.title-section{
    color: var(--primary-500, #003773);
    font-family: Helvetica Neue;
    font-size: 24px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}
</style>
