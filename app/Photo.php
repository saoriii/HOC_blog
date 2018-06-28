<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable =[

        "file",
        "imageable_id",
        "imageable_type"
    ];

    public function imageable() {

        return $this->morphTo();
    }


}
