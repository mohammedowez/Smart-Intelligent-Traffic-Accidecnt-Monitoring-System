<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
include 'dbconfig.php';
$sql="SELECT * FROM image";
if ($result=mysqli_query($conn,$sql))
{
// Fetch one and one row
while ($row=mysqli_fetch_row($result))
{
$pic= $row[0];
?><img src="upload/<?php echo $pic; ?>"/>
<?php
}}
?>
</body>
</html>
