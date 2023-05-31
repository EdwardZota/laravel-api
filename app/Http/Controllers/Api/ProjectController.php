<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::with(['type','technologies'])->paginate(3);

        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }

    public function show($post_slug){
        $project = Project::where('post_slug',$post_slug)->with(['type','technologies'])->first();

        return response()->json([
            'success' => true,
            'project' => $project
        ]);
    }

}
