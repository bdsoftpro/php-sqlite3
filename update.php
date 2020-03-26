<?php
$pdo = new PDO('sqlite:test.db');
$data = [
	'name' => 'Delwar',
	'price' => 500,
	'id' => 1,
];
$sql = "UPDATE cars SET name=:name, price=:price WHERE id=:id";
$stmt= $pdo->prepare($sql);
$stmt->execute($data);
?>
