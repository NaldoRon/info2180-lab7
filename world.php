<?php
$myCountry = $_GET['country'];
$host = getenv('IP');
$username = 'root';
$password = '';
$dbname = 'world';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries");
exec($stmt);
$query = file_get_contents("world.sql");
$stmt = $dbname->prepare($query);
exec($stmnt)
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<ul>
<?php foreach ($results as $row): ?>
  <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
<?php endforeach; ?>
</ul>
