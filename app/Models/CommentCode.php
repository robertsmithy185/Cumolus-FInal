<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentCode extends Model
{
    protected $table = 'comments_codes';

    // Relasi dengan pengguna
    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'username');
    }

    // Relasi dengan prompt
    public function code()
    {
        return $this->belongsTo(Prompt::class, 'code_id', 'code_id');
    }
}
