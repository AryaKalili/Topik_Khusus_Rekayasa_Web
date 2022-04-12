<?php

namespace App\Models;

use CodeIgniter\Model;

class teacher extends Model
{
    protected $table      = 'teacher_tbl';
    protected $primaryKey = 'id_teacher';
    protected $allowedFields = ['teach_id', 'teach_name', 'teach_email', 'teach_password', 'teach_status'];
    protected $dateFormat = 'datetime';
    protected $useAutoIncrement = false;
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
