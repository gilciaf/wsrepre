<template>
    <div class="main">
        <router-link class="linkLogo" to="/">
            <img src="../assets/img/ws/WS-logo.svg" class="ml-4 mr-4" alt="logo" />
        </router-link>
        <div class="spacer"></div>
        <div class="menu">
            <router-link class="linkMenu" to="/">Home</router-link>
            <router-link class="linkMenu" to="/products">Produtos</router-link>
            <router-link class="linkMenu" to="/sobre-nos">Sobre Nós</router-link>
            <router-link class="linkMenu" to="/contato">Contato</router-link>
        </div>
        <v-app-bar-nav-icon
            @click="changeMenu"
            large
            class="icon-menu"
        ></v-app-bar-nav-icon>
        <div class="menu2" :class="alter">
            <router-link class="myLink" to="/">Home</router-link>
            <router-link class="myLink" to="/products">Produtos</router-link>
            <router-link class="myLink" to="/sobre-nos">Sobre Nós</router-link>
            <router-link class="myLink" to="/contato">Contato</router-link>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            alter: "",
        };
    },
    methods: {
        changeMenu() {
            this.alter = this.alter === "responsive" ? '' : "responsive"
        },
    },
};
</script>

<style lang="scss" scoped>
.main {
    position: fixed;
    top: 0;
    width: 100%;
    background-color: white;
    z-index: 10;
    box-shadow: 4px 4px rgba($color: #ff0000, $alpha: 0.5);
    display: grid;
    grid-template-columns: 10% 40% 50%;
    .linkLogo {
        margin-top: 1.4%;
        margin-left: 10%;
        img {
            width: 80%;
            margin-top: 1%;
        }
    }
    .icon-menu {
        display: none;
    }
    .menu {
        overflow: hidden;
        color: #333;
        height: 70px;
        width: 100%;
        display: flex;
        .linkMenu { 
            color:#000;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            margin-top: 2.4%;
            margin-left: 7.8%;
            height: 70px;
        }
        a:hover {
            color: tomato;
            border: solid 1px tomato;
            height: 80px;
        }
    }
    .menu2 {
        display: none;
    }
}
.ws-title {
    margin-top: 15%;
    h2 {
        color: red;
    }
}

@media screen and (max-width: 412px) {
    .main {
        width: 100vw;
        height: 50px;
        display: flex;
        flex-direction: column;
        a {
            display: none;
        }
        img {
            display: none;
        }
        .spacer {
            display: none;
        }
        .menu {
            display: none;
        }
        .icon-menu {
            display: block;
        }
        .menu2 {
            margin-top:2%;
            text-align: center;
            width: 100%;
            .myLink {
                margin: 0;
                width: 100vw;
                display: block;
                background-color: #ff0000;
                padding: 7px;
                text-decoration: none;
                color: white;
                font-size: 1.2rem;
                font-weight: 900;
                border-bottom: solid 1px white;
                border-top: solid 1px white;
                // width:300px;
            }
        }
        .responsive {
            display: flex;
            flex-direction: column;
        }

        // .responsive{
        //     display: flex;
        //     flex-direction: column;
        // }
    }
}
</style>
