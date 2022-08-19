<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mictli Gatita</title>
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Lato&display=swap" rel="stylesheet">
        <link rel="icon" type="image/jpg" href="/build/img/favicon.png"/>
        <link rel="stylesheet" href="build/css/app.css">
	    <link rel="stylesheet" href="/build/css/flexslider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<!-- FlexSlider -->
        <script defer src="/build/js/jquery.flexslider.js"></script>
        <script defer src="/build/js/app.js"></script>
    </head>

    <header>
        <div class="nav-bg">
            <nav class="navegacion-principal">
                <div class="izquierda contenedor">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="10" cy="10" r="7" />
                    <line x1="21" y1="21" x2="15" y2="15" />
                </svg>
                <input class="input" type="search" placeholder="buscar en nuestra tienda"> 
                </div>
                <div class="derecha contenedor">
                    <a href="/login">Ingresar</a>
                    <a href="/crear">Crear cuenta</a>
                    <p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="6" cy="19" r="2" />
                    <circle cx="17" cy="19" r="2" />
                    <path d="M17 17h-11v-14h-2" />
                    <path d="M6 5l14 1l-1 7h-13" />
                    </svg>
                    </p>
                    <a href="/carrito">Carrito</a>
                    <img class="flag" src="../build/img/mexico.png" alt="mexico">
                    <a href="#">MXN</a>
                </div>
            </nav>
        </div>
    </header>

    <body>
        <?php echo $contenido; ?>
    </body>
</html>