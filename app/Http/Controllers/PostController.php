<?php

namespace App\Http\Controllers;

use App\Services\Post\IPostService;
use Exception;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    protected $PostService;

    public function __construct(IPostService $postService){

        $this->PostService=$postService;
    }

    public function Index(){
        try{

            $posts=$this->PostService->getPosts();

            return view("Posts.index",["posts"=>$posts]);


            



        }catch(Exception $e){

     


abort(500);
        }



    }
}
