<!DOCTYPE html>
<html>
<body>

<?php
    $serverName = "spangili.database.windows.net";
    $connectionOptions = array(
        "Database" => "spangiliDatabase",
        "Uid" => "projectManager",
        "PWD" => "jBD9t6E8f!IY"
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT * FROM customers";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
?>

</body>
</html>