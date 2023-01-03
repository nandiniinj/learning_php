<html>
<head>
<title>Your Details</title>
</head>
<body bgcolor=pink>
<?php
echo "<br><br><br><br><br>";
echo "<center>";

$user_name=$_POST['nm'];
$user_email=$_POST['mail'];
echo "Your name is ".$user_name;
echo "<br><br>";
echo "Your email id is ".$user_email;

echo "</center>";
?>
</body>
</html>