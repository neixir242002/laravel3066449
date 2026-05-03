<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Apprentice;
use App\Models\Area;
use App\Models\Computer;
use App\Models\TrainingCenter;


class ConsultasController extends Controller
{
    public function consultas()
    {
        /* consulta Aprendiz
        $apprentice = new Apprentice();
        $apprentice = Apprentice::find(1);
        return $apprentice;

        $course = new Course();
        $course = Course::find(2);
        return $course;

        $teacher = new Teacher();
        $teacher = Teacher::find(1);
        return $teacher;

        $area = new Area();
        $area = Area::find(2);
        return $area;

        $computer = new Computer();
        $computer = Computer::find(1);
        return $computer;

        $trainingCenter = new TrainingCenter();
        $trainingCenter = TrainingCenter::find(1);
        return $trainingCenter;*/
    }
}
