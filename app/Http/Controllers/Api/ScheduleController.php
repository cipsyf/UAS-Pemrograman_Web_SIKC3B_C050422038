<?php

namespace App\Http\Controllers\Api;

use App\Models\Schedule;
use App\Http\Resources\ScheduleResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ScheduleResource::collection(Schedule::all());
    }
}
