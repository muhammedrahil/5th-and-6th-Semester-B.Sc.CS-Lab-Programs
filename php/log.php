<html>
<head>
<title>login page</title>
</head>
<body>
<?php
$n = $_POST['txtname'];
$p = $_POST['txtpassword'];
pg_connect('localhost','root');
pg_select_db('test');
$query="select * from log where username='$n' and password='$p'";
$result=pg_query($query);

if(pg_num_rows($result)>0)
{
echo " THANK YOU FOR SUCESSFULLY LOG IN BY JUMAIL AND ANAND";
}
else
{
echo "SORRY YOUR ENTER A WRONG INPUT,TRY AGAIN LATER OR YOU KNOW ABOUT THE PASSWORD CONTACT THE ADMIN JUMAIL 7907224790";
}
?>
</body>
</html>