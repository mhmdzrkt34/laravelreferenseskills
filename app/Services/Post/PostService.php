<?php

namespace App\Services\Post;

use App\ApiModels\PostModel;
use Exception;
use Illuminate\Support\Facades\Http;

class PostService implements IPostService {

    protected $http;

    public function __construct(){


        $this->http=Http::baseUrl("https://jsonplaceholder.typicode.com");
    }


    public function getPosts():array{


        try{

            $responce=$this->http->get("/posts");

           $data=$responce->json();
           $posts=[];


           for($i=0;$i<count($data);$i++){

            $posts[]=PostModel::fromJson($data[$i]);

        
           }

           return $posts;


        }catch(Exception $e){

            throw $e;

        };
    }



    




}


