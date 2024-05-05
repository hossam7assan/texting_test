<?php

namespace App\Http\Controllers;

use App\Models\TimeZone;
use Illuminate\Http\Request;

class TimeZoneController extends Controller
{
    public function getTimezones($country_id)
    {
        $timezones = TimeZone::where('country_id', $country_id)->get();
        return response()->json($timezones);
    }
}
