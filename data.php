<?php

$host = 'localhost';
$username ='root';
$password ='root';
$db='valerikh';

$connection = mysqli_connect($host, $username, $password, $db);
$query = "INSERT INTO products(title,price,descr,img) VALUES('iphone',1000,'very good',
	'https://cdn.wccftech.com/wp-content/uploads/2024/11/iPhone-17-Pro.jpg')";

	$products = array(
		array(
			'brand'=>'Iphone',
			'model'=>'Iphone 17 pro',
			'year'=>2025,
			'price'=>'1199$',
			'desc'=>'iPhone-17-Pro last model buy now!',
			'img'=>'https://cdn.wccftech.com/wp-content/uploads/2024/11/iPhone-17-Pro.jpg'
		)


		


	);







?>