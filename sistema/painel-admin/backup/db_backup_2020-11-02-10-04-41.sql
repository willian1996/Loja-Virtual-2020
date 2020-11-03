DROP TABLE IF EXISTS alertas;

CREATE TABLE `alertas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_alerta` varchar(20) NOT NULL,
  `titulo_mensagem` varchar(100) NOT NULL,
  `mensagem` varchar(1000) NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `data` date NOT NULL,
  `ativo` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO alertas VALUES("1","Promoção Imperdível","Combo de 8 Camisetas","Combo com 8 camisetas de 260 reais por apenas 160 reais.","http://google.com","cat-2.jpg","2020-09-02","Sim");
INSERT INTO alertas VALUES("3","fdsafdsfa","fdfadf","dfasfdsafsad","http://google.com","sem-foto.jpg","2020-09-01","Não");


DROP TABLE IF EXISTS carac;

CREATE TABLE `carac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO carac VALUES("1","Tamanho");
INSERT INTO carac VALUES("2","Cor");
INSERT INTO carac VALUES("3","Numeração");
INSERT INTO carac VALUES("4","Voltagem");


DROP TABLE IF EXISTS carac_itens;

CREATE TABLE `carac_itens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_carac_prod` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `valor_item` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

INSERT INTO carac_itens VALUES("1","11","Azul","#80acf2");
INSERT INTO carac_itens VALUES("2","3","Azul","#80acf2");
INSERT INTO carac_itens VALUES("3","3","Vermelho","#cf4023");
INSERT INTO carac_itens VALUES("4","10","P",NULL);
INSERT INTO carac_itens VALUES("5","10","M",NULL);
INSERT INTO carac_itens VALUES("6","10","G",NULL);
INSERT INTO carac_itens VALUES("7","10","GG",NULL);
INSERT INTO carac_itens VALUES("8","3","Amarelo",NULL);
INSERT INTO carac_itens VALUES("9","3","Verde",NULL);
INSERT INTO carac_itens VALUES("12","11","Vermelho",NULL);
INSERT INTO carac_itens VALUES("13","15","30 e 31",NULL);
INSERT INTO carac_itens VALUES("14","15","32 e 33",NULL);
INSERT INTO carac_itens VALUES("15","16","Marron",NULL);
INSERT INTO carac_itens VALUES("16","16","Preto",NULL);
INSERT INTO carac_itens VALUES("17","17","34/35",NULL);
INSERT INTO carac_itens VALUES("18","17","36/37",NULL);
INSERT INTO carac_itens VALUES("19","18","Azul",NULL);
INSERT INTO carac_itens VALUES("20","20","P",NULL);
INSERT INTO carac_itens VALUES("22","21","Preta","#000");
INSERT INTO carac_itens VALUES("23","21","Azul","#939ced");
INSERT INTO carac_itens VALUES("24","22","P",NULL);
INSERT INTO carac_itens VALUES("25","22","M",NULL);
INSERT INTO carac_itens VALUES("26","22","G",NULL);
INSERT INTO carac_itens VALUES("27","22","GG",NULL);
INSERT INTO carac_itens VALUES("29","21","Verde Escuro","#073817");
INSERT INTO carac_itens VALUES("30","21","Verde Claro","#6fd691");
INSERT INTO carac_itens VALUES("31","21","Laranja","#b5631b");
INSERT INTO carac_itens VALUES("32","19","Azul","#2640bf");
INSERT INTO carac_itens VALUES("33","19","Preta","#000");
INSERT INTO carac_itens VALUES("34","20","M",NULL);
INSERT INTO carac_itens VALUES("35","23","Preto","#000");
INSERT INTO carac_itens VALUES("36","24","P",NULL);
INSERT INTO carac_itens VALUES("37","24","M",NULL);
INSERT INTO carac_itens VALUES("38","24","G",NULL);
INSERT INTO carac_itens VALUES("39","25","31 e 32",NULL);
INSERT INTO carac_itens VALUES("40","25","33 e 34",NULL);


DROP TABLE IF EXISTS carac_itens_car;

CREATE TABLE `carac_itens_car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_carrinho` int(11) NOT NULL,
  `id_carac` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

INSERT INTO carac_itens_car VALUES("28","27","2","Preto");
INSERT INTO carac_itens_car VALUES("29","27","1","P");
INSERT INTO carac_itens_car VALUES("30","83","2","Verde Escuro");
INSERT INTO carac_itens_car VALUES("31","83","1","M");
INSERT INTO carac_itens_car VALUES("32","104","2","Azul");
INSERT INTO carac_itens_car VALUES("33","104","1","G");
INSERT INTO carac_itens_car VALUES("34","220","1","M");
INSERT INTO carac_itens_car VALUES("36","223","1","M");
INSERT INTO carac_itens_car VALUES("37","223","2","Verde Escuro");
INSERT INTO carac_itens_car VALUES("38","220","2","Preto");
INSERT INTO carac_itens_car VALUES("39","220","3","31 e 32");
INSERT INTO carac_itens_car VALUES("41","315","2","Preta");
INSERT INTO carac_itens_car VALUES("42","222","2","Preto");
INSERT INTO carac_itens_car VALUES("43","318","2","Azul");
INSERT INTO carac_itens_car VALUES("44","320","2","Verde Escuro");
INSERT INTO carac_itens_car VALUES("45","321","2","Verde Claro");
INSERT INTO carac_itens_car VALUES("46","322","2","Verde Claro");
INSERT INTO carac_itens_car VALUES("47","323","2","Azul");
INSERT INTO carac_itens_car VALUES("48","324","2","Laranja");
INSERT INTO carac_itens_car VALUES("49","325","2","Preta");
INSERT INTO carac_itens_car VALUES("50","326","2","Azul");
INSERT INTO carac_itens_car VALUES("51","327","2","Verde Escuro");
INSERT INTO carac_itens_car VALUES("52","328","2","Laranja");
INSERT INTO carac_itens_car VALUES("53","329","2","Azul");
INSERT INTO carac_itens_car VALUES("54","330",NULL,NULL);
INSERT INTO carac_itens_car VALUES("55","331","2","Verde Escuro");
INSERT INTO carac_itens_car VALUES("56","332","2","Azul");
INSERT INTO carac_itens_car VALUES("57","333","2","Azul");
INSERT INTO carac_itens_car VALUES("58","334","2","Verde Escuro");
INSERT INTO carac_itens_car VALUES("59","335","2","Verde Escuro");
INSERT INTO carac_itens_car VALUES("60","336","2","Preta");
INSERT INTO carac_itens_car VALUES("61","337","2","Azul");
INSERT INTO carac_itens_car VALUES("62","337","1","M");
INSERT INTO carac_itens_car VALUES("63","338",NULL,NULL);
INSERT INTO carac_itens_car VALUES("64","338","1","G");
INSERT INTO carac_itens_car VALUES("65","339","2","Azul");
INSERT INTO carac_itens_car VALUES("66","339","1","G");
INSERT INTO carac_itens_car VALUES("67","340","2","Preto");
INSERT INTO carac_itens_car VALUES("68","340","1","M");
INSERT INTO carac_itens_car VALUES("69","340","3","31 e 32");
INSERT INTO carac_itens_car VALUES("70","363","2","Azul");
INSERT INTO carac_itens_car VALUES("71","363","1","M");
INSERT INTO carac_itens_car VALUES("72","362","2","Azul");
INSERT INTO carac_itens_car VALUES("73","362","1","M");
INSERT INTO carac_itens_car VALUES("74","361","2","Marron");
INSERT INTO carac_itens_car VALUES("75","361","3","34/35");


DROP TABLE IF EXISTS carac_prod;

CREATE TABLE `carac_prod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_carac` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

INSERT INTO carac_prod VALUES("3","2","1");
INSERT INTO carac_prod VALUES("10","1","1");
INSERT INTO carac_prod VALUES("11","2","3");
INSERT INTO carac_prod VALUES("12","3","3");
INSERT INTO carac_prod VALUES("13","1","3");
INSERT INTO carac_prod VALUES("14","4","3");
INSERT INTO carac_prod VALUES("15","3","1");
INSERT INTO carac_prod VALUES("16","2","23");
INSERT INTO carac_prod VALUES("17","3","23");
INSERT INTO carac_prod VALUES("18","2","31");
INSERT INTO carac_prod VALUES("19","2","30");
INSERT INTO carac_prod VALUES("20","1","30");
INSERT INTO carac_prod VALUES("21","2","25");
INSERT INTO carac_prod VALUES("22","1","25");
INSERT INTO carac_prod VALUES("23","2","22");
INSERT INTO carac_prod VALUES("24","1","22");
INSERT INTO carac_prod VALUES("25","3","22");


DROP TABLE IF EXISTS carrinho;

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `id_venda` int(11) NOT NULL,
  `data` date NOT NULL,
  `combo` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=376 DEFAULT CHARSET=utf8;

INSERT INTO carrinho VALUES("357","6","24","1","6","2020-09-10","Não");
INSERT INTO carrinho VALUES("358","6","25","1","6","2020-09-10","Não");
INSERT INTO carrinho VALUES("359","6","23","1","6","2020-09-10","Não");
INSERT INTO carrinho VALUES("360","6","23","1","7","2020-09-10","Não");
INSERT INTO carrinho VALUES("361","6","23","1","8","2020-09-10","Não");
INSERT INTO carrinho VALUES("362","6","25","1","8","2020-09-10","Não");
INSERT INTO carrinho VALUES("363","6","30","1","8","2020-09-10","Não");
INSERT INTO carrinho VALUES("367","6","23","1",NULL,"2020-09-10","Não");
INSERT INTO carrinho VALUES("374","6","4","1",NULL,"2020-09-10","Não");
INSERT INTO carrinho VALUES("375","1","8","1",NULL,"2020-11-02","Não");


DROP TABLE IF EXISTS categorias;

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `nome_url` varchar(50) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO categorias VALUES("1","Moda Masculina","moda-masculina","cat-3.jpg");
INSERT INTO categorias VALUES("2","Moda Feminina","moda-feminina","cat-2.jpg");
INSERT INTO categorias VALUES("3","Relógios","relogios","cat-5.jpg");
INSERT INTO categorias VALUES("4","Calçados","calcados","cat-6.jpg");
INSERT INTO categorias VALUES("5","Jóias e Semi-Jóias","joias-e-semi-joias","cat-7.jpg");
INSERT INTO categorias VALUES("8","Óculos","oculos","cat-oculos.jpg");
INSERT INTO categorias VALUES("9","Chapéu e Bonés","chapeu-e-bones","00.jpg");


DROP TABLE IF EXISTS clientes;

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `cartoes` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO clientes VALUES("1","Alice Santos","000.000.000-40","alice@hotmail.com",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO clientes VALUES("2","Cliente Teste 5","000.000.000-18","cliente@hotmail.com","(55) 55555-5555","Rua A","22","AP 22 Bloco 5","Bonfim","Belo Horizonte","MG","30590-896",NULL);
INSERT INTO clientes VALUES("3","Matheus Silva","184.854.545-44","mateus@hotmail.com",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO clientes VALUES("4","Willian Sales Gabriel ","435.935.848-24","williansales199619@gmail.com",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);


DROP TABLE IF EXISTS combos;

CREATE TABLE `combos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `vendas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO combos VALUES("1","Camisa e Bermuda","camisa-e-bermuda","fdsfd","fsdfdsf","139.99","cat-1.jpg","1","fdsaf","Sim","1.00","1.00","1.00","1.00","0.00",NULL);
INSERT INTO combos VALUES("3","Conjunto Completo","conjunto-completo","fsdfds","fsdf","199.00","cat-3.jpg","1","afdsaf","Sim","1.00","1.00","1.00","1.00","0.00",NULL);


DROP TABLE IF EXISTS cupons;

CREATE TABLE `cupons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(35) NOT NULL,
  `desconto` decimal(8,2) NOT NULL,
  `codigo` varchar(35) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS emails;

