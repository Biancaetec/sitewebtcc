<?php
session_start();

// Verifica se o formulário foi enviado
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; // Obtém a senha (não escapa, mas você deve considerar segurança)

    require 'bd/conexao.php';

    // Executa uma consulta baseada no termo de pesquisa passado como parâmetro
    $conexao = conexao::getInstance();
    $sql = 'SELECT usu_codigo, usu_nome, usu_senha, usu_email FROM usuario WHERE usu_email=:email 
    and usu_senha=:senha';
    $stm = $conexao->prepare($sql);
    $stm->bindValue(':email', $username);
    $stm->bindValue(':senha', $password);
    $stm->execute();
    $usuarios = $stm->fetchAll(PDO::FETCH_OBJ);
    
    if (count($usuarios) > 0) {
    // Verifica se o nome e a senha estão corretos
        $usuario = $usuarios[0];
        $_SESSION["logado099"] = true; // Marca que o usuário está logado
        $_SESSION["nome"] = $usuario->usu_nome; // Armazena o nome do usuário
        $_SESSION["id"] = $usuario->usu_codigo; // Armazena o nome do usuário
        // Redireciona para index.php
        header("Location: index.php");
        exit();
       
    } else{
        // Caso o nome e a senha estejam incorretos
        echo "Não Logou";
        $_SESSION["erro"] = "Nome de usuário e/ou senha incorretos.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Login </title>

    <style>
        body {
            background-color: #c5cfd6;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .cabecalho {
            background-color: #000;
            color: white;
            padding: 10px;
            width: 100%;
            height: 12%;
            margin-top: -10%;
            margin-bottom: 7%;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .cabecalho .texto {
            color: #f8f9fa;
            font-size: 24px;
            text-decoration: none;
            margin-left: 20px; /* Adiciona espaço da borda esquerda */
        }

        .cabecalho .texto:hover {
            text-decoration: none; /* Remove a sublinha ao passar o mouse */
        }

        .login {
            background-color: white;
            border-radius: 14px;
            width: 100%;
            max-width: 400px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #5a9cde;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4a8ac4;
        }

        .login p {
            margin-top: 15px;
        }

        a {
            color: #5a9cde;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .login {
                width: 90%;
                padding: 20px;
            }

            h2 {
                font-size: 20px;
            }

            input[type="text"],
            input[type="password"] {
                font-size: 14px;
            }

            button {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <nav class="cabecalho">
        <a class="texto" href="#">Cabanni Gerenciamentos</a>
    </nav>

    <div class="login">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Nome de usuário" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
        <p>Não tem uma conta? <a href="#">Cadastre-se</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


