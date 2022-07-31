<?php
namespace System\Core;

use Exception;

class Request 
{
    protected function isMethod ($method = 'GET') 
    {
         if($_SERVER['REQUEST_METHOD'] !== strtoupper($method)) {
            throw new Exception("Method $method not support", 500 );

         }

         return $method;
    }

    protected function input($key = null)
     {
        $method = $_SERVER['REQUEST_METHOD'];

       if($method == 'POST') {
         return is_null($key) ? $_POST
           :  (isset ($_POST[$key]) && !empty($_POST[$key]) ? makeSafe($_POST[$key]) : null);
       }

       if($method == 'GET') 
       {
         return  is_null($key) ? $_GET
            : (isset ($_GET[$key]) && !empty($_GET[$key]) ? makeSafe($_GET[$key]) : null);

       }

       return null;
    }
}

