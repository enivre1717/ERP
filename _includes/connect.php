<?php
    include_once("../modules/CDb.php");
    
    $db=new CDb();
    
    $dblink=$db->connectToDatabase();
    $db->selectDatabase();
?>
