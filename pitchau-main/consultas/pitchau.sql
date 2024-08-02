CREATE DATABASE pitchau;
use pitchau;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Fev-2024 às 07:40
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pitchau`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(19, 'Sopro'),
(20, 'Cordas'),
(21, 'PercussÃ£o'),
(22, 'Teclas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `usuario_id` int(11) NOT NULL,
  `usuario_nome` varchar(255) NOT NULL,
  `produto_nome` varchar(255) NOT NULL,
  `data_compra` varchar(30) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`usuario_id`, `usuario_nome`, `produto_nome`, `data_compra`, `valor`) VALUES
(499, 'kayky teste ', 'ViolÃ£o Giannini', '17/02/2024 07:32', '1500.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text,
  `foto` varchar(255) DEFAULT NULL,
  `valor` decimal(10,2) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `quantidade_estoque` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `descricao`, `foto`, `valor`, `categoria_id`, `quantidade_estoque`) VALUES
(3, 'ViolÃ£o Giannini', 'ViolÃ£o com cordas de aÃ§o para estudo. Acompanha material de estudo.', 'violao3.png', '1500.00', 20, 20),
(4, 'Guitarra Fender', 'Guitarra supimpa para Blues. Acompanha palheta azul.', 'guitarra1.png', '2400.00', 20, 20),
(5, 'BaixolÃ£o Tagima', 'Baixolao eletroacÃºstico em marfim.', 'baixolao1.png', '2100.00', 20, 20),
(6, 'Contrabaixo Yamaha 6 cordas', 'Contrabaixo 6 cordas em acÃ¡cia.', 'contrabaixo1.png', '2400.00', 20, 20),
(7, 'Contrabaixo para estudo Tagima', 'Contrabaixo 6 cordas para estudo. Acompanha material de estudo.', 'contrabaixo2.png', '2500.00', 20, 20),
(8, 'Violino 4/4 Eagle', 'Violino 4/4 em maple e Ã©bano. Acompanha arco, breu e estojo.', 'violino1.png', '1300.00', 20, 20),
(9, 'Flauta Doce Yamaha', 'Flauta doce em marfim.', 'flauta1.png', '200.00', 19, 20),
(10, 'Clarinete Bb Yamaha', 'Clarinete 17 chaves Bb.', 'clarinete1.png', '820.00', 19, 20),
(11, 'Saxofone Alto Dolphin', 'Saxofone Alto Eb em LatÃ£o.', 'saxofone1.png', '3200.00', 19, 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtocarrinho`
--

CREATE TABLE `produtocarrinho` (
  `usuario_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `url_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `slider`
--

INSERT INTO `slider` (`id`, `url_img`) VALUES
(5, 'slider.png'),
(6, 'slider_2.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `senha`, `nome`, `isAdmin`) VALUES
(496, 'adm@super', '$2y$10$KAseMta2Vx5CEwk9rDjACOVRHrYMBsDj4YfqThOm5KYgsBD9TVg5u', 'Super Administrador', 1),
(499, 'oi@eu.com', '$2y$10$ndKwjOF9K2HDrZhPKIm.Ie8UMMB.ke3hCvd7LOyZQVAN/M9cdjdX2', 'kayky teste', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indexes for table `produtocarrinho`
--
ALTER TABLE `produtocarrinho`
  ADD PRIMARY KEY (`usuario_id`,`produto_id`),
  ADD KEY `produto_id` (`produto_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=500;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
