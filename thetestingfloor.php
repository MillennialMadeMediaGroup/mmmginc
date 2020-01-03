<?php //thetestingfloor.php
echo <<<THETESTINGFLOOR
<b>THE TESTING FLOOR.PHP VERSION 1</b>
<br>
<br>
THETESTINGFLOOR;
$username = "H.W. Darlington III";
echo $username;
echo "<br>";
$current_user = $username;
echo "Happy New Year, ", $current_user;
echo "<br>";
echo "Thus begins my practice in learning the php coding language...";
$womenbeenwith = array (array ('Ashley Weaver', 'Christina Harris', 'Ariel Lauren Malek', 'Amberly Chernoff'),
                        array ('Eline DeHann', 'Kyra Rheinstein', 'Alicia Winterbottom','Courtney McDonald'),
                        array ('Siobhan Santucci','Kimberly Nicole Maxwell','Chelsesa Morgan', 'Gina Macaluso'),
                        array ('Jodi Teagler','Victoria Lee','Emily Suzanne Berglund'));
echo "<br>";
echo "<br>";
echo "The Women I've loved:", "<br>";
echo $womenbeenwith[0][0], "<br>";
echo $womenbeenwith[0][2], "<br>";
echo $womenbeenwith[2][1], "<br>";
echo $womenbeenwith[3][2], "<br>";
echo "<br>";
echo "<b>OPERATORS:</b> <br>";
echo 'Refer to "the testing floor.html" to view information on arithmatic, assignment, comparison, and logical operators.', "<br>";
echo "See comments for further considerations on the purpose of extensive text usage in php, JavaScript, and JQuery.";
echo "<br> <br>";
/*NOTE: There appears to be no efficient way to write either single or multiple lines of viewable text into php, which would stand to reason
 * that much like JavaScript there is no need to use strings unless specifying commands through the use of functions, methods, etc.. which
 * is important because this dictates that all extensive verbage should be accomplished only though HTML.
 * Another important consideration via "The Syntax Construction Kit," (Rosenfelder) dictates that any combination of words derives a string,
 * and that combining them results in what is called concatentation, thus these terms are not specific to coding, or rather were dervied from
 * basic syntax construction. It is thus reasonble to assume that the best use of php, JavaScriptand JQuery would be to declare multiple variables
 * and functions and call them using arrays creating a network of responses to certain commands. The verbage at that point only being necessary
 * when calling them again later in the code. */
echo "<b>ASSIGNING VARIABLES AND USING ARITHMATIC & COMPARISON OPERATORS</b> <br>";
$x = 9;
if (++$x == 10) echo $x;
$y = 0;
if ($y-- == 0) echo $y;
echo "=", + ($x + $y), "<br>";
echo "<br>";
$motivation = "One step at a time, Headley... KEEP GOING!";
$motivation;
$newyearmessage = " 2020 holds great things for you.";
$newyearmessage;
echo $motivation .= $newyearmessage .= " (this message was appended using .=)";
echo "<br> <br>";
echo <<<PSALMS1
Psalms 1 <br>
<b>The Way of the Righteous and the End of the <br>
Ungodly</b> <br>
Blessed is the man <br>
  Who walks not in the counsel of the <br>
  ungodly,<br>
  Nor stands in the path of sinners, <br>
  Nor sites in the seat of the scornful; <br>
But his delight is in the law of the Lord, <br>
  And in His law he meditates day and <br>
  night. <br>
He shall be like a tree <br>
  Planted by the rivers of water, <br>
  That brings fourth fruit in its season, <br>
  Whose leaf also shall not wither, <br>
And whatever he does shall prosper. <br>
<br>
The ungodly <i>are</i> not so, <br>
But <i>are</i> like the chaff which the wind <br>
  drives away. <br>
Therefore the ungodly shall not stand in <br>
  the judgement, <br>
Nor sinners in the congregation of the <br>
  righteous. <br>
<br>
For the Lord knows the way of the <br>
  righteous, <br>
But the way of the ungodly shall perish.
PSALMS1;
echo "<br> <br>";
function longdate1($timestamp1)
{
    return date("l F jS Y", $timestamp1);
}
echo "<hr>";
echo "The day I look foward to is, ";
echo longdate1(time() + 278 * 24 * 60 * 60);
echo "<br> <br>";
echo "<hr>";
echo "However today, I begin anew, this life I intend to conquer: <br>";
function longdate($timestamp)
{
    $temp = date("l F jS Y", $timestamp);
    return "The date is $temp";
}
echo longdate(time());
echo "<br> <br>";

?>