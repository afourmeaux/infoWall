<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1">
    <title>infoWall</title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet">
    <script type="text/javascript" src="js/calendar.js"></script>
</head>
<body>
    <?php 
        date_default_timezone_set("Europe/Paris"); 
        $hour = date('G');
        $minutes = date('i');
        $seconds = date('s');

        $dayName = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
        $dayId = date('N');
        $dayNumber = date('d');

        $monthName = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
        $monthId = date('n');
        $monthNumber = date('m');

        $yearNumber = date('Y');
    ?>
    <div id="calendar">
        <div id="time">
            <span id="hours" data-hour="<?php echo $hour?>"><?php echo $hour;?></span>:<span id="minutes" data-minutes="<?php echo $minutes?>"><?php echo $minutes;?></span>:<span id="seconds"data-seconds="<?php echo $seconds?>"><?php echo $seconds;?></span>
        </div>
        <br />
        <div class="day" data-day="<?php echo $dayNumber?>" data-month="<?php echo $monthId?>" data-year="<?php echo $yearNumber?>">
            <?php echo $dayName[$dayId + 1] . " " . $dayId . " " . $monthName[$monthId] . " " . $yearNumber;?>
        </div>
    </div>
</body>
</html>