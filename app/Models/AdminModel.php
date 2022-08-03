<?php

namespace App\Models;

use CodeIgniter\Database\Forge;
use CodeIgniter\Model;

class AdminModel extends Model{

    protected $table = 'admin_users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name','type'];

    function db_table(){
        $db = db_connect();
        $result = $db->query('CREATE TABLE IF NOT EXISTS admin_users(
            id int(8) not null auto_increment primary key,
            name varchar(100),
            type varchar(50)
        )');
        if($result == true){
            echo 'tablel created';
        }else{
            echo 'table not created';
        }
        // $prep = new Forge();
        // $prep->createTable
        
    }
    
}