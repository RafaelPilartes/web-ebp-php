<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EBP</title>
  <link rel="stylesheet" href="./foter.css" />
  <link rel="stylesheet" href="./assets/css/divconfis.css" />
  <link rel="stylesheet" href="../css/animacao.css" />

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <!-- custom css file link  -->
  <link rel="stylesheet" href="style.css" />

  <style>
    h1 {
      color: white;
    }
  </style>

  <!-- Favicons -->
  <link href="assets/img/favicon.jpeg" rel="icon" />
  <link href="assets/img/apple-touch-icon.jpeg" rel="apple-touch-icon" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- header section starts  -->
  <header class="header">
    <a href="#" class="logo">
      <img src="./assets/img/logoebp.png" alt="" />
    </a>

    <nav class="navbar">
      <a href="http://localhost/ebp/index.html">Home</a>
      <a href="http://localhost/ebp/index.html">Visão</a>
      <a href="http://localhost/ebp/index.html">Missão</a>
      <a href="http://localhost/ebp/index.html">Sobre Nós</a>
      <a href="http://localhost/ebp/index.html">Serviços</a>
      <a href="marcacao.php">Marcação</a>
      <a href="http://localhost/ebp/index.html">Contactos</a>
    </nav>
    >

    <div class="icons">
      <div class="fas fa-bars" id="menu-btn"></div>
    </div>
  </header>

  <!-- contact section starts  -->
  <section class="contact margem" id="contact">
    <h1 class="heading"><span>Marcação</span></h1>
    <h3 class="sub-heading">Faça já a sua marcação</h3>
    <div class="row">
      <form action="../database/enviar_marcacao.php" method="post" data-anime="left">
        <div class="inputBox">
          <span class="fas fa-user"></span>
          <input name="nome" type="text" placeholder="Nome" required />
        </div>
        <div class="inputBox">
          <span class="fas fa-envelope"></span>
          <input name="email" type="email" placeholder="Email" required />
        </div>
        <div class="inputBox">
          <span class="fas fa-phone"></span>
          <input name="numero" type="number" placeholder="Número" required />
        </div>
        <div class="inputBox">
          <span class="fas fa-info"></span>
          <input name="data_marcacao" type="date" placeholder="Data da marcação" required />
        </div>
        <div class="inputBox">
          <span class="fas fa-info"></span>
          <select name="servico" style="width: 100%;  padding: 2rem;  font-size: 1.7rem;  color: #fff;  text-transform: none;  background: none;">
            <option style="background-color: #111;" value="Divisão de Contabilidade e Fiscalidade">Divisão de
              Contabilidade e Fiscalidade</option>
            <option style="background-color: #111;" value="Divisão de Consultoria Financeira e de Gestão">Divisão de
              Consultoria Financeira e de Gestão
            </option>
            <option style="background-color: #111;" value="Divisão de Corporate Finance dirigida às PME">Divisão de
              Corporate Finance dirigida às PME
            </option>
            <option style="background-color: #111;" value="Divisão de Auditoria Financeira e Revisão de Contas">Divisão
              de Auditoria Financeira e
              Revisão de Contas</option>
          </select>
        </div>
        <button type="submit" class="btn">
          Enviar Marcação
        </button>
      </form>
    </div>
  </section>
  <!-- contact section ends -->

  <section class="footer">
    <div class="box-container">
      <div class="box" data-aos="fade-up" data-aos-delay="150">
        <img src="./assets/img/logoebp.png" alt="" />
        <p>
          Empresa especializada em serviços financeiros profissionais de
          Contabilidade, Fiscalidade, Auditoria, Consultoria de Gestão,
          Elaboração de Estudos de Viabilidade e Planos de Negócio.
        </p>
        <div class="share">
          <a href="https://www.facebook.com/ebpangola/" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="https://www.instagram.com/ebpangola/" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
        </div>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="300">
        <h3>Links Rápidos</h3>
        <a href="#home" class="links">
          <i class="fas fa-arrow-right"></i> Home
        </a>
        <a href="#apresentacao" class="links">
          <i class="fas fa-arrow-right"></i> Apresentação
        </a>
        <a href="#visao" class="links">
          <i class="fas fa-arrow-right"></i> Visão
        </a>
        <a href="#missao" class="links">
          <i class="fas fa-arrow-right"></i> Missão
        </a>
        <a href="#sobre" class="links">
          <i class="fas fa-arrow-right"></i> Sobre nós
        </a>
        <a href="#servicos" class="links">
          <i class="fas fa-arrow-right"></i> Serviços
        </a>
        <a href="#contact" class="links">
          <i class="fas fa-arrow-right"></i> Contactos
        </a>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="450">
        <h3>Info Contacto</h3>
        <p><i class="fas fa-map"></i> Luanda, Angola</p>
        <p><i class="fas fa-phone"></i> (+244) 932 391 112</p>
        <p><i class="fas fa-envelope"></i> info@ebpangola.com</p>
        <p><i class="fas fa-clock"></i> 08:00 - 17:00</p>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="600">
        <h3>newsletter</h3>
        <p>Inscreva-se para atualizações mais recentes</p>
        <form action="">
          <input type="email" name="" placeholder="Insira o seu email" class="email" id="" />
          <input type="submit" value="subscribe" class="btn" />
        </form>
      </div>
    </div>
  </section>
  <!-- End Footer -->

  <!-- custom js file link  -->
  <script src="../js/script.js"></script>
  <script src="./assets/Js/divconfis.js"></script>
  <script src="../js/animete.js"></script>
</body>

</html>