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
$id="SELECT ID FROM guestbook WHERE Name=$name";
$res = mysqli_query($conn, $id);
$Result = mysqli_fetch($res);
echo $name;
echo $comment;
echo $link;
echo $id;
echo $Result;
// $sql = "UPDATE guestbook 
//         SET Name=$name, Comment=$comment, Link=$link
//         WHERE = 


// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//   }
  
// mysqli_close($conn);
?>