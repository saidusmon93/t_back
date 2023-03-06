<?php

namespace Modules\Table\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Table\Entities\Room;
use Modules\Table\Entities\Schedule;
use Modules\Table\Entities\Time;
use Modules\Table\Entities\Weekday;

class RoomController extends Controller
{
    public function search($value)
    {
        
        $times = Time::all();
        $weekdays = Weekday::all();
        $lessons = Schedule::where('room_id', $value)
            ->with('teacher', 'room', 'time', 'weekday', 'group', 'lesson')
            ->get();
        $rooms = Room::all();
        return response()->json([
            'rooms' => $rooms,
            'lessons' => $lessons,
            'times' => $times,
            'weekdays' => $weekdays
        ]);
    }
}
