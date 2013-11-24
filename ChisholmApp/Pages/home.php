<?php
	require_once('auth.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Home</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link href="ChisholmApp.css" rel="stylesheet" type="text/css" />
</head>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
 
    $("#dp").datepicker({
        onSelect: function(dateText, inst) {
            alert(dateText);
        },
        beforeShow: function (event, ui) {
            var $link = $("#datep");
            ui.dpDiv.offset({
                top: $link.offset().top + ss
                right: $link.offset().right + 10
            });
        }
    });

    $("#datep").click(function() {
        $("#dp").datepicker("show");
    });
});
</script>

<body>
<div class="wrapper">
  <div class="header">
	<img src="chisholm-institute.jpg" alt="Chisholm Logo" width="100%" height="100%" />
  </div>
  <div class="content" align="center"><!-- TemplateBeginEditable name="contentRegion" -->
    <p>Welcome</p>
    <p>To find your next class please choose from one of the following options.</p>
    <ul>
    	<li><a href="#" id="datep">Date</a>
        	<input type="hidden" id="dp" />
        <div></div>
    	</li>
    </ul>
    <p class="link"><a href="day.php" class="link">Day</a></p>
    <p class="link"><a href="time.php" class="link">Time</a></p>
    <p class="link"><a href="subject.php" class="link">Subject</a></p>
    <p class="link"><a href="campus.php" class="link">Campus</a></p>
    <p class="link"><a href="room.php" class="link">Room</a></p>
  <!-- TemplateEndEditable --></div>
  <div class="footer" align="center">
    <p><a href="home.php" class="link">Home</a> | <a href="tel:1800000000" class="link">Support</a> | <a href="logout.php" class="link">Logout</a></p>
  </div>
</div>
</body>
</html>
