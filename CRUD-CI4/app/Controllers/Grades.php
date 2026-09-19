<?php

namespace App\Controllers;

use App\Models\GradeModel;
use App\Models\StudentModel;
use App\Models\SubjectModel;

class Grades extends BaseController
{
    protected $gradeModel;
    protected $studentModel;
    protected $subjectModel;

    public function __construct()
    {
        $this->gradeModel   = new GradeModel();
        $this->studentModel = new StudentModel();
        $this->subjectModel = new SubjectModel();
    }

    public function index()
    {
        $data = [
            'title'  => 'Daftar Nilai Siswa',
            'grades' => $this->gradeModel->getGradesWithDetails()
        ];
        return view('grades/index', $data);
    }

    public function new()
    {
        $data = [
            'title'    => 'Input Nilai Siswa',
            'students' => $this->studentModel->findAll(),
            'subjects' => $this->subjectModel->findAll()
        ];
        return view('grades/create', $data);
    }

    public function create()
    {
        $this->gradeModel->save([
            'student_id'    => $this->request->getPost('student_id'),
            'subject_id'    => $this->request->getPost('subject_id'),
            'score'         => $this->request->getPost('score'),
            'semester'      => $this->request->getPost('semester'),
            'academic_year' => $this->request->getPost('academic_year'),
        ]);

        return redirect()->to('/grades')->with('success', 'Nilai berhasil disimpan.');
    }

    public function edit($id = null)
    {
        $data = [
            'title'    => 'Edit Nilai',
            'grade'    => $this->gradeModel->find($id),
            'students' => $this->studentModel->findAll(),
            'subjects' => $this->subjectModel->findAll()
        ];
        return view('grades/edit', $data);
    }

    public function update($id = null)
    {
        $this->gradeModel->update($id, [
            'student_id'    => $this->request->getPost('student_id'),
            'subject_id'    => $this->request->getPost('subject_id'),
            'score'         => $this->request->getPost('score'),
            'semester'      => $this->request->getPost('semester'),
            'academic_year' => $this->request->getPost('academic_year'),
        ]);

        return redirect()->to('/grades')->with('success', 'Nilai berhasil diperbarui.');
    }

    public function delete($id = null)
    {
        $this->gradeModel->delete($id);
        return redirect()->to('/grades')->with('success', 'Nilai berhasil dihapus.');
    }
}