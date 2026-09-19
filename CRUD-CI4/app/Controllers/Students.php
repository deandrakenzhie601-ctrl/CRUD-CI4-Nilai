<?php

namespace App\Controllers;

use App\Models\StudentModel;

class Students extends BaseController
{
    protected $studentModel;

    public function __construct()
    {
        $this->studentModel = new StudentModel();
    }

    public function index()
    {
        return view('students/index', [
            'title'    => 'Daftar Siswa',
            'students' => $this->studentModel->getStudentsWithClass(),
        ]);
    }
}
