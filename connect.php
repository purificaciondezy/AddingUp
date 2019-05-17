<?php
	try
    {
        $conn = new PDO("sqlsrv:Server=NTC-CORPMSQL3.ia.ime.reuters.com;Database=fundbpro", "read_only", "read_only");
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
 

    catch(Exception $ex)
    {
        echo 'Not Connected'.$ex->getMessage();
      
    }
?>