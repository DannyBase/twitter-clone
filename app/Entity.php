<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tweets\Entities\EntityDatabaseCollection;

class Entity extends Model
{
    protected $guarded = [];

    public function newCollection (array $models = []) {
        return new EntityDatabaseCollection($models);
    }
}
