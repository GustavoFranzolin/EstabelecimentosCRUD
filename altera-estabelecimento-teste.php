<?php
include("header.php");
include("conecta.php");
include("banco-estabelecimento.php");


    $id = $_GET['id'];
    $estabelecimento = buscaEstabelecimento($conexao, $id);



?>




    <div class="formulario">

        <h1 style="text-align:center"> Alterando o Estabelecimento</h1>
        <br>

        <form action="altera-estabelecimento.php" class="formata" method="post" id="validador">

            <input type="hidden" name="id" value="<?=$estabelecimento['id']?>">


            <label>Razão Social</label>
            <input name="razao" type="text" class="g" value="<?=$estabelecimento['razao']?>">

            <label>Nome Fantasia</label>
            <input name="nome" type="text" class="g" value="<?=$estabelecimento['nome']?>">

            <label>CNPJ</label>
            <input  type="text" class="p"  name="cnpj" id="cnpj" value="<?=$estabelecimento['CNPJ']?>" >

            <label>* E-mail</label>
            <input name="email" type="text" class="g" id="email" value="<?=$estabelecimento['email']?>" >

            <label>Endereço</label>
            <input name="endereco" type="text" class="g" value="<?=$estabelecimento['endereco']?>">

            <label>Cidade</label>
            <input name="cidade" type="text" class="p" value="<?=$estabelecimento['cidade']?>" >

            <label>Estado</label>
            <select name="estado" class="p" >
                <option>Selecione</option>
                <option value="AC" <?php echo $estabelecimento['estado']=='AC'?'selected':'';?>>Acre</option>
                <option value="AL" <?php echo $estabelecimento['estado']=='AL'?'selected':'';?>>Alagoas</option>
                <option value="AP" <?php echo $estabelecimento['estado']=='AP'?'selected':'';?>>Amapá</option>
                <option value="AM" <?php echo $estabelecimento['estado']=='AM'?'selected':'';?>>Amazonas</option>
                <option value="BA" <?php echo $estabelecimento['estado']=='BA'?'selected':'';?>>Bahia</option>
                <option value="CE" <?php echo $estabelecimento['estado']=='CE'?'selected':'';?>>Ceará</option>
                <option value="DF" <?php echo $estabelecimento['estado']=='DF'?'selected':'';?>>Distrito Federal</option>
                <option value="ES" <?php echo $estabelecimento['estado']=='ES'?'selected':'';?>>Espirito Santo</option>
                <option value="GO" <?php echo $estabelecimento['estado']=='GO'?'selected':'';?>>Goiás</option>
                <option value="MA" <?php echo $estabelecimento['estado']=='MA'?'selected':'';?>>Maranhão</option>
                <option value="MS" <?php echo $estabelecimento['estado']=='MS'?'selected':'';?>>Mato Grosso do Sul</option>
                <option value="MT" <?php echo $estabelecimento['estado']=='MT'?'selected':'';?>>Mato Grosso</option>
                <option value="MG" <?php echo $estabelecimento['estado']=='MG'?'selected':'';?>>Minas Gerais</option>
                <option value="PA" <?php echo $estabelecimento['estado']=='PA'?'selected':'';?>>Pará</option>
                <option value="PB" <?php echo $estabelecimento['estado']=='PB'?'selected':'';?>>Paraíba</option>
                <option value="PR" <?php echo $estabelecimento['estado']=='PR'?'selected':'';?>>Paraná</option>
                <option value="PE" <?php echo $estabelecimento['estado']=='PE'?'selected':'';?>>Pernambuco</option>
                <option value="PI" <?php echo $estabelecimento['estado']=='PI'?'selected':'';?>>Piauí</option>
                <option value="RJ" <?php echo $estabelecimento['estado']=='RJ'?'selected':'';?>>Rio de Janeiro</option>
                <option value="RN" <?php echo $estabelecimento['estado']=='RN'?'selected':'';?>>Rio Grande do Norte</option>
                <option value="RS" <?php echo $estabelecimento['estado']=='RS'?'selected':'';?>>Rio Grande do Sul</option>
                <option value="RO" <?php echo $estabelecimento['estado']=='RO'?'selected':'';?>>Rondônia</option>
                <option value="RR" <?php echo $estabelecimento['estado']=='RR'?'selected':'';?>>Roraima</option>
                <option value="SC" <?php echo $estabelecimento['estado']=='SC'?'selected':'';?>>Santa Catarina</option>
                <option value="SP" <?php echo $estabelecimento['estado']=='SP'?'selected':'';?>>São Paulo</option>
                <option value="SE" <?php echo $estabelecimento['estado']=='SE'?'selected':'';?>>Sergipe</option>
                <option value="TO" <?php echo $estabelecimento['estado']=='TO'?'selected':'';?>>Tocantins</option>
            </select>

            <label>Telefone</label>
            <input name="telefone" type="text" class="p" id="celular" value="<?=$estabelecimento['telefone']?>">


            <?php $dataBD = $estabelecimento['data'];
                $dataP = explode('-', $dataBD);
                $dataExibe = $dataP[2].'/'.$dataP[1]. '/'. $dataP[0];

            ?>

            <label>Data Cadastro</label>
            <input name="data" type="text" class="p" id="data" placeholder="MM / DD / YYYY" value="<?= $dataExibe?>" >

            <label>Categoria</label>
            <select name="categoria" class="p" id="categoria">
                <option >Selecione</option>
                <option value="supermercado" <?php echo $estabelecimento['categoria']=='supermercado'? 'selected':'';?>> Supermercado</option>
                <option value="restaurante"  <?php echo $estabelecimento['categoria']=='restaurante'? 'selected':'';?>>Restaurante</option>
                <option value="borracharia"  <?php echo $estabelecimento['categoria']=='borracharia'? 'selected':'';?>>Borracharia</option>
                <option value="posto" <?php echo $estabelecimento['categoria']=='posto'? 'selected':'';?>>  Posto   </option>
                <option value="oficina" <?php echo $estabelecimento['categoria']=='oficina'? 'selected':'';?>>  Oficina</option>

            </select>
            <br>

            <ul>
                <p> Status </p>
                <li><input type="radio" name="status" value="ativo" <?php echo $estabelecimento['status']=='ativo'? 'checked': '';?>>ativo</li>
                <li><input type="radio" name="status" value="inativo" <?php echo $estabelecimento['status']=='inativo'? 'checked': '';?> >inativo</li>
            </ul>

            <div id="inline">
                <button type="submit" class="btn btn-primary"> Alterar </button>
                <button class="btn btn-primary" onclick="voltar()"> voltar </button>
            </div>

        </form>

    </div>


<?php include("footer.php")?>