<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['image_id', 'username', 'comment'];
    protected $table = 'comments';

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id', 'image_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'username');
    }
}
