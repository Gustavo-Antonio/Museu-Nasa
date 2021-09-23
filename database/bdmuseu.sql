-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Set-2021 às 08:13
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdmuseu`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbautor`
--

CREATE TABLE `tbautor` (
  `idAutor` int(11) NOT NULL,
  `nomeAutor` varchar(50) NOT NULL,
  `dataNascimentoAutor` varchar(50) NOT NULL,
  `dataFalecimentoAutor` varchar(50) NOT NULL,
  `nacionalidadeAutor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbautor`
--

INSERT INTO `tbautor` (`idAutor`, `nomeAutor`, `dataNascimentoAutor`, `dataFalecimentoAutor`, `nacionalidadeAutor`) VALUES
(2, 'William Herschel', '15 de nove', '25 de agos', 'Alemão'),
(3, 'Mikhail Lomonossov', '15 de novembro de 1738', '25 de agosto de 1822', 'Russo'),
(4, 'Galileu Galilei', '15 de fevereiro de 1564', '8 de janeiro de 1642', 'Italiano'),
(5, 'Jonas', '15 de fevereiro de 1560', '19 de janeiro de 1642', 'Japones'),
(6, 'Neil Armstrong', '5 de agosto de 1930', '25 de agosto de 2012', 'Americano'),
(7, 'Iuri Gagarin', '9 de março de 1934', '27 de março de 1968', 'Russo'),
(8, 'Carl Sagan', ' 9 de novembro de 1934', '20 de dezembro de 1996', 'Americano');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategoria`
--

CREATE TABLE `tbcategoria` (
  `idCategoria` int(11) NOT NULL,
  `nomeCategoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcategoria`
--

INSERT INTO `tbcategoria` (`idCategoria`, `nomeCategoria`) VALUES
(1, 'Planeta'),
(2, 'Satélite artificial'),
(3, 'Viagem Espacial'),
(4, 'Década De 70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbimagem`
--

CREATE TABLE `tbimagem` (
  `idImagem` int(11) NOT NULL,
  `descricaoImagem` varchar(50) NOT NULL,
  `caminhoImagem` varchar(150) NOT NULL,
  `idObra` int(11) NOT NULL,
  `textoImagem` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbimagem`
--

INSERT INTO `tbimagem` (`idImagem`, `descricaoImagem`, `caminhoImagem`, `idObra`, `textoImagem`) VALUES
(21, 'Neil Armstrong Na Lua', 'images/apolo11.jpg', 6, 'Nessa Imagem Podemos ver Neil Armstrong Colocando A bandeira Do EUA Na Lua Na famosa Viagem Do Apolo 11 '),
(22, 'Vostok1 ', 'images/Vostok1.jpg', 7, 'Vostok I foi a primeira missão do programa espacial soviético Vostok e a primeira missão espacial tripulada da História. A espaçonave foi lançada em 12 de abril de 1961, levando Yuri Gagarin, um cosmonauta e piloto da Força Aérea Soviética, ao espaço'),
(23, 'Concepção artística da espaçonave Voyager no espaç', 'images/1024px-Voyager_spacecraft.jpg', 8, 'Voyager é o projeto do físico mais foda do mundo que mudou todo o campo da f´siica '),
(24, 'Amor', 'images/1024px-Voyager_spacecraft.jpg', 8, 'Alguma Coisa\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbobra`
--

CREATE TABLE `tbobra` (
  `idObra` int(11) NOT NULL,
  `nomeObra` varchar(50) NOT NULL,
  `dataObra` varchar(50) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `idPeriodo` int(11) NOT NULL,
  `idAutor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbobra`
--

INSERT INTO `tbobra` (`idObra`, `nomeObra`, `dataObra`, `idCategoria`, `idPeriodo`, `idAutor`) VALUES
(6, 'Apolo 11', '16 de jul. de 1969 ', 3, 5, 6),
(7, 'Vostok 1', '12 de abril de 1961', 3, 5, 7),
(8, 'Voyager', '5 de setembro de 1977', 4, 8, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbperiodo`
--

CREATE TABLE `tbperiodo` (
  `idPeriodo` int(11) NOT NULL,
  `nomePeriodo` varchar(30) NOT NULL,
  `dataInicioPeriodo` varchar(50) NOT NULL,
  `dataFimPeriodo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbperiodo`
--

INSERT INTO `tbperiodo` (`idPeriodo`, `nomePeriodo`, `dataInicioPeriodo`, `dataFimPeriodo`) VALUES
(1, 'Renascimento ', 'XV', 'XVIII'),
(2, 'Iluminismo', 'XV', 'XVI'),
(5, 'Década de 60', '1 de ', '31 de'),
(6, '', '', ''),
(7, '', '', ''),
(8, 'Viagem Espacial', ' 20 d', '5 de '),
(9, '', '', ''),
(10, 'Viagem', '20 de', '5 de '),
(11, 'Viagem', '20 de agosto de 1977', '5 de setembro de 1977');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbautor`
--
ALTER TABLE `tbautor`
  ADD PRIMARY KEY (`idAutor`);

--
-- Índices para tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices para tabela `tbimagem`
--
ALTER TABLE `tbimagem`
  ADD PRIMARY KEY (`idImagem`);

--
-- Índices para tabela `tbobra`
--
ALTER TABLE `tbobra`
  ADD PRIMARY KEY (`idObra`);

--
-- Índices para tabela `tbperiodo`
--
ALTER TABLE `tbperiodo`
  ADD PRIMARY KEY (`idPeriodo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbautor`
--
ALTER TABLE `tbautor`
  MODIFY `idAutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbimagem`
--
ALTER TABLE `tbimagem`
  MODIFY `idImagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `tbobra`
--
ALTER TABLE `tbobra`
  MODIFY `idObra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbperiodo`
--
ALTER TABLE `tbperiodo`
  MODIFY `idPeriodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
