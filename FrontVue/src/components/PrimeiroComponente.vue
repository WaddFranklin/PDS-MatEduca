<template>
    <div>
        <h1>Hello Vue</h1>
        <p>{{ nome }}</p>
        <p>{{ message }}</p>
    </div>
  
</template>

<script>
export default {
    name: 'PrimeiroComponente',
    data(){
        return{
            nome: 'Rodrigo',
            message: 'Olá'
        }
    }
}
</script>