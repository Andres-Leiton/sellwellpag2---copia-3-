<?php
	require 'conexion.php';
	
	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE nombre LIKE '%$valor'";
		}
	}
	$sql = "SELECT *FROM registros $where";
	$resultado = $mysqli->query($sql);
	
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viweport" content="widt=device-width, initial-scale=1.0">
    <title>Pagina Sell Well</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header class="hero">
        <div class="container">
            <nav class="nav">
                <a href="indexR.php" class="nav__items">Inicio</a>
                <a href="contactanos.html" class="nav__items">Contactanos</a>
                <a href="proyecto.html" class="nav__items">proyecto</a>
                <a href="ayuda.html" class="nav__items">ayuda</a>
                <a href="extra.html" class="nav__items">extra</a>
            </nav>

            <section class="hero__container">
                <div class="hero__texts">
                    <h1 class="hero__title">Gracias por trabajar con Sell Well</h1>
                    <h2 class="hero__subtitle">Disfruta de nuestros beneficios</h2>
                    
                </div>
            </section>
        </div>
        <div class="hero__wave" style="overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-0.93,86.34 C287.59,157.39 270.67,5.44 500.93,88.31 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(255, 255, 255);"></path></svg></div>
    </header>

    <main>
        <section class="presentacion container">
            <img src="imagenessellwell/logohorizon.png" class="presentation__picture">
            <h2 class="subtitle">¿Quienes somos?</h2>
            <p class="presentation__copy">Somos aprendizes del sena del tecnico programacion de software</p>
        </section>
        <section class="about container">
            <div class="about__texts">
                <h2 class="subtitle">¿Que te ofrecemos?</h2>
                <p class="about__paragraph">Te asesoraremos en el mundo digital para desenvolver tu negocio en este mundo, creando tu pagina web para que tus clientes encuentren tu negocio mas facilmente</p>
                <p class="about__paragraph">La pagina siempre estaria enfocada a la idea y diseño del cliente con un estilo personalizado</p>
            </div>
            <figure class="about__img">
                <img src="imagenessellwell/undraw_In_sync_re_jlqd.svg" class="about__picture">
            </figure>
            <figure class="about__img about__img--left">
                <img src="imagenessellwell\undraw_Personal_website_re_c8dv (1).svg" class="about__picture">
            </figure> El tener una web te brinda la oportunidad de estar en contacto constante con tus clientes, que pueden consultarte en cualquier momento o ver tus productos y servicios
            <div class="about__texts">
                <h2 class="subtitle">Nuestro trabajo</h2>
                <p class="about__paragraph"></p>
                <p class="about__paragraph"></p>
            </div>

        </section>

    </main>

    <footer class="footer">
        <div class="container footer__grid">
            <nav class="nav nav--footer">
                <a class="nav__items nav__items--footer" href="index.php">Inicio</a>
                <a class="nav__items nav__items--footer" href="proyecto.html">Proyecto</a>
                <a class="nav__items nav__items--footer" href="ayuda.html">Ayuda</a>           
            </nav>

            <section class="footer__contact">
                <h3 class="footer__title">Contactanos</h3>
                <div class="footer__icons">
                    <span class="footer__container-icons">
                        <a class="fab fa-facebook-f footer__icon" href="https://www.facebook.com/groups/236281495180765"></a>
                    </span>
                    <span class="footer__container-icons">
                        <a class="fab fa-twitter footer__icon" href="https://twitter.com/SellWellOF"></a>
                    </span>
                    
                    
                </div>
            </section>
        </div>
    </footer>


    <script src="https://kit.fontawesome.com/f955c68031.js"
    crossorigin="anonymous"></script>
</body>
</html>
