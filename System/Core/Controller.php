<?php
namespace System\Core;

use Exception;

class Controller extends Request {
    public function view ($mater = '', $data = []) {
         if (!file_exists(__VIEW__ .$mater. '.php')) {
            throw new Exception("file $mater not foud", 500);
         }

         extract($data);

         include __VIEW__ . $mater. '.php';
    }
}


?>