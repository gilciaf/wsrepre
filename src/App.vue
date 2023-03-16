<template>
  <v-app>
    <v-app-bar app color="white" class="menu">
      <div class="d-flex align-center">
        <a href="/" class="link-logo">
          <v-img
            alt="Logo"
            class="shrink mr-2"
            contain
            src="./assets/img/ws/WS-logo.svg"
            transition="scale-transition"
            width="65"
          />
        </a>
      </div>
      <v-app-bar-nav-icon
        @click="changeMenu"
        large
        class="icon-menu"
      ></v-app-bar-nav-icon>
      <v-spacer class="space"></v-spacer>
      <v-btn href="/" text color="grey" class="link">
        <span class="mr-4">Home</span>
      </v-btn>
      <v-btn to="/produtos" text color="grey" class="link">
        <span class="mr-4">Produtos</span>
      </v-btn>
      <v-btn to="/sobre-nos" text color="grey" class="link">
        <span class="mr-4">Sobre Nós</span>
      </v-btn>
      <v-btn to="/contato" text color="grey" class="link">
        <span class="mr-4">Contato</span>
      </v-btn>
    </v-app-bar>
    <!-- Add a navigation bar -->
    <v-navigation-drawer v-model="drawer" absolute temporary>
      <v-list nav dense>
        <v-list-item-group>
          <v-list-item v-for="(item, index) in items" :key="index">
            <router-link
              :to="{ name: item }"
              style="text-decoration: none; color: red"
              class="link-mobile"
            >
              <v-list-item-title                
                style="font-size: 1.25rem"
                @click="tab = index"
                >{{ item }}</v-list-item-title
              >
            </router-link>
          </v-list-item>
        </v-list-item-group>
      </v-list>
    </v-navigation-drawer>

    <v-main>
      <router-view />
    </v-main>
  </v-app>
</template>

<script>
export default {
  name: "App",
  components: {},

  data: () => ({
    // alter: "",
    drawer: false,
    items: ["home", "produtos", "sobre-nós", "contato"],
  }),
  methods: {
    changeMenu() {
      this.drawer = true;
    },
  },
};
</script>
<style lang="scss" scoped>
.menu {
  .icon-menu {
    display: none;
  }
  .menu2 {
    display: none;
  }
}
@media screen and (max-width:412px) {
  .menu {
    .icon-menu {
      display: block;
    }
    .link-logo {
      display: none;
    }
    .space {
      display: none;
    }
    .link {
      display: none;
    }
  }
  .link-mobile {
    font-size: 2.1rem;   
    padding: 7%;
    width: 100%; 
    border: 1px solid black;
    border-radius: 7px;
    text-align: center;   
  }
}
</style>
