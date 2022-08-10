<?php

namespace Controllers;
use MVC\Router;
use Model\Usuario;
use Classes\Email;


/*En este página se encuentran los métodos de las páginas secundarias del index*/

class LoginController {
    public static function principal(Router $router) {
        $router->render('auth/principal');
    }
    public static function login(Router $router) {
        $alertas = [];
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth = new Usuario($_POST);
            $alertas = $auth->validarLogin();

            if(empty($alertas)){
                $usuario = Usuario::where('email', $auth->email);
                if($usuario) {
                    if($usuario->comprobarPassword($auth->password)) {
                        session_start();

                        $_SESSION['id'] = $usuario->id;
                        $_SESSION['nombre'] = $usuario->nombre . " " . $usuario->apellido;
                        $_SESSION['email'] = $usuario->email;
                        $_SESSION['login'] = true;

                        if($usuario->admin === "1") {
                            $_SESSION['admin'] = $usuario->admin ?? null;
                            header('Location: /');
                        } else {
                            header('Location: /');
                        }
                    }
                } else {
                    Usuario::setAlerta('error', 'Usuario no encontrado');
                }
            }
        }
        $alertas = Usuario::getAlertas();
        $router->render('auth/login', [
            'alertas' => $alertas
        ]);
    }


    public static function logout() {
        echo "Desde Logout";
    }

    public static function forgot(Router $router) {
        $router->render('auth/forgot');
    }

    public static function crear(Router $router) {
        $router->render('auth/crear');
    }

    public static function carrito() {
        echo "Desde carrito";
    }
}