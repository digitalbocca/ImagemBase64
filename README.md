# ImagemBase64

Entrega uma imagem em base64.

Recebendo um par&acirc;metro &quot;json true&quot; no GET ele retorna um JSON, sen&atilde;o retorna a imagem.

#### Exemplo

url.de.exemplo

####Como Usar

Entre diretamente no arquivo para ver a imagem. Ex:

pasta/do/arquivo/logo.php

Ou faça um GET para receber o json. Ex:

pasta/do/arquivo/logo.php?json=true

Simule um erro de parametro incorreto. Ex:

pasta/do/arquivo/logo.php?json=batatinha

Use diretamente no HTML. Ex:

```html
<img src='pasta/do/arquivo/logo.php'>
```

Exemplo usando JS (Usei Jquery para fazer mais rápido, mas use como quiser):

exemplo jquery