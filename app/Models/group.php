<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    use HasFactory;

    protected $guarded=[];


    public function members(){
        return $this->belongsToMany(User::class,"usergroups","group_id","id");
    }
}
