-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 24-Nov-2013 às 19:20
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `atividade`
--

INSERT INTO `atividade` (`id`, `titulo`, `descricao`, `turno`, `tipo_atividade_id`) VALUES
(5, 'CakePHP', 'Framework de desenvolvimento rÃ¡pido para PHP', 'tarde', 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `inscricao`
--

INSERT INTO `inscricao` (`id`, `created`, `status`, `data_pagamento`, `adicional`, `participante_id`, `tipo_participacao_id`) VALUES
(14, '2013-11-24', 0, NULL, 0, 50, 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `inscricao_atividade`
--

INSERT INTO `inscricao_atividade` (`id`, `inscricao_id`, `atividade_id`) VALUES
(1, 14, 5);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Extraindo dados da tabela `participante`
--

INSERT INTO `participante` (`id`, `nome`, `cpf`, `nascimento`, `email`, `senha`, `status`, `admin`, `instituicao_id`) VALUES
(49, 'edifpi 2013', '11111111111', '2013-12-04', 'edifpi@edu.br', '2fdc4f14b0fa85902f33a46c89209484647e5aac', 1, 1, 2),
(50, 'woshington valdeci de sousa', '03722424305', '1991-02-06', 'woshington@gmail.com', '1801410dbf8e5a789ab33c83949529dc4f0a77c6', 1, 1, 2);

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
