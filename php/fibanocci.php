<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><h3 align="center" ><u>FIBANOCCI SERIES </u></h3>
<style type="text/css">
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="formfib" method="post" action="fibanocci.php">
<table align="center">
<tr align="center"><td>Enter the limit of fibanocci series</td></tr>
<tr align="center"><td><input type="text" name="txtlimit" value="" /></td></tr>
<tr align="center"><td><input type="submit" name="submit" value="SUBMIT" />
<input type="button" name="btncancel" value="CANCEL" /></td></tr>
<tr><br/></tr>
<tr align="center"><td>
<?php
$lim=$_POST['txtlimit'];
$f=0;
$a=0;
$b=1;
while($f<=$lim)
{ echo "$f </br>"; $a=$b; $b=$f; $f=$a+$b;
}
?>
</td></tr></table></form>

</body>
</html>