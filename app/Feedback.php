<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable =['feedback','user_id','project_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
