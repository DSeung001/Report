<?php

namespace App\Service;

use Carbon\Carbon;

class WeeklyCalculatorService
{
    private $thisYear, $thisMonth, $thisWeekOfMonth;
    private $nextYear, $nextMonth, $nextWeekOfMonth;

    public function __construct(){
        $today = Carbon::now();
        $this->thisYear = $today->format('Y');
        $this->thisMonth = $today->format('m');
        $this->thisWeekOfMonth = $this->getWeekOfMonth($today->format('Y-m-d'));

    }

    /**
     * 오늘이 몇 주차인지 계산해서 문자열 반환
     * @return string
     */
    public function getThisWeekString(){
        return $this->thisYear."년 ".$this->thisMonth."월 ".$this->thisWeekOfMonth."주차";
    }


    /**
     * 다음 주가 몇 주차인지 계산해서 문자열 반환
     * @return string
     */
    public function getNextWeekString(){
        return $this->thisYear."년 ".$this->thisMonth."월 ".$this->thisWeekOfMonth."주차";
    }

    private function getWeekOfMonth( $dateString ){
        $nowWeek = date("W", strtotime($dateString));
        $prevWeek = date("W", strtotime(date("Y-m-01", strtotime($dateString))));
        return $nowWeek-$prevWeek+1;
    }

}
