<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{

    public function getAllProjects() {
        $projects = Project::all();
        return $projects;
    }

    // Reto: obtener los ultimos 10 registros de la tabla projects
    public function getLatestProjects() {
        $projects = Project::latest()
            ->take(10)
            ->get();
        return $projects;
    }

    public function insertProject() {
        $project = new Project;
        $project->city_id = 1;
        $project->company_id = 1;
        $project->user_id = 1;
        $project->name = 'Nombre del proyecto';
        $project->execution_date = '2020-04-30';
        $project->is_active = 1;
        $project->save();

        return "Guardado";
    }

}