CREATE TABLE `emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO emails VALUES("1","José Silva","hugovasconcelosf@hotmail.com","Sim");
INSERT INTO emails VALUES("2","João Silva","contato@hugocursos.com.br","Sim");
INSERT INTO emails VALUES("3","Alice Santos","alice@hotmail.com","Sim");
INSERT INTO emails VALUES("4","Cliente Teste","cliente@hotmail.com","Sim");
INSERT INTO emails VALUES("5","Matheus Silva","mateus@hotmail.com","Sim");
INSERT INTO emails VALUES("6","Willian Sales Gabriel ","williansales199619@gmail.com","Sim");


DROP TABLE IF EXISTS imagens;

CREATE TABLE `imagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

INSERT INTO imagens VALUES("11","1","cat-4.jpg");
INSERT INTO imagens VALUES("13","3","cat-2.jpg");
INSERT INTO imagens VALUES("14","3","cat-4.jpg");
INSERT INTO imagens VALUES("15","3","cat-7.jpg");
INSERT INTO imagens VALUES("16","1","cat-6.jpg");
INSERT INTO imagens VALUES("19","31","cat-4.jpg");
INSERT INTO imagens VALUES("21","25","ca misa social.jpg");
INSERT INTO imagens VALUES("22","25","Blusa-azul.jpg");
INSERT INTO imagens VALUES("23","25","Blusa Ver.jpg");
INSERT INTO imagens VALUES("24","25","Polo Marinho.jpg");
INSERT INTO imagens VALUES("25","25","Blue.jpg");


