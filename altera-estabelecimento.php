<?php include("header.php");
 include("banco-estabelecimento.php");
 include("conecta.php");


 $id = $_POST['id'];
 $razao = $_POST['razao'];
 $nome = $_POST['nome'];
 $cnpj = $_POST['cnpj'];
 $email = $_POST['email'];
 $endereco = $_POST['endereco'];
 $cidade = $_POST['cidade'];
 $estado = $_POST['estado'];
 $telefone = $_POST['telefone'];
 $data = $_POST['data'];
 $categoria = $_POST['categoria'];
 $status = $_POST['status'];



function limpa_mascara($valor) {

    $valor = trim($valor);
    $valor = str_replace(".", "", $valor);
    $valor = str_replace("-", "", $valor);
    $valor = str_replace("/", "", $valor);
    $valor = str_replace("(", "", $valor);
    $valor = str_replace(")", "", $valor);
    $valor = str_replace(" ", "", $valor);



    return $valor;
}

if($data != ''){
    $dataP = explode('/', $data);
    $dateBD = ($dataP[2].'-'.$dataP[1].'-'.$dataP[0]);
}
else{

    $dateBD = '';
}

if($telefone == ''){

    $telefone = 0;

}

if (alteraEstabelecimento($conexao, $id, $razao, $nome, limpa_mascara($cnpj), $email, $endereco, $cidade,
    $estado, limpa_mascara($telefone), $dateBD, $categoria, $status)){ ?>

    <p class="text-success"> A razão social : <?= $razao;?>, com CNPJ: <?= $cnpj;?> foi alterado com sucesso!!! </p>

<?php } else {
    $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger"> O produto <?= $nome ?> não foi alterado !! <?=  $msg?> </p>

    <?php
}
?>

<button class="btn btn-primary" id="voltar" onclick="voltar()"> voltar </button>


<?php include("footer.php"); ?>



