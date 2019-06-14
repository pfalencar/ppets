-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Jun-2019 às 22:16
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
-- Database: `ppets`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cod_cliente` int(11) NOT NULL,
  `nome_completo` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `senha` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cod_cliente`, `nome_completo`, `email`, `senha`) VALUES
(1, 'Thaian', 'thaian@email.com', '123'),
(3, 'user', 'user@email.com', '123'),
(5, 'user2', 'user2@email.com', '123'),
(8, 'user4', 'user4@email.com', '123'),
(7, 'user3', 'user3@email.com', '123'),
(9, 'user5', 'user5@email.com', '123'),
(10, 'user6', 'user6@email.com', '123'),
(11, 'user7', 'user7@email.com', '123'),
(12, 'user8', 'user8@email.com', '123'),
(13, 'admin', 'admin@email.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco_cobranca`
--

CREATE TABLE `endereco_cobranca` (
  `cod_endereco_cobranca` int(11) NOT NULL,
  `nome_completo` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `pais` varchar(30) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco_entrega`
--

CREATE TABLE `endereco_entrega` (
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cod_endereco_entrega` int(11) NOT NULL,
  `endereco` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cep` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pais` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notas` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `endereco_entrega`
--

INSERT INTO `endereco_entrega` (`nome`, `cod_endereco_entrega`, `endereco`, `cep`, `cidade`, `estado`, `pais`, `telefone`, `notas`) VALUES
('user3', 6, 'Rua ABC', '01010010', 'SÃ£o Paulo', 'SP', 'Brasil', '1199999999', 'nota teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `item_pedido`
--

CREATE TABLE `item_pedido` (
  `cod_item_pedido` int(11) NOT NULL,
  `cod_produto` int(11) NOT NULL,
  `num_pedido` int(11) NOT NULL,
  `data_pedido` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `cod_pagamento` int(11) NOT NULL,
  `forma_pagamento` varchar(30) DEFAULT NULL,
  `vencimento` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `cod_pedido` int(11) NOT NULL,
  `cod_cliente` int(11) NOT NULL,
  `cod_endereco_entrega` int(11) NOT NULL,
  `cod_endereco_cobranca` int(11) NOT NULL,
  `cod_pagamento` int(11) NOT NULL,
  `num_pedido` int(11) NOT NULL,
  `valor_total` decimal(4,2) DEFAULT NULL,
  `data` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `cod_produto` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `valor` decimal(4,2) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `cor` varchar(10) DEFAULT NULL,
  `tamanho` varchar(10) DEFAULT NULL,
  `categoria` varchar(30) DEFAULT NULL,
  `classificacao` varchar(30) DEFAULT NULL,
  `produto` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod_cliente`);

--
-- Indexes for table `endereco_cobranca`
--
ALTER TABLE `endereco_cobranca`
  ADD PRIMARY KEY (`cod_endereco_cobranca`);

--
-- Indexes for table `endereco_entrega`
--
ALTER TABLE `endereco_entrega`
  ADD PRIMARY KEY (`cod_endereco_entrega`);

--
-- Indexes for table `item_pedido`
--
ALTER TABLE `item_pedido`
  ADD PRIMARY KEY (`cod_item_pedido`),
  ADD KEY `cod_produto` (`cod_produto`);

--
-- Indexes for table `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`cod_pagamento`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`cod_pedido`),
  ADD KEY `cod_cliente` (`cod_cliente`),
  ADD KEY `cod_endereco_entrega` (`cod_endereco_entrega`),
  ADD KEY `cod_endereco_cobranca` (`cod_endereco_cobranca`),
  ADD KEY `cod_pagamento` (`cod_pagamento`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`cod_produto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cod_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `endereco_entrega`
--
ALTER TABLE `endereco_entrega`
  MODIFY `cod_endereco_entrega` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
