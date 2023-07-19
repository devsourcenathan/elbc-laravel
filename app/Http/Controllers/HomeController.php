<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function blog()
    {
        $posts = Post::all();
        return view('pages.client.blog', compact('posts'));
    }

    function contact()
    {
        return view('pages.client.contact');
    }

    function donation()
    {
        return view('pages.client.donation');
    }

    function formation()
    {
        $formations = Formation::all();
        return view('pages.client.formation', compact('formations'));
    }

    function portfolio()
    {
        $projects = Project::all();
        return view('pages.client.porfolio', compact('projects'));
    }

    function about()
    {
        return view('pages.client.about');
    }
}
