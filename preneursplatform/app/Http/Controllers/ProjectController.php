<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
// use DB;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index() {
        // return Project::all();
        $project = DB::table('projects')
            ->join('users', 'users.id', '=', 'projects.user_id')
            ->select('projects.*', 'users.first_name', 'users.last_name')
            ->orderBy('started_at', 'DESC')
            ->get();
        
        return $project;
    }
}
