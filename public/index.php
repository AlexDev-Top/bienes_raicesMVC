<?php 

require '/Users/alexi/Desktop/bienesraices_inicio/includes/app.php';

    use MVC\Router;
    use Controller\PagesController;
    
    $router=new Router();
    $router->get('/',[PagesController::class,'index']);
    $router->get('/nosotros',[PagesController::class,'nosotros']);
    $router->get('/anuncios',[PagesController::class,'anuncios']);
    $router->get('/blog',[PagesController::class,'blog']);
    $router->get('/contacto',[PagesController::class,'contacto']);
    $router->ValidateURL();

?>