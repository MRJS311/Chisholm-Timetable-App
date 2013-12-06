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
$query_rday = "SELECT timetable.studentid, timetable.room, timetable.campuse, timetable.`time`, timetable.`day`, timetable.subjectname FROM timetable, chisholm_students WHERE chisholm_students.StudentID = timetable.studentid";
$rday = mysql_query($query_rday, $chisholm) or die(mysql_error());
$row_rday = mysql_fetch_assoc($rday);
$totalRows_rday = mysql_num_rows($rday);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Day</title>
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
    <p align="center">Day</p>
    <form action="day" method="get"><table width="200" border="0" align="center">
      <tr>
        <td width="94">Day:</td>
        <td width="96">
        	<select name="days" size="1" id="day" onchange="">
        	  <option value="Day" <?php if (!(strcmp("Day", $row_rday['day']))) {echo "selected=\"selected\"";} ?>>Monday</option>
        	  <option value="Day" <?php if (!(strcmp("Day", $row_rday['day']))) {echo "selected=\"selected\"";} ?>>Teusday</option>
        	  <option value="Day" <?php if (!(strcmp("Day", $row_rday['day']))) {echo "selected=\"selected\"";} ?>>Wednesday</option>
        	  <option value="Day" <?php if (!(strcmp("Day", $row_rday['day']))) {echo "selected=\"selected\"";} ?>>Thursday</option>
        	  <option value="Day" <?php if (!(strcmp("Day", $row_rday['day']))) {echo "selected=\"selected\"";} ?>>Friday</option>
            </select>
	      </td>
      </tr>
      <tr>
        <td>Time:</td>
        <td><input name="time" type="text" value="<?php echo $row_rday['time']; ?>" /></td>
      </tr>
      <tr>
        <td>Room:</td>
        <td><input name="room" type="text" value="<?php echo $row_rday['room']; ?>" /></td>
      </tr>
      <tr>
        <td>Campus:</td>
        <td><input name="campus" type="text" value="<?php echo $row_rday['campuse']; ?>" /></td>
      </tr>
      <tr>
        <td>Subject:</td>
        <td><input name="subject" type="text" value="<?php echo $row_rday['subjectname']; ?>" /></td>
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
mysql_free_result($rday);
?>
