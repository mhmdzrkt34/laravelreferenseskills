<?php


namespace App\View\Components;

use App\ApiModels\PostModel;
use Illuminate\View\Component as ViewComponent;

class PostComponent extends ViewComponent{

    public $post;


    public function __construct(PostModel $postModel){
        $this->post = $postModel;


    }


    public function render(){

        return view("Components.post-component");


    }


}