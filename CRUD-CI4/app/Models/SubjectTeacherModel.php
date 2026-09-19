<?php 

namespace App\Models;

use CodeIgniter\Model;

class SubjectTeacherModel extends Model 
{
    protected $table = 'subject_teachers';
    protected $primaryKey = 'id';
    protected $allowedFields = ['teacher_id', 'subject_id'];

    public function getRelations() 
    {
        return $this->select('subject_teachers.*, teachers.teacher_name, subjects.subject_name')
                    ->join('teachers', 'teachers.id = subject_teachers.teacher_id')
                    ->join('subjects', 'subjects.id = subject_teachers.subject_id')
                    ->findAll();
    }
}