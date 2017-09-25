<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = ["rate"];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
