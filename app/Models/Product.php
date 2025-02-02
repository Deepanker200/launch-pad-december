<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable as Sluggable;

class Product extends Model
{
    use sluggable;

    public function Sluggable():array
    {
        return
            [

                'slug' => [
                    'source' => 'title'
                ]
            ];
    }
}
