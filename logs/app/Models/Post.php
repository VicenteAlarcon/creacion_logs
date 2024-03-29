<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'date',
    ];
  
public function comments()
{
    return $this->morphMany(Comment::class, 'commentable');
}


}
