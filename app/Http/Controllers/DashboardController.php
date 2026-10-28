<?php

namespace App\Http\Controllers;

use App\Models\Post;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::withTranslation()
            ->translatedIn(app()->getLocale())
            ->latest()
            ->take(10)
            ->get();
        return view('dashboard', compact('posts'));
    }
}
