<?php

namespace Controllers;
use MVC\Router;

/*En este página se encuentran los métodos de las páginas al publico*/

class PublicController {
    public static function catalogo(Router $router) {
        $router->render('auth/catalogo');
    }

    public static function sobremictli(Router $router) {
        $router->render('auth/sobremictli');
    }

    public static function tallas(Router $router) {
        $router->render('auth/tallas');
    }

    public static function envio(Router $router) {
        $router->render('auth/envio');
    }

    public static function preowned(Router $router) {
        $router->render('auth/preowned');
    }

    public static function terminos(Router $router) {
        $router->render('auth/terminos');
    }
}