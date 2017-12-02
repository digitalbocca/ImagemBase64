# ImagemBase64 #
## v3.1.0 ##

> Trabalha com imagens usando base64.

[![forthebadge](http://forthebadge.com/images/badges/contains-cat-gifs.svg)](http://forthebadge.com)
[![forthebadge](http://forthebadge.com/images/badges/uses-badges.svg)](http://forthebadge.com)
[![forthebadge](http://forthebadge.com/images/badges/contains-technical-debt.svg)](http://forthebadge.com)
[![forthebadge](http://forthebadge.com/images/badges/built-by-developers.svg)](http://forthebadge.com)

---

## Exemplo ##

https://digitalbocca.github.io/ImagemBase64/

---

## HTML e Javascript ##

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

## LICENÇA ##

MIT

---

> Este código tem finalidade didática e não deve ser usado em produção.

> Os códigos não seguem nenhum padrão de codificação, servindo apenas para simular o funcionamento.

> O objetivo é sugerir formas de usar base64 para imagens na prática.

> Envie sua sugestão ou correção.

> Obrigado.
