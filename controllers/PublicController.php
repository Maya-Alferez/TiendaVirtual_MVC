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

    public static function flareon(Router $router) {
        $router->render('evees/flareon');
    }

    public static function glaceon(Router $router) {
        $router->render('evees/glaceon');
    }

    public static function jolteon(Router $router) {
        $router->render('evees/jolteon');
    }

    public static function speon(Router $router) {
        $router->render('evees/speon');
    }

    public static function sylveon(Router $router) {
        $router->render('evees/sylveon');
    }

    public static function umbreon(Router $router) {
        $router->render('evees/umbreon');
    }

    public static function vaporeon(Router $router) {
        $router->render('evees/vaporeon');
    }

    public static function tiburon(Router $router) {
        $router->render('evees/tiburon');
    }
}