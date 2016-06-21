<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * Disable autoicrementing for id because we use uuid against int
     * @var boolean
     */
    public $incrementing = false;


    public function generateNewId(){
        return Uuid::uuid4();
    }

}
