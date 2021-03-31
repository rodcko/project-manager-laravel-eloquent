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

}
