<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Api\V1\BaseController;

use App\TaskCategory;

class CategoryController extends BaseController{

    public function getDataModel(){
        return new TaskCategory();
    }
}
