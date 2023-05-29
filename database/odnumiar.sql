-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Maio-2023 às 17:23
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `odnumiar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_user`
--

CREATE TABLE `adm_user` (
  `id` int(11) NOT NULL,
  `full_name_adm` varchar(255) NOT NULL,
  `email_address_adm` varchar(255) NOT NULL,
  `number_phone_adm` varchar(355) NOT NULL,
  `login_password_adm` varchar(255) NOT NULL,
  `date_create_adm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `adm_user`
--

INSERT INTO `adm_user` (`id`, `full_name_adm`, `email_address_adm`, `number_phone_adm`, `login_password_adm`, `date_create_adm`) VALUES
(1, 'Rafael Adm', 'rafael@gmail.com', '923414621', 'c20ad4d76fe97759aa27a0c99bff6710', 'Quinta-Feira, 11 de Maio de 2023'),
(2, 'Manuel Eros', 'manuel12@gmail.com', '923414621', '202cb962ac59075b964b07152d234b70', 'Segunda-Feira, 15 de Maio de 2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `messages_contact`
--

CREATE TABLE `messages_contact` (
  `id` int(11) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `email_user` varchar(355) NOT NULL,
  `numero` varchar(500) NOT NULL,
  `messages` varchar(1000) NOT NULL,
  `date_create` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `messages_contact`
--

INSERT INTO `messages_contact` (`id`, `name_user`, `email_user`, `numero`, `messages`, `date_create`) VALUES
(1, 'Rafael', 'rafaelpilartes.rpls@gmail.com', '934758375', 'Lorem Lorem Lorem Lorem Lorem Lorem Lorem ', 'Quarta-Feira, 03 de Maio de 2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `scheduling`
--

CREATE TABLE `scheduling` (
  `id` int(11) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `phone_user` varchar(255) NOT NULL,
  `servico` varchar(255) NOT NULL,
  `estado` varchar(250) NOT NULL,
  `data_marcacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `scheduling`
--

INSERT INTO `scheduling` (`id`, `name_user`, `email_user`, `phone_user`, `servico`, `estado`, `data_marcacao`) VALUES
(23, 'Toni', 'tonilson@gmail.com', '976467467', 'Divisão de Consultoria Financeira e de Gestão', 'Pendente', '2023-05-31'),
(24, 'Jane Pilartes', 'jane@gmail.com', '936846826', 'Divisão de Contabilidade e Fiscalidade', 'Pendente', '2023-05-30');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm_user`
--
ALTER TABLE `adm_user`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `messages_contact`
--
ALTER TABLE `messages_contact`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `scheduling`
--
ALTER TABLE `scheduling`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm_user`
--
ALTER TABLE `adm_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `messages_contact`
--
ALTER TABLE `messages_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `scheduling`
--
ALTER TABLE `scheduling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
