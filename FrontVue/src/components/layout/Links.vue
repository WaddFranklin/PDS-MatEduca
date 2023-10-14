<template>
  <section class = "Informations-about">
    <div class="links">
        <router-link to="/" style="text-decoration: none; color: black;">
            <p>{{ base }}</p>
        </router-link>
        <p>></p>
        <p>{{ current }}</p>
    </div>
</section>
</template>

<script>
export default {
    props: ['current'],
    data(){
        return{
            base: 'Página Inicial',
            current: this.current
        }
    }
}
</script>

<style>
section.informations-about{
    display: flex;
}
.p {
    padding-right: 10px;
    
}
div.links{
    display: flex;
    margin: 20px;
    flex-direction: row;
    flex-wrap: wrap;
    margin-left: 8%;
}
.links p{
    font-family: Helvetica Neue;
    font-weight: 400;
    margin: 5px;
}
</style>