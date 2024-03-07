//importando as variaveis do formulas.js
const { nomeclatura_inicial } = require("./formulas");
//criando o carbono base
class Carbono {
  constructor(onde_liga , ligas = 4) {
    this.ligas = ligas;
    this.onde_liga = onde_liga;
    // this.tipo_de_liga = tipo_de_liga;
    this.carbono_ante;
    this.carbono_pos;
    this.hidrogenio;
    this.atualizarPosicoes();
  }
  // Atualiza as posições dos carbonos
  atualizarPosicoes() {
    if (this.onde_liga === 1) {
      this.carbono_ante = 0;
      this.carbono_pos = 2;
    } else if (this.onde_liga === 10) {
      this.carbono_ante = 9;
      this.carbono_pos = 0;
    } else {
      this.carbono_ante = this.onde_liga - 1;
      this.carbono_pos = this.onde_liga + 1;
    }
  }

}
var cadeia_de_carbonos = [];

var testeCarbono = new Carbono(2);
console.log(testeCarbono);
