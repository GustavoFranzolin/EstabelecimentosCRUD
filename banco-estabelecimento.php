<?php

function insereEstabelecimento($conexao, $razao, $nome, $cnpj, $email, $endereco, $cidade,
$estado, $telefone, $data, $categoria, $status){
    
        $query = "insert into estabelecimentos (razao, nome, CNPJ, email, endereco, cidade, estado, 
        telefone, data, categoria, status) values ('{$razao}', '{$nome}', {$cnpj}, '{$email}', '{$endereco}',
        '{$cidade}','{$estado}', {$telefone}, '{$data}', '{$categoria}', '{$status}')";

        return mysqli_query($conexao, $query);
}


function buscaEstabelecimento($conexao, $id){

    $query = "select * from estabelecimentos where id={$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function listaEstabelecimento($conexao) {

    $estabelecimentos = array();

    $query = "select * from estabelecimentos ";
    $resultado = mysqli_query($conexao, $query);
    while ($estabelecimento = mysqli_fetch_assoc($resultado)){

        array_push($estabelecimentos, $estabelecimento);

    }

    return $estabelecimentos;

}



function alteraEstabelecimento($conexao, $id, $razao, $nome, $cnpj, $email, $endereco, $cidade,
$estado, $telefone, $data, $categoria, $status){


    $query = "update estabelecimentos set razao='{$razao}', nome='{$nome}', cnpj={$cnpj}, email='{$email}',
    endereco='{$endereco}', cidade='{$cidade}', estado='{$estado}', telefone={$telefone}, data='{$data}', categoria='{$categoria}',
    status='{$status}' where id={$id}";
 
    return mysqli_query($conexao, $query);
    
}


function removeEstabelecimento($conexao, $id){
    $query = "delete from estabelecimentos where id={$id}";

    return mysqli_query($conexao, $query);
}

