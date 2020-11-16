'use strict'

// IMPORTAR O AXIOS PARA FAZER A CHAMADA HTTP
import axios from 'axios'

// INÍCIO DA EXECUÇÃO
window.onload = async () => {
  try {
    // GET PARA A API
    const data = (await axios.get('https://api.npoint.io/ebb9a70a207e8a394ae5')).data
    // CRIA UM OBJETO IMAGEM
    const imagem = new Image()
    // COLOCA A DIV IMAGEM EM UMA VARIAVEL
    const divImagem = document.querySelector('#imagem')
    // COLOCA O JSON RECEBIDO NO SRC DO OBJETO
    imagem.src = 'data:image/png;base64,' + data.imagem
    // INSERE A IMAGEM NA DIV
    divImagem.append(imagem)
    // APROVEITE PARA ADICIONAR AS CLASSES CSS SE PRECISAR
    divImagem.querySelector('img').classList.add('img-fluid')
    // NÃO ESQUEÇA DE DEFINIR UM ALT PARA SUA IMAGEM
    divImagem.querySelector('img').setAttribute('alt', 'Logo EDB 2020')
  } catch (e) {
    // CASO OCORRA UM ERRO TRATAREMOS ELE AQUI
    console.log(e.message)
  }
}
