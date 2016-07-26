# ImagemBase64

Entrega uma imagem em base64.

Recebendo um par&acirc;metro &quot;json true&quot; no GET ele retorna um JSON, sen&atilde;o retorna a imagem.

#### Exemplo

http://estudiodigitalbocca.com.br/labs/ImagemBase64/

#### Como Usar

Entre diretamente no arquivo para ver a imagem.

`pasta/do/arquivo/logo.php`

Ex:

http://estudiodigitalbocca.com.br/labs/ImagemBase64/logo.php

Ou faça um GET para receber o json.

`pasta/do/arquivo/logo.php?json=true`

Ex:

http://estudiodigitalbocca.com.br/labs/ImagemBase64/logo.php?json=true

Simule um erro de parametro incorreto.

`pasta/do/arquivo/logo.php?json=batatinha`

Ex:

http://estudiodigitalbocca.com.br/labs/ImagemBase64/logo.php?json=batatinha

Use diretamente no HTML.

```html
<img src='pasta/do/arquivo/logo.php'>
```

Ex:

http://estudiodigitalbocca.com.br/labs/ImagemBase64/htmlpuro.html

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
        $('#imagem > img').addClass('img-responsive center-block');
        //NÃO ESQUEÇA DE DEFINIR UM ALT PARA SUA IMAGEM
        $('#imagem > img').attr("alt","Logo EDB 2016");
    });
});
```

Ex:

http://estudiodigitalbocca.com.br/labs/ImagemBase64/javascript.html

> Este código é apenas para fins didáticos e não deve ser usado em produção.
> O código php não segue nenhum padrão, é apenas para simular o funcionamento.
> O objetivo é sugerir formas de usar base64 para imagens na prática.
> Obrigado.