<?php
    require 'connector-definition.php';
    try{
        $database=new PostgreDBConnector("admin","5433","us-west-2.397bd86a-0e28-418c-b168-b39438596ec7.aws.ybdb.io","q4jSncIbEcpyB7aA4ucIWfIgfo8NvY","yugabyte","../root.crt");
    }
    catch(Exception $e){
        die("Connection does not occur: ".$e->getMessage());
    }
?>