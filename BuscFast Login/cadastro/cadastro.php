<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/template1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css2? família=Roboto+Condensado&display=swap" rel="stylesheet"> -->
    <title>Cadastro</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="img">
                <img src="assets/img/logo-2.png" alt="">
            </div>
            <div class="formulario">
                <div class="texto">
                    <h3>Entre com uma conta existente</h3>
                </div>
                <form>
                    <div class="duas">
                        <input type="text" name="nome" id="" placeholder="Digite seu nome">
                        <input type="text" name="sobrenome" id="" placeholder="Digite seu sobrenome">
                    </div>
                    <input type="email" name="email" id="" placeholder="Digite seu Email ">
                    <input type="password" name="senha" id="" placeholder="Digite uma senha ">
                    <input type="password" name="senha" id="" placeholder="Digite a senha novamente">
                    <label for="">Data de nascimento</label><br>
                    <select name="select">
                        <option value="valor1">31</option>
                    </select>
                    <select name="select">
                        <option value="valor1">Janeiro</option>

                    </select>
                    <select name="select">
                        <option value="valor1">2000</option>
                    </select>
                    <p class="link">Ao clicar em cadastrar-se você concorda com nossos <a href="">Termos</a> que você leu nossa <a href="">politica de uso de dados</a> incluindo uso de <a href="">Cookie</a></p>
                    <center><button type="submit">Entrar</button></center>
                </form>
            </div>
        </div>
    </div>
</body>

</html>