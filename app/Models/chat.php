<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function Sender(){

        return $this->belongsTo(User::class,"sender_id","id");
    }

    public function Reciever(){


        return $this->belongsTo(User::class,"reciever_id","id");
    }



    protected $hidden = [

    ];

    protected function casts(): array
    {
        return [
     
        ];
    }
}
