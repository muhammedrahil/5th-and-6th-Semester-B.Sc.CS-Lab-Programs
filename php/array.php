<html>
<body>
<?php
$a=array("syam","udith","navas","rashid","pranav","udith","naisam","navas","unais","sameer");
$b=$a;
echo "Your Current Array<br/>";
foreach($a as $value)
{
echo "$value<br/>";
}
sort($a);
echo "Sorted array<br/>";
print_r($a);
echo "</br>Array without duplicate elements<br/>";
$dup=array_unique($a);
print_r($dup);
echo "</br>Array in reverse order<br/>";
$rev=array_reverse($a);
print_r($rev);

echo "</br>Array after deleting last element<br/>";
unset($a[9]);
print_r($a);
?>
</body>
</html>