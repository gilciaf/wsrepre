<template>
  <div class="main">
    <div class="linha"></div>
    <h2 class="mt-4">Nossos Produtos:</h2>
    <div class="produtos">
      <ul class="paths" v-for="item in produto" :key="item.id">
        <v-card elevation="4" class="card">
          <img :src="'../img/ws/' + item.path" :width="item.width" alt="" />
          <v-card-title class="title">{{ item.title }}</v-card-title>
          <ul v-for="(texto, key) in item.text" :key="key">
            <li>
              {{ texto }}
            </li>
          </ul>
          <div class="actions">
            <v-btn v-if="item.whatsApp" :href="`${item.whatsApp}`" target="_blank"  class="success ml-3">
              <img
                src="../assets/img/footer/whatsapp.svg"                
                alt="whatsapp"
              />
            </v-btn>
            <div class="phone ml-2" v-if="item.representante">
              <v-icon>mdi-phone-classic</v-icon> {{ item.representante }}
            </div>
            <v-btn id="botaoempresa" :href="`${item.link}`" class="primary mt-3 ml-4">
              Site {{ item.empresa }}
            </v-btn>
          </div>
        </v-card>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      path: "athenas.svg",
      produto: [
        {
          id: 1,
          link: "https://bracol.pro/",
          path: "bracol.svg",
          width: "130px",
          empresa: "Bracol",
          title: "Calçados de Segurança ",
          text: [
            "Botina Mono e Bi-densidade",
            "Botas PVC",
            "Nobuck /Linha Hospitalar",
            "Microfibra",
          ],
          whatsApp: "https://wa.me/553537228416?text=valor%=%Mais informações sobre Bracol",
          representante: "",
        },
        {
          id: 2,
          link: "https://bracol.pro/fujiwara",
          path: "fujiwara.png",
          width: "145px",
          empresa: "Fujiwara",
          title: "Calçados de Segurança ",
          text: [
            "Botina Bi-densidade",
            "Botas PVC",
            "Nobuck /Linha Hospitalar",
            "Microfibra",
          ],
          whatsApp: "https://wa.me/553537228416?text=valor%=%Mais informações sobre fujiwara",
          representante: "",
        },
        {
          id: 3,
          link: "http://www.steelflex.pro/",
          path: "steelflex.png",
          width: "130px",
          empresa: "STEELFLEX",
          title: "Equipamentos de Proteção",
          text: [
            "Capacetes - Coletes RefleXivos",
            "Cintas Ergonomicas",
            "Cintos e talabares",
            "Trava quedas e Acessórios",
          ],
          whatsApp: "https://wa.me/553537228416?text=valor%=%Mais informações sobre steelflex",
          representante: "",
        },
        {
          id: 4,
          link: "https://www.steelflex.pro/filtro/linha-healthcare/ ",
          path: "moov.svg",
          width: "130px",
          empresa: "Moov",
          title: "Calçado Antiderrapante",
          text: ["Linha antiderrapante"],
          whatsApp: "https://wa.me/553537228416?text=valor%=%Mais informações sobre Moov",
          representante: "",
        },
        {
          id: 5,
          link: "https://maisequipamentos.com.br/",
          path: "maxxi.png",
          width: "130px",
          empresa: "Maxxi Royal",
          title: "Proteção Auditiva e Visual",
          text: ["Protetores Plug", "Óculos de Proteção", "Capacete"],
          whatsApp: "https://wa.me/553537228416?text=valor%=%Mais informações sobre Maxxi Royal",
          representante: "",
        },
        {
          id: 6,
          link: "https://www.libus.com.br",
          path: "libus.svg",
          width: "130px",
          empresa: "LIBUS",
          title: "",
          text: ["Capacetes","Protetores Plug", "Abafadores", "Protetores Faciais", " Mascaras de Solda"],
          whatsApp: "https://wa.me/5535991987800?text=valor%=%Mais informações sobre LIBUS",
          representante: "",
        },
        {
          id: 7,
          link: "https://bracol.pro/site/product/search?q=eCOBOOTS+",
          path: "ecoboots.svg",
          width: "130px",
          empresa: "ecoboots",
          title: "Botas",
          text: ["Botas Poliuretano"],
          whatsApp: "https://wa.me/553537228416?text=valor%=%Mais informações sobre ecoboots",
          representante: "",
        },
        {
          id: 8,
          link: "https://volkdobrasil.com.br/",
          path: "volkdobrasil.png",
          width: "130px",
          empresa: "Volk",
          title: "Luvas de Proteção",
          text: [
            "Proteção das Mãos e braços",
            "Descartáveis e Acessórios",
            "Vestimentas de Proteção",
          ],
          whatsApp: "https://wa.me/5535991987800?text=valor%=%Mais informações sobre Volk",
          representante: "",
        },
        {
          id: 9,
          link: "http://www.grupobrascamp.com.br/",
          path: "brascamp.png",
          width: "130px",
          empresa: "Brascamp",
          title: "Artigos Impermeáveis",
          text: ["Capas e conjuntos", "Saneamento / Aventais", "Kit Herbicida"],
          whatsApp: "https://wa.me/5535991987800?text=valor%=%Mais informações sobre Brascamp`",
          representante: "",
        },
        {
          id: 10,
          link: "https://henlau.com.br/",
          path: "henlau.png",
          width: "130px",
          empresa: "Henlau",
          title: "Cremes de Proteção",
          text: [
            "Proteção Solar",
            "Desengraxante - Manutenção Elétrica",
            "Proteção de Metais - Higienização",
            "Concentrado - Repelentes",
          ],
          whatsApp: "https://wa.me/5535988540687?text=valor%=%Mais informações sobre henlau",
          representante: "",
        },
        {
          id: 11,
          link: "https://www.ksn.com.br/",
          path: "KSN.png",
          width: "130px",
          empresa: "KSN",
          title: "Respiradores sem Manutenção",
          text: [
            "Dobráveis e Conchas",
            "Linha Hospitala",
            "Com ou Sem Válvulas "
          ],
          whatsApp: "https://wa.me/5535988540687?text=valor%=%Mais informações sobre KSN`",
          representante: "",
        },
        {
          id: 12,
          link: "https://valcanepi.com.br/",
          path: "valcan.png",
          width: "130px",
          empresa: "Valcan",
          title: "Artigos de Raspa, Vaquete e Lona",
          text: [
            "Luvas / Mangote",
            "Perneiras- Aventais",
            "Blusões, Luvas de Malha",
            "Luvas e Mangotes de Aramida",
          ],
          whatsApp: "https://wa.me/5535991987800?text=valor%=%Mais%informações%sobre%Valcan",
          representante: "",
        },
        {
          id: 13,
          link: "https://www.blsgroup.com/pt/",
          path: "BLS.png",
          width: "130px",
          empresa: "BLS",
          title: "Proteção Respiratória e Reutilizáveis",
          text: [
            "Respiradores Facial e Semi-facial",
            "Cartuchos - Pré Filtros - Filtros",
            "Respiradores Descatáveis",
          ],
          whatsApp: "https://wa.me/553537228416?text=valor%=%Mais informações sobre BLS",
          representante: "",
        },
        {
          id: 14,
          link: "https://www.univet-optic.com.br/",
          path: "univet.png",
          width: "130px",
          empresa: "Univet",
          title: "Tecnologia em Óculos",
          text: [
            "Óculos Graduados",
            "Sala Limpa / Ampla Visão",
            "Óculos de Segurança",
            "Óculos 100% sobreponível",
          ],
          whatsApp: "https://wa.me/553537228416?text=valor%=%Mais informações sobre Univet",
          representante: "",
        },
        {
          id: 15,
          link: "https://athenascintos.com.br/",
          path: "athenas.svg",
          width: "130px",
          empresa: "Athenas",
          title: "Soluções em Altura",
          text: [
            "Cintos de Segurança",
            "Talabartes",
            "Trava Quedas",
            "Acessórios",
          ],
          whatsApp: "https://wa.me/5535988540687?text=valor%=%Mais%informações%sobre%Athenas",
          representante: "",
        },
        {
          id: 16,
          link: "https://www.kdumedical.com.br",
          path: "kdu.png",
          width: "67px",
          empresa: "Kdu",
          title: "Proteção Hospitalar e Descartáveis",
          text: [
            "Avental Descartável",
            "Mascara Tripla Descartável",
            "Macacão Impermeável",
            "Mascara DRY Reutilizável",
          ],
          whatsApp: "https://wa.me/5535988540687?text=valor%=%Mais%informações%sobre%kdu",
          representante: "",
        },
        // {
        //   id: 16,
        //   link: "https://wsepi.com.br/contato",
        //   path: "WS-logo.svg",
        //   width: "300px",
        //   empresa: "WS Repr.",
        //   title: "Temos tudo acima para você",
        //   text: [],
        // },
      ],
    };
  },
};
</script>

