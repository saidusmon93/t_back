<?php

namespace Modules\Table\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        "name"
    ];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
