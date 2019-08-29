CREATE DATABASE `agenda_med`;

USE `agenda_med`;

CREATE TABLE `paciente` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `data_nascimento` date NOT NULL,
  `telefone` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

CREATE TABLE `medico` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `especialidade` varchar(45) NOT NULL,
  `crm` int(11) NOT NULL,
  UNIQUE KEY `crm_unique` (`crm`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

CREATE TABLE `agendamento` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `medico_id` int(11) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `data_agendamento` datetime DEFAULT NULL,
  KEY `medico_fk_idx` (`medico_id`),
  KEY `paciente_fk_idx` (`paciente_id`),
  CONSTRAINT `medico_fk` FOREIGN KEY (`medico_id`) REFERENCES `medico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `paciente_fk` FOREIGN KEY (`paciente_id`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;