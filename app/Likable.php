<?php

namespace App;
use App\Models\User;

trait Likable
{
    public function like($user = null)
    {
        $user = $user ?: auth()->user();

        return $this->likes()->attach($user);
    }
    public function likes() //Give me all the users that likes that post
    {
        return $this->morphToMany(User::class, 'likable')->withTimestamps();
    }
}