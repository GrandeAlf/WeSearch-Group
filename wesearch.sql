-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 26-Nov-2018 às 23:54
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wesearch`
--
CREATE DATABASE IF NOT EXISTS `wesearch` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wesearch`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `cod_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `curso` varchar(100) NOT NULL,
  `lattes` varchar(100) NOT NULL,
  PRIMARY KEY (`cod_aluno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`cod_aluno`, `nome`, `curso`, `lattes`) VALUES
(1, 'Daredevil', '', 'sdkjfhdjkfdhfjkshfk'),
(2, 'Punisher', 'sldfjdlvpodkvemwo', 'vn  kdnvdsk kis');

-- --------------------------------------------------------

--
-- Estrutura da tabela `area_conhecimento`
--

DROP TABLE IF EXISTS `area_conhecimento`;
CREATE TABLE IF NOT EXISTS `area_conhecimento` (
  `cod_area_conhecimento` int(11) NOT NULL,
  `nome_area` varchar(80) NOT NULL,
  `fk_grande_area` int(11) NOT NULL,
  PRIMARY KEY (`cod_area_conhecimento`),
  KEY `FK` (`fk_grande_area`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `area_conhecimento`
--

INSERT INTO `area_conhecimento` (`cod_area_conhecimento`, `nome_area`, `fk_grande_area`) VALUES
(10100008, 'Matematica', 10000003),
(10200002, 'Probabilidade e Estatistica', 10000003),
(10300007, 'Ciencia da Computacao', 10000003),
(10400001, 'Astronomia', 10000003),
(10500006, 'Fisica', 10000003),
(10600000, 'Quimica', 10000003),
(10700005, 'Geociencias', 10000003),
(10800000, 'Oceanografia', 10000003),
(20100000, 'Biologia Geral', 20000006),
(20200005, 'Genetica', 20000006),
(20300000, 'Botanica', 20000006),
(20400004, 'Zoologia', 20000006),
(20500009, 'Ecologia', 20000006),
(20600003, 'Morfologia', 20000006),
(20700008, 'Fisiologia', 20000006),
(20800002, 'Bioquimica', 20000006),
(20900007, 'Biofisica', 20000006),
(21000000, 'Farmacologia', 20000006),
(21100004, 'Imunologia', 20000006),
(21200009, 'Microbiologia', 20000006),
(21300003, 'Parasitologia', 20000006),
(21400008, 'Biotecnologia', 20000006),
(30100003, 'Engenharia Civil', 30000009),
(30200008, 'Engenharia de Minas', 30000009),
(30300002, 'Engenharia de Materiais e Metalurgica', 30000009),
(30400007, 'Engenharia Eletrica', 30000009),
(30500001, 'Engenharia Mecanica', 30000009),
(30600006, 'Engenharia Quimica', 30000009),
(30700000, 'Engenharia Sanitaria', 30000009),
(30800005, 'Engenharia de Producao', 30000009),
(30900000, 'Engenharia Nuclear', 30000009),
(31000002, 'Engenharia de Transportes', 30000009),
(31100007, 'Engenharia Naval e Oceanica', 30000009),
(31200001, 'Engenharia Aeroespacial', 30000009),
(31300006, 'Engenharia Biomedica', 30000009),
(31400000, 'Engenharia de Energia', 30000009),
(40100006, 'Medicina', 40000001),
(40200000, 'Odontologia', 40000001),
(40300005, 'Farmacia', 40000001),
(40400000, 'Enfermagem', 40000001),
(40500004, 'Nutricao', 40000001),
(40600009, 'Saude Coletiva', 40000001),
(40700003, 'Fonoaudiologia', 40000001),
(40800008, 'Fisioterapia e Terapia Ocupacional', 40000001),
(40900002, 'Educacao Fisica', 40000001),
(50100009, 'Agronomia', 50000004),
(50200003, 'Recursos Florestais e Engenharia Florestal', 50000004),
(50300008, 'Engenharia Agricola', 50000004),
(50400002, 'Zootecnia', 50000004),
(50500007, 'Medicina Veterinaria', 50000004),
(50600001, 'Recursos Pesqueiros e Engenharia de Pesca', 50000004),
(50700006, 'Ciencia e Tecnologia de Alimentos', 50000004),
(60100001, 'Direito', 60000007),
(60200006, 'Administracao', 60000007),
(60300000, 'Economia', 60000007),
(60400005, 'Arquitetura e Urbanismo', 60000007),
(60500000, 'Planejamento Urbano e Regional', 60000007),
(60600004, 'Demografia', 60000007),
(60700009, 'Ciencia da Informacao', 60000007),
(60800003, 'Museologia', 60000007),
(60900008, 'Comunicacao', 60000007),
(61000000, 'Servico Social', 60000007),
(61100005, 'Economia Domestica', 60000007),
(61200000, 'Desenho Industrial', 60000007),
(61300004, 'Turismo', 60000007),
(70100004, 'Filosofia', 70000000),
(70200009, 'Sociologia', 70000000),
(70300003, 'Antropologia', 70000000),
(70400008, 'Arqueologia', 70000000),
(70500002, 'Historia', 70000000),
(70600007, 'Geografia', 70000000),
(70700001, 'Psicologia', 70000000),
(70800006, 'Educacao', 70000000),
(70900000, 'Ciencia Politica', 70000000),
(71000003, 'Teologia', 70000000),
(80100007, 'Linguistica', 80000002),
(80200001, 'Letras', 80000002),
(80300006, 'Artes', 80000002);

-- --------------------------------------------------------

--
-- Estrutura da tabela `docentes`
--

DROP TABLE IF EXISTS `docentes`;
CREATE TABLE IF NOT EXISTS `docentes` (
  `cod_docente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `lattes` varchar(100) NOT NULL,
  `atividade_realizada` varchar(150) NOT NULL,
  `fk_graduacao` int(11) NOT NULL,
  `curso` varchar(100) DEFAULT NULL,
  `ano_conclusao` int(4) NOT NULL,
  `fk_cod_grupo` int(11) NOT NULL,
  `fk_especialidade` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date DEFAULT NULL,
  `situacao` tinyint(4) NOT NULL COMMENT '1=ativo 0=inativo',
  PRIMARY KEY (`cod_docente`),
  KEY `fk_graducao` (`fk_graduacao`),
  KEY `grupo` (`fk_cod_grupo`),
  KEY `especialidade` (`fk_especialidade`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `docentes`
--

INSERT INTO `docentes` (`cod_docente`, `nome`, `lattes`, `atividade_realizada`, `fk_graduacao`, `curso`, `ano_conclusao`, `fk_cod_grupo`, `fk_especialidade`, `data_inicio`, `data_fim`, `situacao`) VALUES
(1, 'TrovÃ£o', 'trovÃ£o.com', 'DogÃ£o', 14, 'Babacao', 2012, 8, 80302025, '2018-10-17', NULL, 1),
(2, 'InativÃ£o esse cara aÃ­', 'inativao.com', 'some', 13, 'InativaÃ§Ã£o de Si PrÃ³prio', 2018, 8, 10405011, '2018-10-16', '2018-10-21', 0),
(3, 'Danillo Fidelis', 'www.google.com', 'xfgfdgfdg', 14, 'teste', 2010, 9, 10103058, '2017-01-01', NULL, 1),
(4, 'Eric Moreira', 'www.google.com', 'asdsaasaasds', 13, 'sdfdfdsfdsfdsf', 2003, 9, 10102051, '2018-01-01', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos`
--

DROP TABLE IF EXISTS `equipamentos`;
CREATE TABLE IF NOT EXISTS `equipamentos` (
  `cod_equipamento` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `descricao` text NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date DEFAULT NULL,
  `fk_grupo` int(11) NOT NULL,
  PRIMARY KEY (`cod_equipamento`),
  KEY `grupo` (`fk_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `equipamentos`
--

INSERT INTO `equipamentos` (`cod_equipamento`, `nome`, `descricao`, `data_inicio`, `data_fim`, `fk_grupo`) VALUES
(1, 'Teste', 'cvfvbcsdvcdvdvbsfxcvsdvfxzvdfd', '2018-01-01', NULL, 9),
(2, 'Novo', 'xcvvbvcsvsfccfvscscscsdcscs', '2018-01-01', NULL, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade`
--

DROP TABLE IF EXISTS `especialidade`;
CREATE TABLE IF NOT EXISTS `especialidade` (
  `cod_especialidade` int(11) NOT NULL,
  `nome_especialidade` varchar(120) NOT NULL,
  `fk_sub_area` int(11) NOT NULL,
  PRIMARY KEY (`cod_especialidade`),
  KEY `FK` (`fk_sub_area`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `especialidade`
--

INSERT INTO `especialidade` (`cod_especialidade`, `nome_especialidade`, `fk_sub_area`) VALUES
(10101012, 'Conjuntos', 10101004),
(10101020, 'Logica Matematica', 10101004),
(10101039, 'Teoria dos Numeros', 10101004),
(10101047, 'Grupos de Algebra Nao-Comutaviva', 10101004),
(10101055, 'Algebra Comutativa', 10101004),
(10101063, 'Geometria Algebrica', 10101004),
(10102019, 'Analise Complexa', 10102000),
(10102027, 'Analise Funcional', 10102000),
(10102035, 'Analise Funcional Nao-Linear', 10102000),
(10102043, 'Equacoes Diferenciais Ordinarias', 10102000),
(10102051, 'Equacoes Diferenciais Parciais', 10102000),
(10102060, 'Equacoes Diferenciais Funcionais', 10102000),
(10103015, 'Geometria Diferencial', 10103007),
(10103023, 'Topologia Algebrica', 10103007),
(10103031, 'Topologia das Variedades', 10103007),
(10103040, 'Sistemas Dinamicos', 10103007),
(10103058, 'Teoria das Singularidades e Teoria das Catastrofes', 10103007),
(10103066, 'Teoria das Folheacoes', 10103007),
(10104011, 'Fisica Matematica', 10104003),
(10104020, 'Analise Numerica', 10104003),
(10104038, 'Matematica Discreta e Combinatoria', 10104003),
(10201017, 'Teoria Geral e Fundamentos da Probabilidade', 10201009),
(10201025, 'Teoria Geral e Processos Estocasticos', 10201009),
(10201033, 'Teoremas de Limite', 10201009),
(10201041, 'Processos Markovianos', 10201009),
(10201050, 'Analise Estocastica', 10201009),
(10201068, 'Processos Estocasticos Especiais', 10201009),
(10202013, 'Fundamentos da Estatistica', 10202005),
(10202021, 'Inferencia Parametrica', 10202005),
(10202030, 'Inferencia Nao-Parametrica', 10202005),
(10202048, 'Inferencia em Processos Estocasticos', 10202005),
(10202056, 'Analise Multivariada', 10202005),
(10202064, 'Regressao e Correlacao', 10202005),
(10202072, 'Planejamento de Experimentos', 10202005),
(10202080, 'Analise de Dados', 10202005),
(10301011, 'Computabilidade e Modelos de Computacao', 10301003),
(10301020, 'Linguagem Formais e Automatos', 10301003),
(10301038, 'Analise de Algoritmos e Complexidade de Computacao', 10301003),
(10301046, 'Logicas e Semantica de Programas', 10301003),
(10302018, 'Matematica Simbolica', 10302000),
(10302026, 'Modelos Analiticos e de Simulacao', 10302000),
(10303014, 'Linguagens de Programacao', 10303006),
(10303022, 'Engenharia de Software', 10303006),
(10303030, 'Banco de Dados', 10303006),
(10303049, 'Sistemas de Informacao', 10303006),
(10303057, 'Processamento Grafico (Graphics)', 10303006),
(10304010, 'Hardware', 10304002),
(10304029, 'Arquitetura de Sistemas de Computacao', 10304002),
(10304037, 'Software Basico', 10304002),
(10304045, 'Teleinformatica', 10304002),
(10401016, 'Astronomia Fundamental', 10401008),
(10401024, 'Astronomia Dinamica', 10401008),
(10403019, 'Meio Interestelar', 10403000),
(10403027, 'Nebulosa', 10403000),
(10404015, 'Galaxias', 10404007),
(10404023, 'Aglomerados de Galaxias', 10404007),
(10404031, 'Quasares', 10404007),
(10404040, 'Cosmologia', 10404007),
(10405011, 'Fisica Solar', 10405003),
(10405020, 'Movimento da Terra', 10405003),
(10405038, 'Sistema Planetario', 10405003),
(10406018, 'Astronomia Otica', 10406000),
(10406026, 'Radioastronomia', 10406000),
(10406034, 'Astronomia Espacial', 10406000),
(10406042, 'Processamento de Dados Astronomicos', 10406000),
(10501010, 'Metodos Matematicos da Fisica', 10501002),
(10501029, 'Fisica Classica e Fisica Quantica; Mecanica e Campos', 10501002),
(10501037, 'Relatividade e Gravitacao', 10501002),
(10501045, 'Fisica Estatistica e Termodinamica', 10501002),
(10501053, 'Metrologia, Tecnicas Gerais de Laboratorio, Sistema de Instrumentacao', 10501002),
(10501061, 'Instrumentacao Especifica de Uso Geral em Fisica', 10501002),
(10502017, 'Eletricidade e Magnetismo; Campos e Particulas Carregadas', 10502009),
(10502025, 'Otica', 10502009),
(10502033, 'Acustica', 10502009),
(10502041, 'Transferencia de Calor; Processos Termicos e Termodinamicos', 10502009),
(10502050, 'Mecanica, Elasticidade e Reologia', 10502009),
(10502068, 'Dinamica dos Fluidos', 10502009),
(10503013, 'Teoria Geral de Particulas e Campos', 10503005),
(10503021, 'Teorias Especificas e Modelos de Interacao; Sistematica de Particulas; Raios Cosmicos', 10503005),
(10503030, 'Reacoes Especificas e Fenomiologia de Particulas', 10503005),
(10503048, 'Propriedades de Particulas Especificas e Ressonancias', 10503005),
(10504010, 'Estrutura Nuclear', 10504001),
(10504028, 'Desintegracao Nuclear e Radioatividade', 10504001),
(10504036, 'Reacoes Nucleares e Espalhamento Geral', 10504001),
(10504044, 'Reacoes Nucleares e Espalhamento (Reacoes Especificas)', 10504001),
(10504052, 'Propriedades de Nucleos Especificos', 10504001),
(10504060, 'Metodos Experimentais e Instrumentacao para Particulas Elementares e Fisica Nuclear', 10504001),
(10505016, 'Estrutura Eletronica de Atomos e Moleculas; Teoria', 10505008),
(10505024, 'Espectros Atomicos e Integracao de Fotons', 10505008),
(10505032, 'Espectros Moleculares e Interacoes de Fotons com Moleculas', 10505008),
(10505040, 'Processos de Colisao e Interacoes de Atomos e Moleculas', 10505008),
(10505059, 'Inf. sobre Atomos e Moleculas Obtidos Experimentalmente; Instrumentacao e Tecnicas', 10505008),
(10505067, 'Estudos de Atomos e Moleculas Especiais', 10505008),
(10506012, 'Cinetica e Teoria de Transporte de Fluidos; Propriedades Fisicas de Gases', 10506004),
(10506020, 'Fisica de Plasmas e Descargas Eletricas', 10506004),
(10507019, 'Estrutura de Liquidos e Solidos; Cristalografia', 10507000),
(10507027, 'Propriedades Mecanicas e Acusticas da Materia Condensada', 10507000),
(10507035, 'Dinamica da Rede e Estatistica de Cristais', 10507000),
(10507043, 'Equacao de Estado, Equilibrio de Fases e Transicoes de Fase', 10507000),
(10507051, 'Propriedades Termicas da Materia Condensada', 10507000),
(10507060, 'Propriedades de Transportes de Materia Condensada (Nao Eletronica)', 10507000),
(10507078, 'Campos Quanticos e Solidos, Helio, Liquido, Solido', 10507000),
(10507086, 'Superficies e Interfaces; Peliculas e Filamentos', 10507000),
(10507094, 'Estados Eletronicos', 10507000),
(10507108, 'Transp. Eletronicos e Prop. Eletricas de Superficies; Interfaces e Peliculas', 10507000),
(10507116, 'Estruturas Eletronicas e Propriedades Eletricas de Superficies; Interf. e Particulas', 10507000),
(10507124, 'Supercondutividade', 10507000),
(10507132, 'Materiais Magneticos e Propriedades Magneticas', 10507000),
(10507140, 'Ressonancia Mag. e Relax. na Mat. Condens; Efeitos Mosbauer; Corr. Ang. Pertubada', 10507000),
(10507159, 'Materiais Dieletricos e Propriedades Dieletricas', 10507000),
(10507167, 'Prop. Oticas e Espectrosc. da Mat. Condens; Outras Inter. da Mat. com Rad. e Part.', 10507000),
(10507175, 'Emissao Eletronica e Ionica por Liquidos e Solidos; Fenomenos de Impacto', 10507000),
(10601015, 'Estrutura, Conformacao e Estereoquimica', 10601007),
(10601023, 'Sintese Organica', 10601007),
(10601031, 'Fisico-Quimica Organica', 10601007),
(10601040, 'Fotoquimica Organica', 10601007),
(10601058, 'Quimica dos Produtos Naturais', 10601007),
(10601066, 'Evolucao, Sistematica e Ecologia Quimica', 10601007),
(10601074, 'Polimeros e Coloides', 10601007),
(10602011, 'Campos de Coordenacao', 10602003),
(10602020, 'Nao-Metais e Seus Compostos', 10602003),
(10602038, 'Compostos Organo-Metalicos', 10602003),
(10602046, 'Determinacao de Estrutura de Compostos Inorganicos', 10602003),
(10602054, 'Foto-Quimica Inorganica', 10602003),
(10602062, 'Fisico Quimica Inorganica', 10602003),
(10602070, 'Quimica Bio-Inorganica', 10602003),
(10603018, 'Cinetica Quimica e Catalise', 10603000),
(10603026, 'Eletroquimica', 10603000),
(10603034, 'Espectroscopia', 10603000),
(10603042, 'Quimica de Interfaces', 10603000),
(10603050, 'Quimica do Estado Condensado', 10603000),
(10603069, 'Quimica Nuclear e Radioquimica', 10603000),
(10603077, 'Quimica Teorica', 10603000),
(10603085, 'Termodinamica Quimica', 10603000),
(10604014, 'Separacao', 10604006),
(10604022, 'Metodos Oticos de Analise', 10604006),
(10604030, 'Eletroanalitica', 10604006),
(10604049, 'Gravimetria', 10604006),
(10604057, 'Titimetria', 10604006),
(10604065, 'Instrumentacao Analitica', 10604006),
(10604073, 'Analise de Tracos e Quimica Ambiental', 10604006),
(10701010, 'Mineralogia', 10701001),
(10701028, 'Petrologia', 10701001),
(10701036, 'Geoquimica', 10701001),
(10701044, 'Geologia Regional', 10701001),
(10701052, 'Geotectonica', 10701001),
(10701060, 'Geocronologia', 10701001),
(10701079, 'Cartografia Geologica', 10701001),
(10701087, 'Metalogenia', 10701001),
(10701095, 'Hidrogeologia', 10701001),
(10701109, 'Prospeccao Mineral', 10701001),
(10701117, 'Sedimentologia', 10701001),
(10701125, 'Paleontologia Estratigrafica', 10701001),
(10701133, 'Estratigrafia', 10701001),
(10701141, 'Geologia Ambiental', 10701001),
(10702016, 'Geomagnetismo', 10702008),
(10702024, 'Sismologia', 10702008),
(10702032, 'Geotermia e Fluxo Termico', 10702008),
(10702040, 'Propriedades Fisicas das Rochas', 10702008),
(10702059, 'Geofisica Nuclear', 10702008),
(10702067, 'Sensoriamento Remoto', 10702008),
(10702075, 'Aeronomia', 10702008),
(10702083, 'Desenvolvimento de Instrumentacao Geofisica', 10702008),
(10702091, 'Geofisica Aplicada', 10702008),
(10702105, 'Gravimetria', 10702008),
(10703012, 'Meteorologia Dinamica', 10703004),
(10703020, 'Meteorologia Sinotica', 10703004),
(10703039, 'Meteorologia Fisica', 10703004),
(10703047, 'Quimica da Atmosfera', 10703004),
(10703055, 'Instrumentacao Meteorologica', 10703004),
(10703063, 'Climatologia', 10703004),
(10703071, 'Micrometeorologia', 10703004),
(10703080, 'Sensoriamento Remoto da Atmosfera', 10703004),
(10703098, 'Meteorologia Aplicada', 10703004),
(10704019, 'Geodesia Fisica', 10704000),
(10704027, 'Geodesia Geometrica', 10704000),
(10704035, 'Geodesia Celeste', 10704000),
(10704043, 'Fotogrametria', 10704000),
(10704051, 'Cartografia Basica', 10704000),
(10705015, 'Geomorfologia', 10705007),
(10705023, 'Climatologia Geografica', 10705007),
(10705031, 'Pedologia', 10705007),
(10705040, 'Hidrogeografia', 10705007),
(10705058, 'Geoecologia', 10705007),
(10705066, 'Fotogeografia (Fisico-Ecologica)', 10705007),
(10705074, 'Geocartografia', 10705007),
(10801014, 'Interacao entre os Organismos Marinhos e os Parametros Ambientais', 10801006),
(10802010, 'Variaveis Fisicas da Agua do Mar', 10802002),
(10802029, 'Movimento da Agua do Mar', 10802002),
(10802037, 'Origem das Massas de Agua', 10802002),
(10802045, 'Interacao do Oceano com o Leito do Mar', 10802002),
(10802053, 'Interacao do Oceano com a Atmosfera', 10802002),
(10803017, 'Propriedades Quimicas da Agua do Mar', 10803009),
(10803025, 'Interacoes Quimico-Biologicas/Geologicas das Substancias Quimicas da Agua do Mar', 10803009),
(10804013, 'Geomorfologia Submarina', 10804005),
(10804021, 'Sedimentologia Marinha', 10804005),
(10804030, 'Geofisica Marinha', 10804005),
(10804048, 'Geoquimica Marinha', 10804005),
(20302010, 'Morfologia Externa', 20302002),
(20302029, 'Citologia Vegetal', 20302002),
(20302037, 'Anatomia Vegetal', 20302002),
(20302045, 'Palinologia', 20302002),
(20303017, 'Nutricao e Crescimento Vegetal', 20303009),
(20303025, 'Reproducao Vegetal', 20303009),
(20303033, 'Ecofisiologia Vegetal', 20303009),
(20304013, 'Taxonomia de Criptogamos', 20304005),
(20304021, 'Taxonomia de Fanerogamos', 20304005),
(20406010, 'Conservacao das Especies Animais', 20406002),
(20406029, 'Utilizacao dos Animais', 20406002),
(20406037, 'Controle Populacional de Animais', 20406002),
(20604017, 'Anatomia Humana', 20604009),
(20604025, 'Anatomia Animal', 20604009),
(20702019, 'Neurofisiologia', 20702000),
(20702027, 'Fisiologia Cardiovascular', 20702000),
(20702035, 'Fisiologia da Respiracao', 20702000),
(20702043, 'Fisiologia Renal', 20702000),
(20702051, 'Fisiologia Endocrina', 20702000),
(20702060, 'Fisiologia da Digestao', 20702000),
(20702078, 'Cinesiologia', 20702000),
(20801017, 'Proteinas', 20801009),
(20801025, 'Lipideos', 20801009),
(20801033, 'Glicideos', 20801009),
(21001014, 'Farmacocinetica', 21001006),
(21001022, 'Biodisponibilidade', 21001006),
(21201013, 'Virologia', 21201005),
(21201021, 'Bacteriologia', 21201005),
(21201030, 'Micologia', 21201005),
(21202010, 'Microbiologia Medica', 21202001),
(21202028, 'Microbiologia Industrial e de Fermentacao', 21202001),
(21301018, 'Protozoologia Parasitaria Humana', 21301000),
(21301026, 'Protozoologia Parasitaria Animal', 21301000),
(21302014, 'Helmintologia Humana', 21302006),
(21302022, 'Helmintologia Animal', 21302006),
(21401012, 'Novas Drogas Terapeuticas', 21401004),
(21401020, 'Vacinas e Kits para Diagnosticos', 21401004),
(21401039, 'Tecnicas de Reproducao', 21401004),
(21401047, 'Engenharia de Tecidos', 21401004),
(21401055, 'Ciencias de Animais de Laboratorios', 21401004),
(21401063, 'Metodologias Alternativas ao Uso de Animais', 21401004),
(21402019, 'Bioprocessos', 21402000),
(21402027, 'Biocombustiveis', 21402000),
(21403015, 'Melhoramento de Plantas', 21403007),
(21403023, 'Tecnologia de Processos e Produtos', 21403007),
(21403031, 'Plantas Transgenicas', 21403007),
(21403040, 'Conservacao e Multiplicacao de Germoplasma', 21403007),
(21404011, 'Bioprospeccao', 21404003),
(21404020, 'Biodiversidade', 21404003),
(21404038, 'Tratamento Biologico de Residuos', 21404003),
(30101018, 'Materiais e Componentes de Construcao', 30101000),
(30101026, 'Processos Construtivos', 30101000),
(30101034, 'Instalacoes Prediais', 30101000),
(30102014, 'Estruturas de Concreto', 30102006),
(30102022, 'Estruturas de Madeiras', 30102006),
(30102030, 'Estruturas Metalicas', 30102006),
(30102049, 'Mecanica das Estruturas', 30102006),
(30103010, 'Fundacoes e Escavacoes', 30103002),
(30103029, 'Mecanicas das Rochas', 30103002),
(30103037, 'Mecanicas dos Solos', 30103002),
(30103045, 'Obras de Terra e Enrocamento', 30103002),
(30103053, 'Pavimentos', 30103002),
(30104017, 'Hidraulica', 30104009),
(30104025, 'Hidrologia', 30104009),
(30105013, 'Aeroportos; Projeto e Construcao', 30105005),
(30105021, 'Ferrovias; Projetos e Construcao', 30105005),
(30105030, 'Portos e Vias Navegaveis; Projeto e Construcao', 30105005),
(30105048, 'Rodovias; Projeto e Construcao', 30105005),
(30201012, 'Caracterizacao do Minerio', 30201004),
(30201020, 'Dimensionamento de Jazidas', 30201004),
(30202019, 'Lavra a Ceu Aberto', 30202000),
(30202027, 'Lavra de Mina Subterranea', 30202000),
(30202035, 'Equipamentos de Lavra', 30202000),
(30203015, 'Metodos de Concentracao e Enriquecimento de Minerios', 30203007),
(30203023, 'Equipamentos de Beneficiamento de Minerios', 30203007),
(30301017, 'Instalacoes Metalurgicas', 30301009),
(30301025, 'Equipamentos Metalurgicos', 30301009),
(30302013, 'Aglomeracao', 30302005),
(30302021, 'Eletrometalurgia', 30302005),
(30302030, 'Hidrometalurgia', 30302005),
(30302048, 'Pirometalurgia', 30302005),
(30302056, 'Tratamento de Minerios', 30302005),
(30303010, 'Conformacao Mecanica', 30303001),
(30303028, 'Fundicao', 30303001),
(30303036, 'Metalurgia de Po', 30303001),
(30303044, 'Recobrimentos', 30303001),
(30303052, 'Soldagem', 30303001),
(30303060, 'Tratamentos Termicos, Mecanicos e Quimicos', 30303001),
(30303079, 'Usinagem', 30303001),
(30304016, 'Estrutura dos Metais e Ligas', 30304008),
(30304024, 'Propriedades Fisicas dos Metais e Ligas', 30304008),
(30304032, 'Propriedades Mecanicas dos Metais e Ligas', 30304008),
(30304040, 'Transformacao de Fases', 30304008),
(30304059, 'Corrosao', 30304008),
(30305012, 'Extracao e Transformacao de Materiais', 30305004),
(30305020, 'Ceramicos', 30305004),
(30305039, 'Materiais Conjugados Nao-Metalicos', 30305004),
(30305047, 'Polimeros, Aplicacoes', 30305004),
(30401011, 'Materiais Condutores', 30401003),
(30401020, 'Materiais e Componentes Semicondutores', 30401003),
(30401038, 'Materiais e Dispositivos Supercondutores', 30401003),
(30401046, 'Materiais Dieletricos, Piezoeletricos e Ferroeletricos', 30401003),
(30401054, 'Materiais e Componentes Eletrooticos e Magnetooticos, Materiais Fotoeletricos', 30401003),
(30401062, 'Materiais e Dispositivos Magneticos', 30401003),
(30402018, 'Medidas Eletricas', 30402000),
(30402026, 'Medidas Magneticas', 30402000),
(30402034, 'Instrumentacao Eletromecanica', 30402000),
(30402042, 'Instrumentacao Eletronica', 30402000),
(30402050, 'Sistemas Eletronicos de Medida e de Controle', 30402000),
(30403014, 'Teoria Geral dos Circuitos Eletricos', 30403006),
(30403022, 'Circuitos Lineares e Nao-Lineares', 30403006),
(30403030, 'Circuitos Eletronicos', 30403006),
(30403049, 'Circuitos Magneticos , Magnetismos e Eletromagnetismos', 30403006),
(30404010, 'Geracao da Energia Eletrica', 30404002),
(30404029, 'Transmissao da Energia Eletrica, Distribuicao da Energia Eletrica', 30404002),
(30404037, 'Conversao e Retificacao da Energia Eletrica', 30404002),
(30404045, 'Medicao, Controle, Correcao e Protecao de Sistemas Eletricos  de Potencia', 30404002),
(30404053, 'Maquinas Eletricas e Dispositivos de Potencia', 30404002),
(30404061, 'Instalacoes Eletricas e Industriais', 30404002),
(30405017, 'Eletronica Industrial', 30405009),
(30405025, 'Automacao Eletronica de Processos Eletricos e Industriais', 30405009),
(30405033, 'Controle de Processos Eletronicos, Retroalimentacao', 30405009),
(30406013, 'Teoria Eletromagnetica, Microondas, Propagacao de Ondas, Antenas', 30406005),
(30406021, 'Radionavegacao e Radioastronomia', 30406005),
(30406030, 'Sistemas de Telecomunicacoes', 30406005),
(30501016, 'Transferencia de Calor', 30501008),
(30501024, 'Mecanica dos Fluidos', 30501008),
(30501032, 'Dinamica dos Gases', 30501008),
(30501040, 'Principios Variacionais e Metodos Numericos', 30501008),
(30502012, 'Termodinamica', 30502004),
(30502020, 'Controle Ambiental', 30502004),
(30502039, 'Aproveitamento da Energia', 30502004),
(30503019, 'Mecanica dos Corpos Solidos, Elasticos e Plasticos', 30503000),
(30503027, 'Dinamica dos Corpos Rigidos, Elasticos e Plasticos', 30503000),
(30503035, 'Analise de Tensoes', 30503000),
(30503043, 'Termoelasticidade', 30503000),
(30504015, 'Teoria dos Mecanismos', 30504007),
(30504023, 'Estatica e Dinamica Aplicada', 30504007),
(30504031, 'Elementos de Maquinas', 30504007),
(30504040, 'Fundamentos Gerais de Projetos das Maquinas', 30504007),
(30504058, 'Maquinas, Motores e Equipamentos', 30504007),
(30504066, 'Metodos de Sintese e Otimizacao Aplicados ao Projeto Mecanico', 30504007),
(30504074, 'Controle de Sistemas Mecanicos', 30504007),
(30504082, 'Aproveitamento de Energia', 30504007),
(30505011, 'Matrizes e Ferramentas', 30505003),
(30505020, 'Maquinas de Usinagem e Conformacao', 30505003),
(30505038, 'Controle Numerico', 30505003),
(30505046, 'Robotizacao', 30505003),
(30505054, 'Processos de Fabricacao, Selecao Economica', 30505003),
(30601010, 'Processos Bioquimicos', 30601002),
(30601029, 'Processos Organicos', 30601002),
(30601037, 'Processos Inorganicos', 30601002),
(30602017, 'Reatores Quimicos', 30602009),
(30602025, 'Operacoes Caracteristicas de Processos Bioquimicos', 30602009),
(30602033, 'Operacoes de Separacao e Mistura', 30602009),
(30603013, 'Balancos Globais de Materia e Energia', 30603005),
(30603021, 'Agua', 30603005),
(30603030, 'Alcool', 30603005),
(30603048, 'Alimentos', 30603005),
(30603056, 'Borrachas', 30603005),
(30603064, 'Carvao', 30603005),
(30603072, 'Ceramica', 30603005),
(30603080, 'Cimento', 30603005),
(30603099, 'Couro', 30603005),
(30603102, 'Detergentes', 30603005),
(30603110, 'Fertilizantes', 30603005),
(30603129, 'Medicamentos', 30603005),
(30603137, 'Metais Nao-Ferrosos', 30603005),
(30603145, 'Oleos', 30603005),
(30603153, 'Papel e Celulose', 30603005),
(30603161, 'Petroleo e Petroquimica', 30603005),
(30603170, 'Polimeros', 30603005),
(30603188, 'Produtos Naturais', 30603005),
(30603196, 'Texteis', 30603005),
(30603200, 'Tratamentos e Aproveitamento de Rejeitos', 30603005),
(30603218, 'Xisto', 30603005),
(30701015, 'Planejamento Integrado dos Recursos Hidricos', 30701007),
(30701023, 'Tecnologia e Problemas Sanitarios de Irrigacao', 30701007),
(30701031, 'Aguas Subterraneas e Pocos Profundos', 30701007),
(30701040, 'Controle de Enchentes e de Barragens', 30701007),
(30701058, 'Sedimentologia', 30701007),
(30702011, 'Quimica Sanitaria', 30702003),
(30702020, 'Processos Simplificados de Tratamento de Aguas', 30702003),
(30702038, 'Tecnicas Convencionais de Tratamento de Aguas', 30702003),
(30702046, 'Tecnicas Avancadas de Tratamento de Aguas', 30702003),
(30702054, 'Estudos e Caracterizacao de Efluentes Industriais', 30702003),
(30702062, 'Layout de Processos Industriais', 30702003),
(30702070, 'Residuos Radioativos', 30702003),
(30703018, 'Tecnicas de Abastecimento da Agua', 30703000),
(30703026, 'Drenagem de Aguas Residuarias', 30703000),
(30703034, 'Drenagem Urbana de Aguas Pluviais', 30703000),
(30703042, 'Residuos Solidos, Domesticos e Industriais', 30703000),
(30703050, 'Limpeza Publica', 30703000),
(30703069, 'Instalacoes Hidraulico-Sanitarias', 30703000),
(30704014, 'Ecologia Aplicada a Engenharia Sanitaria', 30704006),
(30704022, 'Microbiologia Aplicada e Engenharia Sanitaria', 30704006),
(30704030, 'Parasitologia Aplicada a Engenharia Sanitaria', 30704006),
(30704049, 'Qualidade do Ar, das Aguas e do Solo', 30704006),
(30704057, 'Controle da Poluicao', 30704006),
(30704065, 'Legislacao Ambiental', 30704006),
(30801010, 'Planejamento de Instalacoes Industriais', 30801001),
(30801028, 'Planejamento, Projeto e Controle de Sistemas de Producao', 30801001),
(30801036, 'Higiene e Seguranca do Trabalho', 30801001),
(30801044, 'Suprimentos', 30801001),
(30801052, 'Garantia de Controle de Qualidade', 30801001),
(30802016, 'Processos Estocasticos e Teoria das Filas', 30802008),
(30802024, 'Programacao Linear, Nao-Linear, Mista e Dinamica', 30802008),
(30802032, 'Series Temporais', 30802008),
(30802040, 'Teoria dos Grafos', 30802008),
(30802059, 'Teoria dos Jogos', 30802008),
(30803012, 'Ergonomia', 30803004),
(30803020, 'Metodologia de Projeto do Produto', 30803004),
(30803039, 'Processos de Trabalho', 30803004),
(30803047, 'Gerencia do Projeto e do Produto', 30803004),
(30803055, 'Desenvolvimento de Produto', 30803004),
(30804019, 'Estudo de Mercado', 30804000),
(30804027, 'Localizacao Industrial', 30804000),
(30804035, 'Analise de Custos', 30804000),
(30804043, 'Economia de Tecnologia', 30804000),
(30804051, 'Vida Economica dos Equipamentos', 30804000),
(30804060, 'Avaliacao de Projetos', 30804000),
(30901014, 'Producao de Radioisotopos', 30901006),
(30901022, 'Aplicacoes Industriais de Radioisotopos', 30901006),
(30901030, 'Instrumentacao para Medida e Controle de Radiacao', 30901006),
(30902010, 'Processos Industriais da Fusao Controlada', 30902002),
(30902029, 'Problemas Tecnologicos da Fusao Controlada', 30902002),
(30903017, 'Extracao de Combustivel Nuclear', 30903009),
(30903025, 'Conversao, Enriquecimento e Fabricacao de Combustivel Nuclear', 30903009),
(30903033, 'Reprocessamento de Combustivel Nuclear', 30903009),
(30903041, 'Rejeitos de Combustivel Nuclear', 30903009),
(30904013, 'Nucleo do Reator', 30904005),
(30904021, 'Materiais Nucleares e Blindagem de Reatores', 30904005),
(30904030, 'Transferencia de Calor em Reatores', 30904005),
(30904048, 'Geracao e Integracao com Sistemas Eletricos  em Reatores', 30904005),
(30904056, 'Instrumentacao para Operacao e Controle de Reatores', 30904005),
(30904064, 'Seguranca, Localizacao e Licenciamento de Reatores', 30904005),
(30904072, 'Aspectos Economicos de Reatores', 30904005),
(31001017, 'Planejamento e Organizacao do Sistema de Transporte', 31001009),
(31001025, 'Economia dos Transportes', 31001009),
(31002013, 'Vias de Transporte', 31002005),
(31002021, 'Veiculos de Transportes', 31002005),
(31002030, 'Estacao de Transporte', 31002005),
(31002048, 'Equipamentos Auxiliares e Controles', 31002005),
(31003010, 'Engenharia de Trafego', 31003001),
(31003028, 'Capacidade de Vias de Transporte', 31003001),
(31003036, 'Operacao de Sistemas de Transporte', 31003001),
(31101011, 'Resistencia Hidrodinamica', 31101003),
(31101020, 'Propulsao de Navios', 31101003),
(31102018, 'Analise Teorica e Experimental de Estrutura', 31102000),
(31102026, 'Dinamica Estrutural Naval e Oceanica', 31102000),
(31102034, 'Sintese Estrutural Naval e Oceanica', 31102000),
(31103014, 'Analise de Sistemas Propulsores', 31103006),
(31103022, 'Controle e Automacao de Sistemas Propulsores', 31103006),
(31103030, 'Equipamentos Auxiliares do Sistema Propulsivo', 31103006),
(31103049, 'Motor de Propulsao', 31103006),
(31104010, 'Projetos de Navios', 31104002),
(31104029, 'Projetos de Sistemas Oceanicos Fixos e Semi-Fixos', 31104002),
(31104037, 'Projetos de Embarcacoes Nao-Convencionais', 31104002),
(31105017, 'Metodos de Fabricacao de Navios e Sistemas Oceanicos', 31105009),
(31105025, 'Soldagem de Estruturas Navais e Oceanicos', 31105009),
(31105033, 'Custos de Construcao Naval', 31105009),
(31105041, 'Normatizacao e Certificacao de Qualidade de Navios', 31105009),
(31201016, 'Aerodinamica de Aeronaves Espaciais', 31201008),
(31201024, 'Aerodinamica dos Processos Geofisicos e Interplanetarios', 31201008),
(31202012, 'Trajetorias e Orbitas', 31202004),
(31202020, 'Estabilidade e Controle', 31202004),
(31203019, 'Aeroelasticicidade', 31203000),
(31203027, 'Fadiga', 31203000),
(31203035, 'Projeto de Estruturas Aeroespaciais', 31203000),
(31205011, 'Combustao e Escoamento com Reacoes Quimicas', 31205003),
(31205020, 'Propulsao de Foguetes', 31205003),
(31205038, 'Maquinas de Fluxo', 31205003),
(31205046, 'Motores Alternativos', 31205003),
(31206018, 'Avioes', 31206000),
(31206026, 'Foguetes', 31206000),
(31206034, 'Helicopteros', 31206000),
(31206042, 'Hovercraft', 31206000),
(31206050, 'Satelites e Outros Dispositivos Aeroespaciais', 31206000),
(31206069, 'Normatizacao e Certificacao de Qualidade de Aeronaves e Componentes', 31206000),
(31206077, 'Manutencao de Sistemas Aeroespaciais', 31206000),
(31301010, 'Processamento de Sinais Biologicos', 31301002),
(31301029, 'Modelagem de Fenomenos Biologicos', 31301002),
(31301037, 'Modelagem de Sistemas Biologicos', 31301002),
(31302017, 'Biomateriais e Materiais Biocompativeis', 31302009),
(31302025, 'Transdutores para Aplicacoes Biomedicas', 31302009),
(31302033, 'Instrumentacao Odontologica e Medico-Hospitalar', 31302009),
(31302041, 'Tecnologia de Proteses', 31302009),
(31401015, 'Sistemas Energeticos', 31401007),
(31401023, 'Politica Energetica Regional e Nacional', 31401007),
(31401031, 'Uso Eficiente de Energia', 31401007),
(31401040, 'Analise de Impactos Produzidos por Sistemas Energeticos', 31401007),
(31402011, 'Energia Solar Termica', 31402003),
(31402020, 'Energia Solar Fotovoltaica', 31402003),
(31402038, 'Energia Eolica', 31402003),
(31402046, 'Micro-centrais Hidreletricas', 31402003),
(31402054, 'Energia das Ondas e Mares', 31402003),
(31402062, 'Energia de Biomassa', 31402003),
(31402070, 'Sistemas Hibridos e Sistemas Nao-convencionais de Armazenagem de Energia', 31402003),
(40101010, 'Angiologia', 40101002),
(40101029, 'Dermatologia', 40101002),
(40101037, 'Alergologia e Imunologia Clinica', 40101002),
(40101045, 'Cancerologia', 40101002),
(40101053, 'Hematologia', 40101002),
(40101061, 'Endocrinologia', 40101002),
(40101070, 'Neurologia', 40101002),
(40101088, 'Pediatria', 40101002),
(40101096, 'Doencas Infecciosas e Parasitarias', 40101002),
(40101100, 'Cardiologia', 40101002),
(40101118, 'Gastroenterologia', 40101002),
(40101126, 'Pneumologia', 40101002),
(40101134, 'Nefrologia', 40101002),
(40101142, 'Reumatologia', 40101002),
(40101150, 'Ginecologia e Obstetricia', 40101002),
(40101169, 'Fisiatria', 40101002),
(40101177, 'Oftalmologia', 40101002),
(40101186, 'Ortopedia', 40101002),
(40102017, 'Cirurgia Plastica e Restauradora', 40102009),
(40102025, 'Cirurgia Otorrinolaringologica', 40102009),
(40102033, 'Cirurgia Oftalmologica', 40102009),
(40102041, 'Cirurgia Cardiovascular', 40102009),
(40102050, 'Cirurgia Toraxica', 40102009),
(40102068, 'Cirurgia Gastroenterologia', 40102009),
(40102076, 'Cirurgia Pediatrica', 40102009),
(40102084, 'Neurocirurgia', 40102009),
(40102092, 'Cirurgia Urologica', 40102009),
(40102106, 'Cirurgia Proctologica', 40102009),
(40102114, 'Cirurgia Ortopedica', 40102009),
(40102122, 'Cirurgia Traumatologica', 40102009),
(40102130, 'Anestesiologia', 40102009),
(40102149, 'Cirurgia Experimental', 40102009),
(50101013, 'Genese, Morfologia e Classificacao dos Solos', 50101005),
(50101021, 'Fisica do Solo', 50101005),
(50101030, 'Quimica do Solo', 50101005),
(50101048, 'Microbiologia e Bioquimica do Solo', 50101005),
(50101056, 'Fertilidade do Solo e Adubacao', 50101005),
(50101064, 'Manejo e Conservacao do Solo', 50101005),
(50102010, 'Fitopatologia', 50102001),
(50102028, 'Entomologia Agricola', 50102001),
(50102036, 'Parasitologia Agricola', 50102001),
(50102044, 'Microbiologia Agricola', 50102001),
(50102052, 'Defesa Fitossanitaria', 50102001),
(50103016, 'Manejo e Tratos Culturais', 50103008),
(50103024, 'Mecanizacao Agricola', 50103008),
(50103032, 'Producao e Beneficiamento de Sementes', 50103008),
(50103040, 'Producao de Mudas', 50103008),
(50103059, 'Melhoramento Vegetal', 50103008),
(50103067, 'Fisiologia de Plantas Cultivadas', 50103008),
(50103075, 'Matologia', 50103008),
(50104012, 'Floricultura', 50104004),
(50104020, 'Parques e Jardins', 50104004),
(50104039, 'Arborizacao de Vias Publicas', 50104004),
(50201018, 'Dendrologia', 50201000),
(50201026, 'Florestamento e Reflorestamento', 50201000),
(50201034, 'Genetica e Melhoramento Florestal', 50201000),
(50201042, 'Sementes Florestais', 50201000),
(50201050, 'Nutricao Florestal', 50201000),
(50201069, 'Fisiologia Florestal', 50201000),
(50201077, 'Solos Florestais', 50201000),
(50201085, 'Protecao Florestal', 50201000),
(50202014, 'Economia Florestal', 50202006),
(50202022, 'Politica e Legislacao Florestal', 50202006),
(50202030, 'Administracao Florestal', 50202006),
(50202049, 'Dendrometria e Inventario Florestal', 50202006),
(50202057, 'Fotointerpretacao Florestal', 50202006),
(50202065, 'Ordenamento Florestal', 50202006),
(50203010, 'Exploracao Florestal', 50203002),
(50203029, 'Mecanizacao Florestal', 50203002),
(50204017, 'Anatomia e Identificacao de Produtos Florestais', 50204009),
(50204025, 'Propriedades Fisico-Mecanicas da Madeira', 50204009),
(50204033, 'Relacoes Agua-Madeira e Secagem', 50204009),
(50204041, 'Tratamento da Madeira', 50204009),
(50204050, 'Processamento Mecanico da Madeira', 50204009),
(50204068, 'Quimica da Madeira', 50204009),
(50204076, 'Resinas de Madeiras', 50204009),
(50204084, 'Tecnologia de Celulose e Papel', 50204009),
(50204092, 'Tecnologia de Chapas', 50204009),
(50205013, 'Hidrologia Florestal', 50205005),
(50205021, 'Conservacao de Areas Silvestres', 50205005),
(50205030, 'Conservacao de Bacias Hidrograficas', 50205005),
(50205048, 'Recuperacao de Areas Degradadas', 50205005),
(50302019, 'Irrigacao e Drenagem', 50302000),
(50302027, 'Conservacao de Solo e Agua', 50302000),
(50303015, 'Pre-Processamento de Produtos Agricolas', 50303007),
(50303023, 'Armazenamento de Produtos Agricolas', 50303007),
(50303031, 'Transferencia de Produtos Agricolas', 50303007),
(50304011, 'Assentamento Rural', 50304003),
(50304020, 'Engenharia de Construcoes Rurais', 50304003),
(50304038, 'Saneamento Rural', 50304003),
(50403010, 'Exigencias Nutricionais dos Animais', 50403001),
(50403028, 'Avaliacao de Alimentos para Animais', 50403001),
(50403036, 'Conservacao de Alimentos para Animais', 50403001),
(50404016, 'Avaliacao, Producao e Conservacao de Forragens', 50404008),
(50404024, 'Manejo e Conservacao de Pastagens', 50404008),
(50404032, 'Fisiologia de Plantas Forrageiras', 50404008),
(50404040, 'Melhoramento de Plantas Forrageiras e Producao de Sementes', 50404008),
(50404059, 'Toxicologia e Plantas Toxicas', 50404008),
(50405012, 'Criacao de Animais', 50405004),
(50405020, 'Manejo de Animais', 50405004),
(50405039, 'Instalacoes para Producao Animal', 50405004),
(50501011, 'Anestesiologia Animal', 50501003),
(50501020, 'Tecnica Cirurgica Animal', 50501003),
(50501038, 'Radiologia de Animais', 50501003),
(50501046, 'Farmacologia e Terapeutica Animal', 50501003),
(50501054, 'Obstetricia Animal', 50501003),
(50501062, 'Clinica Veterinaria', 50501003),
(50501070, 'Clinica Cirurgica Animal', 50501003),
(50501089, 'Toxicologia Animal', 50501003),
(50502018, 'Epidemiologia Animal', 50502000),
(50502026, 'Saneamento Aplicado a Saude do Homem', 50502000),
(50502034, 'Doencas Infecciosas de Animais', 50502000),
(50502042, 'Doencas Parasitarias de Animais', 50502000),
(50502050, 'Saude Animal (Programas Sanitarios)', 50502000),
(50503014, 'Patologia Aviaria', 50503006),
(50503022, 'Anatomia Patologia Animal', 50503006),
(50503030, 'Patologia Clinica Animal', 50503006),
(50504010, 'Ginecologia e Andrologia Animal', 50504002),
(50504029, 'Inseminacao Artificial Animal', 50504002),
(50504037, 'Fisiopatologia da Reproducao Animal', 50504002),
(50601016, 'Fatores Abioticos do Mar', 50601008),
(50601024, 'Avaliacao de Estoques Pesqueiros Marinhos', 50601008),
(50601032, 'Exploracao Pesqueira Marinha', 50601008),
(50601040, 'Manejo e Conservacao de Recursos Pesqueiros Marinhos', 50601008),
(50602012, 'Fatores Abioticos de Aguas Interiores', 50602004),
(50602020, 'Avaliacao de Estoques Pesqueiros de Aguas Interiores', 50602004),
(50602039, 'Explotacao Pesqueira de Aguas Interiores', 50602004),
(50602047, 'Manejo e Conservacao de Recursos Pesqueiros de Aguas Interiores', 50602004),
(50603019, 'Maricultura', 50603000),
(50603027, 'Carcinocultura', 50603000),
(50603035, 'Ostreicultura', 50603000),
(50603043, 'Piscicultura', 50603000),
(50701010, 'Valor Nutritivo de Alimentos', 50701002),
(50701029, 'Quimica, Fisica, Fisico-Quimica e Bioquimica dos Alim. e das Mat-Primas Alimentares', 50701002),
(50701037, 'Microbiologia de Alimentos', 50701002),
(50701045, 'Fisiologia Pos-Colheita', 50701002),
(50701053, 'Toxicidade e Residuos de Pesticidas em Alimentos', 50701002),
(50701061, 'Avaliacao e Controle de Qualidade de Alimentos', 50701002),
(50701070, 'Padroes, Legislacao e Fiscalizacao de Alimentos', 50701002),
(50702017, 'Tecnologia de Produtos de Origem Animal', 50702009),
(50702025, 'Tecnologia de Produtos de Origem Vegetal', 50702009),
(50702033, 'Tecnologia das Bebidas', 50702009),
(50702041, 'Tecnologia de Alimentos Dieteticos e Nutricionais', 50702009),
(50702050, 'Aproveitamento de Subprodutos', 50702009),
(50702068, 'Embalagens de Produtos Alimentares', 50702009),
(50703013, 'Instalacoes Industriais de Producao de Alimentos', 50703005),
(50703021, 'Armazenamento de Alimentos', 50703005),
(60101016, 'Teoria Geral do Direito', 60101008),
(60101024, 'Teoria Geral do Processo', 60101008),
(60101032, 'Teoria do Estado', 60101008),
(60101040, 'Historia do Direito', 60101008),
(60101059, 'Filosofia do Direito', 60101008),
(60101067, 'Logica Juridica', 60101008),
(60101075, 'Sociologia Juridica', 60101008),
(60101083, 'Antropologia Juridica', 60101008),
(60102012, 'Direito Tributario', 60102004),
(60102020, 'Direito Penal', 60102004),
(60102039, 'Direito Processual Penal', 60102004),
(60102047, 'Direito Processual Civil', 60102004),
(60102055, 'Direito Constitucional', 60102004),
(60102063, 'Direito Administrativo', 60102004),
(60102071, 'Direito Internacional Publico', 60102004),
(60103019, 'Direito Civil', 60103000),
(60103027, 'Direito Comercial', 60103000),
(60103035, 'Direito do Trabalho', 60103000),
(60103043, 'Direito Internacional Privado', 60103000),
(60201010, 'Administracao da Producao', 60201002),
(60201029, 'Administracao Financeira', 60201002),
(60201037, 'Mercadologia', 60201002),
(60201045, 'Negocios Internacionais', 60201002),
(60201053, 'Administracao de Recursos Humanos', 60201002),
(60202017, 'Contabilidade e Financas Publicas', 60202009),
(60202025, 'Organizacoes Publicas', 60202009),
(60202033, 'Politica e Planejamento Governamentais', 60202009),
(60202041, 'Administracao de Pessoal', 60202009),
(60202051, 'Planejamento em Ciencia e Tecnologia', 60202009),
(60301015, 'Economia Geral', 60301007),
(60301023, 'Teoria Geral da Economia', 60301007),
(60301031, 'Historia do Pensamento Economico', 60301007),
(60301040, 'Historia Economica', 60301007),
(60301058, 'Sistemas Economicos', 60301007),
(60302011, 'Metodos e Modelos Matematicos, Econometricos e Estatisticos', 60302003),
(60302020, 'Estatistica Socio-Economica', 60302003),
(60302038, 'Contabilidade Nacional', 60302003),
(60302046, 'Economia Matematica', 60302003),
(60303018, 'Teoria Monetaria e Financeira', 60303000),
(60303026, 'Instituicoes Monetarias e Financeiras do Brasil', 60303000),
(60303034, 'Financas Publicas Internas', 60303000),
(60303042, 'Politica Fiscal do Brasil', 60303000),
(60304014, 'Crescimento e Desenvolvimento Economico', 60304006),
(60304022, 'Teoria e Politica de Planejamento Economico', 60304006),
(60304030, 'Flutuacoes Ciclicas e Projecoes Economicas', 60304006),
(60304049, 'Inflacao', 60304006),
(60305010, 'Teoria do Comercio Internacional', 60305002),
(60305029, 'Relacoes do Comercio; Politica Comercial; Integracao Economica', 60305002),
(60305037, 'Balanco de Pagamentos; Financas Internacionais', 60305002),
(60305045, 'Investimentos Internacionais e Ajuda Externa', 60305002),
(60306017, 'Treinamento e Alocacao de Mao-de-Obra; Oferta de Mao-de-Obra e Forca de Trabalho', 60306009),
(60306025, 'Mercado de Trabalho; Politica do Governo', 60306009),
(60306033, 'Sindicatos, Dissidios Coletivos, Relacoes de Emprego (Empregador/Empregado)', 60306009),
(60306041, 'Capital Humano', 60306009),
(60306050, 'Demografia Economica', 60306009),
(60307013, 'Organizacao Industrial e  Estudos Industriais', 60307005),
(60307021, 'Mudanca Tecnologica', 60307005),
(60308010, 'Economia dos Programas de Bem-Estar Social', 60308001),
(60308028, 'Economia do Consumidor', 60308001),
(60309016, 'Economia Regional', 60309008),
(60309024, 'Economia Urbana', 60309008),
(60309032, 'Renda e Tributacao', 60309008),
(60310014, 'Economia Agraria', 60310006),
(60310022, 'Economia dos Recursos Naturais', 60310006),
(60401010, 'Historia da Arquitetura e Urbanismo', 60401001),
(60401028, 'Teoria da Arquitetura', 60401001),
(60401036, 'Historia do Urbanismo', 60401001),
(60401044, 'Teoria do Urbanismo', 60401001),
(60402016, 'Planejamento e Projetos da Edificacao', 60402008),
(60402024, 'Planejamento e Projeto do Espaco Urbano', 60402008),
(60402032, 'Planejamento e Projeto do Equipamento', 60402008),
(60403012, 'Adequacao Ambiental', 60403004),
(60404019, 'Desenvolvimento Historico do Paisagismo', 60404000),
(60404027, 'Conceituacao de Paisagismo e Metodologia do Paisagismo', 60404000),
(60404035, 'Estudos de Organizacao do Espaco Exterior', 60404000),
(60404043, 'Projetos de Espacos Livres Urbanos', 60404000),
(60501014, 'Teoria do Planejamento Urbano e Regional', 60501006),
(60501022, 'Teoria da Urbanizacao', 60501006),
(60501030, 'Politica Urbana', 60501006),
(60501049, 'Historia Urbana', 60501006),
(60502010, 'Informacao, Cadastro e Mapeamento', 60502002),
(60502029, 'Tecnica de Previsao Urbana e Regional', 60502002),
(60502037, 'Tecnicas de Analise e Avaliacao Urbana e Regional', 60502002),
(60502045, 'Tecnicas de Planejamento e Projeto Urbanos e Regionais', 60502002),
(60503017, 'Administracao Municipal e Urbana', 60503009),
(60503025, 'Estudos da Habitacao', 60503009),
(60503033, 'Aspectos Sociais do Planejamento Urbano e Regional', 60503009),
(60503041, 'Aspectos Economicos do Planejamento Urbano e Regional', 60503009),
(60503050, 'Aspectos Fisico-Ambientais do Planejamento Urbano e Regional', 60503009),
(60503068, 'Servicos Comunitarios', 60503009),
(60503076, 'Infra-Estruturas Urbanas e Regionais', 60503009),
(60503084, 'Transporte e Trafego Urbano e Regional', 60503009),
(60503092, 'Legislacao Urbana e Regional', 60503009),
(60601019, 'Distribuicao Espacial Geral', 60601000),
(60601027, 'Distribuicao Espacial Urbana', 60601000),
(60601035, 'Distribuicao Espacial Rural', 60601000),
(60602015, 'Tendencias Passadas', 60602007),
(60602023, 'Taxas e Estimativas Correntes', 60602007),
(60602031, 'Projecoes', 60602007),
(60603011, 'Fecundidade', 60603003),
(60603020, 'Mortalidade', 60603003),
(60603038, 'Migracao', 60603003),
(60604018, 'Casamento e Divorcio', 60604000),
(60604026, 'Familia e Reproducao', 60604000),
(60605014, 'Distribuicao Espacial', 60605006),
(60605022, 'Natalidade, Mortalidade, Migracao', 60605006),
(60605030, 'Nupcialidade e Familia', 60605006),
(60605049, 'Metodos e Tecnicas de Demografia Historica', 60605006),
(60606010, 'Politica Populacional', 60606002),
(60606029, 'Politicas de Redistribuicao de Populacao', 60606002),
(60606037, 'Politicas de Planejamento Familiar', 60606002),
(60701013, 'Teoria Geral da Informacao', 60701005),
(60701021, 'Processos da Comunicacao', 60701005),
(60701030, 'Representacao da Informacao', 60701005),
(60702010, 'Teoria da Classificacao', 60702001),
(60702028, 'Metodos Quantitativos. Bibliometria', 60702001),
(60702036, 'Tecnicas de Recuperacao de Informacao', 60702001),
(60702044, 'Processos de Disseminacao da Informacao', 60702001),
(60703016, 'Organizacao de Arquivos', 60703008),
(60902019, 'Teoria e Etica do Jornalismo', 60902000),
(60902027, 'Organizacao Editorial de Jornais', 60902000),
(60902035, 'Organizacao Comercial de Jornais', 60902000),
(60902043, 'Jornalismo Especializado (Comunitario, Rural, Empresarial, Cientifico)', 60902000),
(60903015, 'Radiodifusao', 60903007),
(60903023, 'Videodifusao', 60903007),
(61002011, 'Servico Social do Trabalho', 61002003),
(61002020, 'Servico Social da Educacao', 61002003),
(61002038, 'Servico Social do Menor', 61002003),
(61002046, 'Servico Social da Saude', 61002003),
(61002054, 'Servico Social da Habitacao', 61002003),
(70201013, 'Teoria Sociologica', 70201005),
(70201021, 'Historia da Sociologia', 70201005),
(70504016, 'Historia dos Estados Unidos', 70504008),
(70504024, 'Historia Latino-Americana', 70504008),
(70505012, 'Historia do Brasil Colonia', 70505004),
(70505020, 'Historia do Brasil Imperio', 70505004),
(70505039, 'Historia do Brasil Republica', 70505004),
(70505047, 'Historia Regional do Brasil', 70505004),
(70601011, 'Geografia da Populacao', 70601003),
(70601020, 'Geografia Agraria', 70601003),
(70601038, 'Geografia Urbana', 70601003),
(70601046, 'Geografia Economica', 70601003),
(70601054, 'Geografia Politica', 70601003),
(70602018, 'Teoria do Desenvolvimento Regional', 70602000),
(70602026, 'Regionalizacao', 70602000),
(70602034, 'Analise Regional', 70602000),
(70701016, 'Historia, Teorias e Sistemas em Psicologia', 70701008),
(70701024, 'Metodologia, Instrumentacao e Equipamento em Psicologia', 70701008),
(70701032, 'Construcao e Validade de Testes, Escalas e Outras Medidas Psicologicas', 70701008),
(70701040, 'Tecnicas de Processamento Estatistico, Matematico e Computacional em Psicologia', 70701008),
(70702012, 'Processos Perceptuais e Motores', 70702004),
(70702020, 'Processos de Aprendizagem, Memoria e Motivacao', 70702004),
(70702039, 'Processos Cognitivos e Atencionais', 70702004),
(70702047, 'Estados Subjetivos e Emocao', 70702004),
(70703019, 'Neurologia, Eletrofisiologia e Comportamento', 70703000),
(70703027, 'Processos Psico-Fisiologicos', 70703000),
(70703035, 'Estimulacao Eletrica e com Drogas; Comportamento', 70703000),
(70703043, 'Psicobiologia', 70703000),
(70704015, 'Estudos Naturalisticos do Comportamento Animal', 70704007),
(70704023, 'Mecanismos Instintivos e Processos Sociais em Animais', 70704007),
(70705011, 'Relacoes Interpessoais', 70705003),
(70705020, 'Processos Grupais e de Comunicacao', 70705003),
(70705038, 'Papeis e Estruturas Sociais; Individuo', 70705003),
(70707014, 'Processos Perceptuais e Cognitivos; Desenvolvimento', 70707006),
(70707022, 'Desenvolvimento Social e da Personalidade', 70707006),
(70708010, 'Planejamento Institucional', 70708002),
(70708029, 'Programacao de Condicoes de Ensino', 70708002),
(70708037, 'Treinamento de Pessoal', 70708002),
(70708045, 'Aprendizagem e Desempenho Academicos', 70708002),
(70708053, 'Ensino e Aprendizagem na Sala de Aula', 70708002),
(70709017, 'Analise Institucional', 70709009),
(70709025, 'Recrutamento e Selecao de Pessoal', 70709009),
(70709033, 'Treinamento e Avaliacao', 70709009),
(70709041, 'Fatores Humanos no Trabalho', 70709009),
(70709050, 'Planejamento Ambiental e Comportamento Humano', 70709009),
(70710015, 'Intervencao Terapeutica', 70710007),
(70710023, 'Programas de Atendimento Comunitario', 70710007),
(70710031, 'Treinamento e Reabilitacao', 70710007),
(70710040, 'Desvios da Conduta', 70710007),
(70710058, 'Disturbios da Linguagem', 70710007),
(70710066, 'Disturbios Psicossomaticos', 70710007),
(70801010, 'Filosofia da Educacao', 70801002),
(70801029, 'Historia da Educacao', 70801002),
(70801037, 'Sociologia da Educacao', 70801002),
(70801045, 'Antropologia Educacional', 70801002),
(70801053, 'Economia da Educacao', 70801002),
(70801061, 'Psicologia Educacional', 70801002),
(70802017, 'Administracao de Sistemas Educacionais', 70802009),
(70802025, 'Administracao de Unidades Educativas', 70802009),
(70803013, 'Politica Educacional', 70803005),
(70803021, 'Planejamento Educacional', 70803005),
(70803030, 'Avaliacao de Sistemas, Instituicoes, Planos e Programas Educacionais', 70803005),
(70804010, 'Teorias da Instrucao', 70804001),
(70804028, 'Metodos e Tecnicas de Ensino', 70804001),
(70804036, 'Tecnologia Educacional', 70804001),
(70804044, 'Avaliacao da Aprendizagem', 70804001),
(70805016, 'Teoria Geral de Planejamento e Desenvolvimento Curricular', 70805008),
(70805024, 'Curriculos Especificos para Niveis e Tipos de Educacao', 70805008),
(70806012, 'Orientacao Educacional', 70806004),
(70806020, 'Orientacao Vocacional', 70806004),
(70807019, 'Educacao de Adultos', 70807000),
(70807027, 'Educacao Permanente', 70807000),
(70807035, 'Educacao Rural', 70807000),
(70807043, 'Educacao em Periferias Urbanas', 70807000),
(70807051, 'Educacao Especial', 70807000),
(70807060, 'Educacao Pre-Escolar', 70807000),
(70807078, 'Ensino Profissionalizante', 70807000),
(70901015, 'Teoria Politica Classica', 70901007),
(70901023, 'Teoria Politica Medieval', 70901007),
(70901031, 'Teoria Politica Moderna', 70901007),
(70901040, 'Teoria Politica Contemporanea', 70901007),
(70902011, 'Estrutura e Transformacao do Estado', 70902003),
(70902020, 'Sistemas Governamentais Comparados', 70902003),
(70902038, 'Relacoes Intergovernamentais', 70902003),
(70902046, 'Estudos do Poder Local', 70902003),
(70902054, 'Instituicoes Governamentais Especificas', 70902003),
(70903018, 'Estudos Eleitorais e Partidos Politicos', 70903000),
(70903026, 'Atitude e Ideologias Politicas', 70903000),
(70903034, 'Conflitos e Coalizoes Politicas', 70903000),
(70903042, 'Comportamento Legislativo', 70903000),
(70903050, 'Classes Sociais e Grupos de Interesse', 70903000),
(70904014, 'Analise do Processo Decisorio', 70904006),
(70904022, 'Analise Institucional', 70904006),
(70904030, 'Tecnicas de Antecipacao', 70904006),
(70905010, 'Politica Externa do Brasil', 70905002),
(70905029, 'Organizacoes Internacionais', 70905002),
(70905037, 'Integracao Internacional, Conflito, Guerra e Paz', 70905002),
(70905045, 'Relacoes Internacionais, Bilaterais e Multilaterais', 70905002),
(80301010, 'Teoria da Arte', 80301002),
(80301029, 'Historia da Arte', 80301002),
(80301037, 'Critica da Arte', 80301002),
(80302017, 'Pintura', 80302009),
(80302025, 'Desenho', 80302009),
(80302033, 'Gravura', 80302009),
(80302041, 'Escultura', 80302009),
(80302050, 'Ceramica', 80302009),
(80302068, 'Tecelagem', 80302009),
(80303013, 'Regencia', 80303005),
(80303021, 'Instrumentacao Musical', 80303005),
(80303030, 'Composicao Musical', 80303005),
(80303048, 'Canto', 80303005),
(80304010, 'Execucao da Danca', 80304001),
(80304028, 'Coreografia', 80304001),
(80305016, 'Dramaturgia', 80305008),
(80305024, 'Direcao Teatral', 80305008),
(80305032, 'Cenografia', 80305008),
(80305040, 'Interpretacao Teatral', 80305008),
(80308015, 'Administracao e Producao de Filmes', 80308007),
(80308023, 'Roteiro e Direcao Cinematograficos', 80308007),
(80308031, 'Tecnicas de Registro e Processamento de Filmes', 80308007),
(80308040, 'Interpretacao Cinematografica', 80308007);

-- --------------------------------------------------------

--
-- Estrutura da tabela `graduacoes`
--

DROP TABLE IF EXISTS `graduacoes`;
CREATE TABLE IF NOT EXISTS `graduacoes` (
  `cod_graduacao` int(11) NOT NULL AUTO_INCREMENT,
  `nome_graduacao` varchar(60) NOT NULL,
  PRIMARY KEY (`cod_graduacao`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `graduacoes`
--

INSERT INTO `graduacoes` (`cod_graduacao`, `nome_graduacao`) VALUES
(8, 'Ensino Fundamental'),
(9, 'Ensino Médio'),
(10, 'Ensino Técnico'),
(11, 'Ensino Superior'),
(12, 'Pós Gradução'),
(13, 'Mestrado'),
(14, 'Doutorado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grande_area`
--

DROP TABLE IF EXISTS `grande_area`;
CREATE TABLE IF NOT EXISTS `grande_area` (
  `cod_grande_area` int(11) NOT NULL,
  `nome_grande_area` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_grande_area`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `grande_area`
--

INSERT INTO `grande_area` (`cod_grande_area`, `nome_grande_area`) VALUES
(10000003, 'Ciencias Exatas e da Terra'),
(20000006, 'Ciencias Biologicas'),
(30000009, 'Engenharias'),
(40000001, 'Ciencias da Saude'),
(50000004, 'Ciencias Agrarias'),
(60000007, 'Ciencias Sociais Aplicadas'),
(70000000, 'Ciencias Humanas'),
(80000002, 'Linguistica, Letras e Artes'),
(90000005, 'Outra');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos_linhas`
--

DROP TABLE IF EXISTS `grupos_linhas`;
CREATE TABLE IF NOT EXISTS `grupos_linhas` (
  `fk_cod_grupo` int(11) NOT NULL,
  `fk_cod_linha` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date DEFAULT NULL,
  `descricao` text,
  KEY `FK_cod_grupo` (`fk_cod_grupo`),
  KEY `FK_cod_linha` (`fk_cod_linha`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `grupos_linhas`
--

INSERT INTO `grupos_linhas` (`fk_cod_grupo`, `fk_cod_linha`, `data_inicio`, `data_fim`, `descricao`) VALUES
(8, 80302025, '2018-10-17', NULL, NULL),
(8, 10102019, '2018-10-11', NULL, 'asdfghgfdsvc'),
(8, 10405011, '2018-10-24', NULL, 'should i stay ou should i go'),
(9, 10102051, '2018-01-01', NULL, NULL),
(9, 10103058, '2018-01-01', NULL, 'dfdffvxvxcvcvcxvcxvxvxcvxcvcvxcvcxv'),
(9, 10101063, '2013-04-04', NULL, 'gncbdsvsfgbcbv scnxcvbdfbdvbdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo_pesquisa`
--

DROP TABLE IF EXISTS `grupo_pesquisa`;
CREATE TABLE IF NOT EXISTS `grupo_pesquisa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) NOT NULL,
  `sigla` varchar(8) NOT NULL,
  `lattes` varchar(120) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `descricao` text,
  `data_inicio` date NOT NULL,
  `ativacao` tinyint(1) DEFAULT NULL,
  `id_lider` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lider` (`id_lider`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `grupo_pesquisa`
--

INSERT INTO `grupo_pesquisa` (`id`, `nome`, `sigla`, `lattes`, `email`, `descricao`, `data_inicio`, `ativacao`, `id_lider`) VALUES
(8, 'Grupo Gordo', 'GG', 'laksdjlkasjlk', 'gg@gg.com', 'jkjhkahdkhsk', '2018-10-03', 1, 29),
(9, 'Teste', 'TST', 'www.google.com', 'danillomodesto5@gmail.com', 'Damian William Jones (nascido em 30 de junho de 1995)[1] Ã© um jogador norte-americano de basquete profissional, que atualmente joga pelo Golden State Warriors, da liga NBA. Com 2,13 metros de altura, atua na posiÃ§Ã£o de pivÃ´.', '2018-01-01', 1, 30),
(10, 'Novo', 'NOVO', NULL, NULL, NULL, '2019-02-02', 2, 30);

-- --------------------------------------------------------

--
-- Estrutura da tabela `links`
--

DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chave` varchar(64) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mudancas_lider`
--

DROP TABLE IF EXISTS `mudancas_lider`;
CREATE TABLE IF NOT EXISTS `mudancas_lider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lider_antigo` int(11) NOT NULL,
  `data_saida` date NOT NULL,
  `id_lider_novo` int(11) NOT NULL,
  `data_entrada` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lider_antigo` (`id_lider_antigo`),
  KEY `id_lider_novo` (`id_lider_novo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos_pesquisa`
--

DROP TABLE IF EXISTS `projetos_pesquisa`;
CREATE TABLE IF NOT EXISTS `projetos_pesquisa` (
  `cod_projeto` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `fk_grupo` int(11) NOT NULL,
  `fk_linha` int(11) NOT NULL,
  `bolsa` varchar(100) NOT NULL,
  `fk_prof_responsavel` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date DEFAULT NULL,
  PRIMARY KEY (`cod_projeto`),
  KEY `linha pesquisa` (`fk_linha`),
  KEY `professor responsavel` (`fk_prof_responsavel`),
  KEY `grupo` (`fk_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `projetos_pesquisa`
--

INSERT INTO `projetos_pesquisa` (`cod_projeto`, `titulo`, `fk_grupo`, `fk_linha`, `bolsa`, `fk_prof_responsavel`, `data_inicio`, `data_fim`) VALUES
(4, 'Novo', 9, 10103058, 'Voluntario', 3, '2018-01-01', NULL),
(5, 'Teste', 9, 10102051, 'CNPQ', 4, '2018-01-01', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto_aluno`
--

DROP TABLE IF EXISTS `projeto_aluno`;
CREATE TABLE IF NOT EXISTS `projeto_aluno` (
  `fk_projeto` int(11) NOT NULL,
  `fk_aluno` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date DEFAULT NULL,
  KEY `projeto` (`fk_projeto`),
  KEY `aluno` (`fk_aluno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `projeto_aluno`
--

INSERT INTO `projeto_aluno` (`fk_projeto`, `fk_aluno`, `data_inicio`, `data_fim`) VALUES
(4, 2, '2018-01-01', NULL),
(5, 2, '2018-01-01', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacoes`
--

DROP TABLE IF EXISTS `publicacoes`;
CREATE TABLE IF NOT EXISTS `publicacoes` (
  `cod_publicacao` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `tipo` varchar(80) NOT NULL,
  `data_pub` date NOT NULL,
  `fk_docente` int(11) NOT NULL,
  `fk_projeto` int(11) DEFAULT NULL,
  `fk_linha_docente` int(11) NOT NULL,
  `referencia_abnt` text NOT NULL,
  `referencia_pub` text NOT NULL,
  `fk_grupo` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_publicacao`),
  KEY `docente` (`fk_docente`),
  KEY `linha projeto` (`fk_projeto`),
  KEY `linha docente` (`fk_linha_docente`),
  KEY `grupo` (`fk_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `publicacoes`
--

INSERT INTO `publicacoes` (`cod_publicacao`, `titulo`, `tipo`, `data_pub`, `fk_docente`, `fk_projeto`, `fk_linha_docente`, `referencia_abnt`, `referencia_pub`, `fk_grupo`) VALUES
(1, 'Teste', 'CapÃ­tulo de livro', '2018-01-01', 3, NULL, 10103058, 'vsdfbsxmncvdhgckabckj', 'jkhshcbksjhcbksjcbsahkbkchbs', 9),
(2, 'Novo', 'Livro', '2018-01-01', 3, 4, 10103058, 'cjkhndckjsncskdljcnsklcnckln', 'kl cdncklsdnckjsdnjkdsfndsjk', NULL),
(3, 'kdfhksdfh', 'PeriÃ³dicos', '2018-01-01', 4, 5, 10102051, 'sdkljfdhnsjkldjflsdjfklsjdlk', 'ldskfjdslkfjkdlfdjsfklÃ§dsjflkdsÃ§fj', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reunioes`
--

DROP TABLE IF EXISTS `reunioes`;
CREATE TABLE IF NOT EXISTS `reunioes` (
  `cod_reunioes` int(11) NOT NULL AUTO_INCREMENT,
  `fk_lider` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `pauta` text,
  `data_real` datetime DEFAULT NULL,
  `ata` text,
  `docentes` text,
  `termino` datetime DEFAULT NULL,
  `convidados` text,
  PRIMARY KEY (`cod_reunioes`),
  KEY `lider` (`fk_lider`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reunioes`
--

INSERT INTO `reunioes` (`cod_reunioes`, `fk_lider`, `data`, `pauta`, `data_real`, `ata`, `docentes`, `termino`, `convidados`) VALUES
(1, 30, '2018-11-26 11:30:21', 'asfsafa', NULL, NULL, NULL, NULL, NULL),
(2, 29, '2018-11-26 22:22:00', 'akljfhdkljhafkljhaskldjf', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sub_area`
--

DROP TABLE IF EXISTS `sub_area`;
CREATE TABLE IF NOT EXISTS `sub_area` (
  `cod_sub_area` int(11) NOT NULL,
  `nome_sub_area` varchar(120) NOT NULL,
  `fk_area` int(11) NOT NULL,
  PRIMARY KEY (`cod_sub_area`),
  KEY `FK` (`fk_area`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sub_area`
--

INSERT INTO `sub_area` (`cod_sub_area`, `nome_sub_area`, `fk_area`) VALUES
(10101004, 'Algebra', 10100008),
(10102000, 'Analise', 10100008),
(10103007, 'Geometria e Topologia', 10100008),
(10104003, 'Matematica Aplicada', 10100008),
(10201009, 'Probabilidade', 10200002),
(10202005, 'Estatistica', 10200002),
(10203001, 'Probabilidade e Estatistica Aplicadas', 10200002),
(10301003, 'Teoria da Computacao', 10300007),
(10302000, 'Matematica da Computacao', 10300007),
(10303006, 'Metodologia e Tecnicas da Computacao', 10300007),
(10304002, 'Sistemas de Computacao', 10300007),
(10401008, 'Astronomia de Posicao e Mecanica Celeste', 10400001),
(10402004, 'Astrofisica Estelar', 10400001),
(10403000, 'Astrofisica do Meio Interestelar', 10400001),
(10404007, 'Astrofisica Extragalactica', 10400001),
(10405003, 'Astrofisica do Sistema Solar', 10400001),
(10406000, 'Instrumentacao Astronomica', 10400001),
(10501002, 'Fisica Geral', 10500006),
(10502009, 'Areas Classicas de Fenomenologia e suas Aplicacoes', 10500006),
(10503005, 'Fisica das Particulas Elementares e Campos', 10500006),
(10504001, 'Fisica Nuclear', 10500006),
(10505008, 'Fisica Atomica e Molecular', 10500006),
(10506004, 'Fisica dos Fluidos, Fisica de Plasmas e Descargas Eletricas', 10500006),
(10507000, 'Fisica da Materia Condensada', 10500006),
(10601007, 'Quimica Organica', 10600000),
(10602003, 'Quimica Inorganica', 10600000),
(10603000, 'Fisico-Quimica', 10600000),
(10604006, 'Quimica Analitica', 10600000),
(10701001, 'Geologia', 10700005),
(10702008, 'Geofisica', 10700005),
(10703004, 'Meteorologia', 10700005),
(10704000, 'Geodesia', 10700005),
(10705007, 'Geografia Fisica', 10700005),
(10801006, 'Oceanografia Biologica', 10800000),
(10802002, 'Oceanografia Fisica', 10800000),
(10803009, 'Oceanografia Quimica', 10800000),
(10804005, 'Oceanografia Geologica', 10800000),
(20201001, 'Genetica Quantitativa', 20200005),
(20202008, 'Genetica Molecular e de Microorganismos', 20200005),
(20203004, 'Genetica Vegetal', 20200005),
(20204000, 'Genetica Animal', 20200005),
(20205007, 'Genetica Humana e Medica', 20200005),
(20206003, 'Mutagenese', 20200005),
(20301006, 'Paleobotanica', 20300000),
(20302002, 'Morfologia Vegetal', 20300000),
(20303009, 'Fisiologia Vegetal', 20300000),
(20304005, 'Taxonomia Vegetal', 20300000),
(20305001, 'Fitogeografia', 20300000),
(20306008, 'Botanica Aplicada', 20300000),
(20401000, 'Paleozoologia', 20400004),
(20402007, 'Morfologia dos Grupos Recentes', 20400004),
(20403003, 'Fisiologia dos Grupos Recentes', 20400004),
(20404000, 'Comportamento Animal', 20400004),
(20405006, 'Taxonomia dos Grupos Recentes', 20400004),
(20406002, 'Zoologia Aplicada', 20400004),
(20501005, 'Ecologia Teorica', 20500009),
(20502001, 'Ecologia de Ecossistemas', 20500009),
(20503008, 'Ecologia Aplicada', 20500009),
(20601000, 'Citologia e Biologia Celular', 20600003),
(20602006, 'Embriologia', 20600003),
(20603002, 'Histologia', 20600003),
(20604009, 'Anatomia', 20600003),
(20701004, 'Fisiologia Geral', 20700008),
(20702000, 'Fisiologia de Orgaos e Sistemas', 20700008),
(20703007, 'Fisiologia do Esforco', 20700008),
(20704003, 'Fisiologia Comparada', 20700008),
(20801009, 'Quimica de Macromoleculas', 20800002),
(20802005, 'Bioquimica dos Microorganismos', 20800002),
(20803001, 'Metabolismo e Bioenergetica', 20800002),
(20804008, 'Biologia Molecular', 20800002),
(20805004, 'Enzimologia', 20800002),
(20901003, 'Biofisica Molecular', 20900007),
(20902000, 'Biofisica Celular', 20900007),
(20903006, 'Biofisica de Processos e Sistemas', 20900007),
(20904002, 'Radiologia e Fotobiologia', 20900007),
(21001006, 'Farmacologia Geral', 21000000),
(21002002, 'Farmacologia Autonomica', 21000000),
(21003009, 'Neuropsicofarmacologia', 21000000),
(21004005, 'Farmacologia Cardiorenal', 21000000),
(21005001, 'Farmacologia Bioquimica e Molecular', 21000000),
(21006008, 'Etnofarmacologia', 21000000),
(21007004, 'Toxicologia', 21000000),
(21008000, 'Farmacologia Clinica', 21000000),
(21101000, 'Imunoquimica', 21100004),
(21102007, 'Imunologia Celular', 21100004),
(21103003, 'Imunogenetica', 21100004),
(21104000, 'Imunologia Aplicada', 21100004),
(21201005, 'Biologia e Fisiologia dos Microorganismos', 21200009),
(21202001, 'Microbiologia Aplicada', 21200009),
(21301000, 'Protozoologia de Parasitos', 21300003),
(21302006, 'Helmintologia de Parasitos', 21300003),
(21303002, 'Entomologia e Malacologia de Parasitos e Vetores', 21300003),
(21401004, 'Biotecnologia em Saude Humana e Animal', 21400008),
(21402000, 'Biotecnologia Industrial', 21400008),
(21403007, 'Biotecnologia Vegetal', 21400008),
(21404003, 'Biotecnologia Ambiental e Recursos Naturais', 21400008),
(30101000, 'Construcao Civil', 30100003),
(30102006, 'Estruturas', 30100003),
(30103002, 'Geotecnica', 30100003),
(30104009, 'Engenharia Hidraulica', 30100003),
(30105005, 'Infra-Estrutura de Transportes', 30100003),
(30201004, 'Pesquisa Mineral', 30200008),
(30202000, 'Lavra', 30200008),
(30203007, 'Tratamento de Minerios', 30200008),
(30301009, 'Instalacoes e Equipamentos Metalurgicos', 30300002),
(30302005, 'Metalurgia Extrativa', 30300002),
(30303001, 'Metalurgia de Transformacao', 30300002),
(30304008, 'Metalurgia Fisica', 30300002),
(30305004, 'Materiais Nao-Metalicos', 30300002),
(30401003, 'Materiais Eletricos', 30400007),
(30402000, 'Medidas Eletricas, Magneticas e Eletronicas; Instrumentacao', 30400007),
(30403006, 'Circuitos Eletricos, Magneticos e Eletronicos', 30400007),
(30404002, 'Sistemas Eletricos de Potencia', 30400007),
(30405009, 'Eletronica Industrial, Sistemas e Controles Eletronicos', 30400007),
(30406005, 'Telecomunicacoes', 30400007),
(30501008, 'Fenomenos de Transporte', 30500001),
(30502004, 'Engenharia Termica', 30500001),
(30503000, 'Mecanica dos Solidos', 30500001),
(30504007, 'Projetos de Maquinas', 30500001),
(30505003, 'Processos de Fabricacao', 30500001),
(30601002, 'Processos Industriais de Engenharia Quimica', 30600006),
(30602009, 'Operacoes Industriais e Equipamentos para Engenharia Quimica', 30600006),
(30603005, 'Tecnologia Quimica', 30600006),
(30701007, 'Recursos Hidricos', 30700000),
(30702003, 'Tratamento de Aguas de Abastecimento e Residuarias', 30700000),
(30703000, 'Saneamento Basico', 30700000),
(30704006, 'Saneamento Ambiental', 30700000),
(30801001, 'Gerencia de Producao', 30800005),
(30802008, 'Pesquisa Operacional', 30800005),
(30803004, 'Engenharia do Produto', 30800005),
(30804000, 'Engenharia Economica', 30800005),
(30901006, 'Aplicacoes de Radioisotopos', 30900000),
(30902002, 'Fusao Controlada', 30900000),
(30903009, 'Combustivel Nuclear', 30900000),
(30904005, 'Tecnologia dos Reatores', 30900000),
(31001009, 'Planejamento de Transportes', 31000002),
(31002005, 'Veiculos e Equipamentos de Controle', 31000002),
(31003001, 'Operacoes de Transportes', 31000002),
(31101003, 'Hidrodinamica de Navios e Sistemas Oceanicos', 31100007),
(31102000, 'Estruturas Navais e Oceanicas', 31100007),
(31103006, 'Maquinas Maritimas', 31100007),
(31104002, 'Projeto de Navios e de Sistemas Oceanicos', 31100007),
(31105009, 'Tecnologia de Construcao Naval e de Sistemas Oceanicos', 31100007),
(31201008, 'Aerodinamica', 31200001),
(31202004, 'Dinamica de Voo', 31200001),
(31203000, 'Estruturas Aeroespaciais', 31200001),
(31204007, 'Materiais e Processos para Engenharia Aeronautica e Aeroespacial', 31200001),
(31205003, 'Propulsao Aeroespacial', 31200001),
(31206000, 'Sistemas Aeroespaciais', 31200001),
(31301002, 'Bioengenharia', 31300006),
(31302009, 'Engenharia Medica', 31300006),
(31401007, 'Planejamento Energetico', 31400000),
(31402003, 'Fontes Renovaveis de Energia', 31400000),
(40101002, 'Clinica Medica', 40100006),
(40102009, 'Cirurgia', 40100006),
(40103005, 'Saude Materno-Infantil', 40100006),
(40104001, 'Psiquiatria', 40100006),
(40105008, 'Anatomia Patologica e Patologia Clinica', 40100006),
(40106004, 'Radiologia Medica', 40100006),
(40107000, 'Medicina Legal e Deontologia', 40100006),
(40201007, 'Clinica Odontologica', 40200000),
(40202003, 'Cirurgia Buco-Maxilo-Facial', 40200000),
(40203000, 'Ortodontia', 40200000),
(40204006, 'Odontopediatria', 40200000),
(40205002, 'Periodontia', 40200000),
(40206009, 'Endodontia', 40200000),
(40207005, 'Radiologia Odontologica', 40200000),
(40208001, 'Odontologia Social e Preventiva', 40200000),
(40209008, 'Materiais Odontologicos', 40200000),
(40301001, 'Farmacotecnica e tecnologia farmaceutica', 40300005),
(40302008, 'Farmacognosia', 40300005),
(40303004, 'Avaliacao e analises toxicologicas', 40300005),
(40304000, 'Garantia e controle de qualidade farmaceuticos', 40300005),
(40306003, 'Fisiopatologia e diagnostico laboratorial', 40300005),
(40307000, 'Farmacia clinica, assistencia e atencao farmaceuticas', 40300005),
(40308006, 'Quimica Farmaceutica Medicinal', 40300005),
(40401006, 'Enfermagem em Saude do Adulto e do Idoso', 40400000),
(40402002, 'Enfermagem em Saude da Mulher', 40400000),
(40403009, 'Enfermagem em Saude da Crianca e do Adolescente', 40400000),
(40404005, 'Enfermagem em Saude Mental', 40400000),
(40405001, 'Enfermagem em Doencas Emergentes, Reemergentes e Negligenciadas', 40400000),
(40406008, 'Enfermagem em Saude Coletiva', 40400000),
(40407004, 'Enfermagem Fundamental', 40400000),
(40408000, 'Enfermagem na Gestao e Gerenciamento', 40400000),
(40501000, 'Bioquimica da Nutricao', 40500004),
(40502007, 'Dietetica', 40500004),
(40503003, 'Analise Nutricional de Populacao', 40500004),
(40504000, 'Desnutricao e Desenvolvimento Fisiologico', 40500004),
(40601005, 'Epidemiologia', 40600009),
(40602001, 'Saude Publica', 40600009),
(40603008, 'Medicina Preventiva', 40600009),
(50101005, 'Ciencia do Solo', 50100009),
(50102001, 'Fitossanidade', 50100009),
(50103008, 'Fitotecnia', 50100009),
(50104004, 'Floricultura, Parques e Jardins', 50100009),
(50105000, 'Agrometeorologia', 50100009),
(50106007, 'Extensao Rural', 50100009),
(50201000, 'Silvicultura', 50200003),
(50202006, 'Manejo Florestal', 50200003),
(50203002, 'Tecnicas e Operacoes Florestais', 50200003),
(50204009, 'Tecnologia e Utilizacao de Produtos Florestais', 50200003),
(50205005, 'Conservacao da Natureza', 50200003),
(50206001, 'Energia de Biomassa Florestal', 50200003),
(50301004, 'Maquinas e Implementos Agricolas', 50300008),
(50302000, 'Engenharia de Agua e Solo', 50300008),
(50303007, 'Engenharia de Processamento de Produtos Agricolas', 50300008),
(50304003, 'Construcoes Rurais e Ambiencia', 50300008),
(50305000, 'Energizacao Rural', 50300008),
(50401009, 'Ecologia dos Animais Domesticos e Etologia', 50400002),
(50402005, 'Genetica e Melhoramento dos Animais Domesticos', 50400002),
(50403001, 'Nutricao e Alimentacao Animal', 50400002),
(50404008, 'Pastagem e Forragicultura', 50400002),
(50405004, 'Producao Animal', 50400002),
(50501003, 'Clinica e Cirurgia Animal', 50500007),
(50502000, 'Medicina Veterinaria Preventiva', 50500007),
(50503006, 'Patologia Animal', 50500007),
(50504002, 'Reproducao Animal', 50500007),
(50505009, 'Inspecao de Produtos de Origem Animal', 50500007),
(50601008, 'Recursos Pesqueiros Marinhos', 50600001),
(50602004, 'Recursos Pesqueiros de Aguas Interiores', 50600001),
(50603000, 'Aquicultura', 50600001),
(50604007, 'Engenharia de Pesca', 50600001),
(50701002, 'Ciencia de Alimentos', 50700006),
(50702009, 'Tecnologia de Alimentos', 50700006),
(50703005, 'Engenharia de Alimentos', 50700006),
(60101008, 'Teoria do Direito', 60100001),
(60102004, 'Direito Publico', 60100001),
(60103000, 'Direito Privado', 60100001),
(60104007, 'Direitos Especiais', 60100001),
(60201002, 'Administracao de Empresas', 60200006),
(60202009, 'Administracao Publica', 60200006),
(60203005, 'Administracao de Setores Especificos', 60200006),
(60204001, 'Ciencias Contabeis', 60200006),
(60301007, 'Teoria Economica', 60300000),
(60302003, 'Metodos Quantitativos em Economia', 60300000),
(60303000, 'Economia Monetaria e Fiscal', 60300000),
(60304006, 'Crescimento, Flutuacoes e Planejamento Economico', 60300000),
(60305002, 'Economia Internacional', 60300000),
(60306009, 'Economia dos Recursos Humanos', 60300000),
(60307005, 'Economia Industrial', 60300000),
(60308001, 'Economia do Bem-Estar Social', 60300000),
(60309008, 'Economia Regional e Urbana', 60300000),
(60310006, 'Economias Agraria e dos Recursos Naturais', 60300000),
(60401001, 'Fundamentos de Arquitetura e Urbanismo', 60400005),
(60402008, 'Projeto de Arquitetura e Urbanismo', 60400005),
(60403004, 'Tecnologia de Arquitetura e Urbanismo', 60400005),
(60404000, 'Paisagismo', 60400005),
(60501006, 'Fundamentos do Planejamento Urbano e Regional', 60500000),
(60502002, 'Metodos e Tecnicas do Planejamento Urbano e Regional', 60500000),
(60503009, 'Servicos Urbanos e Regionais', 60500000),
(60601000, 'Distribuicao Espacial', 60600004),
(60602007, 'Tendencia Populacional', 60600004),
(60603003, 'Componentes da Dinamica Demografica', 60600004),
(60604000, 'Nupcialidade e Familia', 60600004),
(60605006, 'Demografia Historica', 60600004),
(60606002, 'Politica Publica e Populacao', 60600004),
(60607009, 'Fontes de Dados Demograficos', 60600004),
(60701005, 'Teoria da Informacao', 60700009),
(60702001, 'Biblioteconomia', 60700009),
(60703008, 'Arquivologia', 60700009),
(60901004, 'Teoria da Comunicacao', 60900008),
(60902000, 'Jornalismo e Editoracao', 60900008),
(60903007, 'Radio e Televisao', 60900008),
(60904003, 'Relacoes Publicas e Propaganda', 60900008),
(60905000, 'Comunicacao Visual', 60900008),
(61001007, 'Fundamentos do Servico Social', 61000000),
(61002003, 'Servico Social Aplicado', 61000000),
(61201006, 'Programacao Visual', 61200000),
(61202002, 'Desenho de Produto', 61200000),
(70101000, 'Historia da Filosofia', 70100004),
(70102007, 'Metafisica', 70100004),
(70103003, 'Logica', 70100004),
(70104000, 'Etica', 70100004),
(70105006, 'Epistemologia', 70100004),
(70106002, 'Filosofia Brasileira', 70100004),
(70107009, 'Estetica e Filosofia da Arte', 70100004),
(70201005, 'Fundamentos da Sociologia', 70200009),
(70202001, 'Sociologia do Conhecimento', 70200009),
(70203008, 'Sociologia do Desenvolvimento', 70200009),
(70204004, 'Sociologia Urbana', 70200009),
(70205000, 'Sociologia Rural', 70200009),
(70206007, 'Sociologia da Saude', 70200009),
(70207003, 'Outras Sociologias Especificas', 70200009),
(70301000, 'Teoria Antropologica', 70300003),
(70302006, 'Etnologia Indigena', 70300003),
(70303002, 'Antropologia Urbana', 70300003),
(70304009, 'Antropologia Rural', 70300003),
(70305005, 'Antropologia das Populacoes Afro-Brasileiras', 70300003),
(70401004, 'Teoria e Metodo em Arqueologia', 70400008),
(70402000, 'Arqueologia Pre-Historica', 70400008),
(70403007, 'Arqueologia Historica', 70400008),
(70501009, 'Teoria e Filosofia da Historia', 70500002),
(70502005, 'Historia Antiga e Medieval', 70500002),
(70503001, 'Historia Moderna e Contemporanea', 70500002),
(70504008, 'Historia da America', 70500002),
(70505004, 'Historia do Brasil', 70500002),
(70506000, 'Historia das Ciencias', 70500002),
(70601003, 'Geografia Humana', 70600007),
(70602000, 'Geografia Regional', 70600007),
(70701008, 'Fundamentos e Medidas da Psicologia', 70700001),
(70702004, 'Psicologia Experimental', 70700001),
(70703000, 'Psicologia Fisiologica', 70700001),
(70704007, 'Psicologia Comparativa', 70700001),
(70705003, 'Psicologia Social', 70700001),
(70706000, 'Psicologia Cognitiva', 70700001),
(70707006, 'Psicologia do Desenvolvimento Humano', 70700001),
(70708002, 'Psicologia do Ensino e da Aprendizagem', 70700001),
(70709009, 'Psicologia do Trabalho e Organizacional', 70700001),
(70710007, 'Tratamento e Prevencao Psicologica', 70700001),
(70801002, 'Fundamentos da Educacao', 70800006),
(70802009, 'Administracao Educacional', 70800006),
(70803005, 'Planejamento e Avaliacao Educacional', 70800006),
(70804001, 'Ensino-Aprendizagem', 70800006),
(70805008, 'Curriculo', 70800006),
(70806004, 'Orientacao e Aconselhamento', 70800006),
(70807000, 'Topicos Especificos de Educacao', 70800006),
(70901007, 'Teoria Politica', 70900000),
(70902003, 'Estado e Governo', 70900000),
(70903000, 'Comportamento Politico', 70900000),
(70904006, 'Politicas Publicas', 70900000),
(70905002, 'Politica Internacional', 70900000),
(71001000, 'Historia das Teologias e Religioes', 71000003),
(71004009, 'Teologia Pratica', 71000003),
(71005005, 'Teologia Fundamental Sistematica', 71000003),
(71006001, 'Ciencias da Religiao Aplicada', 71000003),
(71007008, 'Ciencias da Linguagem Religiosa', 71000003),
(71008004, 'Ciencias Empiricas da Religiao', 71000003),
(71009000, 'Epistemologia das Ciencias da Religiao', 71000003),
(71010009, 'Tradicoes e Escrituras Sagradas', 71000003),
(80101003, 'Teoria e Analise Linguistica', 80100007),
(80102000, 'Filosofia da Linguagem', 80100007),
(80103006, 'Linguistica Historica', 80100007),
(80104002, 'Sociolinguistica e Dialetologia', 80100007),
(80105009, 'Psicolinguistica', 80100007),
(80106005, 'Linguistica Aplicada', 80100007),
(80201008, 'Lingua Portuguesa', 80200001),
(80202004, 'Linguas Estrangeiras Modernas', 80200001),
(80203000, 'Linguas Classicas', 80200001),
(80204007, 'Linguas Indigenas', 80200001),
(80205003, 'Teoria Literaria', 80200001),
(80206000, 'Literatura Brasileira', 80200001),
(80207006, 'Outras Literaturas Vernaculas', 80200001),
(80208002, 'Literaturas Estrangeiras Modernas', 80200001),
(80209009, 'Literaturas Classicas', 80200001),
(80210007, 'Literatura Comparada', 80200001),
(80301002, 'Fundamentos e Critica das Artes', 80300006),
(80302009, 'Artes Plasticas', 80300006),
(80303005, 'Musica', 80300006),
(80304001, 'Danca', 80300006),
(80305008, 'Teatro', 80300006),
(80306004, 'Opera', 80300006),
(80307000, 'Fotografia', 80300006),
(80308007, 'Cinema', 80300006),
(80309003, 'Artes do Video', 80300006),
(80310001, 'Educacao Artistica', 80300006);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnicos`
--

DROP TABLE IF EXISTS `tecnicos`;
CREATE TABLE IF NOT EXISTS `tecnicos` (
  `cod_tecnico` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `lattes` varchar(100) NOT NULL,
  `atividade_realizada` varchar(150) NOT NULL,
  `fk_graduacao` int(11) NOT NULL,
  `curso` varchar(100) DEFAULT NULL,
  `ano_conclusao` int(4) NOT NULL,
  `fk_cod_grupo` int(11) NOT NULL,
  `fk_especialidade` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date DEFAULT NULL,
  `situacao` tinyint(4) NOT NULL COMMENT '1=ativo 0=inativo',
  PRIMARY KEY (`cod_tecnico`),
  KEY `fk_graducao` (`fk_graduacao`),
  KEY `grupo` (`fk_cod_grupo`),
  KEY `especialidade` (`fk_especialidade`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tecnicos`
--

INSERT INTO `tecnicos` (`cod_tecnico`, `nome`, `lattes`, `atividade_realizada`, `fk_graduacao`, `curso`, `ano_conclusao`, `fk_cod_grupo`, `fk_especialidade`, `data_inicio`, `data_fim`, `situacao`) VALUES
(1, 'TrovÃ£o', 'trovÃ£o.com', 'DogÃ£o', 14, 'BabacÃ£o', 2012, 8, 10102019, '2018-10-17', NULL, 1),
(2, 'outro inativao', 'inativaessaporra.com', 'sumiÃ£o', 8, 'burrÃ£o inativo', 1998, 8, 80302025, '2018-10-01', '2018-10-21', 0),
(3, 'Teste', 'www.google.com', 'teste', 11, 'teste', 2011, 9, 10101063, '2018-01-01', NULL, 1),
(4, 'Novo', 'www.google.com', 'dfgfdgfdgfd', 13, 'sdfdfdsfdsfdsf', 2011, 9, 10102051, '2018-01-01', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prontuario` varchar(9) NOT NULL,
  `nome` varchar(120) DEFAULT NULL,
  `senha` varchar(64) NOT NULL,
  `email` varchar(120) NOT NULL,
  `lattes` varchar(120) DEFAULT NULL,
  `alteracao` date DEFAULT NULL,
  `adm` tinyint(1) NOT NULL,
  `chave` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `prontuario`, `nome`, `senha`, `email`, `lattes`, `alteracao`, `adm`, `chave`) VALUES
(28, 'ADM', 'Admin', '1971F7E67A70645F59B2080F89908AF169C6C5CA5C8326657635E15E4BE8B65B', 'eric.gmoreira98@gmail.com', NULL, '2018-10-20', 1, 'a78cee544d5535ddf3f3b21fac85d68fdc93e2040fdc665e94977bcf65cb7ce9'),
(29, '12345', 'Eric', 'ff2590eae5b6435000af4aa7f205ae0d650045dbc7ec7d72f5cefd151f7ca414', 'eric.gmoreira98@gmail.com', NULL, '2018-10-20', 0, 'a78cee544d5535ddf3f3b21fac85d68fdc93e2040fdc665e94977bcf65cb7ce9'),
(30, '169006X', 'Danillo', '1971f7e67a70645f59b2080f89908af169c6c5ca5c8326657635e15e4be8b65b', 'danillomodesto5@gmail.com', NULL, '2018-11-10', 0, '2f12753d7904b605e98610750fed2d755e543af4206c3281373c8d642d24103a');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `area_conhecimento`
--
ALTER TABLE `area_conhecimento`
  ADD CONSTRAINT `area_conhecimento_ibfk_1` FOREIGN KEY (`fk_grande_area`) REFERENCES `grande_area` (`cod_grande_area`);

--
-- Limitadores para a tabela `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `docentes_ibfk_1` FOREIGN KEY (`fk_graduacao`) REFERENCES `graduacoes` (`cod_graduacao`),
  ADD CONSTRAINT `docentes_ibfk_2` FOREIGN KEY (`fk_cod_grupo`) REFERENCES `grupo_pesquisa` (`id`),
  ADD CONSTRAINT `docentes_ibfk_3` FOREIGN KEY (`fk_especialidade`) REFERENCES `especialidade` (`cod_especialidade`);

--
-- Limitadores para a tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  ADD CONSTRAINT `equipamentos_ibfk_1` FOREIGN KEY (`fk_grupo`) REFERENCES `grupo_pesquisa` (`id`);

--
-- Limitadores para a tabela `especialidade`
--
ALTER TABLE `especialidade`
  ADD CONSTRAINT `especialidade_ibfk_1` FOREIGN KEY (`fk_sub_area`) REFERENCES `sub_area` (`cod_sub_area`);

--
-- Limitadores para a tabela `grupos_linhas`
--
ALTER TABLE `grupos_linhas`
  ADD CONSTRAINT `grupos_linhas_ibfk_1` FOREIGN KEY (`fk_cod_grupo`) REFERENCES `grupo_pesquisa` (`id`),
  ADD CONSTRAINT `grupos_linhas_ibfk_2` FOREIGN KEY (`fk_cod_linha`) REFERENCES `especialidade` (`cod_especialidade`);

--
-- Limitadores para a tabela `grupo_pesquisa`
--
ALTER TABLE `grupo_pesquisa`
  ADD CONSTRAINT `grupo_pesquisa_ibfk_1` FOREIGN KEY (`id_lider`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `mudancas_lider`
--
ALTER TABLE `mudancas_lider`
  ADD CONSTRAINT `mudancas_lider_ibfk_1` FOREIGN KEY (`id_lider_antigo`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `mudancas_lider_ibfk_2` FOREIGN KEY (`id_lider_novo`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `projetos_pesquisa`
--
ALTER TABLE `projetos_pesquisa`
  ADD CONSTRAINT `projetos_pesquisa_ibfk_2` FOREIGN KEY (`fk_linha`) REFERENCES `grupos_linhas` (`fk_cod_linha`),
  ADD CONSTRAINT `projetos_pesquisa_ibfk_3` FOREIGN KEY (`fk_prof_responsavel`) REFERENCES `docentes` (`cod_docente`),
  ADD CONSTRAINT `projetos_pesquisa_ibfk_4` FOREIGN KEY (`fk_grupo`) REFERENCES `grupo_pesquisa` (`id`);

--
-- Limitadores para a tabela `projeto_aluno`
--
ALTER TABLE `projeto_aluno`
  ADD CONSTRAINT `projeto_aluno_ibfk_1` FOREIGN KEY (`fk_projeto`) REFERENCES `projetos_pesquisa` (`cod_projeto`),
  ADD CONSTRAINT `projeto_aluno_ibfk_2` FOREIGN KEY (`fk_aluno`) REFERENCES `alunos` (`cod_aluno`);

--
-- Limitadores para a tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  ADD CONSTRAINT `publicacoes_ibfk_1` FOREIGN KEY (`fk_docente`) REFERENCES `docentes` (`cod_docente`),
  ADD CONSTRAINT `publicacoes_ibfk_2` FOREIGN KEY (`fk_linha_docente`) REFERENCES `docentes` (`fk_especialidade`),
  ADD CONSTRAINT `publicacoes_ibfk_3` FOREIGN KEY (`fk_projeto`) REFERENCES `projetos_pesquisa` (`cod_projeto`),
  ADD CONSTRAINT `publicacoes_ibfk_4` FOREIGN KEY (`fk_grupo`) REFERENCES `grupo_pesquisa` (`id`);

--
-- Limitadores para a tabela `sub_area`
--
ALTER TABLE `sub_area`
  ADD CONSTRAINT `sub_area_ibfk_1` FOREIGN KEY (`fk_area`) REFERENCES `area_conhecimento` (`cod_area_conhecimento`);

--
-- Limitadores para a tabela `tecnicos`
--
ALTER TABLE `tecnicos`
  ADD CONSTRAINT `tecnicos_ibfk_1` FOREIGN KEY (`fk_graduacao`) REFERENCES `graduacoes` (`cod_graduacao`),
  ADD CONSTRAINT `tecnicos_ibfk_2` FOREIGN KEY (`fk_cod_grupo`) REFERENCES `grupo_pesquisa` (`id`),
  ADD CONSTRAINT `tecnicos_ibfk_3` FOREIGN KEY (`fk_especialidade`) REFERENCES `especialidade` (`cod_especialidade`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
