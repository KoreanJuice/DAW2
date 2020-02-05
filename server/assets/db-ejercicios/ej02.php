<?php
  $db = "AdventureWorks2014";
  $srv = "(local)";
  try {
    $con = new PDO("sqlsrv:server=$srv;Database=$db");
    $con->setAttribute(PDO::ATTR_ERRMODE,
                      PDO::ERRMODE_EXCEPTION);
    $query = "select * from Person.ContactType";
    $stmt = $con->prepare($query,
        array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL,
              PDO::SQLSRV_ATTR_CURSOR_SCROLL_TYPE =>
                    PDO::SQLSRV_CURSOR_BUFFERED));
    $stmt->execute();
    print $stmt->rowCount()."<br>";
    echo "\n<br>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      print "$row[Name]\n<br>";
    }
    echo "\n<br>..\n<br>";

    $row=$stmt->fetch(PDO::FETCH_BOTH, PDO::FETCH_ORI_FIRST);
    print_r($row);
    echo "<br>";

    $row=$stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_REL,1);
    print "$row[Name]\n<br>";

    $row=$stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
    print "$row[1]\n<br>";

    $row=$stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_PRIOR);
    print "$row[1]\n<br>";

    $row=$stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_ABS,0);
    print_r($row);
    echo "<br>";

    $row=$stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_LAST);
    print_r($row);
    echo "<br>";

  } catch (PDOException $ex) {
    die (print_r($ex->getMessage()));
  } finally {
    $stmt = null;
    $con = null;
  }
