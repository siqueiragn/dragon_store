-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28-Ago-2017 às 20:34
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id_carrinho` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `total` float NOT NULL,
  `comprou` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id_carrinho`, `id_produto`, `id_usuario`, `quantidade`, `total`, `comprou`) VALUES(53, 67, 2, 1, 600, 1);
INSERT INTO `carrinho` (`id_carrinho`, `id_produto`, `id_usuario`, `quantidade`, `total`, `comprou`) VALUES(54, 68, 2, 1, 150, 1);
INSERT INTO `carrinho` (`id_carrinho`, `id_produto`, `id_usuario`, `quantidade`, `total`, `comprou`) VALUES(56, 2, 2, 1, 500, 1);
INSERT INTO `carrinho` (`id_carrinho`, `id_produto`, `id_usuario`, `quantidade`, `total`, `comprou`) VALUES(61, 67, 2, 1, 600, 1);
INSERT INTO `carrinho` (`id_carrinho`, `id_produto`, `id_usuario`, `quantidade`, `total`, `comprou`) VALUES(63, 85, 14, 1, 350, 1);
INSERT INTO `carrinho` (`id_carrinho`, `id_produto`, `id_usuario`, `quantidade`, `total`, `comprou`) VALUES(65, 2, 14, 1, 500, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome` varchar(256) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome`) VALUES(1, 'Terra');
INSERT INTO `categoria` (`id_categoria`, `nome`) VALUES(2, 'Fogo');
INSERT INTO `categoria` (`id_categoria`, `nome`) VALUES(3, 'Agua');
INSERT INTO `categoria` (`id_categoria`, `nome`) VALUES(4, 'Ar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(256) CHARACTER SET latin1 NOT NULL,
  `preco` float NOT NULL,
  `foto` varchar(256) CHARACTER SET latin1 NOT NULL,
  `quantidade` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `descricao` varchar(256) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome`, `preco`, `foto`, `quantidade`, `categoria`, `descricao`) VALUES(2, 'Viserion', 500, 'Game-of-Thrones-Viserion.jpg', 1, 2, 'Cabine Dupla, Tracionado, Ar condicionado, 4 Portas, Sensor de Re');
INSERT INTO `produto` (`id_produto`, `nome`, `preco`, `foto`, `quantidade`, `categoria`, `descricao`) VALUES(65, 'Alduin', 250, '7.jpg', 3, 1, 'Ã‰ do Skyrim');
INSERT INTO `produto` (`id_produto`, `nome`, `preco`, `foto`, `quantidade`, `categoria`, `descricao`) VALUES(67, 'Drogon', 600, 'drogon.jpeg', 12, 2, 'Voa, protagonista e etc');
INSERT INTO `produto` (`id_produto`, `nome`, `preco`, `foto`, `quantidade`, `categoria`, `descricao`) VALUES(68, 'Ender Dragon', 150, 'Ender-dragon.png', 6, 1, 'Minecraft, vive no The End');
INSERT INTO `produto` (`id_produto`, `nome`, `preco`, `foto`, `quantidade`, `categoria`, `descricao`) VALUES(77, 'Smaug o Dourado', 100, 'smaug.jpg', 0, 2, 'O terrivel, o invencivel, o dourado, o grandioso, o estupendo');
INSERT INTO `produto` (`id_produto`, `nome`, `preco`, `foto`, `quantidade`, `categoria`, `descricao`) VALUES(85, 'Rhaegal', 350, 'Rhaegal.png', 10, 2, 'Ã‰ o queridinho da Daenerys depois do Drogon, Ã³bviamente');
INSERT INTO `produto` (`id_produto`, `nome`, `preco`, `foto`, `quantidade`, `categoria`, `descricao`) VALUES(89, 'Shenlong', 1500, 'Shenlong_db_by_changopepe-d3e8ltb.png', 4, 2, 'Te concede uns desejos e outras coisas a mais');
INSERT INTO `produto` (`id_produto`, `nome`, `preco`, `foto`, `quantidade`, `categoria`, `descricao`) VALUES(91, 'Mushu', 50, '-Pc14K9u.jpeg', 15, 2, 'DragÃ£o de bolso da Mulan');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(256) CHARACTER SET latin1 NOT NULL,
  `email` varchar(256) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(256) CHARACTER SET latin1 NOT NULL,
  `cep` varchar(256) CHARACTER SET latin1 NOT NULL,
  `complemento` varchar(256) CHARACTER SET latin1 NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `numero` int(11) NOT NULL,
  `rua` varchar(256) NOT NULL,
  `bairro` varchar(256) NOT NULL,
  `cidade` varchar(256) NOT NULL,
  `uf` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `cep`, `complemento`, `is_admin`, `numero`, `rua`, `bairro`, `cidade`, `uf`) VALUES(1, 'gnunes', 'gnunes@h', '123', '', '', 1, 0, '', '', '', '');
INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `cep`, `complemento`, `is_admin`, `numero`, `rua`, `bairro`, `cidade`, `uf`) VALUES(2, 'Gabriel', 'gabrielndesiqueira@hotmail.com', '$2y$10$LF64.MPlSW08d6NqUylmFO3NU1aPj.jCuP0/3G2MYLHV9V9j89hSy', '94910170', 'Apt 103 Bloco D', 1, 603, 'Av. Papa João XXIII', 'Vila Cachoeirinha', 'Cachoeirinha', 'RS');
INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `cep`, `complemento`, `is_admin`, `numero`, `rua`, `bairro`, `cidade`, `uf`) VALUES(3, 'Raul', 'steffenraul@gmail.com', '$2y$10$zHOCQ/sXPpzuvZOR5ge.VuwnhpC1xjP98H4tVqIc90M7ReyWvJqa.', '94910170', '103 blá blá', 0, 0, '', '', '', '');
INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `cep`, `complemento`, `is_admin`, `numero`, `rua`, `bairro`, `cidade`, `uf`) VALUES(4, 'Guilherme', 'guimuller.f@outlook.com', '$2y$10$TabzxrnogIsMAbNAJJ9liOPlcQ.FbUK.WXSmlqwlzN6zqN9ZEbxnW', '91243123', '123123', 0, 0, '', '', '', '');
INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `cep`, `complemento`, `is_admin`, `numero`, `rua`, `bairro`, `cidade`, `uf`) VALUES(5, 'Gabriel', 'nunesdesiqueira5@gmail.com', '$2y$10$5BA4eNAts5.8j7motKO4u.HakJVwrUeSE0Ibfprr41u.cOaXoxRN2', '94910170', '103 D', 0, 0, '', '', '', '');
INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `cep`, `complemento`, `is_admin`, `numero`, `rua`, `bairro`, `cidade`, `uf`) VALUES(12, 'NOME', 'EMAIL@EMAIL.COM', '$2y$10$gPsM1C6NGhYDIuf1mdm1zezokOkHNDwwGPwJiW4eFQpQdo2nF5UBS', 'CEPCEPCE', 'COMPLEMENTO', 0, 123, 'RUA', 'BAIRRO', 'CIDADE', 'RR');
INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `cep`, `complemento`, `is_admin`, `numero`, `rua`, `bairro`, `cidade`, `uf`) VALUES(13, 'Raul', 'steffenraul@gmail.com.br', '$2y$10$MORu9oj4C1icZyc61zE5JOdoEVIsSOtkdUvCj4sQQys/qaNYWt8ce', '93212000', '', 0, 440, 'Avenida Isdralit', 'Colonial', 'Sapucaia do Sul', 'RS');
INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `cep`, `complemento`, `is_admin`, `numero`, `rua`, `bairro`, `cidade`, `uf`) VALUES(14, 'Rafael', 'rafael.pinto@canoas.ifrs.edu.br', '$2y$10$Ag6yZWbrbGL9V14hDeu6D.ehRMUMMP7XzG3spJ.2XbDGm3cZLUNsW', '94910170', '', 0, 603, 'Rua Papa JoÃ£o XXIII', 'Vila Cachoeirinha', 'Cachoeirinha', 'RS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_carrinho`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id_carrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
