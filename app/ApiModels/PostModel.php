<?php
namespace App\ApiModels;
class PostModel {

    public $userId;

    public $id;
    public $title;

    public $body;


    public function __construct(int $userId, int $id, string $title,string $body){

        $this->userId = $userId;

        $this->id = $id;

        $this->title = $title;

        $this->body = $body;


    }

    public static function fromJson(array $json):PostModel{

        return new PostModel($json['userId'],$json["id"],$json["title"],$json["body"]);


    }






}










?>