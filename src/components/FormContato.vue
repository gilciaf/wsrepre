<template>
  <div class="main">
    <div class="form">
      <h4>Mande-nos sua mensagem</h4>
      <form method="POST" action="https://wsepi.com.br/SendMail.php">
        <v-text-field
          label="Nome:"
          type="text"
          name="nome"
          placeholder="Seu nome"
        />

        <v-text-field
          label="Email:"
          type="text"
          name="email"
          placeholder="Seu e-mail"
        />
        <v-text-field
          label="Fone:"
          type="text"
          name="fone"
          placeholder="Seu e-mail"
        />

        <v-textarea label="Sua Mensagem:" name="message" row="6" class="message"></v-textarea>
        <v-btn class="primary" type="submit">Enviar</v-btn>
      </form>
    </div>
    <div class="ws">
      <h3 class="mb-3">Outras opções para contato:</h3>
      <v-card elevation="7" class="card-contato">
        <h3 style="text-align: center; margin-top: 1.4%">
          Vagner - Junior - Amanda - Julia
        </h3>
        <div class="contato">
          <img
            src="../assets/img/footer/whatsapp-3.svg"
            width="20px"
            alt="whatsapp"
          />
          <h4 class="mt-2">(35) 99198-7800</h4>
        </div>
        <div class="contato">
          <img
            src="../assets/img/footer/email-3.svg"
            width="20px"
            alt="whatsapp"
          />
          <h4 class="mt-2">vendas@wsepi.com.br</h4>
        </div>
        <div class="contato">
          <img
            src="../assets/img/footer/email-3.svg"
            width="20px"
            alt="whatsapp"
          />
          <h4 class="mt-2">contato@wsepi.com.br</h4>
        </div>
        <div class="contato">
          <img
            src="../assets/img/footer/email-3.svg"
            width="20px"
            alt="whatsapp"
          />
          <h4 class="mt-2">sac@wsepi.com.br</h4>
        </div>
        <div class="contato">
          <img
            src="../assets/img/footer/skype.svg"
            width="20px"
            alt="whatsapp"
          />
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
  width: 100%;
  margin-top: 1%;
  padding: 1.4% 3.5%;
  display: flex;
  justify-content: center;
  gap: 3.5rem;
  align-items: center;
  .form {
    width: 35%;
    padding: 1.4%;
    form {
      display: flex;
      flex-direction: column;
      v-text-field {
        background-color: #cf0000;
      }
      .message {
        background-color: #e9e9e9;
        padding: 1%;
      }
      .btn {
        width: 30%;
        font-size: 1.14rem;
        font-weight: 800;
        color: white;
      }
    }
  }
  .ws {
    width: 28%;
    height: 35%;
    .card-contato {
      height: 360px;
      padding: 7% 0%;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      .contato {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        img {
          width: 10%;
        }
        .form {
          width: 100%;
        }
        .ws {
          width: 100%;
        }
      }
    }
  }
}

@media screen and (max-width: 442px) {
  .main {
    margin-top:4%;
    flex-direction: column;
    .form {
      width: 100%;
      text-align: center;
      h4 {
        font-size: 1.4rem;
        color:#404040;
      }
    }
    .ws {
      width: 100%;
      margin-top: -14%;
      text-align: center;
       h4 {
        font-size: 1.4rem;
        color: #3d3c3c;
      }
    }
  }
}
</style>
