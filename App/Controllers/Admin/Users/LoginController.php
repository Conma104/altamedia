<?php
namespace App\Controllers\Admin\Users;

use App\Models\UserModel;
use System\Core\Controller;
use System\Core\Session;

 class LoginController extends Controller
 {
   protected $userModel;
   public function __construct()
   {
      $this->userModel = new UserModel;
   }

    public function index()
    {
      $pass = '123';
      $has = '$2y$10$.3J8ehfsPK.5LTbjs2m7L.Cu3l3gsCC2Fo4kJrAjngdsnb25FoCYG';
      // dd(password_hash($pass, PASSWORD_BCRYPT));
      // dd(password_verify($pass,$has));
        return $this->view('admin/users/login');
    }

    public function store() 
    {
       $this->isMethod('POST');
       $email = $this->input('email');
       $password = $this->input('password');
       $remember = (int) $this->input('remember');

       if (is_null($email) || is_null($password)) 
       {
         Session::set('error', 'vui long nhap email va mat khau');

         return back();
       }

       $user = $this->userModel->getInfoByEmail($email);
       if (is_null($user) || !password_verify($password,$user['password'])) {
         Session::set('error', 'Tên đăng nhập hoặc mật khẩu không đúng');

         return back();
       }

       $llifeTime = $remember == 0? 3600 : (3600 * 24 * 30);

       
 
      // Set the maxlifetime of session
      ini_set( "session.gc_maxlifetime", $llifeTime );

      // Also set the session cookie llifeTime
      ini_set( "session.cookie_lifetime", $llifeTime );
       // Now start the session 
      session_start();

      // Update the timeout of session cookie
      $sessionName = session_name();
      
      if( isset( $_COOKIE[ $sessionName ] ) ) {
         setcookie( $sessionName, $_COOKIE[ $sessionName ], time() + $llifeTime, '/' );
      }
      echo  $sessionName;

      }    
 }
