<?php 

namespace App\Models;

use CodeIgniter\Model;

class TeacherModel extends Model 
{
    protected $table = 'teachers';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nip', 'teacher_name', 'teacher_gender', 'teacher_pob', 'teacher_dob', 'teacher_photo'];
}