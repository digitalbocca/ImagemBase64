# ImagemBase64 #

Entrega uma imagem em base64.
Recebendo um parâmetro "json=true" no GET ele retorna um JSON, senão retorna a imagem.

[![forthebadge](http://forthebadge.com/images/badges/contains-cat-gifs.svg)](http://forthebadge.com)
[![forthebadge](http://forthebadge.com/images/badges/uses-badges.svg)](http://forthebadge.com)
[![forthebadge](http://forthebadge.com/images/badges/contains-technical-debt.svg)](http://forthebadge.com)
[![forthebadge](http://forthebadge.com/images/badges/built-by-developers.svg)](http://forthebadge.com)

---

## Exemplo ##

http://estudiodigitalbocca.com.br/labs/ImagemBase64/

---

## Usando em PHP ##

Entre diretamente no arquivo para ver a imagem.

`http://localhost/logo.php`

**Ex:**
https://estudiodigitalbocca.com.br/labs/ImagemBase64/logo.php

Ou faça um GET para receber o json.

`http://localhost/logo.php?json=true`

**Ex:**
https://estudiodigitalbocca.com.br/labs/ImagemBase64/logo.php?json=true

Simule um erro de parâmetro incorreto.

`http://localhost/logo.php?json=batatinha`

**Ex:**
https://estudiodigitalbocca.com.br/labs/ImagemBase64/logo.php?json=batatinha

---

## HTML e PHP ##

Use diretamente no HTML.

```html
<img src='caminho/do/arquivo/logo.php'>
```

**Ex:**
https://estudiodigitalbocca.com.br/labs/ImagemBase64/htmlpuro.html

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

> Este código tem somente finalidade didática e não deve ser usado em produção.

> O código php não segue nenhum padrão, servindo apenas para simular o funcionamento.

> O objetivo é sugerir formas de usar base64 para imagens na prática.

> Obrigado.
