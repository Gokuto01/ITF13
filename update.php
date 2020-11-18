<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itf13.mysql.database.azure.com', 'Gokuto@itf13', 'Golf1112', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];
$id = '';
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
 
while($Result = mysqli_fetch_array($res))
{
    if ($Result['Name'] == $name){
        $id = $Result['ID'];
    }
}
$sql = "UPDATE guestbook 
        SET Name=$name, Comment=$comment, Link=$link
        WHERE ID=$id";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>