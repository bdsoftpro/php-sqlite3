<?php
$pdo = new PDO('sqlite:test.db');
$data = [
	'name' => 'Masud',
	'price' => 2500,
];
$sql = "INSERT INTO cars (name, price) VALUES (:name, :price)";
$stmt= $pdo->prepare($sql);
$stmt->execute($data);
?>
