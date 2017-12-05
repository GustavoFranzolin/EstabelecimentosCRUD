
<?php include("header.php") ?>
    <p> Sistema para cadastrar estabelecimentos, seguindo as seguintes regras: </p> 
      <ul>
          <li>Estabelcimento com mínimo: Razão Social e CNPJ </li>
          <li>CNPJ deve conter máscara e validor </li>
          <li>O campo data deve conter máscara e validador</li>
          <li>Caso o estabelecimento possua e-mail, o mesmo deverá ser válido </li>
          <li>Caso a categoria seja Supermercado, o telefone passa a ser obrigatório </li>
      </ul> 

      <div class="row justify-content-lg-center">
          <div class="col col-lg-3"> <button type="button" class="btn btn-primary" onclick="mudaCadastrar()"> Cadastrar</button></div>
          <div class="col col-lg-3"> <button type="button" class="btn btn-primary" onclick="mudaEstabelecimento()"> Estabelecimentos Cadastrados</button></div>
          
      </div>


<?php include("footer.php") ?>