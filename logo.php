<?php

/**
 * Arquivo logo.php
 * 
 * Retorna o logotipo em base64 para uma chamada GET em JSON ou Imprime a Imagem
 * 
 * Versão do PHP: 7.0 
 * 
 * @author Gabriel Bertola Bocca <gabriel at estudiodigitalbocca.com.br>
 * @copyright (c) 2016, Estúdio Digital Bocca
 * @version 1.0
 */

/**
 * Se houver um get json retorna seu valor, senão define $json como false
 * 
 * ATENÇÃO: Precisa da versão 7 do PHP, caso esteja usando outra versão troque 
 * por um IF/ELSE ou qualquer estrutura similar
 * 
 * Referência para Null coalescing:
 * http://php.net/manual/pt_BR/language.operators.comparison.php
 */
$json = $_GET['json'] ?? false;

function devolve($json){
        
    /**
     * Transforma letras maiúsculas em minúsculas (Caso seja necessário),
     * verifica se é uma string com o valor "true" e caso seja,
     * define um booleano TRUE
     */
    if(strtolower($json) == 'true'){
        $json = true;
    }
    
    /**
     * Se o valor de $json não for booleano ele dispara uma excessão
     * com uma mensagem informativa sobre como deve ser feito o pedido.
     */
    if(is_bool($json) === false){
        throw new \Exception("O Parametro 'json' precisa ser TRUE (Case Insensitive). Para receber uma imagem não envie o parametro 'json'");
    }
    
    /**
     * Lê a imagem que foi definida para este exemplo
     */
    $imagem = file_get_contents('img/edb-400.png');
    
    /**
     * Transforma a imagem em texto base64
     */
    $encoded = base64_encode($imagem);
    
    /**
     * Verifica se $json é true, monta a resposta e retorna.
     */
    if($json === true){
        $resposta = [
            "imagem" => $encoded
        ];
        
        header('Content-Type: application/json');
        echo json_encode($resposta);
        return;
    }
    
    /**
     * Monta um cabeçalho e mostra a imagem.
     */
    header ('Content-Type: image/png');
    echo base64_decode($encoded);
}

/**
 * Tenta executar a função.
 */
try{
    devolve($json);
}

/**
 * Retorna algum erro caso ocorra.
 */
catch(\Exception $e){
    echo $e->getMessage();
}