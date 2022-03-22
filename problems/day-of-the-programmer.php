<?php
// day of programmer problem
function dayOfProgrammer($year)
{
    // Write your code here
    if ($year == 1918) {
        return '26.09.1918';
    }
    if ($year < 1918) {
        $calendar = CAL_JULIAN;
    } else {
        $calendar = CAL_GREGORIAN;
    }
    $daysCount = 0;
    for ($i = 1; $i <= 8; $i++) {
        $daysCount += cal_days_in_month($calendar, $i, $year);
    }
    $dayDate = 256 - $daysCount;
    $month = 9;
    $date = date_create($dayDate . '-' . $month . '-' . $year);

    return date_format($date, 'd.m.Y');
}

$year = 1918;
$result = dayOfProgrammer($year);
