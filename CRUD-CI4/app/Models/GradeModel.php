<?php 

namespace App\Models;

use CodeIgniter\Model;

class GradeModel extends Model 
{
    protected $table = 'grades';
    protected $primaryKey = 'id';
    protected $allowedFields = ['student_id', 'subject_id', 'score', 'semester', 'academic_year'];

    public function getGradesWithDetails() 
    {
        return $this->select('grades.*, students.name as student_name, students.nis, subjects.subject_name, subjects.passing_grade')
                    ->join('students', 'students.id = grades.student_id')
                    ->join('subjects', 'subjects.id = grades.subject_id')
                    ->findAll();
    }
}