<style lang="scss" scoped>
.main {
  width: 100%;
  margin-top: 1%;
  display: flex;
  flex-direction: column;
  align-items: center;
  h2 {
    font-family: "PT Sans", sans-serif;
    color: #c60000;
  }
  .produtos {
    width: 90%;
    display: grid;
    grid-template-columns: 50% 50%;
    flex-wrap: wrap;
    gap: 0.5rem;
    list-style: none;
    justify-content: space-around;
    align-items: center;
    .paths {
      margin-top: 0.7%;
      padding: 1%;
      .card {
        padding:4% 7%;
        height: 377px;
        .title {
          font-size: 17pt;
          color:#cf0000;
          font-weight: 800;
        }
        li {
          font-size: 15pt;
        }
        .actions {
          display: grid;
          grid-template-columns: 1fr 50%;
          margin-top: 4.4%;
          align-items: center;
          margin-bottom: 4px;
          .success{
            max-width: 7%;
            height: 80%;
            img{
              width: 8%;
            }
          }
          .primary {
            font-size: 11pt;
            font-weight: 900;
            cursor: pointer;
            max-width: 70%;
          }
        }
      }
    }
  }
}
@media screen and (max-width: 442px) {
  .main {
    margin-top: 2.1%;
    .produtos {
      grid-template-columns: 100%;
      .paths {
        margin-top: 0.7%;
        padding: 1%;
        .card {
          padding: 2% 1% 1% 2%;
          height: auto;
          .title {
            font-size: 15pt;
            color: red;
            font-weight: 800;
          }
          li {
            font-size: 13pt;
          }
          .actions{
            width: 100%;
            grid-template-columns: 1fr 58%;
            #botaoempresa{
              width: 100%;
              min-width: 100px;
            }            
          }
          .btn {
            font-size: 11pt;
            font-weight: 900;
            cursor: pointer;
          }
        }
      }
    }
  }
}
</style>
