
<template>
   <header>
        <div class="container-header">
            <navbar class="navbar" id="navbar">
                <a href="/" id="logo">MatEduca</a>
                 <ul class="navs-links">
                    <li class="navs-items">
                        <a href="/" class="nav-link">Professores</a>
                    </li>
                    <li class="navs-items">
                        <a href="/help" class="nav-link">Como Funciona</a>
                    </li>
                    <div class="vertical-divider"></div>
                    <li class="navs-items">
                        <a href="/login" class="nav-link">Entrar</a>
                    </li>
                    <li class="navs-items">
                        <a href="/cadastro" id="cadastro" class="nav-link">Cadastrar-se</a>
                    </li>
                </ul>
            </navbar>
        </div>
    </header>
</template>

<script>
export default {
    name: 'CustomNavBar',
}
</script>

<style>

*{
    margin: 0;
    padding: 0;
}
body{
    height: 100%;
    overflow-x: hidden;
}
header{
    width: 98%;
}
.container-header{
    display: flex;
    width: 100%;
    padding: 15px 35px;
    justify-content: center;
    align-items: center;
    gap: 537px;
    height: 100px;
    background: var(--primary-50, #F2F6FB);
}
#navbar{
    display: flex;
    width: 100%;
    justify-content: space-between;
    align-items: center;
    flex-shrink: 0;
    height: 2vh;
}
#navbar ul{
    list-style: none;
    display: flex;
    align-items: center;
    gap: 12px;
    margin-right: 9px;
}
#navbar li{
    padding: 0px 10px;
}
.nav-link{
    text-decoration: none;
    color: var(--primary-400, #054A91);
    font-family: Helvetica Neue;
    font-size: 17px;
    font-style: normal;
    line-height: normal;
}
.active{
    font-weight: 900;
}
#logo{
    color: var(--primary-500, #003773);
    font-family: Helvetica Neue;
    font-size: 24px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    text-decoration: none;
    padding-left: 70px;
}
.vertical-divider{
    width: 1px;
    height: 20px;
    background-color: #000;
    margin: 7px 20px
}
#cadastro{

    border: 1px solid #E1E1E1; ;
    padding: 7px;
}

#cadastro:hover{

    background-color: #054A91;
    color: #F2F6FB;
    transition: 0.5s;
}
</style>
