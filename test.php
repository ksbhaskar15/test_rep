<?php
$serverName = "DELL-PC\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array( "Database"=>"bhaskar", "UID"=>"sa", "PWD"=>"admin123");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}


$sql = "SELECT FirstName, LastName FROM Persons";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      echo $row['LastName'].", ".$row['FirstName']."<br />";
}




?>
