<?php 

	$conn = new PDO ("mysql:dbname=bdphp7;host=localhost", "root", "");

	$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

	$stmt->execute();

	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($result);
 ?>