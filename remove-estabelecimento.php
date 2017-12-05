<?php include("header.php");
include("conecta.php");
include("banco-estabelecimento.php");
/**
 * Created by PhpStorm.
 * User: gustavo
 * Date: 05/12/17
 * Time: 14:43
 */

$identifica = $_POST['id'];
removeEstabelecimento($conexao, $identifica);
header("Location: estabelecimento-lista.php?removido=true");
die();

