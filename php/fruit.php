<html>
<head>
</head>
<body>
<?php
$fruit=$_POST["select"];
switch($fruit)
{
 case "mango":echo "<img src=mango.jpg height=500px width=500px></img>mango has been selected";
 break;
 case "apple": echo "<img src=apple1.jpg height=500px width=500px>apple has been selected";
 break;
 case "grape": echo "<img src=grape.jpg height=500px width=500px>grape has been selected";
 break;
 case "orange": echo "<img src=orange.jpg height=500px width=500px>orange has been selected";
 break;
}
?>
</body>
</html>

