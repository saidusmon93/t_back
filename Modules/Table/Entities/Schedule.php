<?php

namespace Modules\Table\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ["lesson_id", "room_id", "group_id", "teacher_id", "weekday_id", "time_id"];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function lesson () 
    {
        return $this->belongsTo(Lesson::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
    public function weekday()
    {
        return $this->belongsTo(Weekday::class);
    }

    public function time()
    {
        return $this->belongsTo(Time::class);
    }
}
