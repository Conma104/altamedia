<?php
namespace System\Core;

use App\Controllers\MainController;
use App\Controllers\ProductController;
use Exception;

class App extends Route {
    public function __construct()
    {

        try {

            parent::__construct();
        // echo "App";
        // check 404
               if(!is_null($this->query) && $this->controller == 'MainController') {
               throw new Exception('404', 404);
           }

        // dd($this->params);
       $nameController = "App\\Controllers\\". $this->controller; 
       $classController = new $nameController;
         //    dd($classController);



       // xu ly method

         if (!method_exists($classController, $this->method)) {
            throw new Exception('Method not exit'. $nameController, 500);
         }

            // chạy function và tham số
         call_user_func_array([$classController, $this->method], $this->params);
        }catch (Exception $err) {
           $this-> viewError($err->getCode(), $err);
        }

    }

    protected function viewError($code, $err) {
        if (file_exists(__VIEW__ .'errors/'. $code. '.php')) {
            include __VIEW__. 'errors/' . $code .'.php';
            exit;
        } 

        include __DIR__. '/../Views/' . $code. '.php';
    }
    
}


?>