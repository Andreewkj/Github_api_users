<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class RepositoryController extends Controller
{
    public function show(){
        $response = Http::get('https://api.github.com/users/Andreewkj/repos');
        $dataProjects = $response->json();

        return view('project.index', ['dataProjects'=> $dataProjects]);
    }
}
