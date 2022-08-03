<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class UserModel extends Model
{
    protected $table = 'users';
 
    protected $allowedFields = ['name', 'email'];
}