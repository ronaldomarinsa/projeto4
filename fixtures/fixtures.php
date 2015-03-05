<?php
require_once "fixtures/conexaoDB.php";

$conn = conexaoDB();

# --------------    CRIANDO AS PAGINAS ---------------
$conn->query("DROP TABLE IF EXISTS `paginas`");

$conn->query("create table `paginas` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`rota` varchar(50) not null,
	`titulo` varchar(120) not null,
	`conteudo` text,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;");

$sql = "insert into `paginas` (`id`,`rota`,`titulo`,`conteudo`) VALUES
        (1,'home','Bem vindo ao Nosso Site!','<h1>Bem vindo ao nosso Site!</h1><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequatur dolor ducimus impedit, in ipsa ipsam itaque magni, molestias nemo numquam quaerat quam ullam ut voluptates. Harum laborum omnis quisquam.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at consectetur, id labore odio quisquam sequi similique soluta ut veritatis? Ex nobis, sed. Dignissimos eveniet ipsa nostrum officia, quo unde.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi eius fugiat illum soluta suscipit tenetur! Debitis deleniti dolor dolore explicabo facilis modi natus nisi omnis quisquam reiciendis, suscipit tenetur vitae!</p>'),
        (2,'empresa','Sobre a Empresa','<h1>Nossa Empresa</h1><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid, assumenda beatae blanditiis, distinctio dolore earum expedita impedit inventore nesciunt odio rerum tempora veniam! Amet debitis dicta porro reprehenderit voluptate!</p>'),
        (3,'servicos','Nossos Serviços','<h1>Nossos Serviços</h1><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci atque culpa dignissimos distinctio eos et facere harum, molestiae mollitia nihil, non perspiciatis quia quos saepe sint, temporibus ullam? Dolore?</p>'),
        (4,'produtos','Nossos Produtos','<h1>Nossos Produtos</h1><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias blanditiis, commodi cum cupiditate dolorum eaque eius ipsam iure libero, natus nihil numquam pariatur perspiciatis, quis repellendus soluta ullam voluptatibus.</p>')";

$stmt = $conn->prepare($sql);
$stmt->execute();


# ----------------- CRIANDO USUARIOS ----------------
$conn->query("DROP TABLE IF EXISTS `usuarios`");

$conn->query("CREATE TABLE `usuarios`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `usuario` varchar(100) NOT NULL,
     `senha` varchar(255) NOT NULL,
      PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT  CHARSET=utf8;");

$sql="INSERT INTO `usuarios` (`id`,`usuario`,`senha`) VALUES
      (1, 'admin', :senha )";

$stmt = $conn->prepare($sql);

$senha = password_hash('00fb00', PASSWORD_DEFAULT);

$stmt->bindValue(':senha',$senha);
$stmt->execute();