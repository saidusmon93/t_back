<?php

namespace Modules\Table\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Table\Entities\Room;
use Modules\Table\Entities\Schedule;
use Modules\Table\Entities\Time;
use Modules\Table\Entities\Weekday;

class ScheduleController extends Controller
{
    public function index()
    {
        $times = Time::all();
        $weekdays = Weekday::all();
        $lessons = Schedule::where('room_id', '2')
            ->with('teacher', 'room', 'time', 'weekday', 'group', 'lesson')
            ->get();
        $rooms = Room::all();
        return response()->json([
            'lessons' => $lessons,
            'times' => $times,
            'weekdays' => $weekdays,
            'rooms' => $rooms,
        ]);
    }
}
