<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio - Flip Flop Lab</title>

    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/script.js"></script>
</head>

<body>

    <section>
        <header>
            <a href="#"><img src="images/logo.png" alt="" class="logo"> </a>
            <div class="toggleMenu" onclick="menuToggle()"></div>
            <ul class="navigation">
                <li><a href="/">Home</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Novidades</a></li>
                <li><a href="#">Notícias</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </header>
        <div class="content">
            <div class="textBox">
                <h2>Smart TV<br><span>LED</span><br> Samsung</h2>
                <p>Quer receber em primeira mão nossas melhores promoções? Cadastre seu melhor email abaixo e fique por
                    dentro de todas
                    as novidades!</p>
                <form id="myForm" onsubmit="insertEmail(); return false">
                    <input id="email" type="text" placeholder="Email" onblur="validateEmail()"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                    <label id="validate"></label>
                    <br>
                    <button type="submit">Cadastrar</button>
                    <br>
                    <br>
                    <label id="showtable"></label>
                </form>
            </div>
            <div class="imgBox">
                <img src="images/tv.jpg" alt="" class="tv">
            </div>
        </div>
        <ul class="sci">
            <li><a href="#"><img src="images/facebook.png" alt="facebook-logo"></a></li>
            <li><a href="#"><img src="images/twitter.png" alt="twitter-logo"></a></li>
            <li><a href="#"><img src="images/instagram.png" alt="instagram-logo"></a></li>
        </ul>
    </section>

</body>

</html>
