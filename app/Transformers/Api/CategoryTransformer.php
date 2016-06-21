<?php

namespace App\Transformers\Api;

use App\TaskCategory;
use NilPortugues\Api\Mappings\JsonApiMapping;

class CategoryTransformer implements JsonApiMapping {

    public function getClass(){
        return TaskCategory::class;
    }


    public function getAlias(){
        return 'categories';
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
            'self' => ['name' => 'categories.show', 'as_id' => 'id'],
        ];
    }


    public function getRelationships(){
        return [];
    }
    
}
