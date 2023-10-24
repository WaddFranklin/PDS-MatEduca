<template>
    <div>

        <div class="bg-image perfil-professor">
        </div>
        <section class = "box-image-perfil">
            <img src="../../assets/img/Avatar.png" alt="Imagem do professor" class="image-perfil">
        </section>
    </div>
</template>

<script>
export default {

}
</script>

<style>
    div.bg-image.perfil-professor{
    width: 100%;
    height: 368px;
    background-image: url("../../assets/img/BackGround.png");
    background-repeat: no-repeat;
    background-size: 100%;
    flex-shrink: 0;
    display: flex;
}
.box-image-perfil{
    display: flex;
    width: 234px;
    height: 251px;
    background-color: white;
    border-radius: 8px;
    flex-shrink: 0;
    margin-left: 20px;
    position: absolute;
    top: 35%;
    left: 10%;
    text-align: center;
}
.image-perfil{

    width: 95%;
    height: 233px;
    border-radius: 8px;
    flex-shrink: 0;
    padding: 5px 5px;
}
</style>
