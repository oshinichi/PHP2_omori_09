<?php

session_start();
session_regenerate_id(true);
if(isset($_SESSION['login'])==false)
{
	echo '���O�C������Ă��܂���B<br />';
	echo '<a href="../staff_login/index.html">���O�C����ʂ�</a>';
	exit();
}

if(isset($_POST['disp'])==true)
{
	if(isset($_POST['staffcode'])==false)
	{
		header('Location:staff_ng.php');
		exit();
	}
	$staff_code=$_POST['staffcode'];
	header('Location:staff_disp.php?staffcode='.$staff_code);
	exit();
}

if(isset($_POST['add'])==true)
{
	header('Location:staff_add.php');
	exit();
}

if(isset($_POST['edit'])==true)
{
	if(isset($_POST['staffcode'])==false)
	{
		header('Location:staff_ng.php');
		exit();
	}
	$staff_code=$_POST['staffcode'];
	header('Location:staff_edit.php?staffcode='.$staff_code);
	exit();
}

if(isset($_POST['delete'])==true)
{
	if(isset($_POST['staffcode'])==false)
	{
		header('Location:staff_ng.php');
		exit();
	}
	$staff_code=$_POST['staffcode'];
	header('Location:staff_delete.php?staffcode='.$staff_code);
	exit();
}

?>