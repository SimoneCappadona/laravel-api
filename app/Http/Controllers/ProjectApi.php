<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectApi extends Controller
{

public function index()
{
    $projects = Project::select(['id', 'type_id', 'user_id', 'title', 'description', 'github_url', 'image'])
        ->with(['type:id,label,color', 'technologies:id,label,color'])
        ->orderBy('id', 'DESC')
        ->paginate();
    return response()->json($projects);
}
}