<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Sideilton Souza</title>
    <link rel="shortcut icon" href="favicon.png" type="image/jpg-png">
    <link rel="stylesheet" href="styles/mobile.css" media="screen and (max-width: 500px)">
    <link rel="stylesheet" href="styles/desktop.css" media="screen and (min-width: 501px)">
    <link rel="stylesheet" href="styles/fonts.css">
    <link rel="stylesheet" href="styles/animacao.css">
    <link rel="stylesheet" href="styles/animate.css">
</head>

<body>
    <div id="bgLoader">
        <div id="loader"></div>
    </div>
    <nav>
        <div class="btnMenu">
            <input type="checkbox" name="btnMenu" id="btnMenu">
            <label for="btnMenu">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>
        <div class="menu" id="menu">
            <a href="#home" class="item">Início</a>
            <a href="#sobre" class="item">Sobre</a>
            <a href="#trabalhos" class="item">Trabalhos</a>
            <a href="#contato" class="item">Contato</a>
        </div>
    </nav>
    <main class="container">
        <section id="home" class="">
            <span>Photoshop <br> CorelDraw <br> Premiere <br> After Efects <br> HTML <br> CSS <br> PHP <br> Javascript
            </span>
            <span>
                <h1>Sideilton</h1>
                <h1>Souza</h1>
                <h1>Designer Gráfico <br>Web Designer</h1>
            </span>
            <div></div>
        </section>
        <section id="sobre" class="">
            <h1 id="tituloSobre">Sobre mim</h1>
            <p id="textoSobre">Olá, me chamo Sideilton S Souza, tenho 28 anos, baiano, taurino (não que isso importe mas vale mencionar
                para deixar a descrição um pouco maior, já que falar de mim não é lá meu ponto forte), amante de café e
                doguinhos e atualmente estou cursando Sistemas para Internet, Ciências de Dados e Análise de
                Comportamentos e, tentando me especializar em PHP através de alguns cursos livres.

                Enfim, montei essa simples landing page como uma tentativa de mostrar meu aprendizado até aqui em HTML,
                CSS, JavaScript e PHP. Aproveitando a oportunidade também para mostrar um pouco de alguns outros
                trabalhos com ferramentas como CorelDraw e Photoshop.
                Sinta-se à vontade, críticas construtivas são bem vindas! </p>
        </section>
        <span id="sombra"></span>
        <section id="trabalhos" class="">
            <div class="thumbs">
                <h1>Trabalhos</h1>
                <div id="thumbs">
                    <div class="card" id="midias">
                        <span>Mídias Sociais</span>
                    </div>
                    <div class="card" id="logos">
                        <span>Logos</span>
                    </div>
                    <div class="card" id="web">
                        <span>Web</span>
                    </div>
                    <div class="card" id="impressos">
                        <span>Impressos</span>
                    </div>
                    <div class="card" id="cartao">
                        <span>Cartão de Visita Digital</span>
                    </div>
                </div>
            </div>
            <div class="modal oculta" id="modal">
                <div class="btnModal" id="btnModal">
                    <span></span>
                    <span></span>
                </div>
                <div class="imgModal oculta" id="modalMidias">

                    <?php

                    //Busca todas as imagens da pasta

                    $midiasocial = "contents/images/midiasocial/";

                    foreach (glob("$midiasocial/*", GLOB_NOSORT) as $image) {
                        echo '<img src="' . $image . '"alt=""srcset="">';
                    }
                    ?>

                </div>

                <div class="imgModal oculta" id="modalLogos">

                    <?php
                    $midiasocial = "contents/images/logos/";
                    foreach (glob("$midiasocial/*", GLOB_NOSORT) as $image) {
                        echo '<img src="' . $image . '"alt=""srcset="">';
                    }
                    ?>

                </div>

                <div class="imgModal oculta" id="modalWeb">

                    <?php
                    $midiasocial = "contents/images/sites/";
                    foreach (glob("$midiasocial/*", GLOB_NOSORT) as $image) {
                        echo '<img src="' . $image . '"alt=""srcset="">';
                    }
                    ?>

                </div>

                <div class="imgModal oculta" id="modalImpressos">

                    <?php
                    $midiasocial = "contents/images/impressos/";
                    foreach (glob("$midiasocial/*", GLOB_NOSORT) as $image) {
                        echo '<img src="' . $image . '"alt=""srcset="">';
                    }
                    ?>

                </div>

                <div class="imgModal oculta" id="modalCartao">

                    <?php
                    $midiasocial = "contents/images/cartaodigital/";
                    foreach (glob("$midiasocial/*", GLOB_NOSORT) as $image) {
                        echo '<img src="' . $image . '"alt=""srcset="">';
                    }
                    ?>

                </div>

            </div>
        </section>
        <section id="contato">
            <h1>Fale comigo</h1>
            <div>
                <span id="btnWhatsapp">WhatsApp</span>
                <span id="btnEmail">Email</span>
            </div>
            <div>
                <a href="https://github.com/sideiltonsouza" target="_blank" rel="noopener noreferrer"></a>
                <a href="https://www.instagram.com/sideiltonsouza/" target="_blank" rel="noopener noreferrer"></a>
                <a href="https://www.linkedin.com/in/sideiltonsouza" target="_blank" rel="noopener noreferrer"></a>
            </div>
        </section>
        <form action="contato.php" class="oculta" method="post">
            <div id="bgForm"></div>
            <div class="formulario">
                <span>
                    <input type="text" name="nome" id="nome" minlength="6" maxlength="25" required>
                    <h2>Seu nome</h2>
                </span>
                <span>
                    <input type="email" name="email" id="email" required>
                    <h2>Seu E-mail</h2>
                </span>
                <span>
                    <textarea name="mensagem" id="mensagem" cols="30" rows="10" required></textarea>
                    <h2>Sua mensagem</h2>
                </span>
                <input type="submit" value="Enviar">
            </div>
        </form>
    </main>
    <script src="js/script.js" defer></script>
</body>

</html>