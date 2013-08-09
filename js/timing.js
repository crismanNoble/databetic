var timing = {};

timing.date = new Date();
timing.timezoneOffset_ms = getTimezoneOffset_ms();

function getTimezoneOffset_ms() {
	var d = new Date();
	return d.getTimezoneOffset()*60*1000;
}

/* manipulating data */

/*
createTimestamp(date,time)
creates a js date object in the correct timezone with standard date and time strings as input

date = string, eg. '2013-12-31', required
time = string, eg. '06:59', optional

return js date object 
*/

function createTimestamp(date,time){
	return new Date((new Date(date +'T'+time).getTime())+timing.timezoneOffset_ms);
}