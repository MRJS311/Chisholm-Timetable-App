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
$query_rsTime = "SELECT timetable.studentid, timetable.room, timetable.campuse, timetable.`time`, timetable.`day`, timetable.subjectname FROM timetable, chisholm_students WHERE chisholm_students.StudentID = timetable.studentid";
$rsTime = mysql_query($query_rsTime, $chisholm) or die(mysql_error());
$row_rsTime = mysql_fetch_assoc($rsTime);
$totalRows_rsTime = mysql_num_rows($rsTime);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Time</title>
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
    <p align="center">Time</p>
    <form action="time" method="get"><table width="200" border="0" align="center">
      <tr>
        <td width="94">Time:</td>
        <td width="96"><input name="time" type="text" value="<?php echo $row_rsTime['time']; ?>" /></td>
      </tr>
      <tr>
        <td>Room:</td>
        <td><input name="room" type="text" value="<?php echo $row_rsTime['room']; ?>" /></td>
      </tr>
      <tr>
        <td>Campus:</td>
        <td><input name="campus" type="text" value="<?php echo $row_rsTime['campuse']; ?>" /></td>
      </tr>
      <tr>
        <td>Subject:</td>
        <td><input name="subject" type="text" value="<?php echo $row_rsTime['subjectname']; ?>" /></td>
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
mysql_free_result($rsTime);
?>
