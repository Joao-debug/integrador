-- Banco de Dados da Aplicação "Sem Nome"
-- CUIDADO! ALTAMENTE DESTRUTIVO
-- Apague este arquivo quando a modelagem estiver concluída!

-- Apagando o banco de dados caso ele já exista 
DROP DATABASE IF EXISTS pizaria;  
 
-- Criando o banco de dados em UTF-8 e com buscas case-insensitive
CREATE DATABASE pizzaria CHARACTER SET utf8 COLLATE utf8_general_ci;  

-- Selecionando o banco de dados
USE pizzaria;

-- Criando a tabela "contatos"
CREATE TABLE contatos (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- "AAAA-MM-DD hh:mm:ss"
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefone VARCHAR(255) NOT NULL,
    endereço TEXT,
    campo1 TEXT COMMENT 'Para uso futuro',
    campo2 TEXT COMMENT 'Para uso futuro',
    status ENUM('recebido', 'lido', 'respondido', 'apagado') DEFAULT 'recebido'
);

-- Criando a tabela "autores"
CREATE TABLE  (
    id_autor INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    data_autor TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    thumb_autor VARCHAR(255) COMMENT 'Uma imagem que representa o autor',
    nome_autor VARCHAR(255) COMMENT 'Nome completo que só aparece nos detalhes',
    nome_tela VARCHAR(127) NOT NULL COMMENT 'Nome curto que aparece no site',
    email VARCHAR(255) NOT NULL,
    site VARCHAR(255) COMMENT 'Sites começam com http://',
    curriculo TEXT COMMENT 'Um mini-currículo do autor.',
    telefone VARCHAR(128),
    nascimento DATE COMMENT 'Formato: AAAA-MM-DD',
    campo1 TEXT COMMENT 'Para uso futuro',
    campo2 TEXT COMMENT 'Para uso futuro',
    campo3 TEXT COMMENT 'Para uso futuro',
    status_autor ENUM('inativo', 'ativo') DEFAULT 'ativo'
);

-- Criando a tabela "categorias"
CREATE TABLE categorias (
    id_categoria INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    categoria VARCHAR(63) NOT NULL,
    campo1 TEXT COMMENT 'Para uso futuro'
);

-- Criando a tabela "artigos"
CREATE TABLE artigos (
    id_artigo INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    data_artigo TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT 'Pode ser uma data no futuro',
    thumb_artigo VARCHAR(255) COMMENT 'Uma imagem pequena que representa o artigo',
    titulo VARCHAR(255) NOT NULL,
    resumo VARCHAR(255),
    texto LONGTEXT COMMENT 'Pode usar HTML e CSS',
    autor_id INT NOT NULL COMMENT 'Chave estrangeira',
    campo1 TEXT COMMENT 'Para uso futuro',
    campo2 TEXT COMMENT 'Para uso futuro',
    campo3 TEXT COMMENT 'Para uso futuro',
    status_artigo ENUM('inativo', 'ativo') DEFAULT 'ativo',
    FOREIGN KEY (autor_id) REFERENCES autores (id_autor)
);

-- Criando a tabela "art_cat"
CREATE TABLE art_cat (
    id_art_cat INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    artigo_id INT NOT NULL COMMENT 'Chave estrangeira',
    categoria_id INT NOT NULL COMMENT 'Chave estrangeira',
    FOREIGN KEY (artigo_id) REFERENCES artigos (id_artigo),
    FOREIGN KEY (categoria_id) REFERENCES categorias (id_categoria)
);

-- Inserindo dados em "autores"
-- ou
-- Populando a tabela "autores"
INSERT INTO autores
    (
        thumb_autor, nome_autor,
        nome_tela, email,
        site, curriculo,
        telefone, nascimento
    )
VALUES
    (
        'https://picsum.photos/200', 'Joca da Silva',
        'Joca Silva', 'joca@silva.com',
        'http://www.jocasilva.com/', 'Programador desde os 5 anos de idade, quando fez seu primeiro programa para MSX.',
        '(21) 98765-4321', '1980-12-22'
    ),
    (
        'https://picsum.photos/200', 'Dilermano dos Santos Soares',
        'Diler Soares', 'diler@mano.com',
        'http://mano.com/', 'Escrevedor de códigos desde a época do CP-500. Programa desde que sofreu um acidente e ficou de castigo.',
        '(21) 99887-7665', '1974-04-14'
    ),
    (
        'https://picsum.photos/200', 'Marineuza Sirinelson da Costa',
        'Mari Siri', 'mari@neuza.com.br',
        'http://mari.neuza.com.br/', 'Mecânica de computadores, formada pela faculdade de ciências ocultas da curva do vento, comecou na carreira após seu PC ser afogado nas chuvas do Rio de Janeiro.',
        '(21) 98988-9988', '1999-09-09'
    )
;

-- Populando a tabela "categorias"
INSERT INTO categorias (categoria) VALUES
('PHP'), 
('JavaScript'),
('Python'),
('HTML 5'),
('CSS3'),
('Banco de dados'),
('Front-end'),
('Back-end');

