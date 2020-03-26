<?php
$pdo = new PDO('sqlite:test.db');
$data = [
	'id' => 1,
];
$sql = "SELECT * FROM cars WHERE id=:id";
$stmt= $pdo->prepare($sql);
$stmt->execute($data);
$user = $stmt->fetch();
echo $user['name'];
?>
