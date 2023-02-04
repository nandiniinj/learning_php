<html>
<head>
<title> Post Method </title>
<head>
<body bgcolor=purple>
<?php
echo "<br><br><br><br>";
echo "<center>";
$sname=$_POST['nam'];
$science=$_POST['sci'];
$maths=$_POST['mat'];
$english=$_POST['eng'];
$hindi=$_POST['hin'];
$social=$_POST['sst'];
$computer=$_POST['com'];
$tot=$science+$maths+$english+$hindi+$social+$computer;
$avg=$tot/6;

echo "<Font size=3 color='black'>Name of the student </font>: ".$sname;
echo "<br><br>";
echo "<font size=3 color='black'>Average Marks Scored </font>: ".$avg;
echo "<br><br>";
echo"</center>";
?>
</body>
</html>
