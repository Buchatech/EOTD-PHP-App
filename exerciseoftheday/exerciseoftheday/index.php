<html>
<head>
<title>
Exercise of the day (EOTD)
</title>
</head>
<center>
<h1 style="background-color:MediumSeaGreen;">
Exercise of The Day
</h1>
<p style="background-color:LightGray;">
This is a simple PHP web app that displays the exercise of the day based on the day of week!
</p>
<?php
$today=date(l);
// Find what The exercise of ? using date function
if($today==Monday){
    echo "The exercise of <b> <font color=green> Monday </font> </b> is";
    echo "<BR>";
    echo "<img src='images/punchingbag.png'>";
}
elseif($today==Tuesday){
    echo "The exercise of <b> <font color=green> Tuesday </font> </b> is";
    echo "<BR>";
    echo "<img src='images/sideplank.png'>";
}
elseif($today==Wednesday){
    echo "The exercise of <b> <font color=green> Wednesday </font> </b> is";
    echo "<BR>";
    echo "<img src='images/jogging.png'>";
}
elseif($today==Thursday){
    echo "The exercise of <b> <font color=green> Thursday </font> </b> is";
    echo "<BR>";
    echo "<img src='images/plank.png'>";
}
elseif($today==Friday){
    echo "The exercise of <b> <font color=green> Friday </font> </b> is";
    echo "<BR>";
    echo "<img src='images/weights.png'>";
}
elseif($today==Saturday){
    echo "The exercise of <b> <font color=green> Saturday </font> </b> is";
    echo "<BR>";
    echo "<img src='images/shoulderpress.png'>";
}
elseif($today==Sunday){
    echo "The exercise of <b> <font color=green> Sunday </font> </b> is";
    echo "<BR>";
    echo "<img src='images/bicycle.png'>";
}
?>
<p style="border:2px solid Orange;">
Visit daily for a new exercise.
</p>
</center>
</body>
</html>