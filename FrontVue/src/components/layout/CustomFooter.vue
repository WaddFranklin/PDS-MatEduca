<template>
    <footer>
        <div class="rodape-up">
        <h3>MatEduca</h3>

            <div class = "rodape-up-right">

                <a href="/">Professores</a>
                <a href="/">Política de privacidade</a>
            </div>
        </div>

        <divider/>

        <div class="rodape-down">
            <p>Todos os direitos reservados &copy;</p>
            <p>2023</p>
        </div>
    </footer>
</template>

<script>
import Divider from './Divider.vue'
export default {
  components: { Divider },
    name:'CustomFooter'
}
</script>

<style>
    footer {
        text-align: left;
        background: var(--highlight-50, #FFF8F2);
        padding: 40px;
        width: 97%;
        height: 100%;
        flex-shrink: 0;
        margin-top: 30px;
    }

    footer p {
        margin-bottom: 0;
        color: var(--highlight-600, #803900);
        font-family: Helvetica Neue;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    .rodape-up{
        padding-left: 70px;
        padding-bottom: 40px;
        display: flex;
        gap: 100px;
    }
    .rodape-up-right{
        display: flex;
        flex-direction: column;
        padding-left: 130px;
    }
    .rodape-up-right a{
        color: var(--highlight-600, #803900);
        font-family: Helvetica Neue;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    .rodape-up-right a{
        padding: 15px 0px;
    }
    .rodape-up h3{
        color: var(--highlight-600, #803900);
        font-family: Helvetica Neue;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }
    .rodape-down{
        justify-content: space-between;
        display: flex;
        padding-left: 30px;
    }
    .rodape-down p{
        margin: 10px 0px;
    }
</style>