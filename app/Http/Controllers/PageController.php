<?php

namespace App\Http\Controllers;

use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct(ProjectRepository $ProjectRepository)
    {
        $this->ProjectRepository = $ProjectRepository;
    }

    public function homepage()
    {
        return view('pages.homepage', [
            'projects' => $this->ProjectRepository->allProjects()
        ]);
    }
}
