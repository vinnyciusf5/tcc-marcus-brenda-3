<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="style_formulario.css">
</head>
<body>
    <main>
        <img src="img-rs/logo.png" alt="">
        <h1>Criar Conta</h1>
        <div class="social-media">
            <a href="#">
                <img src="img-rs/google.png" alt="Google">
            </a>
            <a href="#">
                <img src="img-rs/facebook.png" alt="Facebook">
            </a>
    
        </div>

        <div class="alternative">
            <span>Ou</span>
        </div>

        <form action="cadastro_formulario.php" method="POST">

             

            <label for="email">
                <span>E-mail</span>
                <input type="email" id="email" name="email" required>
            </label>

            <label for="username">
                <span>Username</span>
                <input type="text" id="username" name="username" required>
            </label>

            <label for="password">
                <span>Senha</span>
                <input type="password" id="password" name="password" required>
            </label>

            <label for="faculdade"> 
                <span>Faculdade</span>
                <input type="text" id="faculdade" name="faculdade" required>
            </label>

            <label for="semestre">
                <span>Semestre</span>
                <input type="number" id="semestre" name="semestre" required>
            </label>

            <label for="curso">
                <span>Graduação</span>
                <input type="text" id="curso" name="curso" required>
            </label>

            <label for="ra">
                <span>RA</span>
                <input type="text" id="ra" name="ra" required>
            </label>

            <input type="submit" value="Entrar" id="submit">

        </form>
    </main>
    <section class="images">
        <img src="img-rs/5834.png" alt="Mobile">

    </section>
</body>
</html>