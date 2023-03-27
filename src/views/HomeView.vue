<template>
  <div>
    <BannerComponent class="banner" />
    <CarrosselComponent2 class="carousel"/>
    <TextosDescritivos />
    <v-row class="marcas">
       <img 
            v-for="(logo, index) in paths" :key="index"
            :src="'../img/ws/' + logo"
            width="50%"
            alt="logos"
          />
    </v-row>
    <FooterWs />
  </div>
</template>

<script>
import BannerComponent from "./../components/BannerComponent";
import CarrosselComponent2 from "./../components/CarrosselComponent2";
import TextosDescritivos from "./../components/TextosDescritivos";
import FooterWs from "./../components/FooterWs";
export default {
  name: "HomeView",
  components: {
    BannerComponent,
    CarrosselComponent2,
    TextosDescritivos,
    FooterWs
  },
  data(){
    return {
      paths:[
            'bracol.svg', 
            'fujiwara.png', 
            'steelflex.png', 
            'moov.svg', 
            'maxxi.png', 
            'bustest.png',
            'ecoboots.svg',
            'volkdobrasil.png',
            'brascamp.png',
            'henlau.png',
            'KSN.png',
            'valcan.png',
            'BLS.png',
            'univet.png',
            'athenas.svg'
            
            ]
    }
  }
};
</script>
<style lang="scss" scoped>
   .banner{
     display: none;
   }
   .marcas {
     padding: 4%;
     width: 100%;
     display: grid;
     gap:2rem;
     grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
     margin-left: 3.5%;     
   }
 @media screen and (max-width:412px) {
   .banner{
     display: block;
   }
   .marcas{
     grid-template-columns: 1fr 1fr 1fr;
     padding-top: 7%;
   }
   .carousel{
     display: none;
   }
 }
</style>