DROP TABLE IF EXISTS mensagem;

CREATE TABLE `mensagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_venda` int(11) NOT NULL,
  `texto` varchar(1000) NOT NULL,
  `lida` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO mensagem VALUES("1","3","Primeira Mensagem","Não");
INSERT INTO mensagem VALUES("2","4","Mensagem nova","Não");
INSERT INTO mensagem VALUES("3","5","Mensagem nova","Não");
INSERT INTO mensagem VALUES("4","6","Mensagem nova","Não");


DROP TABLE IF EXISTS prod_combos;

CREATE TABLE `prod_combos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `id_combo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

INSERT INTO prod_combos VALUES("9","24","1");
INSERT INTO prod_combos VALUES("10","25","1");
INSERT INTO prod_combos VALUES("13","30","1");
INSERT INTO prod_combos VALUES("14","23","1");
INSERT INTO prod_combos VALUES("15","30","3");
INSERT INTO prod_combos VALUES("18","24","3");
INSERT INTO prod_combos VALUES("19","22","3");


DROP TABLE IF EXISTS produtos;

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `vendas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

INSERT INTO produtos VALUES("1","4","2","Sapato Social","sapato-social","aaaaaaaaaaaafdsfdfsdf","aaaaaaaaaaaaaaaaaaaaaaaaaaaaaafdsfdsfdffdsf","189.99","cat-6.jpg","12","2","tenis masculino, tenis esportivo, tenis barato, comprar tenis, tenis lançamento","Não","0.20",NULL,NULL,"1",NULL,"20.00","Não",NULL);
INSERT INTO produtos VALUES("3","2","3","Vestido","vestido","adaf","dfafdsf","250.00","cat-2.jpg","1","1","vestido feminino, vestidos","Sim","0.00",NULL,NULL,NULL,NULL,"0.00","Não",NULL);
INSERT INTO produtos VALUES("4","2","6","Olympikus","olympikus","Tênis Olympikus Selene Preto\n\n","Tênis Olympikus Selene, feito em jacquard multicolor, com estampa floral exclusiva e detalhes em lycra. A palmilha Feetpad traz ainda mais conforto. Solado em Evasense texturizado completa o visual do tênis, garantindo leveza e segurança.\n\n\n","129.99","Tenis-fem-rosa.jpg","20","1","fadsdsa","Sim","0.00","34",NULL,"39",NULL,"0.00","Não",NULL);
INSERT INTO produtos VALUES("5","2","6","Tênis para Esporte","tenis-para-esporte","Tênis Olympikus Selene Azul","Tênis Olympikus Selene, feito em jacquard multicolor, com estampa floral exclusiva e detalhes em lycra. A palmilha Feetpad traz ainda mais conforto. Solado em Evasense texturizado completa o visual do tênis, garantindo leveza e segurança.\n\n\n","129.99","tenis-masculino.jpg","20","1","fdfa","Sim","0.00",NULL,NULL,"39",NULL,"0.00","Não",NULL);
INSERT INTO produtos VALUES("6","2","6","Jogging","jogging","Tênis Jogging Via Marte Branco","Modelo conta com fecho em cadarço permitindo um melhor ajuste aos pés, interior revestido em material têxtil e palmilha em PU macio para um caminhar confortável.\n\n\n","99.99","tenis-feminino.jpg","20","1","fdsafds","Sim","0.00",NULL,NULL,"39",NULL,"0.00","Não",NULL);
INSERT INTO produtos VALUES("7","2","6","Tênis Feminino","tenis-feminino","Tênis Jogging Via Marte Preto","Modelo conta com fecho em cadarço permitindo um melhor ajuste aos pés, interior revestido em material têxtil e palmilha em PU macio para um caminhar confortável.\n\n\n","99.99","Preto.jpg","20","1","fdsafsa","Sim","0.00",NULL,NULL,"39",NULL,"0.00","Não",NULL);
INSERT INTO produtos VALUES("8","2","3","Vestido com Capuz","vestido-com-capuz","Vestido com Capuz Preto","Vestido básico com capuz. Confeccionado em malha moletinho leve de algodão com toque macio. Com decote em V e mangas longas, de modelagem soltinha e comprimento curto.\n\n\n","89.90","Vestido-Preto-.jpg","20","1","fadfaf","Sim","0.00",NULL,NULL,NULL,NULL,"0.00","Não","6");
INSERT INTO produtos VALUES("10","2","3","Vestidos","vestidos","Vestido Preto Transpassado com Alça Dupla","Vestido em helanca. Modelo com alças, decote transpassado, busto duplo, recorte na cintura, saia assimétrica com transpasse frontal. Comprimento: Curto.\n\n\n","34.99","Vst-preto.jpg","20","1","fdafa","Sim","0.00",NULL,NULL,NULL,NULL,"0.00","Não",NULL);
INSERT INTO produtos VALUES("12","2","7","Camisa Social","camisa-social","Camisa com Babado na Gola Azul","Camisa jeans. Decote com babado, fechamento com botões. Pences no busto e mangas longas com punho. Comprimento tradicional.\n\n\n","129.90","çáa-misa-social.jpg","20","1","fdsafsaf","Sim","0.00",NULL,NULL,NULL,NULL,"0.00","Não","3");
INSERT INTO produtos VALUES("15","2","7","Camisa Polo","camisa-polo","Polo Azul Royal Feminina","Polo Feminina em modelo Tradicional. Confeccionado em Meia Malha\n\n\n","39.90","Blusa-azul.jpg","20","1","dafa","Sim","0.00",NULL,NULL,NULL,NULL,"0.00","Não",NULL);
INSERT INTO produtos VALUES("18","2","8","Calças","calcas","Calça Jeans Sawary Skinny 360° com Cinta e Puídos","Calça em jeans com elastano. Modelo 360º skinny. Cintura com cós e passantes, bolsos frontais falsos e traseiros funcionais, fechamento em botão e zíper, puídos nas pernas, cinta interna contornando a cintura. Cintura alta.\n\n\n","189.99","Calça-fem.jpg","20","1","fdafa","Sim","0.00",NULL,NULL,NULL,NULL,"0.00","Não",NULL);
INSERT INTO produtos VALUES("20","2","9","Calção Preto","calcao-preto","Short Boxer Preta com Elástico Esportivo","Short, em helanca. Modelo boxer, com elástico na cintura, faixa esportiva nas laterais e cordão decorativo. Cintura: Média.\n\n\n","39.99","Short-Preto.jpg","20","1","fdsaf","Sim","0.00",NULL,NULL,NULL,NULL,"0.00","Não",NULL);
INSERT INTO produtos VALUES("22","2","9","Short Jeans","short-jeans","Short Azul","Short em jeans de algodão com puídos de efeito destroyed e barra desfiada. Possui comprimento curto e cintura média e tem cós com passantes, bolsos na frente e na parte de trás e fechamento por botão fixo de metal e zíper.\n\n\n","99.90","Short-Jeans.jpg","20","3","fdff","Sim","0.00",NULL,NULL,NULL,NULL,"0.00","Não",NULL);
INSERT INTO produtos VALUES("23","4","10","Dariely","dariely","Bota Montaria Feminina Bottero Couro Preto","Modelo básico que finaliza inúmeros looks com muita elegância. Conta com detalhes metalizados na lateral, fecho em zíper garante a praticidade no calce. Salto grosso complementa o estilo.\n\n\n","149.99","Bota-Feminina.jpg","20","1","fsdfa","Sim","0.10",NULL,NULL,NULL,NULL,"0.00","Não",NULL);
INSERT INTO produtos VALUES("24","4","10","Bota Masculina","bota-masculina","Coturno Masculino Polo State Bronxy Marrom Brown","O Coturno Bronxy foi desenvolvido para você ter mais estilo, com um design diferenciado e excelente acabamento, para maior durabilidade. Botas são calçados que nunca saem de moda, além de trazerem mais estilo ao visual, elas são bastante confortáveis principalmente naqueles dias de frio. Além de modernas e elegantes, elas deixam seus pés aquecidos e seu visual ainda mais sofisticado. Um produto que combina com diversas ocasiões e estilo de roupas diferentes. Confeccionado em material alternativo. Fechamento em cadarço e zíper na lateral facilitando na hora de calçar esse incrível produto, sem contar com os detalhes em costuras. Um charme de Coturno\n\n\n","50.00","bota.jpg","20","2","fdafdsf","Sim","0.10",NULL,NULL,NULL,NULL,"10.00","Não",NULL);
INSERT INTO produtos VALUES("25","1","11","Camisa Estampa","camisa-estampa","Camiseta confeccionada em meia malha. Modelagem tradicional. Possui estampa ilustrativa de peixe-espada. Detalhe de etiqueta decorativa da marca. Aposte em calça jeans skinny e tênis slip on, para um visual despojado e moderno!\nCamiseta confeccionada em meia malha. Modelagem tradicional. Possui estampa ilustrativa de peixe-espada. Detalhe de etiqueta decorativa da marca. Aposte em calça jeans skinny e tênis slip on, para um visual despojado e moderno!\nCamiseta confeccionada em meia malha.\n\n\n\n","Camiseta confeccionada em meia malha. Modelagem tradicional. Possui estampa ilustrativa de peixe-espada. Detalhe de etiqueta decorativa da marca. Aposte em calça jeans skinny e tênis slip on, para um visual despojado e moderno!\nCamiseta confeccionada em meia malha. Modelagem tradicional. Possui estampa ilustrativa de peixe-espada. Detalhe de etiqueta decorativa da marca. Aposte em calça jeans skinny e tênis slip on, para um visual despojado e moderno!\nCamiseta confeccionada em meia malha.\nCamiseta confeccionada em meia malha. Modelagem tradicional. Possui estampa ilustrativa de peixe-espada. Detalhe de etiqueta decorativa da marca. Aposte em calça jeans skinny e tênis slip on, para um visual despojado e moderno!\nCamiseta confeccionada em meia malha. Modelagem tradicional. Possui estampa ilustrativa de peixe-espada. Detalhe de etiqueta decorativa da marca. Aposte em calça jeans skinny e tênis slip on, para um visual despojado e moderno!\nCamiseta confeccionada em meia malha.\n\n\n\n\nCamiseta confeccionada em meia malha. Modelagem tradicional. Possui estampa ilustrativa de peixe-espada. Detalhe de etiqueta decorativa da marca. Aposte em calça jeans skinny e tênis slip on, para um visual despojado e moderno!\nCamiseta confeccionada em meia malha. Modelagem tradicional. Possui estampa ilustrativa de peixe-espada. Detalhe de etiqueta decorativa da marca. Aposte em calça jeans skinny e tênis slip on, para um visual despojado e moderno!\nCamiseta confeccionada em meia malha.\n\n\n\n\n\n\n\n","50.00","Camisa-azul.jpg","20","1","fdfs","Sim","0.02","20","15","30",NULL,"0.00","Não",NULL);
INSERT INTO produtos VALUES("30","1","12","Bermudas","bermudas","Bermuda com Cordel e Detalhe Destroyed Jeans","Bermuda em jeans de algodão. Modelo com cordel removível e bolsos frontais e traseiros funcionais. Detalhes destroyed.\n\n\n","139.99","Jeans.jpg","20","1","ssfs","Sim","0.00",NULL,NULL,NULL,NULL,"0.00","Não","2");


DROP TABLE IF EXISTS promocao_banner;

CREATE TABLE `promocao_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO promocao_banner VALUES("1","Promoção 6 Camisetas","http://google.com","banner-promo-2.jpg","Sim");
INSERT INTO promocao_banner VALUES("3","Segunda Promoção","produto-sapato-social","banner-promo.jpg","Sim");
INSERT INTO promocao_banner VALUES("4","Terceira Promoção","http://google.com","banner-1.jpg","Não");


