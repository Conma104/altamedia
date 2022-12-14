<?php
namespace System\Core;

class Session
{
    
    public static function set($key = '', $message = '')
    {
        $_SESSION[$key] = $message;
        return;
    }


    
public static function has ($key = '') {
    return $_SESSION[$key] ?? false;
   
}

    public static function get($key = '') {
       return $_SESSION[$key] ?? null;
    }

    public static function remove($key = '') {
       if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
            
       }

       
    }
}

?>