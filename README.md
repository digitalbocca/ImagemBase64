<p align="center">
  <img src="https://estudiodigitalbocca.com.br/edb-logo.svg" width="200px">
  <p align="center">Ultima Atualização na v6.0.0</p>
  <h1 align="center">ImagemBase64</h1>
  <h4 align="center">
    Trabalha com imagens usando Base64
  </h4>
  <p align="center">
    <img src="https://badgen.net/badge/version/v6.0.0/orange">
    <a href="https://codeclimate.com/github/digitalbocca/ImagemBase64/maintainability">
      <img src="https://api.codeclimate.com/v1/badges/36b4c597ca9797fe54ab/maintainability">
    </a>
    <a href="https://standardjs.com">
      <img src="https://img.shields.io/badge/code_style-standard-brightgreen.svg">
    </a>
    <a href="https://estudiodigitalbocca.com.br">
      <img src="https://badgen.net/badge/produto/EDB/f19b2c">
    </a>
    <a href="https://digitalbocca.github.io/ImagemBase64">
      <img src="https://badgen.net/github/license/digitalbocca/ImagemBase64">
    </a>
  </p>
  <p align="center">
    <a href="https://github.com/standard/standard">
      <img src="https://cdn.rawgit.com/standard/standard/master/badge.svg">
    </a>
  </p>
  <p align="center">
    <a href="https://forthebadge.com">
      <img src="https://forthebadge.com/images/badges/built-by-developers.svg">
    </a>
  </p>
  <p align="center">(c)2016-2022 - Estúdio Digital Bocca</p>
</p>

---

# ImagemBase64 - README

---

## Exemplo

<https://digitalbocca.github.io/ImagemBase64/>

---

## HTML e Javascript

Exemplo usando JS (Usei axios para fazer mais rápido, mas use como quiser):

Criei uma div com o id imagem no html:

```html
<div id="imagem"></div>
```

Adicionei esse código Javascript

```javascript
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
    // COLOCA A DIV IMAGEM EM UMA VARIÁVEL
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
```

## REGISTRO DE ALTERAÇÕES

Veja no arquivo [CHANGELOG](CHANGELOG.md)

## LICENÇA

MIT

---

> Este código tem finalidade didática e não deve ser usado em produção.
>
> Os códigos não seguem nenhum padrão de codificação, servindo apenas para simular o funcionamento.
>
> O objetivo é sugerir formas de usar base64 para imagens na prática.
>
> Envie sua sugestão ou correção.
>
> Obrigado.
