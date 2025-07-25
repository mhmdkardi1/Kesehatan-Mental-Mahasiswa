<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mood extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'mood', 'catatan'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
