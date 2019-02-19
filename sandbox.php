<?php
use Carbon\Carbon;

require_once 'vendor/autoload.php';

//$c= Carbon::now(); //today, tommorow,yesterday

//$c= Carbon::create(1989, 11, 16, 0, 0, 0);
//$c= Carbon::createFromDate(1989, 11, 16);
//$c= Carbon::createFromTime(12, 0, 0);
//$c= Carbon::createFromTimestamp(67784543543357);
//$c= new Carbon('16th November 1989 10:00:00');
//$c= new Carbon('-2 days 6 hours');

// Formatting
//$c= new Carbon('-2 days');


//echo $c->toDateString();
//echo $c->toTimeString();
//echo $c->toDateTimeString();
//echo $c->toRssString();
//echo $c->toAtomString();

//$dateFormat = 'd M Y';

//echo $c->format($dateFormat);

//echo $c->diffForHumans();

// Getters

//$c = Carbon::now();

//echo $c->year; //minute,timestamp,dayOfWeek,dayOfYear,quarter


//$c = new Carbon('1989-11-16'); //16th November 1989

//echo $c->age; 


// Setters

//$c = new Carbon;

// $c->year = 1989;
// $c->month = 11;
// $c->day=1;

// $c->setDate(1989,11,16);
// $c->setTime(12,0,0);
// $c->setDateTime(1989,11,16,12,0,0);

// Timezones

//$c = Carbon::now('Europe/London');

//c = Carbon::createFromDate(1989,11,16, 'Europe/London');

// $c = Carbon::now()->tz('Europe/London');
// $c = Carbon::now()->setTimezoe('Europe/London');

// Manipulating

//$c = Carbon::now();

//$c->addDays(2);
//$c->subDays(20); //weeks,hours,minutes, etc...
//$c->addWeekdays(2);

// Comparisons
//$c = new Carbon;
//$c2 = new Carbon('+2 days');
//$c3 = new Carbon('+10 days');
//var_dump($c->eq($c2)); //equal
//var_dump($c->gt($c2)); //greater then
//var_dump($c->lt($c2)); //less then // lte,gte

//var_dump($c2->between($c,$c3));

//var_dump($c->isWeekend()); //Weekday

//$c->addDays(3);

//var_dump($c->isYesterday()); //isTommorow, isFuture,isPast


// Differences

// $alex = new Carbon('16th November 1989');
// $dale = new Carbon('25th October 1961');

//echo "Alex is {$alex->diffInYears($dale)} years younger than Dale.";  // minutes,hours, days, etc...

//$c = Carbon::now();
//$c2 = Carbon::parse('+2 weeks');

//var_dump($c->diffInWeekdays($c2)); //diffInweekenddays

//$c = Carbon::parse('1989-11-16 12:32:00');

//var_dump($c->diffForHumans());


// Modifiers

//$c = Carbon::now();

//var_dump($c->startOfDay()); // endOfDay,startOfYear, StartOfCentury, etc...


//var_dump($c->next()); // next week but on the same day

//var_dump($c->next(5)); // next friday

//var_dump($c->previous(5));
//var_dump($c);

// Copying

// $c = Carbon::now();
// $c2 = $c->copy()->addDays(2);

// var_dump($c->isSameDay($c2));


