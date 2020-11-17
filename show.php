<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itf13.mysql.database.azure.com', 'Gokuto@itf13', 'Golf1112', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Action </div></th>
  </tr>
<?php
    function delete_row($row,$conn)
    {
        echo $row
//     $delete_row = "DELETE FROM guestbook WHERE Name = $row";
//     if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//   }
    }
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td>
        <input type="button" value="แก้ไข" onclick="delete_row('<?php $Result['name']?>','<?php $conn ?>')" /> 
        <input type="button" value="ลบ" onclick="window.location.href='https://itf13.azurewebsites.net/form.html'" />
    </td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
<form>
    <input type="button" value="เพิ่ม" onclick="window.location.href='https://itf13.azurewebsites.net/form.html'" />
</form>
</html>
