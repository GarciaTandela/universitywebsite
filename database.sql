-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Fev-2020 às 23:13
-- Versão do servidor: 10.1.39-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ugs`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `IdAdministrador` int(10) UNSIGNED NOT NULL,
  `Primeiro_Nome` varchar(45) NOT NULL,
  `Ultimo_Nome` varchar(45) NOT NULL,
  `Senha` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Status` varchar(45) NOT NULL,
  `Privilégio` varchar(45) NOT NULL,
  `Foto` varchar(45) DEFAULT NULL,
  `Genero` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`IdAdministrador`, `Primeiro_Nome`, `Ultimo_Nome`, `Senha`, `Email`, `Status`, `Privilégio`, `Foto`, `Genero`) VALUES
(1, 'Yannick', 'Silva', '1234', 'garciatandela@gmail.com', 'Activo', 'Sim', '', 'Masculino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `IdAluno` int(11) NOT NULL,
  `Primeiro_Nome` varchar(45) NOT NULL,
  `Ultimo_Nome` varchar(45) NOT NULL,
  `Curso` varchar(45) NOT NULL,
  `Foto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aviso_comunicado`
--

CREATE TABLE `aviso_comunicado` (
  `IdAviso_Comunicado` int(10) UNSIGNED NOT NULL,
  `Titulo` varchar(45) NOT NULL,
  `Descricao` varchar(45) NOT NULL,
  `Foto` varchar(45) NOT NULL,
  `Data_publicacao` varchar(45) NOT NULL,
  `Data_estreia` varchar(45) NOT NULL,
  `Administrador_IdAdministrador` int(10) UNSIGNED NOT NULL,
  `Faculdade_IdFaculdade` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `IdCliente` int(10) UNSIGNED NOT NULL,
  `Primeiro_Nome` varchar(45) NOT NULL,
  `Ultimo_Nome` varchar(45) NOT NULL,
  `Telemovel` varchar(45) NOT NULL,
  `Mensagem` varchar(45) NOT NULL,
  `Status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`IdCliente`, `Primeiro_Nome`, `Ultimo_Nome`, `Telemovel`, `Mensagem`, `Status`) VALUES
(14, 'MÃ¡rio', 'Pinto', '926920530', 'OlÃ¡', 'NÃ£o visualizada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `IdCurso` int(10) UNSIGNED NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `Faculdade_IdFaculdade` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `depoimento`
--

CREATE TABLE `depoimento` (
  `IdDepoimento` int(10) UNSIGNED NOT NULL,
  `Descricao` varchar(45) NOT NULL,
  `Aluno_IdAluno` int(11) NOT NULL,
  `Status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `IdDisciplina` int(10) UNSIGNED NOT NULL,
  `Nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina_has_curso`
--

CREATE TABLE `disciplina_has_curso` (
  `Disciplina_IdDisciplina` int(10) UNSIGNED NOT NULL,
  `Curso_IdCurso` int(10) UNSIGNED NOT NULL,
  `Curso_Faculdade_IdFaculdade` int(10) UNSIGNED NOT NULL,
  `Duracao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina_has_professor`
--

CREATE TABLE `disciplina_has_professor` (
  `Disciplina_IdDisciplina` int(10) UNSIGNED NOT NULL,
  `Professor_IdProfessor` int(10) UNSIGNED NOT NULL,
  `Professor_Faculdade_IdFaculdade` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `faculdade`
--

CREATE TABLE `faculdade` (
  `IdFaculdade` int(10) UNSIGNED NOT NULL,
  `Nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia_evento`
--

CREATE TABLE `noticia_evento` (
  `IdNoticia_Evento` int(10) UNSIGNED NOT NULL,
  `Titulo` varchar(45) NOT NULL,
  `Descricao` varchar(45) NOT NULL,
  `Foto` varchar(45) NOT NULL,
  `Data_publicacao` date NOT NULL,
  `Data_estreia` date NOT NULL,
  `Administrador_IdAdministrador` int(10) UNSIGNED NOT NULL,
  `Faculdade_IdFaculdade` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `IdProfessor` int(10) UNSIGNED NOT NULL,
  `Primeiro_Nome` varchar(45) NOT NULL,
  `Ultimo_Nome` varchar(45) NOT NULL,
  `Foto` varchar(45) NOT NULL,
  `Descricao` varchar(45) NOT NULL,
  `Faculdade_IdFaculdade` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`IdAdministrador`),
  ADD UNIQUE KEY `IdAdminitrador_UNIQUE` (`IdAdministrador`),
  ADD UNIQUE KEY `Email_UNIQUE` (`Email`);

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`IdAluno`),
  ADD UNIQUE KEY `IdAluno_UNIQUE` (`IdAluno`);

--
-- Indexes for table `aviso_comunicado`
--
ALTER TABLE `aviso_comunicado`
  ADD PRIMARY KEY (`IdAviso_Comunicado`,`Administrador_IdAdministrador`,`Faculdade_IdFaculdade`),
  ADD UNIQUE KEY `IdAviso_Comunicado_UNIQUE` (`IdAviso_Comunicado`),
  ADD KEY `fk_Aviso_Comunicado_Administrador1_idx` (`Administrador_IdAdministrador`),
  ADD KEY `fk_Aviso_Comunicado_Faculdade1_idx` (`Faculdade_IdFaculdade`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`IdCliente`),
  ADD UNIQUE KEY `IdCliente_UNIQUE` (`IdCliente`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`IdCurso`,`Faculdade_IdFaculdade`),
  ADD UNIQUE KEY `IdCurso_UNIQUE` (`IdCurso`),
  ADD UNIQUE KEY `Nome_UNIQUE` (`Nome`),
  ADD KEY `fk_Curso_Faculdade1_idx` (`Faculdade_IdFaculdade`);

--
-- Indexes for table `depoimento`
--
ALTER TABLE `depoimento`
  ADD PRIMARY KEY (`IdDepoimento`,`Aluno_IdAluno`),
  ADD UNIQUE KEY `IdDepoimento_UNIQUE` (`IdDepoimento`),
  ADD KEY `fk_Depoimento_Aluno1_idx` (`Aluno_IdAluno`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`IdDisciplina`),
  ADD UNIQUE KEY `IdDisciplina_UNIQUE` (`IdDisciplina`),
  ADD UNIQUE KEY `Nome_UNIQUE` (`Nome`);

--
-- Indexes for table `disciplina_has_curso`
--
ALTER TABLE `disciplina_has_curso`
  ADD PRIMARY KEY (`Disciplina_IdDisciplina`,`Curso_IdCurso`,`Curso_Faculdade_IdFaculdade`),
  ADD KEY `fk_Disciplina_has_Curso_Curso1_idx` (`Curso_IdCurso`,`Curso_Faculdade_IdFaculdade`),
  ADD KEY `fk_Disciplina_has_Curso_Disciplina1_idx` (`Disciplina_IdDisciplina`);

--
-- Indexes for table `disciplina_has_professor`
--
ALTER TABLE `disciplina_has_professor`
  ADD PRIMARY KEY (`Disciplina_IdDisciplina`,`Professor_IdProfessor`,`Professor_Faculdade_IdFaculdade`),
  ADD KEY `fk_Disciplina_has_Professor_Professor1_idx` (`Professor_IdProfessor`,`Professor_Faculdade_IdFaculdade`),
  ADD KEY `fk_Disciplina_has_Professor_Disciplina1_idx` (`Disciplina_IdDisciplina`);

--
-- Indexes for table `faculdade`
--
ALTER TABLE `faculdade`
  ADD PRIMARY KEY (`IdFaculdade`),
  ADD UNIQUE KEY `IdFaculdade_UNIQUE` (`IdFaculdade`),
  ADD UNIQUE KEY `Nome_UNIQUE` (`Nome`);

--
-- Indexes for table `noticia_evento`
--
ALTER TABLE `noticia_evento`
  ADD PRIMARY KEY (`IdNoticia_Evento`,`Administrador_IdAdministrador`,`Faculdade_IdFaculdade`),
  ADD UNIQUE KEY `IdNoticia_Evento_UNIQUE` (`IdNoticia_Evento`),
  ADD KEY `fk_Noticia_Evento_Administrador1_idx` (`Administrador_IdAdministrador`),
  ADD KEY `fk_Noticia_Evento_Faculdade1_idx` (`Faculdade_IdFaculdade`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`IdProfessor`,`Faculdade_IdFaculdade`),
  ADD UNIQUE KEY `IdProfessor_UNIQUE` (`IdProfessor`),
  ADD KEY `fk_Professor_Faculdade1_idx` (`Faculdade_IdFaculdade`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `IdAdministrador` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `IdAluno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aviso_comunicado`
--
ALTER TABLE `aviso_comunicado`
  MODIFY `IdAviso_Comunicado` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `IdCliente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `IdCurso` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `depoimento`
--
ALTER TABLE `depoimento`
  MODIFY `IdDepoimento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `IdDisciplina` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `disciplina_has_curso`
--
ALTER TABLE `disciplina_has_curso`
  MODIFY `Disciplina_IdDisciplina` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculdade`
--
ALTER TABLE `faculdade`
  MODIFY `IdFaculdade` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `noticia_evento`
--
ALTER TABLE `noticia_evento`
  MODIFY `IdNoticia_Evento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `IdProfessor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aviso_comunicado`
--
ALTER TABLE `aviso_comunicado`
  ADD CONSTRAINT `fk_Aviso_Comunicado_Administrador1` FOREIGN KEY (`Administrador_IdAdministrador`) REFERENCES `administrador` (`IdAdministrador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Aviso_Comunicado_Faculdade1` FOREIGN KEY (`Faculdade_IdFaculdade`) REFERENCES `faculdade` (`IdFaculdade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `fk_Curso_Faculdade1` FOREIGN KEY (`Faculdade_IdFaculdade`) REFERENCES `faculdade` (`IdFaculdade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `depoimento`
--
ALTER TABLE `depoimento`
  ADD CONSTRAINT `fk_Depoimento_Aluno1` FOREIGN KEY (`Aluno_IdAluno`) REFERENCES `aluno` (`IdAluno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `disciplina_has_curso`
--
ALTER TABLE `disciplina_has_curso`
  ADD CONSTRAINT `fk_Disciplina_has_Curso_Curso1` FOREIGN KEY (`Curso_IdCurso`,`Curso_Faculdade_IdFaculdade`) REFERENCES `curso` (`IdCurso`, `Faculdade_IdFaculdade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Disciplina_has_Curso_Disciplina1` FOREIGN KEY (`Disciplina_IdDisciplina`) REFERENCES `disciplina` (`IdDisciplina`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `disciplina_has_professor`
--
ALTER TABLE `disciplina_has_professor`
  ADD CONSTRAINT `fk_Disciplina_has_Professor_Disciplina1` FOREIGN KEY (`Disciplina_IdDisciplina`) REFERENCES `disciplina` (`IdDisciplina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Disciplina_has_Professor_Professor1` FOREIGN KEY (`Professor_IdProfessor`,`Professor_Faculdade_IdFaculdade`) REFERENCES `professor` (`IdProfessor`, `Faculdade_IdFaculdade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `noticia_evento`
--
ALTER TABLE `noticia_evento`
  ADD CONSTRAINT `fk_Noticia_Evento_Administrador1` FOREIGN KEY (`Administrador_IdAdministrador`) REFERENCES `administrador` (`IdAdministrador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Noticia_Evento_Faculdade1` FOREIGN KEY (`Faculdade_IdFaculdade`) REFERENCES `faculdade` (`IdFaculdade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `fk_Professor_Faculdade1` FOREIGN KEY (`Faculdade_IdFaculdade`) REFERENCES `faculdade` (`IdFaculdade`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
