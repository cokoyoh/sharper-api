<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ["title","description", "duration", "user_id", "state_id"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
