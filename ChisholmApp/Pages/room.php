<?php require_once('Connections/chisholm.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_chisholm, $chisholm);
$query_rsRoom = "SELECT timetable.studentid, timetable.room, timetable.campuse, timetable.`time`, timetable.`day`, timetable.subjectname FROM timetable, chisholm_students WHERE chisholm_students.StudentID = timetable.studentid";
$rsRoom = mysql_query($query_rsRoom, $chisholm) or die(mysql_error());
$row_rsRoom = mysql_fetch_assoc($rsRoom);
$totalRows_rsRoom = mysql_num_rows($rsRoom);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Room</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link href="ChisholmApp.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="wrapper">
  <div class="header">
        <img src="chisholm-institute.jpg" alt="Chisholm Logo" width="100%" height="100%" />
  </div>
  <div class="content">
  <!-- TemplateBeginEditable name="contentRegion" -->
    <p align="center">Room</p>
        <form action="room" method="get">
        <table width="200" border="0" align="center">
                  <tr>
                            <td align="right">Room</td>
                            <td align="left"><input name="room" type="text" value="<?php echo $row_rsRoom['room']; ?>" /></td>
                  </tr>
                  <tr>
                            <td align="right">Time</td>
                            <td align="left"><input name="time" type="text" value="<?php echo $row_rsRoom['time']; ?>" /></td>
                  </tr>
                  <tr>
                            <td align="right">Subject</td>
                            <td align="left"><input name="subject" type="text" value="<?php echo $row_rsRoom['subjectname']; ?>" /></td>
                  </tr>
                  <tr>
                            <td align="right">Canpus</td>
                            <td align="left"><input name="campus" type="text" value="<?php echo $row_rsRoom['campuse']; ?>" /></td>
                  </tr>
        </table></form>
  <!-- TemplateEndEditable -->
  </div>
  <div class="footer" align="center">
    <p><a href="home.php" class="link">Home</a> | <a href="tel:1800000000" class="link">Support</a></p>
  </div>
</div>
</body>
</html>
<?php
mysql_free_result($rsRoom);
?>
