<template>
  <div class="main">
    <div class="side"></div>
    <div class="text">
      <div class="topo">
        <h2>Sobre Nós:</h2>
        <img src="../assets/img/ws/WS-logo.svg" alt="Logo">
      </div>
      <p>
        Especializada no mercado de Equipamentos de Proteção Individual( EPI ) a
        WS Representações atua a 18 anos na comercialização dos maiores
        fabricantes e importadores de proteção, saúde e segurança do trabalho.
      </p>
      <p>
        Nos orgulhamos em saber que Representamos as melhores marcas com preços
        competitivos, visando sempre o melhor atendimento!
      </p>
      <p>
        Nossos clientes contam com suporte interno e externo, desenvolvendo
        novos produtos, treinamento aos usuários e equipes comerciais, suporte
        de campo e toda assistência técnica dos nossos produtos.
      </p>
      <p>
        É por isso que a WS Reprentações possui reconhecimento no mercado em que
        atua e sente-se na obrigação de retribui-lo em forma de Comprometimento
        com seus parceiros!
      </p>
      <h3>VISÃO</h3>
      <p>
        Ser reconhecido pelo atendimento e qualidade das nossas marcas,produtos
        e serviços, garantindo a satisfação dos nossos clientes.
      </p>
      <h3>MISSÃO</h3>
      <p>
        Proteger e educar pessoas todos os dias fornecendo EPI’s de alta
        performance e soluções inovadoras em Proteção e Saude no trabalho.
      </p>
      <h3>VALORES</h3>
      <p>Simplicidade nos atendimentos, através de respeitos aos negócios</p>
      <p>Transparência, nas ações e relações aos Parceiros.</p>
      <p>Proximidade, fortalecendo as relações de longo prazo.</p>
      <p>
        Resultado, focamos no sucesso das negociações na união e transparência
        de nossas ações.
      </p>
    </div>
    <div class="side2"></div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
.main {
  width: 100%;
  display: grid;
  grid-template-columns: 15% 70% 15%;
  h2 {
    font-family: "PT Sans", sans-serif;
    color: #cf0000;
  }
  .text {
    margin-top: 4.2%;
    margin-bottom: 3.5%;
    .topo{
      img{
        width: 28%;
      }
    }
    h3 {
      font-family: "PT Sans", sans-serif;
      color: #cf0000;
    }
    p {
      font-size: 1rem;
    }
  }
  .side {
    height: 100%;
    border-left: solid 14px #cf0000;
  }
  .side2 {
    height: 100%;
    border-right: solid 14px #cf0000;
  }
}
@media screen and (max-width: 412px) {
  .main {
    grid-template-columns: 9% 82% 9%;
  }
}
</style>