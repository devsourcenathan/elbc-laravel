<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Formation;
use App\Models\Post;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    function blog()
    {
        $posts = Post::all();
        return view('pages.admin.blog.index', compact('posts'));
    }

    function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;

        if ($request->file()) {
            $fileName = time() . '_' . $request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
            $post->img_path = '/storage/' . $filePath;
        }

        $post->save();

        return redirect('/admin/blog');
    }

    function donations()
    {
        $donations = Donation::all();
        return view('pages.admin.donations.index', compact('donations'));
    }

    function store_donations(Request $request)
    {
        $post = new Donation();
        $post->title = $request->title;
        $post->description = $request->description;

        if ($request->file()) {
            $fileName = time() . '_' . $request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
            $post->img_path = '/storage/' . $filePath;
        }

        $post->save();

        return redirect('/admin/donations');
    }

    function formations()
    {
        $formations = Formation::all();
        return view('pages.admin.formations.index', compact('formations'));
    }

    function store_formations(Request $request)
    {
        $post = new Formation();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->link = $request->link;



        $post->save();

        return redirect('/admin/formations');
    }

    function projects()
    {
        $projects = Project::all();
        return view('pages.admin.projects.index', compact('projects'));
    }

    function store_projects(Request $request)
    {
        $post = new Project();
        $post->title = $request->title;
        $post->description = $request->description;

        if ($request->file()) {
            $fileName = time() . '_' . $request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
            $post->img_path = '/storage/' . $filePath;
        }

        $post->save();

        return redirect('/admin/projects');
    }

    function users()
    {
        $users = User::all();
        return view('pages.admin.users.index', compact('users'));
    }

    function store_users(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'code_fisc' => $request->code_fisc,
            'add1' => $request->add1,
            'add2' => $request->add2,
            'city' => $request->city,
            'code_post' => $request->code_post,
            'country' => $request->country,
            'isAdmin' => true,
            'password' => Hash::make($request->password),
        ]);



        return redirect('/admin/users');
    }
}
