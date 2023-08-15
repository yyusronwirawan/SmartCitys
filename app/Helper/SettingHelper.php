<?php

namespace App\Helper;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SettingHelper
{
    // public static function getSetting()
    // {
    //     $settings = \App\Models\SettingWebsite::get()->first();
    //     return $settings;
    // }

    public static function getCountDate()
    {
        $data = \App\Models\ViewPage::where([
			['tanggal', date('Y-m-d')],
			// ['tanggal', Carbon::now()],
		])->latest('id')->first();
        $count = $data == NULL ? $data = 0 : $data->count;
        return $count;
    }

    public static function getCountMonth()
    {
        $count = \App\Models\ViewPage::all()->sum('count');
        // $count = \App\Models\ViewPage::where('tanggal', Carbon::getWeekendDays())->get();
        // $count = \App\Models\ViewPage::select(
        //         DB::raw('sum(count) as `sums`'),
        //         DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"),
        //         DB::raw('max(created_at) as createdAt')
        //     )
        //    ->where("created_at", ">", \Carbon\Carbon::now()->subMonths(6))
        //    ->orderBy('createdAt', 'desc')
        //    ->groupBy('months')
        //    ->get();
        // dd($count);
        return $count;
    }

    public static function getCountYear()
    {
        $count = \App\Models\ViewPage::all()->sum('count');
        return $count;
    }

    public static function getCountAll()
    {
        $count = \App\Models\ViewPage::all()->sum('count');
        return $count;
    }

}
