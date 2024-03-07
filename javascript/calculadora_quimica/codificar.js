const { nomeclatura_inicial } = require("./formulas");

class Carbono {
  constructor(fila_carbono, onde_liga =  none, tipo_de_liga = none, ligas = 4) {
    this.ligas = ligas;
    this.fila_carbono = fila_carbono;
    this.onde_liga = onde_liga;
    this.tipo_de_liga = tipo_de_liga;
    this.carbono_ante;
    this.carbono_pos;
    this.hidrogenio;
    this.atualizarPosicoes();
    this.atualizarLigasHidrogenio();
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

  // Atualiza as ligações e o hidrogênio
  atualizarLigasHidrogenio() {
    if (this.fila_carbono === this.onde_liga) {
      switch (this.tipo_de_liga) {
        case 'x1_S':
          this.ligas = 3;
          break;
        case 'x1_D':
          this.ligas = 2;
          break;
        case 'x1_T':
          this.ligas = 1;
          if (this.carbono_ante === 0) {
            this.hidrogenio = 1;
          }
          break;
        default:
          console.error('Não entrou em nenhum padrão registrado, ou deu errado ou ainda precisa ser atualizado');
          break;
      }
    }
  }
}

var testeCarbono = new Carbono(1, 1, 'x1_T');
console.log(testeCarbono);
