<!DOCTYPE html>
<html>
<body>

<?php
//The date/time functions date() allow you to get the date and time from the server where your PHP script runs. 
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";
// d - Represents the day of the month (01 to 31)
// m - Represents a month (01 to 12)
// Y - Represents a year (in four digits)
// l (lowercase 'L') - Represents the day of the week
date_default_timezone_set('Asia/Kolkata');
//if you need the time to be correct according to a specific location, you can set the timezone you want to use.
echo "The time is " . date("H:i:sa") . "<br>";
// H - 24-hour format of an hour (00 to 23)
// h - 12-hour format of an hour with leading zeros (01 to 12)
// i - Minutes with leading zeros (00 to 59)
// s - Seconds with leading zeros (00 to 59)
// a - Lowercase Ante meridiem and Post meridiem (am or pm)
$d=mktime(14, 2 , 54, 9,15, 2022);
//mktime() function returns the Unix timestamp for a date. The Unix timestamp contains the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
//mktime(hour, minute, second, month, day, year)
echo "Created date is " . date("Y-m-d h:i:sa", $d);

?>

</body>
</html>
