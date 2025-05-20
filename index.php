<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Inicial</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body, html {
      height: 100%;
    }

    .container {
      height: 100vh;
      background: #004aad;
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 20px;
      position: relative;
    }

    .logo {
      position: absolute;
      top: -20%;
      right: 64%;
      width: 55%;
      /* max-width: 400px; Limita o tamanho em telas grandes */
      height: auto;
    }

    .link-beneficios {
      position: absolute;
      top: 6%;
      right: 20px;
      font-size: 20px;
      color: white;
      text-decoration: none;
    }

    .corpo {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      flex: 1;
      text-align: center;
    }

    .link-inicio {
      margin-top: 20px;
      font-size: 20px;
      color: white;
      text-decoration: none;
      cursor: pointer;
    }

    .link-inicio:hover,
    .link-beneficios:hover {
      color: #ccc;
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="imagens/logorestoon.png" alt="Logo Restoon" class="logo">

    <a href="beneficios.php" class="link-beneficios">Benefícios</a>

    <div class="corpo">
      <h1>Transforme pedidos em eficiência!</h1>
      <a href="comecaragora.php" class="link-inicio">Começar agora</a>
    </div>
  </div>
</body>
</html>
