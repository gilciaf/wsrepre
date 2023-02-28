<template>
  <div class="main">
    <v-carousel cycle class="carousel">
      <v-carousel-item       
        v-for="(item, i) in items"
        :key="i"
        :src="item.src"
        reverse-transition="fade-transition"
        transition="fade-transition"
      ></v-carousel-item>
    </v-carousel>
  </div>
</template>

<script>
export default {
  data() {
    return {
      items: [
        {
          src: require("./../assets/img/ws/BannerBLS.jpg"),
        },
        {
          src: require("./../assets/img/ws/BannerUnivet.jpg"),
        },
        {
          src: require("./../assets/img/ws/bannerValcan.jpg"),
        },
        {
          src: require("./../assets/img/ws/bannerBrascamp.jpeg"),
        },
        {
          src: require("./../assets/img/ws/bannerKsn.jpeg"),
        },
        {
          src: require("./../assets/img/ws/athenas.jpeg"),
        },
        {
          src: require("./../assets/img/ws/BannerSteelflex.jpg"),
        },
        {
          src: require("./../assets/img/ws/BannerBracol.jpg"),
        },
        {
          src: require("./../assets/img/ws/BannerFujiwara.jpg"),
        },
      ],
    };
  },
};
</script>

<style lang="scss" scoped>
@media screen and (max-width: 412px) {
  .main {
    width: 400px;    
  }
}
</style>