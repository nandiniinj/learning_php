<html>
<head>
<title> Post Method </title>
<head>
<body bgcolor=lightyellow>
<?php
$dollar=81.46;
echo "<br><br><br><br>";
echo "<center>";
$amount=$_POST['amt'];
$tot=$amount/$dollar;
echo "<Font size=5 color='red'>Total Dollars </font>: ".$tot;
echo"</center>";
?>
</body>
</html>
