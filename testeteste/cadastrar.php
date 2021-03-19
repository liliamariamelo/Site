<?php
  require_once 'CLASSES/usuarios.php';
  $u = new Usuario;
?>


<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title> Armanezamento de TCCs/login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!---CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!--JS-->
    <link rel="stylesheet" type="text/js" href="funcao.js">

    <!--- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--JS
    <script src="arquivo.js"></script>-->


  </head>

  <body class="fundo">
    <header>
      <div class="menu">
        <!--LOGO ou Nome-->
        <img src="tcclogo.png" id="Icon" width=6%>
        <!--Menu-->
        <nav>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Cursos</a></li>
            <li><a id="entrar" href="login.php">Entrar</a></li>
          </ul>
        </nav>
        <div class="pesquisa">
          <input type="text" id="busca" placeholder="Pesquise aqui">
          <button type="button" name="busque">Buscar</button>
        </div>
      </div>
    </header>

     <main>

      <h1 id="titulo"> Cadastro</h1>
      <p id="subtitulo">Preencha com as suas informações</p>
      <!--Formulário-->
      <form  method="POST" >
        <fieldset class="grupo">
          <div class="cadastro">
            <div class="form-group">
              <!--Nome -->
              <label for="NomeUsuario"><strong>Nome:</strong></label>
              <input type="text" name="nome" placeholder="Digite seu nome completo" maxlength="30">
              <small class="form-text text-muted"> Digite seu nome completo.</small>
            </div>

            <div class="form-group">
              <!--telefone-->
              <label for="Telefone"> Telefone:</label>
              <input type="text" name="telefone"   placeholder="Ex.: (00) 0000-0000" maxlength="30"/>
              <small class="form-text text-muted"> Digite seu telefone.</small>
            </div>


            <div class="form-group">
              <!--Email  -->
              <label for="E-mail"> E-mail:</label>
              <input type="text" name="email"  maxlength="40">
              <small class="form-text text-muted"> Digite seu nome e-mail.</small>
            </div>

            <div class="form-group">
              <!--Senha -->
              <label for="senha"> Senha:</label>
              <input type="password" name="senha"  maxlength="10">
              <small class="form-text text-muted"> Digite sua senha.</small>
            </div>

            <!--Digite a senha novamente-->
            <div class="form-group">
              <!--Senha -->
              <label for="senha"> Confirme sua senha:</label>
              <input type="password" name="confsenha"   maxlength="10">
              <small class="form-text text-muted"> Digite novamente sua senha</small>
            </div>
            <button    class="botao1" >
             <input type="submit" value="Cadastrar" id="botãoCor" >
            </button>


          </div>
        </fieldset>
      </form>
</main> 
      <?php
        //chamar o método post com os 'name' do formulario
        if (isset ($_POST ['email'])){ //addslashes = protege de codigos maliciosos
          $nome = addslashes ($_POST ['nome']);
          $telefone = addslashes($_POST['telefone']);
          $email = addslashes ($_POST ['email']);
          $senha = addslashes ($_POST ['senha']);
          $confimarSenha = addslashes($_POST['confsenha']);

          //verificar se está preenchido
          if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confimarSenha)) {//conecta com o banco
            $u->conectar("projetologin","localhost", "root",""); //nome do bd, o servidor, usuário, senha
            if ($u ->msgErro == "") {  //verificar se está tudo ok
              if($senha == $confimarSenha){ 
                if($u->cadastrar($nome, $telefone, $email, $senha)){
                    echo "Cadastrado com sucesso!";}
                else{
                    echo " Email já cadastrado!";}
              }
              else{
                echo "Senha e confirmar senha não corresponde";}
            }
            }
            else{
              echo "Erro: ".$u->msgErro;}
        }
        else{
          echo "Preencha todos os campos!";}  
              
?>
  </body>
     
    
</html>
                  