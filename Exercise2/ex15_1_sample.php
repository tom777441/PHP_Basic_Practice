<?php
$hostdb = 'localhost';
$namedb = 'ch13';
$userdb = 'root';
$passdb = 'phpmysql';
try {
  $conn = new PDO("mysql:host=$hostdb;"
          . " dbname=$namedb", $userdb, $passdb);
  $conn->exec("SET CHARACTER SET utf8");      
  $sql = "SELECT * FROM `products` 
WHERE `Discontinued`<>1
ORDER BY `CategoryID`";
  $sqlprep = $conn->prepare($sql);   
  echo '<table border="1">';
  echo '<tr><td>商品分類<td>商品編號<td>品名<td>單價';
  if($sqlprep->execute()) {
    while($row = $sqlprep->fetch()) 
    {
        echo '<tr><td>'.$row['CategoryID'].'<td>'.$row['ProductID'].'<td>'.$row['ProductName'].'<td>'.$row['UnitPrice'];
    }
  }
  echo '</table>';
  $conn = null;       
}
catch(PDOException $e) {
  echo $e->getMessage();
}