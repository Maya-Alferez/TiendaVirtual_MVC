<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
Use Controllers\LoginController;
$router = new Router();

/*Aquí se van definiendo las páginas secundarias que tendrá nuestra página web, por ejemplo para comprar un bustier, necesitas primero crear una cuenta
en donde vendrá un formulario con tus datos, esta página esta vinculada con los métodos de cada página secundaria, que se encuentran en LoginController*/

//Página principal
$router->get('/', [LoginController::class, 'principal']);

//Iniciar sesión
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

//Recuperar contraseña
$router->get('/forgot', [LoginController::class, 'forgot']);
$router->post('/forgot', [LoginController::class, 'forgot']);
$router->get('/recuperar', [LoginController::class, 'recuperar']);
$router->post('/recuperar', [LoginController::class, 'recuperar']);

//Crear cuenta
$router->get('/crear', [LoginController::class, 'crear']);
$router->post('/crear', [LoginController::class, 'crear']);

//Carrito de compras
$router->get('/carrito', [LoginController::class, 'carrito']);
$router->post('/carrito', [LoginController::class, 'carrito']);





// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();