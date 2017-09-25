<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable =["status"];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
