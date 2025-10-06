<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioLike extends Model
{
    protected $fillable = ['portfolio_id', 'user_id'];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
