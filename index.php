<?php
include_once 'class/IPLocation.php';

$ip = new IPLocation();

$location = $ip->freeGeoIP();
?>

<html>
<head>
    <title>IP Location Demo App</title>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css" />
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <style>
        html, body{
            text-align: center;
            align-items: center;
            height: 100%;
        }
    </style>
</head>
<body>
</br>
<h2 class="ui icon header">
    <i aria-hidden="true" class="settings icon"></i>
    IP LOCATION FINDER
    <div class="sub header">Find geolocation of an ip adress includind latitude, longitude, city, region and country</div>
</h2>

<h1 class="ui header">Your IP Adress : <small style="color: blue;"><?php echo $ip->ip; ?></small></h1>
<hr>

<div class="ui statistic">
    <div class="value">
        <?php echo $location->country_name; ?>
    </div>
    <div class="label">
        Country Name
    </div>
</div>
<div class="ui statistic">
    <div class="value">
        <?php echo $location->country_code; ?>
    </div>
    <div class="label">
        Country Code
    </div>
</div>
<hr>
<div class="ui statistic">
    <div class="value">
        <?php echo $location->region_name; ?>
    </div>
    <div class="label">
        Region Name
    </div>
</div>
<div class="ui statistic">
    <div class="value">
        <?php echo $location->region_code; ?>
    </div>
    <div class="label">
        Region Code
    </div>
</div>
<hr>
<div class="ui statistic">
    <div class="value">
        <?php echo $location->city; ?>
    </div>
    <div class="label">
        City
    </div>
</div>
<div class="ui statistic">
    <div class="value">
        <?php echo $location->zip_code; ?>
    </div>
    <div class="label">
        Zip Code
    </div>
</div>
<div class="ui statistic">
    <div class="value">
        <?php echo $location->time_zone; ?>
    </div>
    <div class="label">
        Time Zone
    </div>
</div>
<hr>
<div class="ui statistic">
    <div class="value">
        <?php echo $location->latitude; ?>
    </div>
    <div class="label">
        Latitude
    </div>
</div>
<div class="ui statistic">
    <div class="value">
        <?php echo $location->longitude; ?>
    </div>
    <div class="label">
        Longitude
    </div>
</div>
<hr>
<div class="ui  vertical footer segment" style="background-color: #4444440d;">
    <div class="ui center aligned container">
        <div class="ui stackable grid">
            <div class="three wide column">
                <h4 class="ui header">Navigasyon</h4>
                <div class="ui link list">
                    <a class="item" href="https://rubikhost.com" target="_blank">Rubikhost.com</a>
                    <a class="item" href="https://pluginler.com" target="_blank">Pluginler.com</a>
                    <a class="item" href="https://freegeoip.app" target="_blank">Freegeoip.app</a>
                </div>
            </div>
            <div class="three wide column">
                <h4 class="ui header">Other</h4>
                <div class="ui link list">
                    <a class="item" href="https://github.com/MithatGuner" target="_blank">GitHub</a>
                    <a class="item" href="https://www.linkedin.com/in/mithat-guner/" target="_blank">LinkedIn</a>
                </div>
            </div>
            <div class="seven wide right floated column">
                <h4 class="ui header">Contact Us</h4>
                <p>mithat@rubikhost.com</p>
                <p>+90 850 346 8898</p>
            </div>
        </div>
        <div class="ui section divider"></div>
        <div class="ui horizontal small divided link list">
            <a class="item" href="https://mith.at/" target="_blank">mith.at Tüm Hakkı Saklıdır - <?php echo date('Y'); ?></a>
        </div>
    </div>
</div>
</body>
</html>
