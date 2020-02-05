<?php
  $dsn = 'sqlsrv:server=(local);
          Database = AdventureWorks2014';
  $query = "select * from Person.ContactType";
  try {
    $con = new PDO ($dsn);
    $con->setAttribute(PDO::ATTR_ERRMODE,
              PDO::ERRMODE_EXCEPTION);
    $stmt = $con->prepare($query);
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      print "$row[Name]\n<br>";
    }
    echo "\n<br>";
    $param = "Owner";
    $query = "select * from Person.ContactType where name = ?";
    $stmt = $con->prepare($query);
    $stmt->execute(array($param));
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      print "$row[Name]\n";
    }
  } catch (PDOException $ex) {
    die (print_r($ex->getMessage()));
  } finally {
    $con = null;
  }
