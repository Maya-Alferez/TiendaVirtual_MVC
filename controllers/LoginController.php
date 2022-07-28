<?php

namespace Controllers;
use MVC\Router;

/*En este página se encuentran los métodos de las páginas secundarias del index*/

class LoginController {
    public static function principal(Router $router) {
        $router->render('auth/principal');
    }
    public static function login(Router $router) {
        $router->render('auth/login');
    }

    public static function logout() {
        echo "Desde Logout";
    }

    public static function forgot() {
        echo "Desde Olvide contraseña";
    }

    public static function recuperar() {
        echo "Desde recuperar contraseña";
    }

    public static function crear() {
        echo "Desde crear cuenta";
    }

    public static function carrito() {
        echo "Desde carrito";
    }
}