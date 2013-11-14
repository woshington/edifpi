
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `atividade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `tipo_atividade_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `atividade`
--

INSERT INTO `atividade` (`id`, `titulo`, `descricao`, `tipo_atividade_id`) VALUES
(1, 'Palestra A', 'Palestra A', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricao`
--

CREATE TABLE IF NOT EXISTS `inscricao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_inscricao` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `data_pagamento` date NOT NULL,
  `participante_id` int(11) NOT NULL,
  `tipo_participacao_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricao_atividade`
--

CREATE TABLE IF NOT EXISTS `inscricao_atividade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inscricao_id` int(11) NOT NULL,
  `atividade_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Instituicao`
--

CREATE TABLE IF NOT EXISTS `Instituicao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `sigla` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Estrutura da tabela `Participante`
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
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `Participante`
--

INSERT INTO `participante` (`id`, `nome`, `cpf`, `nascimento`, `email`, `senha`, `status`, `admin`, `instituicao_id`) VALUES
(5, 'woshington valdeci de sousa', '03722424305', '1991-02-06', 'woshingtonvaldeci@gmail.com', 'e061df686a65bdf7a5ee7b2d358a991f3e067311', 1, 1, 2),
(36, 'woshington valdeci', '13722424305', '1991-02-06', 'woshington@gmail.com', 'e061df686a65bdf7a5ee7b2d358a991f3e067311', 1, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_atividade`
--

CREATE TABLE IF NOT EXISTS `tipo_atividade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `agrupar` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `tipo_participacao`
--

INSERT INTO `tipo_participacao` (`id`, `descricao`, `valor`, `inicio_inscricao`, `fim_inscricao`, `tipo_participante_id`) VALUES
(1, 'Somente palestras', 20.00, '2013-11-12', '2013-12-05', 1),
(2, 'Somente palestras', 40.00, '2013-11-12', '2013-12-05', 2),
(3, 'Palestras e minicurso', 40.00, '2013-11-13', '2013-12-04', 1),
(4, 'Palestras e minicurso', 60.00, '2013-11-13', '2013-12-04', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_participacao_tipo_atividade`
--

CREATE TABLE IF NOT EXISTS `tipo_participacao_tipo_atividade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_atividade_id` int(11) NOT NULL,
  `tipo_participacao_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `tipo_participacao_tipo_atividade`
--

INSERT INTO `tipo_participacao_tipo_atividade` (`id`, `tipo_atividade_id`, `tipo_participacao_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 3),
(7, 2, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_participante`
--

CREATE TABLE IF NOT EXISTS `tipo_participante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


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
  ADD CONSTRAINT `fk_inscricao_Participante1` FOREIGN KEY (`Participante_id`) REFERENCES `participante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_inscricao_tipo_participacao1` FOREIGN KEY (`tipo_participacao_id`) REFERENCES `tipo_participacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `inscricao_atividade`
--
ALTER TABLE `inscricao_atividade`
  ADD CONSTRAINT `fk_inscricao_has_atividade_inscricao1` FOREIGN KEY (`inscricao_id`) REFERENCES `inscricao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_inscricao_has_atividade_atividade1` FOREIGN KEY (`atividade_id`) REFERENCES `atividade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `Participante`
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
  ADD CONSTRAINT `fk_tipo_participacao_tipo_atividade_tipo_participacao` FOREIGN KEY (`tipo_participacao_id`) REFERENCES `tipo_participacao` (`id`),
  ADD CONSTRAINT `fk_tipo_participacao_tipo_atividade_tipo_atividade` FOREIGN KEY (`tipo_atividade_id`) REFERENCES `tipo_atividade` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;