<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Prompts\Prompt;

class CommentPrompt extends Model
{
    protected $table = 'comments_prompts';

    // Relasi dengan pengguna
    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'username');
    }

    // Relasi dengan prompt
    public function prompt()
    {
        return $this->belongsTo(Prompt::class, 'prompt_id', 'prompt_id');
    }
}
