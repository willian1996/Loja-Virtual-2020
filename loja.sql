-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Set-2020 às 00:17
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alertas`
--

CREATE TABLE `alertas` (
  `id` int(11) NOT NULL,
  `titulo_alerta` varchar(20) NOT NULL,
  `titulo_mensagem` varchar(100) NOT NULL,
  `mensagem` varchar(1000) NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `data` date NOT NULL,
  `ativo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alertas`
--

INSERT INTO `alertas` (`id`, `titulo_alerta`, `titulo_mensagem`, `mensagem`, `link`, `imagem`, `data`, `ativo`) VALUES
(1, 'Promoção Imperdível', 'Combo de 8 Camisetas', 'Combo com 8 camisetas de 260 reais por apenas 160 reais.', 'http://google.com', 'cat-2.jpg', '2020-09-02', 'Sim'),
(3, 'fdsafdsfa', 'fdfadf', 'dfasfdsafsad', 'http://google.com', 'sem-foto.jpg', '2020-09-01', 'Não');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carac`
--

CREATE TABLE `carac` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carac`
--

INSERT INTO `carac` (`id`, `nome`) VALUES
(1, 'Tamanho'),
(2, 'Cor'),
(3, 'Numeração'),
(4, 'Voltagem');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carac_itens`
--

