<?php

namespace App\Transformers\Api;

use App\Task;
use NilPortugues\Api\Mappings\JsonApiMapping;

class TaskTransformer implements JsonApiMapping {

    public function getClass(){
        return Task::class;
    }


    public function getAlias(){
        return 'tasks';
    }

    public function getAliasedProperties(){
        return [];
    }

    public function getHideProperties(){
        return [];
    }

    public function getIdProperties(){
        return ['id'];
    }

    public function getUrls(){
        return [
            'self' => ['name' => 'tasks.show', 'as_id' => 'id'],
        ];
    }


    public function getRelationships(){
        return [];
    }
    
}
