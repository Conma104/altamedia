<?php
namespace App\Models;

use System\Core\Model;

class UserModel extends Model
{
    protected $table = 'user';

    public function getInfoByEmail($email) {
        return $this-> getFirst("SELECT * from $this->table where email = '$email'");
    }
}

?>