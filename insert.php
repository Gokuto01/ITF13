<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="container text-center" style="height: 100vh; background: url(https://images.unsplash.com/photo-1595113316349-9fa4eb24f884?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=100);background-repeat: no-repeat;background-size: cover;">
  <div class="h-100" style="display:grid; align-items: center;">
    <div class="roundred p-3 shadow">
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


$sql = "INSERT INTO guestbook (Name , Comment , Link) VALUES ('$name', '$comment', '$link')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
<input class="btn btn-success" type="button" value="กลับหน้าหลัก" onclick="window.location.href='https://itf13.azurewebsites.net/show.php'" />
</div>
</div>
</body>
</html>