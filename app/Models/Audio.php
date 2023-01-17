<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    use HasFactory;

    protected $fillable = ['schedule_id', 'audio'];

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
}