CREATE TABLE `carac_itens` (
  `id` int(11) NOT NULL,
  `id_carac_prod` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `valor_item` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carac_itens`
--

INSERT INTO `carac_itens` (`id`, `id_carac_prod`, `nome`, `valor_item`) VALUES
(1, 11, 'Azul', '#80acf2'),
(2, 3, 'Azul', '#80acf2'),
(3, 3, 'Vermelho', '#cf4023'),
(4, 10, 'P', ''),
(5, 10, 'M', ''),
(6, 10, 'G', ''),
(7, 10, 'GG', ''),
(8, 3, 'Amarelo', ''),
(9, 3, 'Verde', ''),
(12, 11, 'Vermelho', ''),
(13, 15, '30 e 31', ''),
(14, 15, '32 e 33', ''),
(15, 16, 'Marron', ''),
(16, 16, 'Preto', ''),
(17, 17, '34/35', ''),
(18, 17, '36/37', ''),
(19, 18, 'Azul', ''),
(20, 20, 'P', ''),
(22, 21, 'Preta', '#000'),
(23, 21, 'Azul', '#939ced'),
(24, 22, 'P', ''),
(25, 22, 'M', ''),
(26, 22, 'G', ''),
(27, 22, 'GG', ''),
(29, 21, 'Verde Escuro', '#073817'),
(30, 21, 'Verde Claro', '#6fd691'),
(31, 21, 'Laranja', '#b5631b'),
(32, 19, 'Azul', '#2640bf'),
(33, 19, 'Preta', '#000'),
(34, 20, 'M', ''),
(35, 23, 'Preto', '#000'),
(36, 24, 'P', ''),
(37, 24, 'M', ''),
(38, 24, 'G', ''),
(39, 25, '31 e 32', ''),
(40, 25, '33 e 34', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carac_itens_car`
--

CREATE TABLE `carac_itens_car` (
  `id` int(11) NOT NULL,
  `id_carrinho` int(11) NOT NULL,
  `id_carac` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carac_itens_car`
--

INSERT INTO `carac_itens_car` (`id`, `id_carrinho`, `id_carac`, `nome`) VALUES
(28, 27, 2, 'Preto'),
(29, 27, 1, 'P'),
(30, 83, 2, 'Verde Escuro'),
(31, 83, 1, 'M'),
(32, 104, 2, 'Azul'),
(33, 104, 1, 'G'),
(34, 220, 1, 'M'),
(36, 223, 1, 'M'),
(37, 223, 2, 'Verde Escuro'),
(38, 220, 2, 'Preto'),
(39, 220, 3, '31 e 32'),
(41, 315, 2, 'Preta'),
(42, 222, 2, 'Preto'),
(43, 318, 2, 'Azul'),
(44, 320, 2, 'Verde Escuro'),
(45, 321, 2, 'Verde Claro'),
(46, 322, 2, 'Verde Claro'),
(47, 323, 2, 'Azul'),
(48, 324, 2, 'Laranja'),
(49, 325, 2, 'Preta'),
(50, 326, 2, 'Azul'),
(51, 327, 2, 'Verde Escuro'),
(52, 328, 2, 'Laranja'),
(53, 329, 2, 'Azul'),
(54, 330, 0, ''),
(55, 331, 2, 'Verde Escuro'),
(56, 332, 2, 'Azul'),
(57, 333, 2, 'Azul'),
(58, 334, 2, 'Verde Escuro'),
(59, 335, 2, 'Verde Escuro'),
(60, 336, 2, 'Preta'),
(61, 337, 2, 'Azul'),
(62, 337, 1, 'M'),
(63, 338, 0, ''),
(64, 338, 1, 'G'),
(65, 339, 2, 'Azul'),
(66, 339, 1, 'G'),
(67, 340, 2, 'Preto'),
(68, 340, 1, 'M'),
(69, 340, 3, '31 e 32'),
(70, 363, 2, 'Azul'),
(71, 363, 1, 'M'),
(72, 362, 2, 'Azul'),
(73, 362, 1, 'M'),
(74, 361, 2, 'Marron'),
(75, 361, 3, '34/35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carac_prod`
--

CREATE TABLE `carac_prod` (
  `id` int(11) NOT NULL,
  `id_carac` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carac_prod`
--

INSERT INTO `carac_prod` (`id`, `id_carac`, `id_prod`) VALUES
(3, 2, 1),
(10, 1, 1),
(11, 2, 3),
(12, 3, 3),
(13, 1, 3),
(14, 4, 3),
(15, 3, 1),
(16, 2, 23),
(17, 3, 23),
(18, 2, 31),
(19, 2, 30),
(20, 1, 30),
(21, 2, 25),
(22, 1, 25),
(23, 2, 22),
(24, 1, 22),
(25, 3, 22);

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `id_venda` int(11) NOT NULL,
  `data` date NOT NULL,
  `combo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id`, `id_usuario`, `id_produto`, `quantidade`, `id_venda`, `data`, `combo`) VALUES
(357, 6, 24, 1, 6, '2020-09-10', 'Não'),
(358, 6, 25, 1, 6, '2020-09-10', 'Não'),
(359, 6, 23, 1, 6, '2020-09-10', 'Não'),
(360, 6, 23, 1, 7, '2020-09-10', 'Não'),
(361, 6, 23, 1, 8, '2020-09-10', 'Não'),
(362, 6, 25, 1, 8, '2020-09-10', 'Não'),
(363, 6, 30, 1, 8, '2020-09-10', 'Não'),
(367, 6, 23, 1, 0, '2020-09-10', 'Não'),
(374, 6, 4, 1, 0, '2020-09-10', 'Não');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nome_url` varchar(50) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `nome_url`, `imagem`) VALUES
(1, 'Moda Masculina', 'moda-masculina', 'cat-3.jpg'),
(2, 'Moda Feminina', 'moda-feminina', 'cat-2.jpg'),
(3, 'Relógios', 'relogios', 'cat-5.jpg'),
(4, 'Calçados', 'calcados', 'cat-6.jpg'),
(5, 'Jóias e Semi-Jóias', 'joias-e-semi-joias', 'cat-7.jpg'),
(8, 'Óculos', 'oculos', 'cat-oculos.jpg'),
(9, 'Chapéu e Bonés', 'chapeu-e-bones', '00.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `rua` varchar(80) DEFAULT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(5) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `cartoes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `email`, `telefone`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `cartoes`) VALUES
(1, 'Alice Santos', '000.000.000-40', 'alice@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 'Cliente Teste 5', '000.000.000-18', 'cliente@hotmail.com', '(55) 55555-5555', 'Rua A', '22', 'AP 22 Bloco 5', 'Bonfim', 'Belo Horizonte', 'MG', '30590-896', 0),
(3, 'Matheus Silva', '184.854.545-44', 'mateus@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `combos`
--

CREATE TABLE `combos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `nome_url` varchar(50) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `descricao_longa` text NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `tipo_envio` int(1) NOT NULL,
  `palavras` varchar(250) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `peso` double(8,2) NOT NULL,
  `largura` double(8,2) NOT NULL,
  `altura` double(8,2) NOT NULL,
  `comprimento` double(8,2) NOT NULL,
  `valor_frete` decimal(10,2) DEFAULT NULL,
  `vendas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `combos`
--

INSERT INTO `combos` (`id`, `nome`, `nome_url`, `descricao`, `descricao_longa`, `valor`, `imagem`, `tipo_envio`, `palavras`, `ativo`, `peso`, `largura`, `altura`, `comprimento`, `valor_frete`, `vendas`) VALUES
(1, 'Camisa e Bermuda', 'camisa-e-bermuda', 'fdsfd', 'fsdfdsf', '139.99', 'cat-1.jpg', 1, 'fdsaf', 'Sim', 1.00, 1.00, 1.00, 1.00, '0.00', NULL),
(3, 'Conjunto Completo', 'conjunto-completo', 'fsdfds', 'fsdf', '199.00', 'cat-3.jpg', 1, 'afdsaf', 'Sim', 1.00, 1.00, 1.00, 1.00, '0.00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cupons`
--

CREATE TABLE `cupons` (
  `id` int(11) NOT NULL,
  `titulo` varchar(35) NOT NULL,
  `desconto` decimal(8,2) NOT NULL,
  `codigo` varchar(35) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `ativo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `emails`
--

INSERT INTO `emails` (`id`, `nome`, `email`, `ativo`) VALUES
(1, 'José Silva', 'hugovasconcelosf@hotmail.com', 'Sim'),
(2, 'João Silva', 'contato@hugocursos.com.br', 'Sim'),
(3, 'Alice Santos', 'alice@hotmail.com', 'Sim'),
(4, 'Cliente Teste', 'cliente@hotmail.com', 'Sim'),
(5, 'Matheus Silva', 'mateus@hotmail.com', 'Sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id`, `id_produto`, `imagem`) VALUES
(11, 1, 'cat-4.jpg'),
(13, 3, 'cat-2.jpg'),
(14, 3, 'cat-4.jpg'),
(15, 3, 'cat-7.jpg'),
(16, 1, 'cat-6.jpg'),
(19, 31, 'cat-4.jpg'),
(21, 25, 'ca misa social.jpg'),
(22, 25, 'Blusa-azul.jpg'),
(23, 25, 'Blusa Ver.jpg'),
(24, 25, 'Polo Marinho.jpg'),
(25, 25, 'Blue.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `id` int(11) NOT NULL,
  `id_venda` int(11) NOT NULL,
  `texto` varchar(1000) NOT NULL,
  `lida` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`id`, `id_venda`, `texto`, `lida`) VALUES
(1, 3, 'Primeira Mensagem', 'Não'),
(2, 4, 'Mensagem nova', 'Não'),
(3, 5, 'Mensagem nova', 'Não'),
(4, 6, 'Mensagem nova', 'Não');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `sub_categoria` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `nome_url` varchar(100) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `descricao_longa` text NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `estoque` int(11) NOT NULL,
  `tipo_envio` int(11) NOT NULL,
  `palavras` varchar(250) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `peso` double(8,2) DEFAULT NULL,
  `largura` int(11) DEFAULT NULL,
  `altura` int(11) DEFAULT NULL,
  `comprimento` int(11) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `valor_frete` decimal(8,2) DEFAULT NULL,
  `promocao` varchar(5) NOT NULL,
  `vendas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `categoria`, `sub_categoria`, `nome`, `nome_url`, `descricao`, `descricao_longa`, `valor`, `imagem`, `estoque`, `tipo_envio`, `palavras`, `ativo`, `peso`, `largura`, `altura`, `comprimento`, `modelo`, `valor_frete`, `promocao`, `vendas`) VALUES
(1, 4, 2, 'Sapato Social', 'sapato-social', 'aaaaaaaaaaaafdsfdfsdf', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaafdsfdsfdffdsf', '189.99', 'cat-6.jpg', 12, 2, 'tenis masculino, tenis esportivo, tenis barato, comprar tenis, tenis lançamento', 'Não', 0.20, 0, 0, 1, '', '20.00', 'Não', NULL),
(3, 2, 3, 'Vestido', 'vestido', 'adaf', 'dfafdsf', '250.00', 'cat-2.jpg', 1, 1, 'vestido feminino, vestidos', 'Sim', 0.00, 0, 0, 0, '', '0.00', 'Não', NULL),
(4, 2, 6, 'Olympikus', 'olympikus', 'Tênis Olympikus Selene Preto\r\n\r\n', 'Tênis Olympikus Selene, feito em jacquard multicolor, com estampa floral exclusiva e detalhes em lycra. A palmilha Feetpad traz ainda mais conforto. Solado em Evasense texturizado completa o visual do tênis, garantindo leveza e segurança.\r\n\r\n\r\n', '129.99', 'Tenis-fem-rosa.jpg', 20, 1, 'fadsdsa', 'Sim', 0.00, 34, 0, 39, '', '0.00', 'Não', NULL),
(5, 2, 6, 'Tênis para Esporte', 'tenis-para-esporte', 'Tênis Olympikus Selene Azul', 'Tênis Olympikus Selene, feito em jacquard multicolor, com estampa floral exclusiva e detalhes em lycra. A palmilha Feetpad traz ainda mais conforto. Solado em Evasense texturizado completa o visual do tênis, garantindo leveza e segurança.\r\n\r\n\r\n', '129.99', 'tenis-masculino.jpg', 20, 1, 'fdfa', 'Sim', 0.00, 0, 0, 39, '', '0.00', 'Não', NULL),
(6, 2, 6, 'Jogging', 'jogging', 'Tênis Jogging Via Marte Branco', 'Modelo conta com fecho em cadarço permitindo um melhor ajuste aos pés, interior revestido em material têxtil e palmilha em PU macio para um caminhar confortável.\r\n\r\n\r\n', '99.99', 'tenis-feminino.jpg', 20, 1, 'fdsafds', 'Sim', 0.00, 0, 0, 39, '', '0.00', 'Não', NULL),
(7, 2, 6, 'Tênis Feminino', 'tenis-feminino', 'Tênis Jogging Via Marte Preto', 'Modelo conta com fecho em cadarço permitindo um melhor ajuste aos pés, interior revestido em material têxtil e palmilha em PU macio para um caminhar confortável.\r\n\r\n\r\n', '99.99', 'Preto.jpg', 20, 1, 'fdsafsa', 'Sim', 0.00, 0, 0, 39, '', '0.00', 'Não', NULL),
(8, 2, 3, 'Vestido com Capuz', 'vestido-com-capuz', 'Vestido com Capuz Preto', 'Vestido básico com capuz. Confeccionado em malha moletinho leve de algodão com toque macio. Com decote em V e mangas longas, de modelagem soltinha e comprimento curto.\r\n\r\n\r\n', '89.90', 'Vestido-Preto-.jpg', 20, 1, 'fadfaf', 'Sim', 0.00, 0, 0, 0, '', '0.00', 'Não', 6),
(10, 2, 3, 'Vestidos', 'vestidos', 'Vestido Preto Transpassado com Alça Dupla', 'Vestido em helanca. Modelo com alças, decote transpassado, busto duplo, recorte na cintura, saia assimétrica com transpasse frontal. Comprimento: Curto.\r\n\r\n\r\n', '34.99', 'Vst-preto.jpg', 20, 1, 'fdafa', 'Sim', 0.00, 0, 0, 0, '', '0.00', 'Não', NULL),
(12, 2, 7, 'Camisa Social', 'camisa-social', 'Camisa com Babado na Gola Azul', 'Camisa jeans. Decote com babado, fechamento com botões. Pences no busto e mangas longas com punho. Comprimento tradicional.\r\n\r\n\r\n', '129.90', 'çáa-misa-social.jpg', 20, 1, 'fdsafsaf', 'Sim', 0.00, 0, 0, 0, '', '0.00', 'Não', 3),
(15, 2, 7, 'Camisa Polo', 'camisa-polo', 'Polo Azul Royal Feminina', 'Polo Feminina em modelo Tradicional. Confeccionado em Meia Malha\r\n\r\n\r\n', '39.90', 'Blusa-azul.jpg', 20, 1, 'dafa', 'Sim', 0.00, 0, 0, 0, '', '0.00', 'Não', NULL),
(18, 2, 8, 'Calças', 'calcas', 'Calça Jeans Sawary Skinny 360° com Cinta e Puídos', 'Calça em jeans com elastano. Modelo 360º skinny. Cintura com cós e passantes, bolsos frontais falsos e traseiros funcionais, fechamento em botão e zíper, puídos nas pernas, cinta interna contornando a cintura. Cintura alta.\r\n\r\n\r\n', '189.99', 'Calça-fem.jpg', 20, 1, 'fdafa', 'Sim', 0.00, 0, 0, 0, '', '0.00', 'Não', NULL),
(20, 2, 9, 'Calção Preto', 'calcao-preto', 'Short Boxer Preta com Elástico Esportivo', 'Short, em helanca. Modelo boxer, com elástico na cintura, faixa esportiva nas laterais e cordão decorativo. Cintura: Média.\r\n\r\n\r\n', '39.99', 'Short-Preto.jpg', 20, 1, 'fdsaf', 'Sim', 0.00, 0, 0, 0, '', '0.00', 'Não', NULL),
(22, 2, 9, 'Short Jeans', 'short-jeans', 'Short Azul', 'Short em jeans de algodão com puídos de efeito destroyed e barra desfiada. Possui comprimento curto e cintura média e tem cós com passantes, bolsos na frente e na parte de trás e fechamento por botão fixo de metal e zíper.\r\n\r\n\r\n', '99.90', 'Short-Jeans.jpg', 20, 3, 'fdff', 'Sim', 0.00, 0, 0, 0, '', '0.00', 'Não', NULL),
(23, 4, 10, 'Dariely', 'dariely', 'Bota Montaria Feminina Bottero Couro Preto', 'Modelo básico que finaliza inúmeros looks com muita elegância. Conta com detalhes metalizados na lateral, fecho em zíper garante a praticidade no calce. Salto grosso complementa o estilo.\r\n\r\n\r\n', '149.99', 'Bota-Feminina.jpg', 20, 1, 'fsdfa', 'Sim', 0.10, 0, 0, 0, '', '0.00', 'Sim', NULL),
(24, 4, 10, 'Bota Masculina', 'bota-masculina', 'Coturno Masculino Polo State Bronxy Marrom Brown', 'O Coturno Bronxy foi desenvolvido para você ter mais estilo, com um design diferenciado e excelente acabamento, para maior durabilidade. Botas são calçados que nunca saem de moda, além de trazerem mais estilo ao visual, elas são bastante confortáveis principalmente naqueles dias de frio. Além de modernas e elegantes, elas deixam seus pés aquecidos e seu visual ainda mais sofisticado. Um produto que combina com diversas ocasiões e estilo de roupas diferentes. Confeccionado em material alternativo. Fechamento em cadarço e zíper na lateral facilitando na hora de calçar esse incrível produto, sem contar com os detalhes em costuras. Um charme de Coturno\r\n\r\n\r\n', '50.00', 'bota.jpg', 20, 2, 'fdafdsf', 'Sim', 0.10, 0, 0, 0, '', '10.00', 'Sim', NULL),
(25, 1, 11, 'Camisa Estampa', 'camisa-estampa', 'Camiseta confeccionada em meia malha. Modelagem tradicional. Possui estampa ilustrativa de peixe-espada. Detalhe de etiqueta decorativa da marca. Aposte em calça jeans skinny e tênis slip on, para um visual despojado e moderno!\r\nCamiseta confeccionada em meia malha. Modelagem tradicional. Possui estampa ilustrativa de peixe-espada. Detalhe de etiqueta decorativa da marca. Aposte em calça jeans skinny e tênis slip on, para um visual despojado e moderno!\r\nCamiseta confeccionada em meia malha.\r\n\r\n\r\n\r\n', 'Camiseta confeccionada em meia malha. Modelagem tradicional. Possui estampa ilustrativa de peixe-espada. Detalhe de etiqueta decorativa da marca. Aposte em calça jeans skinny e tênis slip on, para um visual despojado e moderno!\r\nCamiseta confeccionada em meia malha. Modelagem tradicional. Possui estampa ilustrativa de peixe-espada. Detalhe de etiqueta decorativa da marca. Aposte em calça jeans skinny e tênis slip on, para um visual despojado e moderno!\r\nCamiseta confeccionada em meia malha.\r\nCamiseta confeccionada em meia malha. Modelagem tradicional. Possui estampa ilustrativa de peixe-espada. Detalhe de etiqueta decorativa da marca. Aposte em calça jeans skinny e tênis slip on, para um visual despojado e moderno!\r\nCamiseta confeccionada em meia malha. Modelagem tradicional. Possui estampa ilustrativa de peixe-espada. Detalhe de etiqueta decorativa da marca. Aposte em calça jeans skinny e tênis slip on, para um visual despojado e moderno!\r\nCamiseta confeccionada em meia malha.\r\n\r\n\r\n\r\n\r\nCamiseta confeccionada em meia malha. Modelagem tradicional. Possui estampa ilustrativa de peixe-espada. Detalhe de etiqueta decorativa da marca. Aposte em calça jeans skinny e tênis slip on, para um visual despojado e moderno!\r\nCamiseta confeccionada em meia malha. Modelagem tradicional. Possui estampa ilustrativa de peixe-espada. Detalhe de etiqueta decorativa da marca. Aposte em calça jeans skinny e tênis slip on, para um visual despojado e moderno!\r\nCamiseta confeccionada em meia malha.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '50.00', 'Camisa-azul.jpg', 20, 1, 'fdfs', 'Sim', 0.02, 20, 15, 30, '', '0.00', 'Sim', NULL),
(30, 1, 12, 'Bermudas', 'bermudas', 'Bermuda com Cordel e Detalhe Destroyed Jeans', 'Bermuda em jeans de algodão. Modelo com cordel removível e bolsos frontais e traseiros funcionais. Detalhes destroyed.\r\n\r\n\r\n', '139.99', 'Jeans.jpg', 20, 1, 'ssfs', 'Sim', 0.00, 0, 0, 0, '', '0.00', 'Sim', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `prod_combos`
--

CREATE TABLE `prod_combos` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_combo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `prod_combos`
--

INSERT INTO `prod_combos` (`id`, `id_produto`, `id_combo`) VALUES
(9, 24, 1),
(10, 25, 1),
(13, 30, 1),
(14, 23, 1),
(15, 30, 3),
(18, 24, 3),
(19, 22, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocao_banner`
--

CREATE TABLE `promocao_banner` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `ativo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `promocao_banner`
--

INSERT INTO `promocao_banner` (`id`, `titulo`, `link`, `imagem`, `ativo`) VALUES
(1, 'Promoção 6 Camisetas', 'http://google.com', 'banner-promo-2.jpg', 'Sim'),
(3, 'Segunda Promoção', 'produto-sapato-social', 'banner-promo.jpg', 'Sim'),
(4, 'Terceira Promoção', 'http://google.com', 'banner-1.jpg', 'Não');

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocoes`
--

CREATE TABLE `promocoes` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_final` date NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `desconto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `promocoes`
--

INSERT INTO `promocoes` (`id`, `id_produto`, `valor`, `data_inicio`, `data_final`, `ativo`, `desconto`) VALUES
(2, 31, '30.00', '2020-08-30', '2020-09-01', 'Sim', ''),
(3, 30, '104.99', '2020-08-31', '2020-09-30', 'Sim', '25'),
(4, 29, '35.00', '2020-08-24', '2020-09-02', 'Não', ''),
(5, 28, '50.00', '2020-08-31', '2020-09-08', 'Sim', ''),
(6, 25, '45.00', '2020-09-02', '2020-09-25', 'Sim', '10'),
(7, 24, '42.50', '2020-09-02', '2020-09-30', 'Sim', '15'),
(8, 22, '89.91', '2020-09-02', '2020-09-04', 'Sim', '10'),
(9, 18, '170.99', '2020-09-02', '2020-09-02', 'Sim', '10'),
(10, 23, '75.00', '2020-09-09', '2020-09-30', 'Sim', '50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sub_categorias`
--

CREATE TABLE `sub_categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nome_url` varchar(50) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sub_categorias`
--

INSERT INTO `sub_categorias` (`id`, `nome`, `nome_url`, `imagem`, `id_categoria`) VALUES
(1, 'Tênis Masculinos', 'tenis-masculinos', 'Prdt-Tenis-Masc-preto.jpg', 4),
(2, 'Sapato Social', 'sapato-social', 'Sapato-Social.jpg', 4),
(3, 'Vestidos', 'vestidos', 'cat-2.jpg', 2),
(6, 'Tênis Femininos', 'tenis-femininos', 'Prdt-Tenis-Feminino-Rosa.jpg', 2),
(7, 'Blusas', 'blusas', 'Sub-Social-Feminina-.jpg', 2),
(8, 'Calças ', 'calcas', 'Prdt-Jogger-Feminina.jpg', 2),
(9, 'Shorts', 'shorts', 'Calção.jpg', 2),
(10, 'Botas', 'botas', 'Bota-Feminina.jpg', 4),
(11, 'Camisetas', 'camisetas', 'Sub-Camisas.jpg', 1),
(12, 'Bermudas', 'bermudas', 'Prdt-Bermuda-masc-Cinza.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_envios`
--

CREATE TABLE `tipo_envios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_envios`
--

INSERT INTO `tipo_envios` (`id`, `nome`) VALUES
(1, 'Correios'),
(2, 'Valor Fixo'),
(3, 'Sem Frete'),
(4, 'Digital');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(35) NOT NULL,
  `senha_crip` varchar(150) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `email`, `senha`, `senha_crip`, `nivel`) VALUES
(1, 'Administrador', '000.000.000-00', 'lojaportalhugo@gmail.com', '123', '202cb962ac59075b964b07152d234b70', 'Admin'),
(5, 'Alice Santos', '000.000.000-40', 'alice@hotmail.com', '123', '202cb962ac59075b964b07152d234b70', 'Cliente'),
(6, 'Cliente Teste 5', '000.000.000-18', 'cliente@hotmail.com', '123', '202cb962ac59075b964b07152d234b70', 'Cliente'),
(7, 'Matheus Silva', '184.854.545-44', 'mateus@hotmail.com', '123', '202cb962ac59075b964b07152d234b70', 'Cliente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `sub_total` decimal(10,2) NOT NULL,
  `frete` decimal(8,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `pago` varchar(5) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `sub_total`, `frete`, `total`, `id_usuario`, `pago`, `data`) VALUES
(1, '172.50', '21.00', '193.50', 6, 'Não', '2020-09-10'),
(2, '172.50', '21.00', '193.50', 6, 'Não', '2020-09-10'),
(3, '172.50', '21.00', '193.50', 6, 'Não', '2020-09-10'),
(4, '172.50', '21.00', '193.50', 6, 'Não', '2020-09-10'),
(5, '172.50', '21.00', '193.50', 6, 'Não', '2020-09-10'),
(6, '172.50', '21.00', '193.50', 6, 'Não', '2020-09-10'),
(7, '75.00', '21.00', '96.00', 6, 'Não', '2020-09-10'),
(8, '174.99', '73.50', '248.49', 6, 'Não', '2020-09-10');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alertas`
--
ALTER TABLE `alertas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carac`
--
ALTER TABLE `carac`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carac_itens`
--
ALTER TABLE `carac_itens`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carac_itens_car`
--
ALTER TABLE `carac_itens_car`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carac_prod`
--
ALTER TABLE `carac_prod`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `combos`
--
ALTER TABLE `combos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cupons`
--
ALTER TABLE `cupons`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `prod_combos`
--
ALTER TABLE `prod_combos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `promocao_banner`
--
ALTER TABLE `promocao_banner`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `promocoes`
--
ALTER TABLE `promocoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sub_categorias`
--
ALTER TABLE `sub_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tipo_envios`
--
ALTER TABLE `tipo_envios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alertas`
--
ALTER TABLE `alertas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `carac`
--
ALTER TABLE `carac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `carac_itens`
--
ALTER TABLE `carac_itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `carac_itens_car`
--
ALTER TABLE `carac_itens_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de tabela `carac_prod`
--
ALTER TABLE `carac_prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=375;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `combos`
--
ALTER TABLE `combos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cupons`
--
ALTER TABLE `cupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `prod_combos`
--
ALTER TABLE `prod_combos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `promocao_banner`
--
ALTER TABLE `promocao_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `promocoes`
--
ALTER TABLE `promocoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `sub_categorias`
--
ALTER TABLE `sub_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tipo_envios`
--
ALTER TABLE `tipo_envios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