-- Populando a tabela "artigos"
INSERT INTO artigos (
    data_artigo,
    thumb_artigo,
    titulo,
    resumo,
    texto,
    autor_id
) VALUES 
(
    '2020-02-03 11:44:00',
    'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR15J3uwAlnMx6kXhahhxI9A-LCbDfpUDTqE0xYL2dMC2KpXU9l',
    'Ajuda com integração do node.js com o MySQL',
    'Vivamus pellentesque dapibus mi, ut venenatis mi euismod vitae. Suspendisse vel bibendum neque. Morbi ullamcorper dolor sit amet ex bibendum tempor.',
    '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit elit nec est varius tristique.</p><p>Nunc ante tortor, facilisis vel diam lobortis, consequat aliquam lorem.</p><p>Fusce dolor orci, fringilla eget mauris ac, lobortis imperdiet odio. </p>',
    '1'
),
(
    '2020-02-05 08:12:27',
    'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQt__KrD-2K34p15Ts4WQbm_MupoGmVdz0EGGfgv2bZ27pClmaI',
    'Deixando o seu site mais seguro.',
    'Vivamus pellentesque dapibus mi, ut venenatis mi euismod vitae. Suspendisse vel bibendum neque. Morbi ullamcorper dolor sit amet ex bibendum tempor.',
    '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit elit nec est varius tristique.</p><p>Nunc ante tortor, facilisis vel diam lobortis, consequat aliquam lorem.</p><p>Fusce dolor orci, fringilla eget mauris ac, lobortis imperdiet odio. </p>',
    '3'
),
(
    '2020-02-05 14:30:00',
    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_ueIzD4DTdthxFdYxvtExK9wo00xE5o7ax5b1SCHmBJomm65U&s',
    'Como posso fazer para o meu site ser totalmente responsivel.',
    'Vivamus pellentesque dapibus mi, ut venenatis mi euismod vitae. Suspendisse vel bibendum neque. Morbi ullamcorper dolor sit amet ex bibendum tempor.',
    '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit elit nec est varius tristique.</p><p>Nunc ante tortor, facilisis vel diam lobortis, consequat aliquam lorem.</p><p>Fusce dolor orci, fringilla eget mauris ac, lobortis imperdiet odio. </p>',
    '2'
),
(
    '2020-02-05 14:31:00',
    'https://miro.medium.com/max/815/1*zB5JlbMSA26pklzNRAmSEg.png',
    'Cuidados com SQL Injection.',
    'Vivamus pellentesque dapibus mi, ut venenatis mi euismod vitae. Suspendisse vel bibendum neque. Morbi ullamcorper dolor sit amet ex bibendum tempor.Vivamus pellentesque dapibus mi, ut venenatis mi euismod vitae. Suspendisse vel bibendum neque. Morbi ullamcorper dolor sit amet ex bibendum tempor.',
    '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit elit nec est varius tristique.</p><p>Nunc ante tortor, facilisis vel diam lobortis, consequat aliquam lorem.</p><p>Fusce dolor orci, fringilla eget mauris ac, lobortis imperdiet odio. </p>',
    '1'
),
(
    '2020-02-11 18:25:00',
    'https://images-na.ssl-images-amazon.com/images/I/51lpm9SpsJL.png',
    'Utilizando biblioteca discord no Python.',
    'Vivamus pellentesque dapibus mi, ut venenatis mi euismod vitae. Suspendisse vel bibendum neque. Morbi ullamcorper dolor sit amet ex bibendum tempor.',
    '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit elit nec est varius tristique.</p><p>Nunc ante tortor, facilisis vel diam lobortis, consequat aliquam lorem.</p><p>Fusce dolor orci, fringilla eget mauris ac, lobortis imperdiet odio. </p>',
    '3'
);

-- Populando a tabela "art_cat"
INSERT INTO art_cat
    (artigo_id, categoria_id)
VALUES
    (1, 1),
    (1, 2),
    (1, 6),
    (2, 1),
    (2, 7),
    (2, 8),
    (3, 4),
    (3, 5),
    (3, 7),
    (4, 1),
    (4, 8),
    (5, 3)
;

-- Criando a tabela "noticias
CREATE TABLE cadastro (
    id_noticia INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    data_noticia TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    titulo_noticia VARCHAR(255) NOT NULL,
    resumo_noticia VARCHAR(255) NOT NULL,
    texto_noticia LONGTEXT,
    fonte_noticia VARCHAR(255),
    status_noticia ENUM('ativo', 'inativo') DEFAULT 'ativo',
    autor_id INT NOT NULL COMMENT 'Chave estrangeira',
    FOREIGN KEY (autor_id) REFERENCES autores (id_autor)
);

-- Inserindo dados em "autores"
-- ou
-- Populando a tabela "autores"
INSERT INTO noticias
    (
        data_noticia, titulo_noticia, 
        resumo_noticia, autor_id
    )
VALUES
    (
        '2020-02-05 14:31:00', 'Segurança',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rhoncus, neque eget interdum aliquet, sapien metus congue turpis, ultricies feugiat neque felis quis odio. Sed efficitur sodales tincidunt.', '3'
    ),

    (
        '2020-02-05 09:30:00', 'JavaScript',
        'Nunc dignissim ultricies ultricies. Duis aliquet, mauris eu vestibulum lacinia, lectus ligula imperdiet mauris, eget pretium leo leo vitae erat.', '2'
    ),

    (
        '2020-02-04 20:15:00', 'PHP',
        'Donec a volutpat velit. Fusce efficitur orci in purus finibus interdum. Maecenas a nisi fermentum, molestie nulla at, vulputate urna.', '2'
    ),

    (
        '2020-02-05 07:55:00', 'Redes Sociais',
        'Nulla viverra risus tellus, vel volutpat tellus fringilla eu. ', '1'
    ),

    (
        '2020-02-06 10:10:00', 'Python',
        'Nam sagittis sollicitudin lacus, eget gravida lorem auctor et. Maecenas ac iaculis mauris. Nunc eget dapibus nulla.', '1'
    ),

    (
        '2020-02-06 09:21:00', 'Aprenda PHP',
        'Sed rutrum elit id orci porttitor gravida. Nam in finibus sem. Maecenas sagittis molestie mi, vitae mattis nibh vestibulum eget.', '3'
    )
;
CREATE TABLE