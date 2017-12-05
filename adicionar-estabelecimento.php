<?php include("header.php");
 include("banco-estabelecimento.php");
 include("conecta.php");

 $razao = $_POST['razao'];
 $nome = $_POST['nome'];
 $cnpj = $_POST['cnpj'];
 $email = $_POST['email'];
 $endereco = $_POST['endereco'];
 $cidade = $_POST['cidade'];
 $estado = $_POST['estado'];
 $telefone = $_POST['telefone'];
 $data = $_POST['data'];
 $estabelecimento = $_POST['categoria'];
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

if(insereEstabelecimento($conexao,$razao,$nome,limpa_mascara($cnpj),$email,$endereco,$cidade,$estado,limpa_mascara($telefone),$dateBD,$estabelecimento,
$status)) { ?>

<p class="text-success"> Estabelecimento <?= $nome;?> adicionado com sucesso !!! </p>

<?php } else { 
   $msg = mysqli_error($conexao);
   ?>
<p class="text-danger"> O Estabelecimento <?= $nome ?> não foi adicionado. <?= $msg?> </p>

<?php
} 
?>

<button class="btn btn-primary" id="voltar" onclick="voltar()"> voltar </button>


<?php include("footer.php"); ?>
 