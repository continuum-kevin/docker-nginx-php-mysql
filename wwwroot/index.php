<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<h1>Hello, world</h1>
<p>People in the database:</p>
<?php
$host = 'mysqldb';
$db   = 'test';
$user = 'root';
$pass = 'password';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);


$stmt = $pdo->query('SELECT firstname FROM people');
while ($row = $stmt->fetch())
{
    echo $row['firstname'] . "\n";
}
?>


</body>
</html>

