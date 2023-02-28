vue
<template>
  <div class="main">
    <div class="linha"></div>
    <div class="extrutura">
      <div class="address">
        <div class="logo">
          <img src="../assets/img/ws/WS-logo.svg" width="88%" alt="Logo WS" />
        </div>
        <h3 style="color: white">WS Representações</h3>
        <h4>Rua Adolfo Fantozzi, 490</h4>
        <h4>Bairro Santa Angela</h4>
        <h4>Cep: 37701-294 - Poços de Caldas MG</h4>
      </div>
      <div class="vertical-line"></div>
      <div class="social-medias">
        <a href="https://www.facebook.com/wsrepresentacao1/">
          <img
            src="../assets/img/footer/facebook.svg"
            width="40px"
            class="ml-2"
            alt="Facebook"
          />
        </a>
        <a href="https://www.instagram.com/ws_representacoes_epi/">
          <img
            src="../assets/img/footer/InstagramWhite.svg"
            width="40px"
            class="ml-4"
            alt="Facebook"
          />
        </a>
      </div>
    </div>
    <div class="linha" style="margin-top: 4%"></div>
    <div class="developer" style="color: grey">
      <h6>Desenvolvimento Site: Tinellus Serviços Digitais</h6>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
.main {
  background-color: #000;
  padding: 2.8% 1.4% 1% 1.4%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  .linha {
    height: 1px;
    width: 100%;
    background-color: #cf0000;
  }
  .extrutura {
    display: flex;
    gap: 3rem;
    justify-content: space-between;
    align-items: center;
    margin-top: 4%;
    .social-medias {
      background-color: #000;
      padding: 3.5% 1.4% 1% 1.4%;
      display: flex;
      justify-content: center;
      gap: 2rem;
    }

    .vertical-line {
      min-height: 100%;
      min-width: 0.1%;
      background-color: white;
      color: white;
    }
    .address {
      color: white;
      .logo {
        background-color: white;
        padding: 2%;
        width: 28%;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
      }
    }
  }
  .developer {
    margin-top: 4%;
  }
}
@media screen and(max-width:412px) {
  .main {
    .extrutura {
      flex-direction: column;
      gap: 1rem;
      .social-medias {
        background-color: #000;
        padding: 1.4% 1.4% 1% 1.4%;
        display: flex;
        justify-content: center;
        gap: 2rem;
      }
    }
  }
}
</style>
