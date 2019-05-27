<?php
$hostdb = 'localhost';
$namedb = 'ch13';
$userdb = 'root';
$passdb = 'phpmysql';
try {
  $conn = new PDO("mysql:host=$hostdb;"
          . " dbname=$namedb", $userdb, $passdb);
  $conn->exec("SET CHARACTER SET utf8");      
  $sql = "select CategoryID,ProductID,ProductName,UnitPrice from "
          . "products WHERE  Discontinued != 1 order by CategoryID";
  $result = $conn->query($sql);
  foreach ($result->fetchAll() as $row)
{
    echo $row['CategoryID']. '-'.$row['ProductID'].'-'.$row['ProductName']. '-'.$row['UnitPrice']."<br>";
}
  $conn = null;        
}
catch(PDOException $e) {
  echo $e->getMessage();
}
 ?>
