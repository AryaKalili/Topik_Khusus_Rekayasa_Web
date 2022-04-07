<?php

namespace App\Models;

use CodeIgniter\Model;

class login_user extends Model
{
  protected $table      = 'user_tbl';
  protected $primaryKey = 'id_user';
  protected $allowedFields = ['id_user', 'username', 'email', 'password', 'birthday', 'status', 'login_code'];
  protected $dateFormat = 'datetime';
  protected $useAutoIncrement = false;
  protected $useTimestamps = true;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
}
