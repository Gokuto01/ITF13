<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itf13.mysql.database.azure.com', 'Gokuto@itf13', 'Golf1112', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$Name=$_GET['rn'];
$query = "DELETE FROM guestbook WHERE Name = '$Name'";

$data = mysqli_query($conn, $query);

if($data)
{
    echo "Succcess";
}
else
{
    echo "fail";
}

echo var_export();
?>