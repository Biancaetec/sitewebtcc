<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header Exemplo</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    header {
      background-color: #004aad;
      padding: 10px 20px;
      display: flex;
      align-items: center;
      justify-content: flex-start;
      height: 100px; /* altura um pouco maior para acomodar melhor a logo */
    }

    .logo {
      height: 500px;  /* altura controlada */
      width: auto;
      object-fit: contain;
      margin-top: 5%;
      margin-left: -20%;
    }

    @media (max-width: 600px) {
      header {
        height: 80px;
        padding: 8px 16px;
      }

      .logo {
        height: 60px;
      }
    }
  </style>
</head>
<body>

  <header>
    <img src="imagens/logorestoon.png" alt="Logo Restoon" class="logo">
  </header>

</body>
</html>
