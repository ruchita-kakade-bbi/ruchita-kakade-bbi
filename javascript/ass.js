function TimeConversion(input) {
    var i = 0;
    sec = 0;
    min = 0;
    hr = 0;
    day = 0;
    year = 0;

    for (i = 0; i < input; i++) {
        sec++;
        if (sec == 60) {
            min++;
            sec = 0;

        }
        if (min == 60) {
            hr++;
            min = 0;
        }
        if (hr == 24) {
            day++;
            hr = 0;
        }
        if (day == 365) {
            year++;
            day = 0;
        }

    }

    console.log(`${year}year  ${day}days  ${hr}hours  ${min}minutes  ${sec}seconds`);

}
TimeConversion(3600);