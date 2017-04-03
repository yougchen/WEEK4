<html>


<h1 align="center">
<?php
$uname=$_POST["uname"];
$upwd=$_POST["upwd"];
$telephone=$_POST["telephone"];
$birthday=$_POST["birthday"];
$gender=$_POST["gender"];

echo "你的名字：".$uname."<br/>";

if ($gender=="male") {
	echo "性別：男性";
	echo "<body bgcolor='yellow'>";
	
}else{
	echo "性別：女性";
	echo "<body bgcolor='red'>";
}
echo "<br/>";

echo "你的電話：".$telephone."<br/>";


echo "你的生日：".$birthday."<br/>";

echo "你的密碼：".$upwd."<br/>";


?>
</h1>
<br/><br/><br/><br/><br/><br/><br/><br/>
<h2 align="center"><font color="pink" size="10000">感謝您</font></h2>


</html>
