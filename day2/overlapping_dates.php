<?php

const SECONDS_PER_PERIOD = [
    "DATE" => ["DAY" => 86400, "MONTH" => 2629743, "YEAR" => 31536000],
    "TIME" => ["HOUR" => 3600, "MIN" => 60],
];

const EPOCH = '01-01-1970  00:00:00';

function isOverlap(string $startDateTime1, string $endDateTime1, string $startDateTime2, string $endDateTime2): bool
{

    if (isBetweenDates($startDateTime2, $startDateTime1, $endDateTime1) ||
        isBetweenDates($endDateTime2, $startDateTime1, $endDateTime1) ||
        isBetweenDates($startDateTime1, $startDateTime2, $endDateTime2) ||
        isBetweenDates($endDateTime1, $startDateTime2, $endDateTime2)) {
        return true;
    }
    return false;
}

function isBetweenDates(string $date, string $beginDate, string $endDate): bool
{
    $dateSeconds = getTimestamp($date);
    $beginDateSeconds = getTimestamp($beginDate);
    $endDateSeconds = getTimestamp($endDate);
    if ($dateSeconds >= $beginDateSeconds && $dateSeconds <= $endDateSeconds) {
        return true;
    }
    return false;
}

function dateTimeToTicks(string $dateTime): int
{
    [$date, $time] = explode(' ', $dateTime);
    [$day, $month, $year] = explode('-', $date);
    $time = explode(':', $time);
    $sec = $time[2] ?? 0;
    $min = $time[1] ?? 0;
    $hour = $time[0] ?? 0;
    return getSecondsByDateTime((int)$sec, (int)$min, (int)$hour, (int)$day, (int)$month, (int)$year);

}

function getTimestamp(string $dateTime): int
{
    return dateTimeToTicks($dateTime) - dateTimeToTicks(EPOCH);
}

/**
 * @param int $sec
 * @param int $min
 * @param int $hour
 * @param int $day
 * @param int $month
 * @param int $year
 * @return float|int
 */
function getSecondsByDateTime(int $sec, int $min, int $hour, int $day, int $month, int $year): int
{
    return $sec + $min * SECONDS_PER_PERIOD["TIME"]["MIN"] + $hour * SECONDS_PER_PERIOD["TIME"]["HOUR"] + ($day + (30 * $month)) * SECONDS_PER_PERIOD["DATE"]["DAY"] +
        ($year - 70) * SECONDS_PER_PERIOD["DATE"]["YEAR"] + (($year - 69) / 4) * SECONDS_PER_PERIOD["DATE"]["DAY"] -
        (($year - 1) / 100) * SECONDS_PER_PERIOD["DATE"]["DAY"] + (($year + 299) / 400) * SECONDS_PER_PERIOD["DATE"]["DAY"];
}

//overlaps
print_r(isOverlap('10-05-2021 10:00:00', '13-05-2021  00:00:00', '04-05-2021 21:30:15', '11-05-2021 04:30:00') . PHP_EOL);
print_r(isOverlap('12-12-2021 10:00:00', '15-12-2021  21:31:10', '13-12-2021 21:31:15', '14-12-2021 04:30:00') . PHP_EOL);

//doesnt overlap
print_r(isOverlap('10-05-2021 10:00:00', '13-05-2021  00:00:00', '04-04-2021 21:30:15', '11-04-2021 04:30:00') . PHP_EOL);
print_r(isOverlap('10-05-2000 10:00:00', '13-05-2000  00:00:00', '04-04-2021 21:30:15', '11-05-2021 04:30:00') . PHP_EOL);
