<body>
<!-- Barra de navegación en la parte superior de la página -->
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
<!-- Fin de Barra de navegación -->

    <h1 class="titulo-principal">Mictli Gatita Pikachita</h1>
<!-- Navegación secundaria en Body -->
    <div class="nav-sec contenedor">
        <nav class="navegacion-secundaria">
            <a class="enlace" href="/catalogo">Cátalogo</a>
            <a class="enlace" href="/sobremictli">Sobre Mictli</a>
            <a class="enlace" href="/tallas">Tabla de tallas</a>
            <a class="enlace" href="/envio">Envio/Entrega inmediata</a>
            <a class="enlace" href="/preowned">Pre-owned</a>
            <a class="enlace" href="/terminos">Términos</a>
        </nav>
    </div>
<!-- Fin de Navegación secundaria en Body -->

<!-- Intervetion Image --> 

<!-- <?php
// require '../includes/app.php';
// use Intervetion\Image\ImageManager;
// $manager = new ImageManager(array('driver' => 'gd'));
// $image = $manager->make('../../src/img/f1.jpg')->fit(800,504);
// $image->save('../../src/img/f1.jpg');
// ?> -->

<!-- Flexslider -->
    <div class="contenedor">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img loading="lazy" class="imagen" src="../build/img/Mictli_programming.jpg" />
                </li>
                <li>
                    <img loading="lazy" class="imagen" src="../build/img/Mictli_lenguita.jpg" />
                </li>
                <li>
                    <img loading="lazy" class="imagen" src="../build/img/Mictli_sun.jpg" />
                </li>
                <li>
                    <img loading="lazy" class="imagen" src="../build/img/Mictli_tiburon.jpg" />
                </li>
            </ul>
        </div>
    </div>
<!-- Fin Flexslider -->

<section class="seccion contenedor">
    <div class="contenedor-evees">
        <div class="evee">
            <picture>
                <source srcset="../build/img/Glaceon.webp" type="image/webp">
                <source srcset="../build/img/Glaceon.jpg" type="image/jpeg">
                <img loading="lazy" src="../build/img/Glaceon.jpg" alt="Glaceon">
            </picture>
            <div class="contenido-evee">
                <h3 class="titulo">Mictli Glaceon</h3>
                <p class="precio">$100</p>
            </div>
            <div class="boton">
                <a href="/glaceon">Ver detalles</a>
            </div> <!-- .boton --> 
        </div> <!-- .evee -->

        <div class="evee">
            <picture>
                <source srcset="../build/img/Jolteon.webp" type="image/webp">
                <source srcset="../build/img/Jolteon.jpg" type="image/jpeg">
                <img loading="lazy" src="../build/img/Jolteon.jpg" alt="Jolteon">
            </picture>
            <div class="contenido-evee">
                <h3 class="titulo">Mictli Jolteon</h3>
                <p class="precio">$100</p>
            </div>
            <div class="boton">
                <a href="/jolteon">Ver detalles</a>
            </div> <!-- .boton --> 
        </div> <!-- .evee -->

        <div class="evee">
            <picture>
                <source srcset="../build/img/Sylveon.webp" type="image/webp">
                <source srcset="../build/img/Sylveon.jpg" type="image/jpeg">
                <img loading="lazy" src="../build/img/Sylveon.jpg" alt="Sylveon">
            </picture>
            <div class="contenido-evee">
                <h3 class="titulo">Mictli Sylveon</h3>
                <p class="precio">$100</p>
            </div>
            <div class="boton">
                <a href="/glaceon">Ver detalles</a>
            </div> <!-- .boton --> 
        </div> <!-- .evee -->

        <div class="evee">
            <picture>
                <source srcset="../build/img/Umbreon.webp" type="image/webp">
                <source srcset="../build/img/Umbreon.jpg" type="image/jpeg">
                <img loading="lazy" src="../build/img/Umbreon.jpg" alt="Umbreon">
            </picture>
            <div class="contenido-evee">
                <h3 class="titulo">Mictli Umbreon</h3>
                <p class="precio">$100</p>
            </div>
            <div class="boton">
                <a href="/glaceon">Ver detalles</a>
            </div> <!-- .boton --> 
        </div> <!-- .evee -->

        <div class="evee">
            <picture>
                <source srcset="../build/img/Glaceon.webp" type="image/webp">
                <source srcset="../build/img/Glaceon.jpg" type="image/jpeg">
                <img loading="lazy" src="../build/img/Glaceon.jpg" alt="Glaceon">
            </picture>
            <div class="contenido-evee">
                <h3 class="titulo">Mictli Glaceon</h3>
                <p class="precio">$100</p>
            </div>
            <div class="boton">
                <a href="/glaceon">Ver detalles</a>
            </div> <!-- .boton --> 
        </div> <!-- .evee -->

        <div class="evee">
            <picture>
                <source srcset="../build/img/Jolteon.webp" type="image/webp">
                <source srcset="../build/img/Jolteon.jpg" type="image/jpeg">
                <img loading="lazy" src="../build/img/Jolteon.jpg" alt="Jolteon">
            </picture>
            <div class="contenido-evee">
                <h3 class="titulo">Mictli Jolteon</h3>
                <p class="precio">$100</p>
            </div>
            <div class="boton">
                <a href="/jolteon">Ver detalles</a>
            </div> <!-- .boton --> 
        </div> <!-- .evee -->

        <div class="evee">
            <picture>
                <source srcset="../build/img/Sylveon.webp" type="image/webp">
                <source srcset="../build/img/Sylveon.jpg" type="image/jpeg">
                <img loading="lazy" src="../build/img/Sylveon.jpg" alt="Sylveon">
            </picture>
            <div class="contenido-evee">
                <h3 class="titulo">Mictli Sylveon</h3>
                <p class="precio">$100</p>
            </div>
            <div class="boton">
                <a href="/glaceon">Ver detalles</a>
            </div> <!-- .boton --> 
        </div> <!-- .evee -->

        <div class="evee">
            <picture>
                <source srcset="../build/img/Umbreon.webp" type="image/webp">
                <source srcset="../build/img/Umbreon.jpg" type="image/jpeg">
                <img loading="lazy" src="../build/img/Umbreon.jpg" alt="Umbreon">
            </picture>
            <div class="contenido-evee">
                <h3 class="titulo">Mictli Umbreon</h3>
                <p class="precio">$100</p>
            </div>
            <div class="boton">
                <a href="/glaceon">Ver detalles</a>
            </div> <!-- .boton --> 
        </div> <!-- .evee -->
        
        <div class="evee">
            <picture>
                <source srcset="../build/img/Mictli_tiburon.webp" type="image/webp">
                <source srcset="../build/img/Mictli_tiburon.jpg" type="image/jpeg">
                <img loading="lazy" src="../build/img/Mictli_tiburon.jpg" alt="Tiburon">
            </picture>
            <div class="contenido-evee">
                <h3 class="titulo">Mictli Tiburon (Edición especial)</h3>
                <p class="precio">$100</p>
            </div>
            <div class="boton">
                <a href="/glaceon">Ver detalles</a>
            </div> <!-- .boton --> 
        </div> <!-- .evee -->
    </div> <!-- .contenedor-evees -->
</section>
</body>