<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class ProjectController extends Controller
{
    public function index()
    {
        $posts = Post::where('slug')->with('type', 'technologies')->first();

        if ($posts) {
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => 'ok',
                'project' => $posts
            ]);
        }
        else {
            return response()->json([
                'success' => false,
                'code' => 404,
                'message' => 'Not Found',
            ]);
        }
    }
        
    }

