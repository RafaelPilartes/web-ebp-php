<?php
include "../database/conexao.php";
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
          <i class='bx bx-chat'></i>
          <span class="text">Mensagens</span>
        </a>
      </li>
      <li>
        <a href="marcacoes.php">
          <i class='bx bx-bookmarks'></i>
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
      <!-- <li>
        <a href="#" class="logout">
          <i class="bx bxs-log-out-circle"></i>
          <span class="text">Sair</span>
        </a>
      </li> -->
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
          <input type="search" placeholder="Procurar..." />
          <button type="submit" class="search-btn">
            <i class="bx bx-search"></i>
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
      <!-- head-title -->
      <div class="head-title">
        <div class="left">
          <h1>Mensagens</h1>
          <ul class="breadcrumb">
            <li>
              <a href="#">Painel</a>
            </li>
            <li><i class="bx bx-chevron-right"></i></li>
            <li>
              <a class="active" href="#">Mensagens</a>
            </li>
          </ul>
        </div>
        <button class="btn-download" data-toggle="modal" data-target="#createModal">
          <i class="bx bxs-file-plus"></i>
          <span class="text">Nova mensagem</span>
        </button>
      </div>

      <!-- MODAL -->
      <div id="createModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <div class="container-modal">
            <h2>Criar nova marcação</h2>
          </div>

          <form action="../database/enviar_marcacao.php" method="post" class="modalForm">
            <span id="msgAlertaErroCad"></span>

            <div>
              <label for="name_course">
                Nome <span class="text-danger">*</span>
              </label>
              <input name="nome" type="text" placeholder="Nome" required class="form-control" />
            </div>
            <div>
              <label for="name_course">
                Email <span class="text-danger">*</span>
              </label>
              <input name="email" type="email" placeholder="Email" required class="form-control" />
            </div>
            <div>
              <label for="ref_course">
                Número <span class="text-danger">*</span>
              </label>
              <input name="numero" type="number" placeholder="Número" required class="form-control" />
            </div>
            <div>
              <label for="ref_course">
                Data da marcação <span class="text-danger">*</span>
              </label>
              <input name="data_marcacao" type="date" placeholder="Data da marcação" required class="form-control" />
            </div>
            <div>
              <label for="name_faculty">
                Serviço <span class="text-danger">*</span>
              </label>
              <select name="servico" class="form-control">
                <option value="Divisão de Contabilidade e Fiscalidade">Divisão de
                  Contabilidade e Fiscalidade</option>
                <option value="Divisão de Consultoria Financeira e de Gestão">Divisão de
                  Consultoria Financeira e de Gestão
                </option>
                <option value="Divisão de Corporate Finance dirigida às PME">Divisão de
                  Corporate Finance dirigida às PME
                </option>
                <option value="Divisão de Auditoria Financeira e Revisão de Contas">
                  Divisão
                  de Auditoria Financeira e
                  Revisão de Contas</option>
              </select>
            </div>

            <button class="base-btn" type="submit">
              Cadastrar
            </button>
          </form>
        </div>
      </div>

      <div id="editeModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <div class="container-modal">
            <h2>Editar dados do curso</h2>
          </div>

          <form id="editForm" class="modalForm">
            <input id="id_edit" name="idCourse" hidden>
            <span id="msgAlertaErroEditCard"></span>

            <div>
              <label for="name_course">
                Nome do curso <span class="text-danger">*</span>
              </label>
              <input id="name_course_edit" name="name_course" class="form-control" type="text"
                placeholder="Ex.: Universidade Independente de Angola">
            </div>
            <div>
              <label for="ref_course">
                Referencia da curso <span class="text-danger">*</span>
              </label>
              <input id="ref_course_edit" name="ref_course" class="form-control" type="text"
                placeholder="Ex.: uni_ind_ang">
            </div>
            <div>
              <label for="name_faculty">
                Selecione a universidade <span class="text-danger">*</span>
              </label>
              <select name="name_faculty" id="faculty_select_edit" class="form-control" require>
                <option value="">Escolha uma opção</option>
              </select>
            </div>

            <button class="base-btn" type="submit">
              Actualizar dados do curso
            </button>
          </form>
        </div>
      </div>

      <!-- TABLE -->
      <div class="table-data">
        <div class="order">
          <div class="head">
            <h3>Todas as Mensagens</h3>
            <i class="bx bx-search"></i>
            <i class="bx bx-filter"></i>
          </div>
          <table>
            <thead>
              <tr>
                <th>Id</th>
                <th>Utilizador</th>
                <th>E-mail</th>
                <th>Telemóvel</th>
                <th>Mensagem</th>
                <!-- <th>Ordem de Data</th> -->
                <th>Ação</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * FROM messages_contact";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row["id"] . "</td>";
                  echo "<td>" . $row["name_user"] . "</td>";
                  echo "<td>" . $row["email_user"] . "</td>";
                  echo "<td>" . $row["numero"] . "</td>";
                  echo "<td>" . $row["messages"] . "</td>";
                  // echo "<td>" . $row["date_create"] . "</td>";
                  echo "<td>";
                  echo "<button class='status delete' onclick=\"excluirRegistro(" . $row["id"] . ")\">Apagar</button>";
                  echo "</td>";
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

  <!-- Javascript -->

  <script src="src/js/script.js"></script>
  <script src="src/vendor/bootstrap/bootstrap.min.js"></script>

  <script>
  function excluirRegistro(id) {
    if (confirm("Tem certeza de que deseja excluir esta mensagem?")) {
      window.location.href = "../database/excluir_mensagem.php?id=" + id;
    }
  }
  </script>
</body>

</html>