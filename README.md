# ImagemBase64

## v4.1.0

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

Exemplo usando JS (Usei Zepto para fazer mais rápido, mas use como quiser):

Criei uma div com o id imagem no html:

```html
<div id="imagem"></div>
```

Adicionei esse código Zepto

```javascript
//INICIO DO CODIGO ZEPTO
$(document).ready(() => {
  //GET PARA A API
  $.getJSON('https://api.jsonbin.io/b/5a2311793cc482364837a119', resposta => {
    // CRIA UM OBJETO IMAGEM
    let imagem = new Image()
    // COLOCA O JSON RECEBIDO NO SRC DO OBJETO
    imagem.src = 'data:image/png;base64,' + resposta.imagem
    // INSERE A IMAGEM NA DIV
    $('#imagem').append(imagem)
    // APROVEITE PARA ADICIONAR AS CLASSES CSS SE PRECISAR
    $('#imagem > img').addClass('img-fluid')
    // NÃO ESQUEÇA DE DEFINIR UM ALT PARA SUA IMAGEM
    $('#imagem > img').attr("alt","Logo EDB 2017")
  })
})
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
