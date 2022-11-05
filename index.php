<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <title>Login-tcc</title>
    <link rel="stylesheet" href="style_index.css">
    <script src="script.js"></script>
</head>
<body>
    <main class="container">
        <img src="img/logo2.png" alt="some text" width=300px height=75px id="img-logo-capelo">
        <h2>Login</h2>
        <form action="validacao_login.php" method="POST">
            <div class="input-field">
                <input type="text" name="username" id="username" required
                    placeholder="Nome de Usuário">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="password" name="password" id="password" required
                    placeholder="Entre Com a Senha">
                <div class="underline"></div>
            </div>

            <input type="submit" value="Entrar">
        </form>

        <div class="footer">
            <span>Ou Entre Com as Redes Sociais</span>
            <div class="social-fields">
                <div class="social-field twitter">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                        Entrar com o Twitter
                    </a>
                </div>
                <div class="social-field facebook">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                        Entrar com o Facebook
                    </a>
                </div>
                <div class="social-field cadastro" id="btcadastro">
                    <a href="formulario.php"> 
                        Criar nova conta
                    </a>
                </div>
            </div>
        </div>
    </main>
    <img src="img/5834.png" alt="some text" width=50% sss >
    <script src="bt.js"></script>
</body>
</html>