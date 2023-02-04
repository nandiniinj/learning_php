<html>
<head>
<title>Marks Details</title>
<body bgcolor=purple>

<?php

echo "<br><br><br><br><br><br><br><br><br>";
echo "<center>";
echo "<form action='avgcal.php' method='Post'>";

echo "Please enter the name of the student:&nbsp;&nbsp;&nbsp;";
echo "<input type='text' size=20 name='nam'>";
echo "<br><br>";

echo "Please enter the marks scored in Science:&nbsp;&nbsp;";
echo "<input type='text' size=8 name='sci'>";
echo "<br><br>";

echo "Please enter the marks scored in Maths:&nbsp;&nbsp;";
echo "<input type='text' size=8 name='mat'";
echo "<br><br><br>";

echo "Please enter the marks scored in English:&nbsp;&nbsp;";
echo "<input type='text' size=8 name='eng'";
echo "<br><br><br>";

echo "Please enter the marks scored in Hindi:&nbsp;&nbsp;";
echo "<input type='text' size=8 name='hin'";
echo "<br><br><br>";

echo "Please enter the marks scored in Social Science:&nbsp;&nbsp;";
echo "<input type='text' size=8 name='sst'";
echo "<br><br><br>";

echo "Please enter the marks scored in Computer Science:&nbsp;&nbsp;";
echo "<input type='text' size=8 name='com'";
echo "<br><br><br>";

echo "<input type='Submit' name='submit'>";
echo "</center>";
?>
</body>
</html>