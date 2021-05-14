<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
  <title>Cadastro</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="nome ou cpf" aria-label="Pesquisar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
   
  </nav>

  <form method="post" action="form.php" id="form-contato">
    <h1>Adicionar um novo contato</h1>
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome"
      <?php
      if (!empty($_SESSION['value_nome'])) {
        echo "value='".$_SESSION['value_nome']."'";
        unset($_SESSION['value_nome']);
      }
      ?>
      >
      <?php
      if (!empty($_SESSION['vazio_nome'])) {
        echo "<p style ='color: #f00;'>" . $_SESSION['vazio_nome'] . "</p>";
        unset($_SESSION['vazio_nome']);
      }
      ?>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(xx) xxxxx-xxxx" onkeypress="$(this).mask('(00) 0000-00009')"  maxlength= "15"
        <?php
      if (!empty($_SESSION['value_telefone'])) {
        echo "value='".$_SESSION['value_telefone']."'";
        unset($_SESSION['value_telefone']);
      }
      ?>  
      >

        <?php
        if (!empty($_SESSION['vazio_telefone'])) {
          echo "<p style ='color: #f00;'>" . $_SESSION['vazio_telefone'] . "</p>";
          unset($_SESSION['vazio_telefone']);
        }
        ?>
      </div>
      <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="Email" name="email" placeholder="Email"
        <?php
      if (!empty($_SESSION['value_email'])) {
        echo "value='".$_SESSION['value_email']."'";
        unset($_SESSION['value_email']);
      }
      ?> 
        >
        <?php
        if (!empty($_SESSION['vazio_email'])) {
          echo "<p style ='color: #f00;'>" . $_SESSION['vazio_email'] . "</p>";
          unset($_SESSION['vazio_email']);
        }
        ?>
      </div>

    </div>
    <div class="form-group">
      <label for="endereco">Endereço</label>
      <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua dos Bobos, nº 0"
      <?php
      if (!empty($_SESSION['value_endereco'])) {
        echo "value='".$_SESSION['value_endereco']."'";
        unset($_SESSION['value_endereco']);
      }
      ?> >
      <?php
      if (!empty($_SESSION['vazio_endereco'])) {
        echo "<p style ='color: #f00;'>" . $_SESSION['vazio_endereco'] . "</p>";
        unset($_SESSION['vazio_endereco']);
      }
      ?>
    </div>
    <div class="form-group">
      <label for="complemento">Complemento </label>
      <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Apartamento, hotel, casa, etc.">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="cidade">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade"
        <?php
      if (!empty($_SESSION['value_cidade'])) {
        echo "value='".$_SESSION['value_cidade']."'";
        unset($_SESSION['value_cidade']);
      }
      ?> >
        <?php
        if (!empty($_SESSION['vazio_cidade'])) {
          echo "<p style ='color: #f00;'>" . $_SESSION['vazio_cidade'] . "</p>";
          unset($_SESSION['vazio_cidade']);
        }
        ?>
      </div>
      <div class="form-group col-md-4">
        <label for="estado">Estado</label>
       
       <select id="estado" class="form-control" name="estado">  <option selected>Escolher...</option>
              
          <option selected>Escolher...</option>
          <option>...</option>
          <option value="AC">AC</option>
          <option value="AL">AL</option>
          <option value="AP">AP</option>
          <option value="AM">AM</option>
          <option value="BA">BA</option>
          <option value="CE">CE</option>
          <option value="DF">DF</option>
          <option value="ES">ES</option>
          <option value="GO">GO</option>
          <option value="MA">MA</option>
          <option value="MS">MS</option>
          <option value="MT">MT</option>
          <option value="MG">MG</option>
          <option value="PA">PA</option>
          <option value="PB">PB</option>
          <option value="PR">PR</option>
          <option value="PE">PE</option>
          <option value="PI">PI</option>
          <option value="RJ">RJ</option>
          <option value="RN">RN</option>
          <option value="RS">RS</option>
          <option value="RO">RO</option>
          <option value="RR">RR</option>
          <option value="SC">SC</option>
          <option value="SP">SP</option>
          <option value="SE">SE</option>
          <option value="TO">TO</option>

        </select>
        
      </div>
      <div class="form-group col-md-2">
        <label for="cep">CEP</label>
        <input type="text" class="form-control" id="cep" name="cep" maxlength="8" onkeypress="$(this).mask('00.000-000')"
        <?php
      if (!empty($_SESSION['value_cep'])) {
        echo "value='".$_SESSION['value_cep']."'";
        unset($_SESSION['value_cep']);
      }
      ?> >
        <?php
        if (!empty($_SESSION['vazio_cep'])) {
          echo "<p style ='color: #f00;'>" . $_SESSION['vazio_cep'] . "</p>";
          unset($_SESSION['vazio_cep']);
        }
        ?>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>

  <footer class="rodape">
    <p>Copyright &copy;2021 - by Michelle Luz Rodrigues</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <script src="js/mascara.js"></script>
</body>

</html>