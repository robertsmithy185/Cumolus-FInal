<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    use HasFactory;

    protected $primaryKey = 'code_id';
    public $incrementing = true;

    protected $fillable = [
        'username',
        'code',
        'name',
        'Deskripsi',
    ];
    public function comments()
    {
        return $this->hasMany(CommentCode::class, 'code_id', 'code_id');
    }
}
