<?php


class GetPostsResponse {


    public $posts;



    public function __construct(array $posts){


        $this->posts = $posts;
    }
}