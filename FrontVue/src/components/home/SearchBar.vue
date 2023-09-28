<template>
<div class="container-conjunto">

    <div id="divider-search">
        <div class="title">
            <h1>Ensino personalizado do <span>seu jeito</span> e <span>no seu tempo</span>.</h1>
        </div>
        <div class="container-search">
            <form action="" id="search-form">
                        <input name = "search" type="text" class="form-control" id ="search-input" placeholder="Pesquisar professores ou assunto...">
                        <div class="filter-container">
                            <label for="Filtro">Filtrar por </label>
                            <button type = "submit" class="filter-buttons" id = "Assunto">Assunto</button>
                            <button type = "submit" class="filter-buttons" >Disponibilidade</button>
                        </div>
            </form>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name:'SearchBar'
}
</script>

<style>
    .container-conjunto{
        display: flex;
    }
    #divider-search{
        display: flex;
        flex-wrap: wrap;
        margin: 0px auto;
    }
    .container-search{
        margin: 0px auto;
        width: 100%;
        align-items: center;
        text-align: center;
    }
    .title{

        width: 1860px;
        background: var(--primary-50, #F2F6FB);
        height: 25vh;
    }
    .title h1{

        color: var(--primary-600, #002551);
        text-align: center;
        font-family: Helvetica Neue;
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: 130%;
        width: 450px;
        margin: 70px auto;

    }
    .title span{

        color: var(--neutral-white, #FFF);
        font-family: Helvetica Neue;
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: 130%;
        background-color: orangered;
    }
    .filter-container{
        margin-top: 30px;
    }
    .filter-container label{
        margin-left: 10px;
    }
    .filter-buttons{
        margin: 20px 5px;
        border-radius: 20px;
        border: 1px solid rgb(208, 203, 203);
        text-align: center;
        font-size: 1.09em;
        background-color: transparent;
        width: 8%;
        padding: auto 10px;
        height: 4vh;

    }
    #Assunto{
        width: 6%;
    }
    #search-input{

        display: flex;
        position: absolute;
        top: 325px;
        left: 300px;
        width: 65%;
        height: 2vh;
        padding: 24px;
        align-items: center;
        margin: 0px auto;
        gap: 8px;
        background: #FFF;
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z'/%3E%3Cpath d='M0 0h24v24H0z' fill='none'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-size: 36px 36px;
        background-position: 97% center;
        border-radius: 8px;
        border-style: none;
        font-size: 18px;
        box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.12);
    }
</style>
