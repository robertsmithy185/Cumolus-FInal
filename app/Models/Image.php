<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $primaryKey = 'image_id';
    public $incrementing = true;

    protected $fillable = [
        'username',
        'image',
        'name',
        'Deskripsi',
    ];
    public function comments()
    {
        return $this->hasMany(Comment::class, 'image_id', 'image_id');
    }
}
