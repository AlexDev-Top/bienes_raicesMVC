<?php 

namespace Controller;
use MVC\Router;
class AdminController{

    public static function index(Router $router){
        $router->render('admin/admin',[
            
        ]);
    }
}

?>