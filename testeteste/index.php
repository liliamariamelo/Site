<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!---CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!--JS-->
    <link rel="stylesheet" type="text/js" href="funcao.js">

    <!--- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body class="fundo">
    <header>
        <div class="menu">
            <!--LOGO ou Nome-->
            <img src="tcclogo.png" id="Icon" width=6 %>
            <!--Menu-->
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Projeto</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a id="entrar" href="login.html">Entrar</a></li>
                </ul>

            </nav>
            <div class="pesquisa">
                <input type="text" id="busca" placeholder="Pesquise aqui">
                <button type="button" name="busque">Buscar</button>
            </div>
        </div>
    </header>

    <main>
        <div class="entrada">
            <form method="POST" class="login" action="#">

                <h2 id="tituloform">Login</h2>
                <div class="entradaform">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Digite o seu email" required="required">
                </div>
                <div class="entradaform">
                    <label>Senha</label>
                    <input type="password" name="senha" placeholder="Digite a sua senha" required="required">
                </div>

                <div class="entradaform-check">
                    <input type="checkbox" checked="checked" name="lembrar" class="checklogin">
                    <label class="checklogin">Lembre-me da senha </label>
                </div>

                <div class="entradaform">
                    <button type="button" id="botão">
                        <a href="#"> Acessar </a> </button>
                    <div id="click"> Ainda não tem conta? <a href="cadastrar.php"> Se cadastrar </a> </div>
                </div>

            </form>
        </div>
    </main>




</body>

</html>