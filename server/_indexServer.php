<?php

try {
  $db = new PDO("sqlsrv:Server=localhost;Database=php");
} catch (PDOException $e) {
  echo "Failed to get DB handle: " . $e->getMessage() . "\n";
  exit;
}
?>
