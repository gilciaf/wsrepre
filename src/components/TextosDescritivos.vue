<template>
  <div class="main">
    <div class="side"></div>
    <div class="text">
      <h2>WS Representações</h2>
      <p>
        Presente no mercado de proteção individual, a
        <b>WS Representações</b> orgulha-se saber que oferece ao mercados as
        melhores marcas com preços competitivos. Os nossos clientes contam com
        um suporte, desenvolvimento de novos produtos, treinamento ao usuário ,
        suporte de campo e toda assistência técnica dos nossos produtos.
      </p>
      <p>
        É por isso que a <b>WS Representações</b> possui reconhecimento no
        mercado em que atua e sente-se na obrigação de retribuí-lo em forma de
        comprometimento com seus parceiros.
      </p>
      <p>
        Visite também nossas redes sociais e/ou solicite uma visita técnica
        através dos endereços abaixo:
      </p>
    </div>
    <div class="side2"></div>
  </div>
</template>

<script>
export default {
  props: ["textMessage"],
};
</script>
<style lang="scss" scoped>

.main { 
  display: grid;
  grid-template-columns: 1fr 60% 1fr;
  .text {
      margin-top:4%;
      margin-bottom: 2%;
    h2 {
      font-weight: 900;
      color: #cf0000;
    }
    p {
      font-size: 15pt;
      text-indent: 2.1%;
      b {
        color: #cf0000;
      }
    }
  }
  .side{
      height: 100%;
      border-left: solid 14px #ff0000;
  }
  .side2{
      height: 100%;
      border-right: solid 14px #ff0000;
  }
}
@media screen and (max-width: 412px) {
 .main { 
  grid-template-columns: 9% 82% 9%;
  .text {
      margin-top:4%;
      margin-bottom: 2%;
    h2 {
      font-weight: 900;
      color: red;
    }
    p {
      font-size: 13pt;
      text-indent: 2.1%;
      b {
        color: red;
      }
    }
  }
  .side{
      height: 100%;
      border-left: solid 10px tomato;
  }
  .side2{
      height: 100%;
      border-right: solid 10px tomato;
  }
}
}
</style>
