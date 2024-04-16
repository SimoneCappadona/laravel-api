<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectApi extends Controller
{

public function index()
{
    $projects = Project::all();
    return response()->json($projects);
    

    }
}