 <?php
$hostname = "localhost";
$username = "thegggrl_greentern";
$password = "Greentern#@123456";
$db="thegggrl_greentern";
$charset = 'utf8mb4';

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=$hostname;dbname=$db;charset=$charset";

try {
      $pdo = new PDO($dsn, $username, $password, $options);
  } 
  catch (PDOException $e) {
      throw new PDOException($e->getMessage(), (int)$e->getCode());
  }
  