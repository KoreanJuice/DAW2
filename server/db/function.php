<?php
  function perform_trans_ops (PDO $con, int $orderId):bool {
    $sql1 = "UPDATE Production.ProductInventory
            SET Quantity = Quantity + s.OrderQty
            FROM Procution.ProductInventory p
              JOIN Sales.SalesOrderDetail s
                ON s.ProductID = p.ProductID
            WHERE s.SalesOrderID = ?";
    $sql2 = "DELETE FROM Sales.SalesOrderDetail
            WHERE SalesOrderID = ?";
    $params = array($orderId);
    try {
      $snt = $con->prepare($sql1);
      $snt->execute($params);
      $snt2 = $con->prepare($sql2);
      $snt2->execute($params);
      return true;
    } catch (PDOException $ex) {
      throw $ex;
      return false;
    }
  }
