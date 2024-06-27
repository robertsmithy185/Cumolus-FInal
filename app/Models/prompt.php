<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prompt extends Model
{
    use HasFactory;

    protected $primaryKey = 'prompt_id';
    public $incrementing = true;

    protected $fillable = [
        'username',
        'prompt',
        'name',
        'Deskripsi',
    ];
    public function comments()
    {
        return $this->hasMany(CommentPrompt::class, 'prompt_id', 'prompt_id');
    }
}
