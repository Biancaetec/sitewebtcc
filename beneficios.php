<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Benefícios</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: #e6f0ff;
    }

    
    .topicovoltar {
      margin-top: -80%;
      font-size: 14px;
      color: black;
      text-decoration: none;
    }

    .campoprincipal {
      text-align: center;
      padding: 30px 20px;
    }

    .campoprincipal h2 {
      color: #004080;
      margin-bottom: 30px;
    }

    .cardprincipal {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
    }

    .card {
      background-color: #66b3ff;
      padding: 20px;
      border-radius: 12px;
      width: 250px;
      color: #000;
      text-align: left;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .card h3 {
      font-size: 18px;
      margin-bottom: 10px;
      color: #003366;
    }

    .card ul {
      list-style: none;
      padding-left: 0;
    }

    .card ul li {
      margin-bottom: 8px;
      font-size: 14px;
    }

    @media (max-width: 600px) {
      .cardprincipal {
        flex-direction: column;
        align-items: center;
      }

      .card {
        width: 100%;
        max-width: 300px;
      }

    
    }
  </style>
</head>
<body>

  
      <?php include 'header.php'; ?>
    <a href="index.php" class="topicovoltar">Voltar</a>


  <div class="campoprincipal">
    <h2>Benefícios</h2>
    <div class="cardprincipal">
      <div class="card">
        <h3>Agilidade</h3>
        <ul>
          <li>Padronização no atendimento</li>
          <li>Atendimento mais preciso</li>
          <li>Menor tempo para registrar e enviar pedidos</li>
        </ul>
      </div>
      <div class="card">
        <h3>Organização</h3>
        <ul>
          <li>Elimina erros por escrita manual confusa</li>
          <li>Reduz falhas de comunicação entre salão e cozinha</li>
        </ul>
      </div>
    </div>
  </div>

</body>
</html>
