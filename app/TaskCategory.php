<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class TaskCategory extends Model
{
    public $incrementing = false;


    public function generateNewId(){
        return Uuid::uuid4();
    }
}
