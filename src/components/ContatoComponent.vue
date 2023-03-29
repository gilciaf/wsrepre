<template>
  <div class="main">
    <div class="ws">
      <v-card elevation="7" class="card-contato">
        <div class="contato">
          <img src="../assets/img/footer/whatsapp-3.svg" width="20px" alt="whatsapp" />
          <h4 class="mt-2">(35) 99198-7800</h4>
        </div>
        <div class="contato">
          <img src="../assets/img/footer/email-3.svg" width="20px" alt="whatsapp" />
          <h4 class="mt-2">vendas@wsepi.com.br</h4>
        </div>
        <div class="contato">
          <img src="../assets/img/footer/email-3.svg" width="20px" alt="whatsapp" />
          <h4 class="mt-2">sac@wsepi.com.br</h4>
        </div>
        <div class="contato">
          <img src="../assets/img/footer/skype.svg" width="20px" alt="whatsapp" />
          <h4 class="mt-2">ws.epi.uniformes</h4>
        </div>
      </v-card>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
.main {
  margin-top: 10%;
  padding: 1.4%;
  display: flex;
  flex-direction: column;
  align-items: center;
  .ws {
    width: 28%;
    .card-contato {
      padding: 2.8% 0%;
      .contato {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        img {
          width: 10%;
        }
      }
    }
  }
}
@media screen and(max-width: 442px) {
  .main {
     margin-top: 1%;
      .ws{
          width: 100%;
      }
  }
}
</style>
