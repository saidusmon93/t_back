<?php

namespace Modules\Table\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Time extends Model
{
    use HasFactory;

    protected $fillable = [
        "start_time",
        "end_time"
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
