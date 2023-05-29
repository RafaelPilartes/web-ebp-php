<?php
include "../database/conexao.php";

$sqlMarcacoes = "SELECT COUNT(*) AS total_marcacoes FROM scheduling";
$resultMarcacoes = $conn->query($sqlMarcacoes);
$row = $resultMarcacoes->fetch_assoc();
$total_marcacoes = $row['total_marcacoes'];

$sqlMensagens = "SELECT COUNT(*) AS total_mensagens FROM messages_contact";
$resultMensagens = $conn->query($sqlMensagens);
$row = $resultMensagens->fetch_assoc();
$total_mensagens = $row['total_mensagens'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- set the encoding of your site -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="keywords" content="Consultoria Odnumiar, Tchossy, Tchossy Solution, Consulado, Ponta, Negra" />
  <meta name="description" content="Consulado Geral de Angola em Ponta Negra" />
  <meta name="author" content="https://www.tchossy.com/" />

  <link rel="shortcut icon" href="img/favicon.png" />

  <!-- CEO -->
  <!-- <meta property="og:url" content="/img/apresentation.png" /> -->
  <meta property="og:site_name" content="Consulado Geral de Angola em Ponta Negra" />
  <meta property="og:title" content="Consulado Geral de Angola em Ponta Negra" />
  <meta property="og:image" content="/imag/apresentation.png" />
  <meta property="og:description" content="Consulado Geral de Angola Ponta Negra" />
  <meta property="og:type" content="article" />
  <meta property="article:tag" content="Consultoria Odnumiar" />
  <meta property="article:tag" content="Ponta Negra" />
  <meta property="article:tag" content="Consulado" />
  <meta property="article:tag" content="Angola" />
  <meta property="article:tag" content="Tchossy" />
  <meta property="article:tag" content="Tchossy Solution" />

  <!-- set the page title -->
  <title>Consultoria Odnumiar</title>

  <!-- Boxicons -->
  <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
  <!-- My CSS -->
  <link rel="stylesheet" href="src/css/style.css" />
</head>

<body>
  <!-- SIDEBAR -->
  <section id="sidebar">
    <a href="index.php" class="brand">
      <img src="img/logo.png" style="width: 11rem" class="logo" alt="" />
    </a>
    <ul class="side-menu top">
      <li>
        <a href="index.php">
          <i class="bx bxs-dashboard"></i>
          <span class="text">Painel</span>
        </a>
      </li>
      <li>
        <a href="mensagens.php">
          <i class="bx bx-windows"></i>
          <span class="text">Mensagens</span>
        </a>
      </li>
      <li>
        <a href="marcacoes.php">
          <i class="bx bx-question-mark"></i>
          <span class="text">Marcações</span>
        </a>
      </li>
    </ul>
    <ul class="side-menu">
      <!-- <li>
          <a href="#">
            <i class="bx bxs-cog"></i>
            <span class="text">Configurações</span>
          </a>
        </li> -->
      <li>
        <a href="#" class="logout">
          <i class="bx bxs-log-out-circle"></i>
          <span class="text">Sair</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- SIDEBAR -->

  <!-- CONTENT -->
  <section id="content">
    <!-- NAVBAR -->
    <nav>
      <i class="bx bx-menu"></i>
      <form action="#">
        <div class="form-input">
          <input type="search" placeholder="Procurar..." hidden />
          <button type="submit" class="search-btn" hidden>
            <i class="bx bx-search" hidden></i>
          </button>
        </div>
      </form>
      <input type="checkbox" id="switch-mode" hidden />
      <label for="switch-mode" class="switch-mode"></label>

      <a href="#" class="profile">
        <img src="img/people.png" />
      </a>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
      <div class="head-title">
        <div class="left">
          <h1>Painel</h1>
          <ul class="breadcrumb">
            <li>
              <a href="#">Painel</a>
            </li>
            <li><i class="bx bx-chevron-right"></i></li>
            <li>
              <a class="active" href="#">Casa</a>
            </li>
          </ul>
        </div>
      </div>

      <ul class="box-info">
        <li>
          <i class="bx bxs-news"></i>
          <span class="text">
            <h3> <?php echo $total_marcacoes ?> </h3>
            <p>Total de Marcações</p>
          </span>
        </li>
        <li>
          <i class="bx bxs-calendar-event"></i>
          <span class="text">
            <h3> <?php echo $total_mensagens ?> </h3>
            <p>Total de Mensagens</p>
          </span>
        </li>
      </ul>

      <div class="table-data">
        <div class="order">
          <div class="head">
            <h3>Usuários recentes</h3>
          </div>
          <table>
            <thead>
              <tr>
                <th>Utilizador</th>
                <th>E-mail</th>
                <th>Telemóvel</th>
                <th>Serviço</th>
                <th>Status</th>
                <th>Ordem de Data</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * FROM scheduling LIMIT 5";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row["name_user"] . "</td>";
                  echo "<td>" . $row["email_user"] . "</td>";
                  echo "<td>" . $row["phone_user"] . "</td>";
                  echo "<td>" . $row["servico"] . "</td>";
                  echo "<td> <span class='status completed'>" . $row["estado"] . "</span></td>";
                  echo "<td>" . $row["data_marcacao"] . "</td>";
                  echo "</tr>";
                }
              } else {
                echo "<tr><td colspan='3'>Nenhum registro encontrado.</td></tr>";
              }

              $conn->close();
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->

  <script src="src/js/script.js"></script>
</body>

</html>