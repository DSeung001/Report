<?php

namespace App\Http\Controllers;

use App\Service\WeeklyCalculatorService;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index() {

        $weeklyCalculator = new WeeklyCalculatorService();
        $thisWeek = $weeklyCalculator->getThisWeekString();
        $nextWeek = $weeklyCalculator->getNextWeekString();

        // 서비스 클래스를 통해서 오늘이 몇 번째 주 인지 가져오기
        return view('report', compact('thisWeek', 'nextWeek'));
    }
}