DROP TABLE IF EXISTS promocoes;

CREATE TABLE `promocoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_final` date NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `desconto` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO promocoes VALUES("2","31","30.00","2020-08-30","2020-09-01","Sim",NULL);
INSERT INTO promocoes VALUES("3","30","104.99","2020-08-31","2020-09-30","Sim","25");
INSERT INTO promocoes VALUES("4","29","35.00","2020-08-24","2020-09-02","Não",NULL);
INSERT INTO promocoes VALUES("5","28","50.00","2020-08-31","2020-09-08","Sim",NULL);
INSERT INTO promocoes VALUES("6","25","45.00","2020-09-02","2020-09-25","Sim","10");
INSERT INTO promocoes VALUES("7","24","42.50","2020-09-02","2020-09-30","Sim","15");
INSERT INTO promocoes VALUES("8","22","89.91","2020-09-02","2020-09-04","Sim","10");
INSERT INTO promocoes VALUES("9","18","170.99","2020-09-02","2020-09-02","Sim","10");
INSERT INTO promocoes VALUES("10","23","75.00","2020-09-09","2020-09-30","Sim","50");


DROP TABLE IF EXISTS sub_categorias;

CREATE TABLE `sub_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `nome_url` varchar(50) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO sub_categorias VALUES("1","Tênis Masculinos","tenis-masculinos","Prdt-Tenis-Masc-preto.jpg","4");
INSERT INTO sub_categorias VALUES("2","Sapato Social","sapato-social","Sapato-Social.jpg","4");
INSERT INTO sub_categorias VALUES("3","Vestidos","vestidos","cat-2.jpg","2");
INSERT INTO sub_categorias VALUES("6","Tênis Femininos","tenis-femininos","Prdt-Tenis-Feminino-Rosa.jpg","2");
INSERT INTO sub_categorias VALUES("7","Blusas","blusas","Sub-Social-Feminina-.jpg","2");
INSERT INTO sub_categorias VALUES("8","Calças ","calcas","Prdt-Jogger-Feminina.jpg","2");
INSERT INTO sub_categorias VALUES("9","Shorts","shorts","Calção.jpg","2");
INSERT INTO sub_categorias VALUES("10","Botas","botas","Bota-Feminina.jpg","4");
INSERT INTO sub_categorias VALUES("11","Camisetas","camisetas","Sub-Camisas.jpg","1");
INSERT INTO sub_categorias VALUES("12","Bermudas","bermudas","Prdt-Bermuda-masc-Cinza.jpg","1");


DROP TABLE IF EXISTS tipo_envios;

CREATE TABLE `tipo_envios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO tipo_envios VALUES("1","Correios");
INSERT INTO tipo_envios VALUES("2","Valor Fixo");
INSERT INTO tipo_envios VALUES("3","Sem Frete");
INSERT INTO tipo_envios VALUES("4","Digital");


DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(35) NOT NULL,
  `senha_crip` varchar(150) NOT NULL,
  `nivel` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO usuarios VALUES("1","Administrador","000.000.000-00","williansalesgabriel@hotmail.com","123","202cb962ac59075b964b07152d234b70","Admin");
INSERT INTO usuarios VALUES("5","Alice Santos","000.000.000-40","alice@hotmail.com","123","202cb962ac59075b964b07152d234b70","Cliente");
INSERT INTO usuarios VALUES("6","Cliente Teste 5","000.000.000-18","cliente@hotmail.com","123","202cb962ac59075b964b07152d234b70","Cliente");
INSERT INTO usuarios VALUES("7","Matheus Silva","184.854.545-44","mateus@hotmail.com","123","202cb962ac59075b964b07152d234b70","Cliente");
INSERT INTO usuarios VALUES("8","Willian Sales Gabriel ","435.935.848-24","williansales199619@gmail.com","123456","e10adc3949ba59abbe56e057f20f883e","Cliente");


DROP TABLE IF EXISTS vendas;

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_total` decimal(10,2) NOT NULL,
  `frete` decimal(8,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `pago` varchar(5) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO vendas VALUES("1","172.50","21.00","193.50","6","Não","2020-09-10");
INSERT INTO vendas VALUES("2","172.50","21.00","193.50","6","Não","2020-09-10");
INSERT INTO vendas VALUES("3","172.50","21.00","193.50","6","Não","2020-09-10");
INSERT INTO vendas VALUES("4","172.50","21.00","193.50","6","Não","2020-09-10");
INSERT INTO vendas VALUES("5","172.50","21.00","193.50","6","Não","2020-09-10");
INSERT INTO vendas VALUES("6","172.50","21.00","193.50","6","Não","2020-09-10");
INSERT INTO vendas VALUES("7","75.00","21.00","96.00","6","Não","2020-09-10");
INSERT INTO vendas VALUES("8","174.99","73.50","248.49","6","Não","2020-09-10");


