# ImagemBase64 #
## v2.6.0 ##

# ATENÇÃO: REMOVIDO O SUPORTE PARA PHP #
## Estamos Migrando nossa Plataforma ##

> Trabalha com imagens usando base64.

[![forthebadge](http://forthebadge.com/images/badges/contains-cat-gifs.svg)](http://forthebadge.com)
[![forthebadge](http://forthebadge.com/images/badges/uses-badges.svg)](http://forthebadge.com)
[![forthebadge](http://forthebadge.com/images/badges/contains-technical-debt.svg)](http://forthebadge.com)
[![forthebadge](http://forthebadge.com/images/badges/built-by-developers.svg)](http://forthebadge.com)

---

## Exemplo ##

(Link para a v2.5.0 - Estamos mudando nossa plataforma)

http://estudiodigitalbocca.com.br/labs/ImagemBase64/

---

## HTML e Javascript ##

Exemplo usando JS (Usei Jquery para fazer mais rápido, mas use como quiser):

Criei uma div com o id imagem no html:

```html
<div id="imagem"></div>
```

Adicionei esse código Jquery

```javascript
//INICIO DO CODIGO JQUERY
$(document).ready(function(){
  //GET PASSANDO O PARAMETRO JSON:TRUE
  $.get("logo.php",{json: "true"})
  //QUANDO RECEBER A RESPOSTA
  .done(function(resposta){
    //CRIA UM OBJETO IMAGEM
    var imagem = new Image();
    //COLOCA O JSON RECEBIDO NO SRC DO OBJETO
    imagem.src = 'data:image/png;base64,'+resposta.imagem;
    //INSERE A IMAGEM NA DIV
    $('#imagem').append(imagem);
    //APROVEITE PARA ADICIONAR AS CLASSES CSS SE PRECISAR
    $('#imagem > img').addClass('img-fluid');
    //NÃO ESQUEÇA DE DEFINIR UM ALT PARA SUA IMAGEM
    $('#imagem > img').attr("alt","Logo EDB 2017");
  });
});
```

**Ex:**
https://estudiodigitalbocca.com.br/labs/ImagemBase64/javascript.html

---

## LICENÇA ##

MIT

---

> Este código tem finalidade didática e não deve ser usado em produção.

> Os códigos não seguem nenhum padrão de codificação, servindo apenas para simular o funcionamento.

> O objetivo é sugerir formas de usar base64 para imagens na prática.

> Envie sua sugestão ou correção.

> Obrigado.
