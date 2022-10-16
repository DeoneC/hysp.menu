<!DOCTYPE html>
<html>
<head>
  <title>HYSP Data Capture</title>
</head>
<body>
  <form method="post">
   Type some data here<br>
    <input type="text" name="textdata"><br>
    <input type="submit" name="submit"><br>
      </form>
</body>
</html>
<?php
              
if(isset($_POST['textdata']))
{
$data=$_POST['textdata'];
$fp = fopen('hyspdatacapture.txt', 'a');
fwrite($fp, $hyspdatacapture);
fclose($fp);
echo file_get_contents("hyspdatacapture.txt");
?><br>
<?php
}
?>