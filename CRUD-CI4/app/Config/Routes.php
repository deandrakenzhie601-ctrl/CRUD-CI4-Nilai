<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Students;
use App\Controllers\Classes;
use App\Controllers\Teachers;
use App\Controllers\Subjects;
use App\Controllers\SubjectTeachers;
use App\Controllers\Grades;

/** @var RouteCollection $routes */
$routes->get('/', 'Students::index');

$routes->presenter('students');
$routes->presenter('classes');
$routes->presenter('teachers');
$routes->presenter('subjects');
$routes->presenter('subjectteachers');
$routes->presenter('grades');
