<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function testOrm(){
        $posts = Post::all();
        
        // foreach($posts as $post){           //consulta sql
        //     echo "<h1>".$post->title."</h1>";
        //     echo "<h2>".$post->user->name."</h2>";
        //     echo "<span style='color:gray;'>{$post->category->name} - {$post->user->name}</span>";
        //     echo "<h4>".$post->content."</h4>";
        //     echo "<hr>";
        // }

        $categories = Category::all();
        foreach($categories as $category){
            echo "<h1>{$category->name}</h1>";

            foreach($category->posts as $post){
                echo "<h1>".$post->title."</h1>";
                echo "<h2>".$post->user->name."</h2>";
                echo "<span style='color:gray;'>{$post->category->name} - {$post->user->name}</span>";
                echo "<h4>".$post->content."</h4>";
            }
            echo "<hr>";
            
        }
        die();
    }
}
