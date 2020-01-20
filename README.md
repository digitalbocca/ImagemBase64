# ImagemBase64

## v5.0.3

> Trabalha com imagens usando base64.

[![Maintainability](https://api.codeclimate.com/v1/badges/36b4c597ca9797fe54ab/maintainability)](https://codeclimate.com/github/digitalbocca/ImagemBase64/maintainability)
[![JavaScript Style Guide](https://img.shields.io/badge/code_style-standard-brightgreen.svg)](https://standardjs.com)
[![EDB](https://badgen.net/badge/produto/EDB/f19b2c)](https://estudiodigitalbocca.com.br)
[![GHL](https://badgen.net/github/license/digitalbocca/ImagemBase64)](https://digitalbocca.github.io/ImagemBase64)

[![forthebadge](https://forthebadge.com/images/badges/contains-cat-gifs.svg)](https://forthebadge.com)
[![forthebadge](https://forthebadge.com/images/badges/uses-badges.svg)](https://forthebadge.com)
[![forthebadge](https://forthebadge.com/images/badges/contains-technical-debt.svg)](https://forthebadge.com)
[![forthebadge](https://forthebadge.com/images/badges/built-by-developers.svg)](https://forthebadge.com)

[![JavaScript Style Guide](https://cdn.rawgit.com/standard/standard/master/badge.svg)](https://github.com/standard/standard)

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
    const data = (await axios.get('https://api.jsonbin.io/b/5a2311793cc482364837a119')).data
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
```

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
