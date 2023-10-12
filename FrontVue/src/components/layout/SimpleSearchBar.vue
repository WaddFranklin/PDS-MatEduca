<template>
    <div class="container-search">
        <form action="" class="search-form simple">
            <input name = "search-class" type="text" class="simple-search-bar"  placeholder="Pesquisar Aula...">
            <div class="filter-container-simple">
                <button type = "submit" class="filter-buttons " >Assunto</button>
                <button type = "submit" class="filter-buttons " >Data</button>
                <button type = "submit" class="filter-buttons " >Status</button>

            </div>
        </form>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>
.form-search .simple{
    display: inline-flex;
}
.container-search .simple-search-bar{
    width: 50%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    height: 2vh;
    padding: 20px;
    margin: 20px 0px;
    align-items: center;

    gap: 8px;
    border-radius: 8px;
    border-style: none;
    background: #F9F9F9;
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z'/%3E%3Cpath d='M0 0h24v24H0z' fill='none'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-size: 36px 36px;
    background-position: 97% center;

    font-size: 16px;
}
.simple-search-bar::placeholder{
    color: #1E1E1E;
    font-family: Helvetica Neue;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;

    opacity: 0.3;
}
.filter-container-simple{
    display: flex;
    position: relative;
    flex-direction: row;
    flex-wrap: wrap;
    width: 50%;
}
.filter-container-simple button{
    width: 15%;
}
</style>
