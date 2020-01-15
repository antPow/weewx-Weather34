<?php
$apikey = 'ds-api-key-here';
$wuapikey = 'wu-api-key-here';
$weatherflowID = '';
$weatherflowoption = 'no';
$weatherflowlightning = '';
$weatherflowmapzoom = '';
$id = 'IBUCKING64';
$purpleairID = '';
$purpleairhardware = 'no';
$metarapikey = 'metar-api-key-here';
$TZ = 'Europe/London';
$UTC = '0';
$lon = -0.987;
$lat = 51.94;
$darkskyunit = 'uk2';
$wuapiunit = 'h';
$stationlocation = 'Steeple Claydon';
$stationName = 'The Four Claydons';
$moonadj = '';
$unit = 'english';
$metric = true;
$elevation = '82m';
$uk = true;
$usa = false;
$scandinavia = false;
$restoftheworld = false;
$windunit = 'mph';
$distanceunit = 'mi';
$tempunit = 'C';
$rainunit = 'mm';
$rainrate = '/h';
$pressureunit = 'hPa';
$livedataFormat = 'WeeWX-W34';
$livedata = '/var/www/html/weewx/w34realtime.txt';
$currentconditions = 'currentconditionsds.php';
$chartsource = 'mbcharts';
$extralinks = 'yes';
$languages = 'yes';
$dateFormat = 'd-m-Y';
$timeFormat = 'H:i:s';
$timeFormatShort = 'H:i';
$clockformat = '24';
$showDate = false;
$temperaturemodule = 'temperaturein.php';
$position1 = 'weather34clock.php';
$position2 = 'windgustyear.php';
$position3 = 'rainfallf-year-month.php';
$position4 = 'advisory.php';
$position1title = 'Station <ored> Time';
$position2title = 'Wind <orange> Gust</orange>';
$position3title = 'Rainfall<oblue> Rate';
$position4title = 'Weather <ored>Advisory</orange> ';
$position6title = 'Forecast';
$position6 = 'forecast3ds.php';
$position12title = 'Solar | UV | Lux';
$position12 = 'weather34uvsolar.php';
$positionlastmoduletitle = 'Moonphase';
$positionlastmodule = 'moonphase.php';
$webcamurl = '';
$videoWeatherCamURL = '';
$email = 'someone@gmail.com';
$twitter = 'somebody-weather';
$theme1 = 'light';
$since = '2012';
$weatherhardware = 'Fine Offset WH2650A-WIFI1930A';
$mbplatform = 'WeeWX';
$davis = 'No';
$db_host = '';
$db_user = '';
$db_pass = '';
$db_name = '';
$sunoption = 'sun3.php';
$hemisphere = '0';
$metar = 'yes';
$icao1 = 'EGTK';
$airport1 = 'Oxford, UK';
$airport1dist = '26';
$defaultlanguage = 'en';
$language = 'en';
$password = '';
$flag = 'en';
$dshourly = 'yes';
$manifestShortName = 'MYWX';
$notifications = 'yes';
$notifyWind = 'yes';
$notifyEarthquake = 'yes';
$notifyMagnitude = 3;
$linkWU = 'no';
$linkWUNew = 'no';
$linkCWOPID = '';
$linkFindUID = '';
$linkNOAA = 'no';
$linkMADIS = 'no';
$linkMesoWest = 'no';
$linkWeatherCloudID = '';
$linkWindyID = '';
$linkAWEKASID = '';
$linkAmbientWeatherID = '';
$linkPWSWeatherID = '';
$linkMetOfficeID = '';
$linkCustom1Title = '';
$linkCustom1URL = '';
$linkCustom2Title = '';
$linkCustom2URL = '';
$USAWeatherFinder = '';
$extraLinkTitle = '';
$extraLinkColor = '';
$extraLinkURL = '';
$minmag = '3';
// web services section below this line
$jsondatapath = "/var/www/html/weewx/weather34/jsondata";
$ds_filename = "'.$jsondatapath.'/darksky.txt";
$ds_interval = "300";
$ds_url = "https://api.forecast.io/forecast/'.$apikey.'/'.$lat.','.$lon.'?lang=en&units='.$darkskyunit.'";
$wu_filename = "'.$jsondatapath.'/wuforecastnew.txt";
$wu_interval = "300";
$wu_url = "https://api.weather.com/v3/wx/forecast/daily/5day?geocode='.$lat.','.$lon.'&language='.$language.'&format=json&units='.$wuapiunit.'&apiKey='.$wuapikey ";
$eq_filename = "'.$jsondatapath.'/eqnotification.txt";
$eq_interval = "3600";
$eq_url = "https://earthquake-report.com/feeds/recent-eq?json";
$ki_filename = "'.$jsondatapath.'/jsondata/kindex.txt";
$ki_interval = "3600";
$ki_url = "https://services.swpc.noaa.gov/products/geospace/planetary-k-index-dst.json";
$me_filename = "'.$jsondatapath.'/metar34.txt";
$me_interval = "3600";
$me_url = "https://api.checkwx.com/metar/'.$icao1.'/decoded";
$me_header = "'X-API-Key':'.$metarapikey.'";
$services = "ds"."wu"."eq"."ki"."me";
?>
