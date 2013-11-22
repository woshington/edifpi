-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 22-Nov-2013 às 11:31
-- Versão do servidor: 5.5.33a-MariaDB
-- versão do PHP: 5.5.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `edifpi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade`
--

CREATE TABLE IF NOT EXISTS `atividade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `turno` varchar(20) NOT NULL,
  `tipo_atividade_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_atividade_tipo_atividade1` (`tipo_atividade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `atividade`
--

INSERT INTO `atividade` (`id`, `titulo`, `descricao`, `turno`, `tipo_atividade_id`) VALUES
(1, 'Palestra C', 'Palestra A', 'noite', 1),
(2, 'Palestras B', 'Palestra B', 'noite', 1),
(3, 'Minicurso 1 ', 'Ruby on Rails', 'tarde', 2),
(4, 'Minicurso 3', 'Git', 'manha', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricao`
--

CREATE TABLE IF NOT EXISTS `inscricao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `data_pagamento` date DEFAULT NULL,
  `adicional` tinyint(1) NOT NULL,
  `participante_id` int(11) NOT NULL,
  `tipo_participacao_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `participante_id` (`participante_id`),
  KEY `fk_inscricao_tipo_participacao1` (`tipo_participacao_id`),
  KEY `participante_id_2` (`participante_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `inscricao`
--

INSERT INTO `inscricao` (`id`, `created`, `status`, `data_pagamento`, `adicional`, `participante_id`, `tipo_participacao_id`) VALUES
(1, '2013-11-19', 0, NULL, 0, 42, 1),
(4, '2013-11-14', 0, NULL, 0, 5, 1),
(6, '2013-11-16', 0, NULL, 0, 36, 5),
(7, '2013-11-08', 1, '2013-11-19', 0, 44, 4),
(8, '2013-11-18', 0, NULL, 0, 38, 1),
(9, '2013-11-19', 0, NULL, 0, 46, 1),
(10, '2013-11-22', 0, NULL, 0, 47, 5),
(12, '2013-11-22', 1, '2013-11-22', 0, 45, 4),
(13, '2013-11-22', 1, '2013-11-22', 0, 43, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricao_atividade`
--

CREATE TABLE IF NOT EXISTS `inscricao_atividade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inscricao_id` int(11) NOT NULL,
  `atividade_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_inscricao_has_atividade_inscricao1` (`inscricao_id`),
  KEY `fk_inscricao_has_atividade_atividade1` (`atividade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Extraindo dados da tabela `inscricao_atividade`
--

INSERT INTO `inscricao_atividade` (`id`, `inscricao_id`, `atividade_id`) VALUES
(6, 4, 1),
(7, 4, 2),
(15, 1, 1),
(16, 1, 2),
(22, 6, 1),
(23, 6, 2),
(28, 7, 1),
(29, 7, 2),
(30, 8, 1),
(31, 8, 2),
(32, 7, 3),
(34, 9, 1),
(35, 9, 2),
(37, 10, 1),
(38, 10, 2),
(47, 10, 3),
(48, 10, 4),
(54, 6, 3),
(55, 6, 4),
(57, 12, 1),
(58, 12, 2),
(60, 12, 4),
(61, 13, 3),
(62, 13, 1),
(63, 13, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Instituicao`
--

CREATE TABLE IF NOT EXISTS `Instituicao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `sigla` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `Instituicao`
--

INSERT INTO `Instituicao` (`id`, `nome`, `sigla`) VALUES
(1, 'Universidade Federal do Piaui', 'UFPI'),
(2, 'Instituto Federal do Piaui', 'IFPI'),
(3, 'Faculdade Rsa', 'RSÃ'),
(4, 'Outros', 'Outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `participante`
--

CREATE TABLE IF NOT EXISTS `participante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `instituicao_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `fk_Participante_Instituicao` (`instituicao_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Extraindo dados da tabela `participante`
--

INSERT INTO `participante` (`id`, `nome`, `cpf`, `nascimento`, `email`, `senha`, `status`, `admin`, `instituicao_id`) VALUES
(5, 'woshington valdeci de sousa', '23722424305', '1992-02-06', 'woshingtonvaldeci@gmail.com', 'e061df686a65bdf7a5ee7b2d358a991f3e067311', 1, 1, 2),
(36, 'woshington valdeci', '13722424305', '1991-02-06', 'woshington@gmail.com', 'e061df686a65bdf7a5ee7b2d358a991f3e067311', 1, 0, 1),
(38, 'david bob 1', '05561355392', '1995-02-03', 'daviddluz@gmail.com', 'e50d693551278ed3f0bc9bd5b4a1ee2be126aa66', 1, 0, 2),
(39, 'Caio henrique', '04962462326', '1994-02-17', 'caiohenrique@gmail.com', 'e50d693551278ed3f0bc9bd5b4a1ee2be126aa66', 1, 0, 1),
(40, 'abcdef', '23466090909', '1991-02-06', 'teste@gmail.com', 'e061df686a65bdf7a5ee7b2d358a991f3e067311', 1, 0, 1),
(41, 'david bob 1', '05566666666', '1990-02-06', 'bob@gmail.com', 'e50d693551278ed3f0bc9bd5b4a1ee2be126aa66', 1, 0, 3),
(42, 'Clesio GonÃ§alves', '89898989898', '2000-09-07', 'testeclesio@gmail.com', 'e50d693551278ed3f0bc9bd5b4a1ee2be126aa66', 1, 0, 2),
(43, 'weslley valdeci de sousa', '43722424305', '1991-02-06', 'abc@gmail.com', 'e061df686a65bdf7a5ee7b2d358a991f3e067311', 1, 0, 1),
(44, 'David', '05561355398', '1995-02-03', 'david@gmail.com', 'e50d693551278ed3f0bc9bd5b4a1ee2be126aa66', 1, 0, 2),
(45, 'teste', '11111111111', '2008-08-08', 'teste2@gmail.com', 'e061df686a65bdf7a5ee7b2d358a991f3e067311', 1, 0, 1),
(46, 'Artur Luiz Torres de Oliveira', '03041086425', '1979-01-12', 'artur@ifpi.edu.br', 'e50d693551278ed3f0bc9bd5b4a1ee2be126aa66', 1, 0, 2),
(47, 'weslley valdeci de sousa', '09090909090', '2000-09-09', 'teste3@gmail.com', 'e061df686a65bdf7a5ee7b2d358a991f3e067311', 1, 0, 1),
(48, 'admin', '99999999999', '2013-11-22', 'admin@edifpi.com', 'e061df686a65bdf7a5ee7b2d358a991f3e067311', 1, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_atividade`
--

CREATE TABLE IF NOT EXISTS `tipo_atividade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `agrupar` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tipo_atividade`
--

INSERT INTO `tipo_atividade` (`id`, `descricao`, `agrupar`) VALUES
(1, 'Palestras', 1),
(2, 'Minicurso', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_participacao`
--

CREATE TABLE IF NOT EXISTS `tipo_participacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `valor` float(5,2) NOT NULL,
  `inicio_inscricao` date NOT NULL,
  `fim_inscricao` date NOT NULL,
  `tipo_participante_id` int(11) NOT NULL,
  `mini_adicional` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tipo_participacao_tipo_participante1` (`tipo_participante_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tipo_participacao`
--

INSERT INTO `tipo_participacao` (`id`, `descricao`, `valor`, `inicio_inscricao`, `fim_inscricao`, `tipo_participante_id`, `mini_adicional`) VALUES
(1, 'Somente palestras', 20.00, '2013-11-12', '2013-12-05', 1, 0),
(2, 'Somente palestras', 40.00, '2013-11-12', '2013-12-05', 2, 0),
(3, 'Palestras e minicurso', 40.00, '2013-11-13', '2013-12-04', 1, 0),
(4, 'Palestras e minicurso', 60.00, '2013-11-13', '2013-12-04', 2, 0),
(5, 'Palestras e 2 minicursos', 70.00, '2013-11-21', '2013-11-04', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_participacao_tipo_atividade`
--

CREATE TABLE IF NOT EXISTS `tipo_participacao_tipo_atividade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_atividade_id` int(11) NOT NULL,
  `tipo_participacao_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tipo_participacao_tipo_atividade_tipo_participacao` (`tipo_participacao_id`),
  KEY `fk_tipo_participacao_tipo_atividade_tipo_atividade` (`tipo_atividade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `tipo_participacao_tipo_atividade`
--

INSERT INTO `tipo_participacao_tipo_atividade` (`id`, `tipo_atividade_id`, `tipo_participacao_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 3),
(7, 2, 4),
(8, 1, 5),
(9, 2, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_participante`
--

CREATE TABLE IF NOT EXISTS `tipo_participante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tipo_participante`
--

INSERT INTO `tipo_participante` (`id`, `descricao`) VALUES
(1, 'Estudante'),
(2, 'Profissional');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `atividade`
--
ALTER TABLE `atividade`
  ADD CONSTRAINT `fk_atividade_tipo_atividade1` FOREIGN KEY (`tipo_atividade_id`) REFERENCES `tipo_atividade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `inscricao`
--
ALTER TABLE `inscricao`
  ADD CONSTRAINT `fk_inscricao_Participante1` FOREIGN KEY (`participante_id`) REFERENCES `participante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_inscricao_tipo_participacao1` FOREIGN KEY (`tipo_participacao_id`) REFERENCES `tipo_participacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `inscricao_atividade`
--
ALTER TABLE `inscricao_atividade`
  ADD CONSTRAINT `fk_inscricao_has_atividade_atividade1` FOREIGN KEY (`atividade_id`) REFERENCES `atividade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_inscricao_has_atividade_inscricao1` FOREIGN KEY (`inscricao_id`) REFERENCES `inscricao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `participante`
--
ALTER TABLE `participante`
  ADD CONSTRAINT `fk_Participante_Instituicao` FOREIGN KEY (`instituicao_id`) REFERENCES `Instituicao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tipo_participacao`
--
ALTER TABLE `tipo_participacao`
  ADD CONSTRAINT `fk_tipo_participacao_tipo_participante1` FOREIGN KEY (`tipo_participante_id`) REFERENCES `tipo_participante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tipo_participacao_tipo_atividade`
--
ALTER TABLE `tipo_participacao_tipo_atividade`
  ADD CONSTRAINT `fk_tipo_participacao_tipo_atividade_tipo_atividade` FOREIGN KEY (`tipo_atividade_id`) REFERENCES `tipo_atividade` (`id`),
  ADD CONSTRAINT `fk_tipo_participacao_tipo_atividade_tipo_participacao` FOREIGN KEY (`tipo_participacao_id`) REFERENCES `tipo_participacao` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
