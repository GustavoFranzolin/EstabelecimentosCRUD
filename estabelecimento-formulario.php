<?php include("header.php") ?>

    <div class="formulario">  

      <form action="adicionar-estabelecimento.php" class="formata" method="post" id="validador">

        <label>Razão Social</label>
        <input name="razao" type="text" class="g">

        <label>Nome Fantasia</label>
        <input name="nome" type="text" class="g">

        <label>CNPJ</label>
        <input  type="text" class="p"  name="cnpj" id="cnpj">

        <label>* E-mail</label>
        <input name="email" type="text" class="g" id="email">

        <label>Endereço</label>
        <input name="endereco" type="text" class="g">

        <label>Cidade</label>
        <input name="cidade" type="text" class="p">

        <label>Estado</label>
        <select name="estado" class="p">
          <option>Selecione</option>
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espirito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MT">Mato Grosso</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
        </select>

        <label>Telefone</label>
        <input name="telefone" type="text" class="p" id="celular">


        <label>Data Cadastro</label>
        <input name="data" type="text" class="p" id="data" placeholder="MM / DD / YYYY">

        <label>Categoria</label>
        <select name="categoria" class="p" id="categoria">
          <option>Selecione</option>
          <option value="supermercado">Supermercado</option>
          <option value="restaurante">Restaurante</option>
          <option value="borracharia">Borracharia</option>
          <option value="posto">Posto</option>
          <option value="oficina">Oficina</option>

       </select>
         <br>

          <ul>
           <p> Status </p>
              <li><input type="radio" name="status" value="ativo">ativo</li>
              <li><input type="radio" name="status" value="inativo" checked>inativo</li>
          </ul>

            <div id="inline">
                <button type="submit" class="btn btn-primary"> cadastrar </button>
                <button class="btn btn-primary" onclick="voltar()"> voltar </button>
            </div>

      </form>

    </div>


<?php include("footer.php")?>