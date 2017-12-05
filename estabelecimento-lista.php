<?php include("header.php");
 include("banco-estabelecimento.php");
 include("conecta.php"); ?>




<table class="table table-bordered">
    <thead class="thead-inverse">
    <tr>
        <th> ID </th>
        <th> Razao Social</th>
        <th> CNPJ </th>
        <th> Alterar Dados</th>
        <th> Remover </th>

    </tr>
    </thead>

    <?php
    $estabelecimentos = listaEstabelecimento($conexao);
    foreach($estabelecimentos as $estabelecimento):
        ?>

        <tbody>
        <tr>
            <th scope="row"> <?= $estabelecimento['id'] ?> </th>
            <th><?= $estabelecimento['razao']?></th>
            <th><?=$estabelecimento['CNPJ']?></th>
            <th><a class="btn btn-primary" href="altera-estabelecimento-formulario.php?id=<?=$estabelecimento['id']?>"> alterar </a> </th>
            <th>
                <form action="remove-estabelecimento.php" method="post">
                    <input  type="hidden" name="id" value="<?=$estabelecimento['id']?>">
                    <button class="btn btn-danger">  remover </button>

                </form>
            </th>


        </tr>

        </tbody>
        <?php
    endforeach
    ?>
</table>

<button class="btn btn-primary" id="voltar" onclick="voltar()"> voltar </button>

<?php include("footer.php"); ?>
