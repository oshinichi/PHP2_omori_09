<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>match</title>
</head>
<body>

<?php

try
{

$staff_code=$_GET['staffcode'];

$dsn='mysql:dbname=shop;host=localhost;charset=utf8';
$user='root';
$password='root';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT name FROM mst_staff WHERE code=?';
$stmt=$dbh->prepare($sql);
$data[]=$staff_code;
$stmt->execute($data);

$rec=$stmt->fetch(PDO::FETCH_ASSOC);
$staff_name=$rec['name'];

$dbh=null;

}
catch(Exception $e)
{
	echo'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

スタッフ情報参照<br />
<br />
スタッフコード<br />
<?php echo $staff_code; ?>
<br />
スタッフ名<br />
<?php echo $staff_name; ?>
<br />
<br />
<form>
<input type="button" onclick="history.back()" value="戻る">
</form>

</body>
</html>