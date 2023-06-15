<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class ProjectController extends Controller
{
    public function index()
    {
        $posts = Post::with('type', 'technologies')->paginate(6);

        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => 'ok',
            'posts' => $posts,
        ]);
        
    }
}
