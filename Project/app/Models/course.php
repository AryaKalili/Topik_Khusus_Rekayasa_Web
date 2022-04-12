<?php

namespace App\Models;

use CodeIgniter\Model;

class course extends Model
{
    protected $table      = 'course_tbl';
    protected $primaryKey = 'id_course';
    protected $allowedFields = ['id_course', 'course_name', 'course_date', 'course_date'];
    protected $dateFormat = 'datetime';
    protected $useAutoIncrement = false;
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
}
