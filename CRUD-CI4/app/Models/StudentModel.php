<?php 

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model 
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nis', 'name', 'gender', 'pob', 'dob', 'photo', 'class_id'];

    public function getStudentsWithClass() 
    {
        return $this->select('students.*, classes.class_name')
                    ->join('classes', 'classes.id = students.class_id')
                    ->findAll();
    }
}